<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dasar_keluarga extends MY_Controller {
	private $modules = array('data_dasar_keluarga');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_dasar_keluarga_model');
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
		if(!$this->permission->check_module($this->modules)){
			show_404();
		}

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		if(!$this->permission->check_permission($this->modules, 'all')){
			$searchQuery = "";
			if($this->session->userdata('provinsi_id')){
				$searchQuery .= " provinsi_code = " . $this->session->userdata('provinsi_id');
			}
			if($this->session->userdata('kabupaten_id')){
				if(!empty($searchQuery)) $searchQuery .= " AND ";
				$searchQuery .= " kabupaten_code = " . $this->session->userdata('kabupaten_id');
			}
			if($this->session->userdata('kecamatan_id')){
				if(!empty($searchQuery)) $searchQuery .= " AND ";
				$searchQuery .= " kecamatan_code = " . $this->session->userdata('kecamatan_id');
			}
			if($this->session->userdata('desa_id')){
				if(!empty($searchQuery)) $searchQuery .= " AND ";
				$searchQuery .= " desa_code = " . $this->session->userdata('desa_id');
			}
			if(!$this->permission->check_permission($this->modules, 'all')){
				if(!empty($searchQuery)) $searchQuery .= " AND ";
				$searchQuery .= " id_operator = " . $this->session->userdata('user_id');
			}

			$data['list_data'] = $this->data_dasar_keluarga_model->get_by_criteria()
				->select('data_dasar_keluarga.id as id,nomor_kartu_keluarga,nama_kepala_keluarga,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa')
				->join('provinsi', 'provinsi.provinsi_code = data_dasar_keluarga.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = data_dasar_keluarga.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = data_dasar_keluarga.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = data_dasar_keluarga.desa_id', 'left')
				->order_by('id DESC')
				->where($searchQuery)
				->get()
				->result();
		}
		else{
			$data['list_data'] = $this->data_dasar_keluarga_model->get_by_criteria()
				->select('data_dasar_keluarga.id as id,nomor_kartu_keluarga,nama_kepala_keluarga,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa')
				->join('provinsi', 'provinsi.provinsi_code = data_dasar_keluarga.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = data_dasar_keluarga.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = data_dasar_keluarga.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = data_dasar_keluarga.desa_id', 'left')
				->order_by('id DESC')
				->get()
				->result();
		}

		$this->template
			->set_layout('page')
			->title('Daftar Data Dasar Keluarga')
			->build('data_dasar_keluarga/index', $data);
	}

	public function detail($id = null)
	{
		if(!$this->permission->check_module($this->modules) || empty($id)){
			show_404();
		}

		$searchQuery = "";
		if($this->session->userdata('provinsi_id')){
			$searchQuery .= " AND provinsi_code = " . $this->session->userdata('provinsi_id');
		}
		if($this->session->userdata('kabupaten_id')){
			$searchQuery .= " AND kabupaten_code = " . $this->session->userdata('kabupaten_id');
		}
		if($this->session->userdata('kecamatan_id')){
			$searchQuery .= " AND kecamatan_code = " . $this->session->userdata('kecamatan_id');
		}
		if($this->session->userdata('desa_id')){
			$searchQuery .= " AND desa_code = " . $this->session->userdata('desa_id');
		}

		$data['breadcrumb'] = true;

		$data['ddk'] = $this->data_dasar_keluarga_model->get_by_criteria()
			->join('provinsi', 'provinsi.provinsi_code = data_dasar_keluarga.provinsi_id', 'left')
			->join('kabupaten', 'kabupaten.kabupaten_code = data_dasar_keluarga.kabupaten_id', 'left')
			->join('kecamatan', 'kecamatan.kecamatan_code = data_dasar_keluarga.kecamatan_id', 'left')
			->join('desa', 'desa.desa_code = data_dasar_keluarga.desa_id', 'left')
			->where("data_dasar_keluarga.id", $id)
			->get()
			->row();

		if((!$this->permission->check_permission($this->modules, 'all') && $data['ddk']->id_operator != $this->session->userdata('user_id'))){
			redirect('data_dasar_keluarga');
		}

		$data['ddk']->detail = unserialize($data['ddk']->detail);
		$data['ddk']->anggota = unserialize($data['ddk']->anggota);

		$this->template
			->set_layout('page')
			->title('Detail Data Dasar Keluarga')
			->build('data_dasar_keluarga/detail', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$keluarga = $this->input->post('data');
			$keluarga['id_operator'] = $this->session->userdata('user_id');
			if(!empty($keluarga['tanggal'])){
				$keluarga['tanggal'] = date_reverse($keluarga['tanggal']);
			}
			else{
				$keluarga['tanggal'] = date('Y-m-d');
			}
			$keluarga['detail'] = serialize($keluarga['detail']);
			$keluarga['anggota'] = serialize($keluarga['anggota']);

			$this->data_dasar_keluarga_model->save($keluarga);

			$this->session->set_flashdata('success_message', 'Data dasar keluarga berhasil ditambahkan.');
			redirect('data_dasar_keluarga');
		}

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$this->load->model('provinsi_model');

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$this->template
			->set_layout('page')
			->title('Tambah Data Dasar Keluarga')
			->build('data_dasar_keluarga/tambah', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit') || empty($id)){
			show_404();
		}

		if($this->input->post()){
			$keluarga = $this->input->post('data');
			if(!empty($keluarga['tanggal'])){
				$keluarga['tanggal'] = date_reverse($keluarga['tanggal']);
			}
			else{
				$keluarga['tanggal'] = date('Y-m-d');
			}
			$keluarga['detail'] = serialize($keluarga['detail']);
			$keluarga['anggota'] = serialize($keluarga['anggota']);

			$this->data_dasar_keluarga_model->save($keluarga, $id);

			$this->session->set_flashdata('success_message', 'Data dasar keluarga berhasil diubah.');
			redirect('data_dasar_keluarga');
		}

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['ddk'] = $this->data_dasar_keluarga_model->get($id);
		$data['ddk']->tanggal = date_reverse($data['ddk']->tanggal);
		$data['ddk']->detail = unserialize($data['ddk']->detail);
		$data['ddk']->anggota = unserialize($data['ddk']->anggota);

		if((!$this->permission->check_permission($this->modules, 'all') && $data['ddk']->id_operator != $this->session->userdata('user_id'))){
			redirect('data_dasar_keluarga');
		}

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$data['ddk']->kabupaten = (array) $this->kabupaten_model->get_by_criteria()
			->select('kabupaten_code AS id, kabupaten_name as text')
			->where('kabupaten_code', $data['ddk']->kabupaten_id)
			->get()
			->row();

		$data['ddk']->kecamatan = (array) $this->kecamatan_model->get_by_criteria()
			->select('kecamatan_code AS id, kecamatan_name as text')
			->where('kecamatan_code', $data['ddk']->kecamatan_id)
			->get()
			->row();

		$data['ddk']->desa = (array) $this->desa_model->get_by_criteria()
			->select('desa_code AS id, desa_name as text')
			->where('desa_code', $data['ddk']->desa_id)
			->get()
			->row();

		if(!empty($data['ddk']->kabupaten)){
			$data['ddk']->kabupaten['text'] = $data['ddk']->kabupaten['id'] ." - ". $data['ddk']->kabupaten['text'];
		}
		if(!empty($data['ddk']->kecamatan)){
			$data['ddk']->kecamatan['text'] = $data['ddk']->kecamatan['id'] ." - ". $data['ddk']->kecamatan['text'];
		}
		if(!empty($data['ddk']->desa)){
			$data['ddk']->desa['text'] = $data['ddk']->desa['id'] ." - ". $data['ddk']->desa['text'];
		}

		$this->template
			->set_layout('page')
			->title('Edit Data Dasar Keluarga')
			->build('data_dasar_keluarga/edit', $data);
	}

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$keluarga = $this->data_dasar_keluarga_model->get($id);


		if((!$this->permission->check_permission($this->modules, 'all') && $keluarga->id_operator != $this->session->userdata('user_id'))){
			redirect('data_dasar_keluarga');
		}

		$this->data_dasar_keluarga_model->delete($keluarga->id);

		$this->session->set_flashdata('success_message', 'Data dasar keluarga berhasil dihapus.');
		redirect("data_dasar_keluarga");
	}
}
