<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		if($this->ion_auth->logged_in()){
			redirect('dashboard');
		}
		else{
			redirect('auth/login');
		}
	}

	public function login()
	{
		$this->template->set_layout('page-login')->build('login');
	}

	public function autentikasi()
	{
		if(!IS_AJAX){
			redirect('auth');
		}

		$respond = array();
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data = $this->security->xss_clean($data);

		if ($this->ion_auth->login($data['username'], $data['password']))
		{
			$user = $this->ion_auth->user($this->session->userdata('user_id'))->row();
			$this->session->set_userdata('first_name', $user->first_name);
			$this->session->set_userdata('edit_saran', $user->edit_saran);

			if(!empty($user->provinsi_id)){
				$this->load->model('provinsi_model');
				$this->session->set_userdata('provinsi_id', $user->provinsi_id);
				$this->session->set_userdata('provinsi', $this->provinsi_model->get_by_criteria()
					->select('provinsi_name')
					->where('provinsi_code', $user->provinsi_id)
					->get()
					->row()
					->provinsi_name
				);
			}
			if(!empty($user->kabupaten_id)){
				$this->load->model('kabupaten_model');
				$this->session->set_userdata('kabupaten_id', $user->kabupaten_id);
				$this->session->set_userdata('kabupaten', $this->kabupaten_model->get_by_criteria()
					->select('kabupaten_name')
					->where('kabupaten_code', $user->kabupaten_id)
					->get()
					->row()
					->kabupaten_name
				);
			}
			if(!empty($user->kecamatan_id)){
				$this->load->model('kecamatan_model');
				$this->session->set_userdata('kecamatan_id', $user->kecamatan_id);
				$this->session->set_userdata('kecamatan', $this->kecamatan_model->get_by_criteria()
					->select('kecamatan_name')
					->where('kecamatan_code', $user->kecamatan_id)
					->get()
					->row()
					->kecamatan_name
				);
			}
			if(!empty($user->desa_id)){
				$this->load->model('desa_model');
				$this->session->set_userdata('desa_id', $user->desa_id);
				$this->session->set_userdata('desa', $this->desa_model->get_by_criteria()
					->select('desa_name')
					->where('desa_code', $user->desa_id)
					->get()
					->row()
					->desa_name
				);
			}

			$respond['login_status'] = "success";
			if(!empty($this->input->post('redirect'))){
				$respond['redirect'] = base_url($this->input->post('redirect'));
			}
			else{
				$respond['redirect'] = base_url();
			}
		}
		else
		{
			$respond['user'] = $this->ion_auth->user($this->session->userdata('user_id'))->row();
			$this->ion_auth->logout();
			$respond['login_status'] = "invalid";
		}

		echo json_encode($respond);
	}

	public function keluar()
	{
		$this->ion_auth->logout();
		redirect(base_url());
	}
}
