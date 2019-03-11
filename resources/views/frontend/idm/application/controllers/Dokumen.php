<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends MY_Controller {
	private $modules = array('dokumen');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dokumen_model');
	}
	public function index()
	{
		if(!$this->permission->check_module($this->modules)){
			show_404();
		}

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['list_dokumen'] = $this->dokumen_model->get_by_criteria()
			->order_by('tanggal DESC')
			->get()
			->result();

		$this->template
			->set_layout('page')
			->title('Pustaka Dokumen')
			->build('dokumen/index', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$dokumen = $this->input->post('data');
			$dokumen['id_operator'] = $this->session->userdata('user_id');
			$dokumen['tanggal'] = date_reverse($dokumen['tanggal']);

			if(!empty($_FILES['dokumen'])){
				$config['upload_path'] = './uploads/dokumen';
				$config['allowed_types'] = 'doc|docx|xls|xlsx|ppt|pptx|pdf|jpg|jpeg|gif|png|bmp';
				$config['overwrite']  = FALSE;
				$config['remove_spaces']  = FALSE;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('dokumen'))
				{
					$file = $this->upload->data();
					$dokumen['dokumen'] = $file['file_name'];
				}
			}

			$this->dokumen_model->save($dokumen);

			$this->session->set_flashdata('success_message', 'Dokumen berhasil ditambahkan.');
			redirect('dokumen');
		}

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$this->template
			->set_layout('page')
			->title('Tambah Dokumen')
			->build('dokumen/tambah', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit')){
			show_404();
		}

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['dokumen'] = $this->dokumen_model->get($id);

		if($this->input->post()){
			$dokumen = $this->input->post('data');
			$dokumen['id_operator'] = $this->session->userdata('user_id');
			$dokumen['tanggal'] = date_reverse($dokumen['tanggal']);

			if(!empty($this->input->post('hapus_dokumen'))){
				unlink('./uploads/dokumen/'.$this->input->post('hapus_dokumen'));
			}

			if(!empty($_FILES['dokumen'])){
				$config['upload_path'] = './uploads/dokumen';
				$config['allowed_types'] = 'doc|docx|xls|xlsx|ppt|pptx|pdf|jpg|jpeg|gif|png|bmp';
				$config['overwrite']  = FALSE;
				$config['remove_spaces']  = FALSE;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('dokumen'))
				{
					$file = $this->upload->data();
					$dokumen['dokumen'] = $file['file_name'];
				}
			}

			$this->dokumen_model->save($dokumen, $id);

			$this->session->set_flashdata('success_message', 'Dokumen berhasil diubah.');
			redirect('dokumen');
		}

		$this->template
			->set_layout('page')
			->title('Edit Dokumen')
			->build('dokumen/edit', $data);
	}

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$dokumen = $this->dokumen_model->get($id);

		if(!empty($dokumen->dokumen)){
			unlink('./uploads/dokumen/'.$dokumen->dokumen);
		}

		$this->dokumen_model->delete($dokumen->id);

		$this->session->set_flashdata('success_message', 'Dokumen berhasil dihapus.');
		redirect("dokumen");
	}
}
