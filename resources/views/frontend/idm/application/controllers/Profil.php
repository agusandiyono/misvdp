<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('user_model');
		$this->load->model('user_group_model');
	}

	public function index()
	{
		$data['breadcrumb'] = true;

		$id = $this->session->userdata('user_id');

		if(!empty($id)){
			$data['user'] = $this->ion_auth->user($id)->row();
			$data['biodata'] = !empty($data['user']->biodata) ? unserialize($data['user']->biodata) : array();
			$data['current_group'] = $this->ion_auth->get_users_groups($id)->row();
		}
		else{
			$this->session->set_flashdata('error_message', 'Terjadi kesalahan mengakses profil anda.');
			redirect("home", 'refresh');
		}

		if($this->input->post()){
			if($this->input->post('data')){
				$tables = $this->config->item('tables','ion_auth');

				$this->form_validation->set_rules('data[first_name]', 'Nama Depan', 'required');
				$this->form_validation->set_rules('data[last_name]', 'Nama Belakang', 'required');

				if(strcasecmp($data['user']->email, $this->input->post('data[email]')) != 0){
					$unique_email = '|is_unique['.$tables['users'].'.email]';
				}
				else{
					$unique_email = '';
				}
				$this->form_validation->set_rules('data[email]', 'Email', 'required|valid_email'.$unique_email);

				if($this->input->post('data[password]')){
					$this->form_validation->set_rules('data[password]', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm_password]');
					$this->form_validation->set_rules('confirm_password', 'Ulangi Password', 'required');
				}
				if($this->form_validation->run()){
					$user = array(
						'email' => strtolower($this->input->post('data[email]')),
						'first_name' => $this->input->post('data[first_name]'),
						'last_name'  => $this->input->post('data[last_name]')
					);

					if ($this->input->post('data[password]')){
						$user['password'] = $this->input->post('data[password]');
					}

					if($this->ion_auth->update($data['user']->id, $user))
				    {
						$this->session->set_flashdata('success_message', $this->ion_auth->messages() );
					    redirect("profil", 'refresh');
				    }
				}
			}
			if($this->input->post('biodata')){
				$biodata = array(
					'biodata' => serialize($this->input->post('biodata'))
				);

				if($this->ion_auth->update($data['user']->id, $biodata))
			    {
					$this->session->set_flashdata('success_message', $this->ion_auth->messages() );
				    redirect("profil#biodata", 'refresh');
			    }
			}
		}

		$this->template
			->set_layout('page')
			->title('Profil Pengguna')
			->build('pengguna/profil', $data);
	}
}
