<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkembangan_desa extends MY_Controller {
	private $modules = array('perkembangan_desa');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('perkembangan_desa_model');
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

			$data['list_data'] = $this->perkembangan_desa_model->get_by_criteria()
				->select('perkembangan_desa.id as id,pengisi,tanggal,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa')
				->join('provinsi', 'provinsi.provinsi_code = perkembangan_desa.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = perkembangan_desa.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = perkembangan_desa.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = perkembangan_desa.desa_id', 'left')
				->order_by('id DESC')
				->where($searchQuery)
				->get()
				->result();
		}
		else{
			$data['list_data'] = $this->perkembangan_desa_model->get_by_criteria()
				->select('perkembangan_desa.id as id,pengisi,tanggal,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa')
				->join('provinsi', 'provinsi.provinsi_code = perkembangan_desa.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = perkembangan_desa.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = perkembangan_desa.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = perkembangan_desa.desa_id', 'left')
				->order_by('id DESC')
				->get()
				->result();
		}

		$this->template
			->set_layout('page')
			->title('Daftar Tingkat Perkembangan Desa')
			->build('perkembangan_desa/index', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$perkembangan = $this->input->post('data');
			$perkembangan['id_operator'] = $this->session->userdata('user_id');
			if(!empty($perkembangan['tanggal'])){
				$perkembangan['tanggal'] = date_reverse($perkembangan['tanggal']);
			}
			else{
				$perkembangan['tanggal'] = date('Y-m-d');
			}
			$perkembangan['detail'] = serialize($perkembangan['detail']);

			$this->perkembangan_desa_model->save($perkembangan);

			$this->session->set_flashdata('success_message', 'Data perkembangan_desam berhasil ditambahkan.');
			redirect('perkembangan_desa');
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
			->title('Tambah Tingkat Perkembangan Desa')
			->build('perkembangan_desa/tambah', $data);
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

		$data['perkembangan'] = $this->perkembangan_desa_model->get_by_criteria()
			->join('provinsi', 'provinsi.provinsi_code = perkembangan_desa.provinsi_id', 'left')
			->join('kabupaten', 'kabupaten.kabupaten_code = perkembangan_desa.kabupaten_id', 'left')
			->join('kecamatan', 'kecamatan.kecamatan_code = perkembangan_desa.kecamatan_id', 'left')
			->join('desa', 'desa.desa_code = perkembangan_desa.desa_id', 'left')
			->where("perkembangan_desa.id", $id)
			->get()
			->row();

		if((!$this->permission->check_permission($this->modules, 'all') && $data['perkembangan']->id_operator != $this->session->userdata('user_id'))){
			redirect('perkembangan_desa');
		}

		$data['perkembangan']->detail = unserialize($data['perkembangan']->detail);

		$this->template
			->set_layout('page')
			->title('Detail Data Dasar Keluarga')
			->build('perkembangan_desa/detail', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit') || empty($id)){
			show_404();
		}

		if($this->input->post()){
			$perkembangan = $this->input->post('data');
			if(!empty($perkembangan['tanggal'])){
				$perkembangan['tanggal'] = date_reverse($perkembangan['tanggal']);
			}
			else{
				$perkembangan['tanggal'] = date('Y-m-d');
			}
			$perkembangan['detail'] = serialize($perkembangan['detail']);

			$this->perkembangan_desa_model->save($perkembangan, $id);

			$this->session->set_flashdata('success_message', 'Data Perkembangan Desa berhasil diubah.');
			redirect('perkembangan_desa');
		}

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['perkembangan'] = $this->perkembangan_desa_model->get($id);
		$data['perkembangan']->tanggal = date_reverse($data['perkembangan']->tanggal);
		$data['perkembangan']->detail = unserialize($data['perkembangan']->detail);

		if((!$this->permission->check_permission($this->modules, 'all') && $data['perkembangan']->id_operator != $this->session->userdata('user_id'))){
			redirect('perkembangan_desa');
		}

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$data['perkembangan']->kabupaten = (array) $this->kabupaten_model->get_by_criteria()
			->select('kabupaten_code AS id, kabupaten_name as text')
			->where('kabupaten_code', $data['perkembangan']->kabupaten_id)
			->get()
			->row();

		$data['perkembangan']->kecamatan = (array) $this->kecamatan_model->get_by_criteria()
			->select('kecamatan_code AS id, kecamatan_name as text')
			->where('kecamatan_code', $data['perkembangan']->kecamatan_id)
			->get()
			->row();

		$data['perkembangan']->desa = (array) $this->desa_model->get_by_criteria()
			->select('desa_code AS id, desa_name as text')
			->where('desa_code', $data['perkembangan']->desa_id)
			->get()
			->row();

		if(!empty($data['perkembangan']->kabupaten)){
			$data['perkembangan']->kabupaten['text'] = $data['perkembangan']->kabupaten['id'] ." - ". $data['perkembangan']->kabupaten['text'];
		}
		if(!empty($data['perkembangan']->kecamatan)){
			$data['perkembangan']->kecamatan['text'] = $data['perkembangan']->kecamatan['id'] ." - ". $data['perkembangan']->kecamatan['text'];
		}
		if(!empty($data['perkembangan']->desa)){
			$data['perkembangan']->desa['text'] = $data['perkembangan']->desa['id'] ." - ". $data['perkembangan']->desa['text'];
		}

		$this->template
			->set_layout('page')
			->title('Edit Data Dasar Keluarga')
			->build('perkembangan_desa/edit', $data);
	}

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$perkembangan = $this->perkembangan_desa_model->get($id);


		if((!$this->permission->check_permission($this->modules, 'all') && $perkembangan->id_operator != $this->session->userdata('user_id'))){
			redirect('perkembangan_desa');
		}

		$this->perkembangan_desa_model->delete($perkembangan->id);

		$this->session->set_flashdata('success_message', 'Data dasar keluarga berhasil dihapus.');
		redirect("perkembangan_desa");
	}
}
