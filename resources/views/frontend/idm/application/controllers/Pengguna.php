<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends MY_Controller {
	private $modules = array('user','user_group');

	public function __construct()
	{
		parent::__construct();

		$this->load->model('user_model');
		$this->load->model('user_group_model');
	}

	public function ajx($where = false)
	{
		if(!IS_AJAX){
			redirect('pengguna');
		}

		$this->load->library('datatables');
		$this->load->helper('datatable_helper');

		if($where == "users"){
			if(!$this->permission->check_module($this->modules, 'user')){
				show_404();
			}

			$this->datatables->select('users.id, username, first_name, last_name, groups.name')->from('users')
				->join('users_groups', 'users.id = users_groups.user_id', 'left')
				->join('groups', 'users_groups.group_id = groups.id', 'left')
				->add_column('aksi', '$1', 'user_buttons(users.id, '. $this->session->userdata('user_id') .', groups.name, user)');
			$this->datatables->unset_column('users.id');
			echo $this->datatables->generate();
		}
		else if($where == "users_groups"){
			if(!$this->permission->check_module($this->modules, 'user_group')){
				show_404();
			}

			$this->datatables->select('id, name, description')->from('groups')
				->add_column('aksi', '$1', 'user_buttons(id, "", name, group)');
			$this->datatables->unset_column('id');
			echo $this->datatables->generate();
		}
	}

	public function get_no_pendamping()
	{
		if(!IS_AJAX){
			redirect('pengguna');
		}

		$response = array();

		$where = str_replace("_id", "", $this->input->get('where'));
		$value = $this->input->get('value');

		if($where == "kabupaten"){
			$value = substr($value, 0, 2).".".substr($value, 2, 2);
		}
		elseif($where == "kecamatan"){
			$searchQUery = "";
			$value = substr($value, 0, 2).".".substr($value, 2, 2).".".substr($value, 4, 3);
		}
		elseif($where == "desa"){
			$searchQUery = "";
			$value = substr($value, 0, 2).".".substr($value, 2, 2).".".substr($value, 4, 3).".".substr($value, 7, 3);
		}

		$searchQUery = $value.".____";

		$total = $this->user_model->get_by_criteria()
				->where('no_pendamping LIKE "'. $searchQUery.'"')
				->get()
				->num_rows();

		$total++;
		if($total < 10) $total = "000".$total;
		else if($total < 100) $total = "00".$total;
		else if($total < 1000) $total = "0".$total;

		echo str_replace("____", $total, $searchQUery);
	}

	public function index()
	{
		if(!$this->permission->check_module($this->modules)){
			show_404();
		}

		$data['breadcrumb'] = true;

		$data['modules'] = $this->modules;

		$this->template
			->set_layout('page')
			->title('Pengguna')
			->build('pengguna/index', $data);
	}

	public function tambah_pengguna()
	{
		if(!$this->permission->check_module($this->modules, 'user')){
			show_404();
		}

		$this->load->model('provinsi_model');

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		if($this->input->post()){
			$tables = $this->config->item('tables','ion_auth');

			$this->form_validation->set_rules('data[username]', 'Username', 'required|is_unique['.$tables['users'].'.username]');
			$this->form_validation->set_rules('data[first_name]', 'Nama Depan', 'required');
			$this->form_validation->set_rules('data[last_name]', 'Nama Belakang', 'required');
			$this->form_validation->set_rules('data[email]', 'Email', 'required|valid_email|is_unique['.$tables['users'].'.email]');
			$this->form_validation->set_rules('data[password]', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm_password]');
			$this->form_validation->set_rules('confirm_password', 'Ulangi Password', 'required');

			if ($this->form_validation->run() == true){
				$username = $this->input->post('data[username]');
				$email	= strtolower($this->input->post('data[email]'));
				$password = $this->input->post('data[password]');

				$additional_data = array(
					'first_name' => $this->input->post('data[first_name]'),
					'last_name'  => $this->input->post('data[last_name]'),
					'no_pendamping'  => $this->input->post('data[no_pendamping]'),
					'provinsi_id'  => $this->input->post('data[provinsi_id]'),
					'kabupaten_id'  => $this->input->post('data[kabupaten_id]'),
					'kecamatan_id'  => $this->input->post('data[kecamatan_id]'),
					'desa_id'  => $this->input->post('data[desa_id]'),
					'edit_saran'  => empty($this->input->post('data[edit_saran]')) ? 0 : 1
				);
				$group = array($this->input->post('group'));

				if($lastid = $this->ion_auth->register($username, $password, $email, $additional_data, $group)){
					if($this->input->post('status') == '1'){
						$this->load->model('ion_auth_model');
						$this->ion_auth_model->activate($lastid);
					}

					$this->session->set_flashdata('success_message', $this->ion_auth->messages());
					redirect("pengguna", 'refresh');
				}
			}
		}

		$data['breadcrumb'] = true;

		$data['user_group'] = $this->ion_auth->groups()->result();

		$this->template
			->set_layout('page')
			->title('Tambah Pengguna')
			->build('pengguna/tambah_pengguna', $data);
	}

	public function edit_pengguna($id="")
	{
		if(!$this->permission->check_module($this->modules, 'user')){
			show_404();
		}

		$data['breadcrumb'] = true;

		$data['user'] = $this->ion_auth->user($id)->row();
		$data['user_group'] = $this->ion_auth->groups()->result();
		$data['current_group'] = $this->ion_auth->get_users_groups($id)->row();

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		if(!isset($id) || !is_numeric($id) || empty($data['user'])){
			$this->session->set_flashdata('error_message', 'Terjadi kesalahan mengakses detail pengguna.');
			redirect("pengguna", 'refresh');
		}
		

		if($this->input->post()){
			$data['current_group'] = $this->ion_auth->get_users_groups($id)->row();
			$data['user_group'] = $this->ion_auth->groups()->result();

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
					'last_name'  => $this->input->post('data[last_name]'),
					'provinsi_id'  => $this->input->post('data[provinsi_id]'),
					'kabupaten_id'  => $this->input->post('data[kabupaten_id]'),
					'kecamatan_id'  => $this->input->post('data[kecamatan_id]'),
					'desa_id'  => $this->input->post('data[desa_id]'),
					'edit_saran'  => empty($this->input->post('data[edit_saran]')) ? 0 : 1
				);

				if ($this->input->post('data[password]')){
					$user['password'] = $this->input->post('data[password]');
				}

				$groupData = $this->input->post('group');

				if(!empty($data['current_group']->id)){
					if (isset($groupData) && $data['current_group']->id != $groupData) {

						$this->ion_auth->remove_from_group('', $id);

						$this->ion_auth->add_to_group($groupData, $id);
					}
				}
				else{
					$this->ion_auth->add_to_group($groupData, $id);
				}

				if($this->ion_auth->update($data['user']->id, $user))
				{
					$this->load->library('ion_auth_model');

					if($this->input->post('status') == '1'){
						$this->ion_auth_model->activate($data['user']->id);
					}
					else if($this->input->post('status') == '0'){
						$this->ion_auth_model->deactivate($data['user']->id);
					}

					$this->session->set_flashdata('success_message', $this->ion_auth->messages() );
					redirect("pengguna", 'refresh');
				}
			}
		}

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$data['user']->kabupaten = (array) $this->kabupaten_model->get_by_criteria()
			->select('kabupaten_code AS id, kabupaten_name as text')
			->where('kabupaten_code', $data['user']->kabupaten_id)
			->get()
			->row();

		$data['user']->kecamatan = (array) $this->kecamatan_model->get_by_criteria()
			->select('kecamatan_code AS id, kecamatan_name as text')
			->where('kecamatan_code', $data['user']->kecamatan_id)
			->get()
			->row();

		$data['user']->desa = (array) $this->desa_model->get_by_criteria()
			->select('desa_code AS id, desa_name as text')
			->where('desa_code', $data['user']->desa_id)
			->get()
			->row();

		if(!empty($data['user']->kabupaten)){
			$data['user']->kabupaten['text'] = $data['user']->kabupaten['id'] ." - ". $data['user']->kabupaten['text'];
		}
		if(!empty($data['user']->kecamatan)){
			$data['user']->kecamatan['text'] = $data['user']->kecamatan['id'] ." - ". $data['user']->kecamatan['text'];
		}
		if(!empty($data['user']->desa)){
			$data['user']->desa['text'] = $data['user']->desa['id'] ." - ". $data['user']->desa['text'];
		}

		$this->template
				->set_layout('page')
				->title('Edit Pengguna')
				->build('pengguna/edit_pengguna', $data);
	}

	public function hapus_pengguna($id)
	{
		if(!$this->permission->check_module($this->modules, 'user')){
			show_404();
		}

		if($id != $this->session->userdata('user_id')){
			if($this->ion_auth->delete_user($id)){
				$this->session->set_flashdata('success_message', "Akun berhasil dihapus.");
				redirect("pengguna", 'refresh');
			}
			else{
				$this->session->set_flashdata('error_message', "Terjadi kesalahan ketika menghapus akun! Silahkan coba lagi.");
				redirect("pengguna", 'refresh');
			}
		}
		else{
			$this->session->set_flashdata('error_message', "Tidak diperbolehkan untuk menghapus akun yang sedang digunakan saat ini.");
			redirect("pengguna", 'refresh');
		}
	}

	public function tambah_group()
	{
		if(!$this->permission->check_module($this->modules, 'user_group')){
			show_404();
		}

		if($this->input->post()){
			$tables = $this->config->item('tables','ion_auth');

			$this->form_validation->set_rules('data[name]', 'Nama Group', 'required|alpha_dash|is_unique['.$tables['groups'].'.name]');
			$this->form_validation->set_rules('data[description]', 'Deskripsi Group', 'required');

			if ($this->form_validation->run() == true){
				$data = $this->input->post('data');
				
				if($this->ion_auth->create_group($data['name'], $data['description']))
				{
					$this->session->set_flashdata('success_message', $this->ion_auth->messages());
					redirect('pengguna/edit_group/' . $this->db->insert_id());
				}
				else
				{
					$this->session->set_flashdata('error_message', $this->ion_auth->messages());
					redirect("pengguna#list-group", 'refresh');
				}
			}
		}
		
		$data['breadcrumb'] = true;
		
		$this->template
			->set_layout('page')
			->title('Tambah Group')
			->build('pengguna/tambah_group', $data);
	}

	public function edit_group($id)
	{
		if(!$this->permission->check_module($this->modules, 'user_group')){
			show_404();
		}

		$this->load->model('group_access_model');

		$data['group'] = $this->ion_auth->group($id)->row();

		if(!isset($id) || !is_numeric($id) || empty($data['group'])){
			$this->session->set_flashdata('error_message', 'Terjadi kesalahan mengakses detail group.');
			redirect("pengguna#list-group", 'refresh');
		}

		$data['group_access'] = $this->group_access_model->get_by_criteria()
			->where(array('group_id' => $id))
			->get()
			->result();

		if($data['group']->name == 'admin'){
			$this->session->set_flashdata('error_message', 'Group admin tidak dapat diedit.');
			redirect("pengguna#list-group", 'refresh');
		}

		if ($this->input->post()){
			$tables = $this->config->item('tables','ion_auth');
		
			$group = $this->input->post('data');

			if(strcasecmp($data['group']->name, $group['name']) != 0){
				$this->form_validation->set_rules('data[name]', 'Nama Group', 'required|alpha_dash|is_unique['.$tables['groups'].'.name]');
				$this->form_validation->set_rules('data[description]', 'Deskripsi Group', 'required');
			}

			$this->form_validation->set_rules('access[]', 'Hak Akses', 'required');

			if ($this->form_validation->run() === TRUE){
				$accesses = array();
				$i = 0;

				foreach ($this->input->post('access') as  $key => $access) {
					if(is_array($access)){
						foreach ($access as $permission) {
							$accesses[$i]['group_id'] = $id;
							$accesses[$i]['module'] = $key;
							$accesses[$i]['access'] = $permission;
							$i++;
						}
					}
					else{
						$accesses[$i]['group_id'] = $id;
						$accesses[$i]['module'] = $key;
						$accesses[$i]['access'] = $key;
						$i++;
					}
				}

				$group_update = $this->ion_auth->update_group($id, $group['name'], $group['description']);

				if(!$group_update)
				{
					$view_errors = $this->ion_auth->messages();
			  	}
			  	else
			  	{
			  		if(!empty($accesses)){
						$this->group_access_model->get_by_criteria()
							->where(array('group_id' => $id))
							->delete();

						foreach ($accesses as $access) {
							$this->group_access_model->save($access);
						}
					}
					
					$this->session->set_flashdata('success_message', 'Group pengguna berhasil diperbarui.');
					redirect('pengguna/edit_group/' . $id, 'refresh');
			  	}
			}
		}

		$permissions = array();
		foreach ($data['group_access'] as $group) {
			$permissions[$group->module][$group->access] = true;
		}
		$data['access'] = $permissions;

		$this->template
			->set_layout('page')
			->title('Edit Pengguna')
			->build('pengguna/edit_group', $data);
	}

	public function hapus_group($id)
	{
		if(!$this->permission->check_module($this->modules, 'user_group')){
			show_404();
		}

		$group = $this->ion_auth->group($id)->row();
		if($group->name != "admin"){
			if($this->ion_auth->delete_group($id)){
				$this->session->set_flashdata('success_message', "Group berhasil dihapus.");
				redirect("pengguna#list-group", 'refresh');
			}
			else{
				$this->session->set_flashdata('error_message', "Terjadi kesalahan ketika menghapus group! Silahkan coba lagi.");
				redirect("pengguna#list-group", 'refresh');
			}
		}
		else{
			$this->session->set_flashdata('error_message', "Group admin tidak diperbolehkan untuk dihapus.");
			redirect("pengguna#list-group", 'refresh');
		}
	}
}
