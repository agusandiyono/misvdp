<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	private $modules = array('dashboard');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');
	}

	public function get_lokasi()
	{
		if(!IS_AJAX){
			show_404();
		}

		$response = array();

		$where = $this->input->get('where');
		$key = $this->input->get('term');

		if($where == "kabupaten"){
			$this->load->model('kabupaten_model');
			$provinsi_id = $this->input->get('provinsi_id');

			$response = (array) $this->kabupaten_model->get_by_criteria()
				->select('kabupaten_code AS id, kabupaten_name AS text')
				->where('provinsi_id', $provinsi_id)
				->like('kabupaten_name', $key, 'both')
				->distinct()
				->order_by('kabupaten_code ASC')
				->get()
				->result();
		}
		elseif($where == "kecamatan"){
			$this->load->model('kecamatan_model');
			$kabupaten_id = $this->input->get('kabupaten_id');

			$response = (array) $this->kecamatan_model->get_by_criteria()
				->select('kecamatan_code AS id, kecamatan_name AS text')
				->where('kabupaten_id', $kabupaten_id)
				->like('kecamatan_name', $key, 'both')
				->distinct()
				->order_by('kecamatan_code ASC')
				->get()
				->result();
		}
		elseif($where == "desa"){
			$this->load->model('desa_model');
			$kecamatan_id = $this->input->get('kecamatan_id');

			$response = (array) $this->desa_model->get_by_criteria()
				->select('desa_code AS id, desa_name AS text')
				->where('kecamatan_id', $kecamatan_id)
				->like('desa_name', $key, 'both')
				->distinct()
				->order_by('desa_code ASC')
				->get()
				->result();
		}

		foreach ($response as $respon) {
			$respon->text = $respon->id .' - '. $respon->text;
		}

		echo json_encode($response);
	}
	
	public function index()
	{
		$data['statistik'] = array();

		/*
		if(!$this->permission->check_permission($this->modules, 'all') && !$this->session->userdata('edit_saran')){
			$searchQuery . "id_operator = " . $this->session->userdata('user_id');
		}*/

		if(!empty($searchQuery)){
			$list_kegiatan = $this->kegiatan_model->get_by_criteria()
					->select("*")
					->where($searchQuery)
					->get()
					->result();
		}
		else{
			$list_kegiatan = $this->kegiatan_model->get_by_criteria()
					->select("*")
					->get()
					->result();
		}

		$data['locations'] = array();
		foreach ($list_kegiatan as $key => $kegiatan) {
			$data['locations'][$key][] = $kegiatan->rencana_tindak_lanjut;
			$data['locations'][$key][] = $kegiatan->tindak_lanjut_lalu;
			$data['locations'][$key][] = '
				<div>Provinsi : '.getNamaProvinsi($kegiatan->provinsi_id).'</div>
				<div>Kabupaten : '.getNamaKabupaten($kegiatan->kabupaten_id).'</div>
				<div>Kecamatan : '.getNamaKecamatan($kegiatan->kecamatan_id).'</div>
				<div>Desa : '.getNamaDesa($kegiatan->desa_id).'</div>
				<div>1. Waktu Tempuh ke prasarana kesehatan < 30 menit : '.$kegiatan->nama.'</div>
				<div>2. Tersedia tenaga kesehatan bidan: '.$kegiatan->masalah.'</div>
				<div>3. Tersedia tenaga kesehatan dokter: '.$kegiatan->sasaran.'</div>
				<div>4. Tersedia tenaga kesehatan lain: '.$kegiatan->deskripsi.'</div>
				<div>5. Akses ke poskesdes, polindes dan posyandu: '.price_format($kegiatan->jumlah_p).'</div>
				<div>6. Tingkat aktivitas posyandu: '.$kegiatan->aktivitas_posyandu.'</div>
				<div>7. Tingkat kepesertaan BPJS: '.$kegiatan->kepesertaan_bpjs.'</div>
				<div>8. Akses ke Pendidikan Dasar SD/MI < 3 KM: '.$kegiatan->pendidikan_dasar.'</div>
				<div>9. Akses ke SMP/MTS < 6 km: '.$kegiatan->smp_mts.'</div>
				<div>10. Akses ke SMU/SMK < 6 km: '.$kegiatan->smu_smk.'</div>
				<div>11. Kegiatan pemberantasan buta aksara: '.$kegiatan->buta_aksara.'</div>
				<div>12. Kegiatan PAUD: '.$kegiatan->kegiatan_paud.'</div>
				<div>13. Kegiatan PKBM/Paket ABC: '.$kegiatan->kegiatan_pkbm.'</div>
				<div>14. Akses ke pusat keterampilan/ kursus: '.$kegiatan->pusat_kursus.'</div>
				<div>15. Taman Bacaan Masyarakat atau Perpustakaan Desa: '.$kegiatan->perpus_desa.'</div>
				<p>Lihat Selengkapnya-->> <a href="http://psdattg.kemendesa.id/idm/kegiatan/" target="_blank">Detail IDM </a></p>';
		}

		$this->template
			->set_layout('page')
			->title('Dashboard')
			->build('dashboard', $data);
	}
}
