<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progres extends MY_Controller {
	private $modules = array('progres');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
		$this->load->model('profil_kelompok_model');
		$this->load->model('evkin_model');
		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');
	}

	public function index()
	{
		if(!$this->permission->check_module($this->modules)){
			show_404();
		}

		
			$data['list_evkin'] = $this->evkin_model->get_by_criteria()
				->select('*')
				->order_by('id DESC')
				->get()
				->result();
		

		$this->template
			->set_layout('page')
			->title('Daftar Evaluasi Kinerja')
			->build('progres/index', $data);
	}

	
}
