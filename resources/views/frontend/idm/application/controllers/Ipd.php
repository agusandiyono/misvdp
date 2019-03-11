<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ipd extends MY_Controller {
	private $modules = array('kegiatan');

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('kegiatan_model','ipd_model'));
	}

	public function modal($where = null)
	{
		if(!$this->permission->check_permission($this->modules, 'add') || !IS_AJAX){
			show_404();
		}

		$data['where'] = $where;

		$this->load->model('provinsi_model');

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		if($where == "impor"){
			$this->load->view('kegiatan/impor', $data);
		}
		else if($where == "ekspor"){
			$this->load->view('kegiatan/ekspor', $data);
		}
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
				->order_by('kabupaten_name ASC')
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
				->order_by('kecamatan_name ASC')
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
				->order_by('desa_name ASC')
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
			if(!$this->session->userdata('edit_saran')){
				if(!empty($searchQuery)) $searchQuery .= " AND ";
				$searchQuery .= " id_operator = " . $this->session->userdata('user_id');
			}


		}
		else{
			$this->load->model('provinsi_model');

			$data['list_provinsi'] = $this->ipd_model->get_by_criteria()
			->select('kodeprov, provinsi')
			->order_by('kodeprov ASC')
			->group_by('provinsi')
			->get()
			->result();
		}

		$data['list_status'] = $this->ipd_model->get_by_criteria()
		->select('DISTINCT(status)')
		->order_by('status ASC')
		->get()
		->result();


		$this->template
			->set_layout('page')
			->title('Data IPD 2014')
			->build('ipd/index', $data);
	}

	public function ambil_data(){
		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		if($modul=="kab"){
			echo $this->ipd_model->kabupaten($id);
		}else if($modul=="kec"){
			echo $this->ipd_model->kecamatan($id);
		}else if($modul=="des"){
			echo $this->ipd_model->desa($id);
		}
	}



  public function ajax_list()
    {
        $list = $this->ipd_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $r) {
            $no++;
            $row = array();
                $row[] = $no;
                $row[] = $r->provinsi;
                $row[] = $r->kabupaten;
                $row[] = $r->kecamatan;
                $row[] = $r->desa;
                $row[] = $r->status;
                $row[] = "<a href='ipd/read/$r->id' class='btn btn-success' title='detail'><i class='fa fa-eye'></i></a>";
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->ipd_model->count_all() ,
                        "recordsFiltered" => $this->ipd_model->count_filtered(),
                        "debug"=>$this->db->last_query(),
                        "data" => $data,

                        //"data" => $this->ipd_model->total_luas(),
                );
        //output to json format
        echo json_encode($output);
    }

    public function read($id)
      {
          $row = $this->ipd_model->get_by_id($id);
          if ($row) {
              $data = array(
          'id' => $row->id,
          'desa'                => $row->desa,
          'kecamatan'           => $row->kecamatan,
          'kabupaten'           => $row->kabupaten,
          'provinsi'            => $row->provinsi,
          'status'              => $row->status,

					'i1' => $row->i1,
	        'i2' => $row->i2,
	        'i3' => $row->i3,
	        'i4' => $row->i4,
	        'i5' => $row->i5,
	        'i6' => $row->i6,
	        'i7' => $row->i7,
	        'i8' => $row->i8,
	        'i9' => $row->i9,
	        'i10' => $row->i10,
	        'i11' => $row->i11,
	        'i12' => $row->i12,
	        'i13' => $row->i13,
	        'i14' => $row->i14,
	        'i15' => $row->i15,
	        'i16' => $row->i16,
	        'i17' => $row->i17,
	        'i18' => $row->i18,
	        'i19' => $row->i19,
	        'i20' => $row->i20,
	        'i21' => $row->i21,
	        'i22' => $row->i22,
	        'i23' => $row->i23,
	        'i24' => $row->i24,
	        'i25' => $row->i25,
	        'i26' => $row->i26,
	        'i27' => $row->i27,
	        'i28' => $row->i28,
	        'i29' => $row->i29,
	        'i30' => $row->i30,
	        'i31' => $row->i31,
	        'i32' => $row->i32,
	        'i33' => $row->i33,
	        'i34' => $row->i34,
	        'i35' => $row->i35,
	        'i36' => $row->i36,
	        'i37' => $row->i37,
	        'i38' => $row->i38,
	        'i39' => $row->i39,
	        'i40' => $row->i40,
	        'i41' => $row->i41,
	        'i42' => $row->i42,
          //'centroid_maju' => $this->ipd_model->get_centroid_maju($row->provinsi),
          );
              //$this->load->view('indonesia/indonesia_read', $data);
              //$this->template->load('template','indonesia/indonesia_read', $data);
              $this->template
          			->set_layout('page')
          			->title('Detail IPD')
          			->build('ipd/read', $data);
          } else {
              $this->session->set_flashdata('message', 'Record Not Found');
              redirect(site_url('indonesia'));
          }
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

		$data['kegiatan'] = $this->kegiatan_model->get_by_criteria()
			->select('id_operator,nama, tanggal,provinsi_name AS provinsi,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa,kegiatan.provinsi_id, kegiatan.kabupaten_id, kegiatan.kecamatan_id, kegiatan.desa_id,deskripsi,sasaran,jumlah_p, masalah, aktivitas_posyandu,kepesertaan_bpjs,pendidikan_dasar,smp_mts,smu_smk,buta_aksara,kegiatan_paud,kegiatan_pkbm,pusat_kursus,perpus_desa,gotong_royong,ruang_publik,lapangan_olahraga,kegiatan_olahraga,suku_etnis,bahasa,keragaman_agama,poskamling,siskamling,kriminalitas,konflik,penyelesaian_konflik,sekolah_lb,kesejahteraan_sosial,bunuh_diri,sumber_air,air_mandi,memiliki_jamban,tempat_sampah,aliran_listrik,sinyal_kuat,televisi,internet,ekonomi_penduduk,pusat_perdagangan,minimarket,penginapan,logistik,bank,bpr,kredit,koperasi,transportasi,jalan_umum,jalan_desa,air,tanah,udara,limbah,longsor,banjir,kebakaran_hutan,peringatan_dini,dini_tsunami,per_keselamatan,jalur_evakuasi')
			->join('provinsi', 'provinsi.provinsi_code = kegiatan.provinsi_id', 'left')
			->join('kabupaten', 'kabupaten.kabupaten_code = kegiatan.kabupaten_id', 'left')
			->join('kecamatan', 'kecamatan.kecamatan_code = kegiatan.kecamatan_id', 'left')
			->join('desa', 'desa.desa_code = kegiatan.desa_id', 'left')
			->where('kegiatan.id = ' . $id . $searchQuery)
			->get()
			->row();

		if(empty($data['kegiatan']) || (!$this->permission->check_permission($this->modules, 'all') && ($data['kegiatan']->id_operator != $this->session->userdata('user_id') && $this->session->userdata('edit_saran') == 0))){
			redirect('kegiatan');
		}

		$data['list_foto'] = !empty($data['kegiatan']->foto) ? unserialize($data['kegiatan']->foto) : array();

		$this->template
			->set_layout('page')
			->title('Detail IDM')
			->build('kegiatan/detail', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$kegiatan = $this->input->post('data');
			$kegiatan['id_operator'] = $this->session->userdata('user_id');
			$kegiatan['tanggal'] = date_reverse($kegiatan['tanggal']);
			$list_foto = array();

			if(!empty($_FILES['foto']['name'][0])){
				for($i = 0; $i < count($_FILES['foto']['name']); $i++){
					$_FILES['fileFoto']['name'] = $_FILES['foto']['name'][$i];
					$_FILES['fileFoto']['type'] = $_FILES['foto']['type'][$i];
					$_FILES['fileFoto']['tmp_name'] = $_FILES['foto']['tmp_name'][$i];
					$_FILES['fileFoto']['error'] = $_FILES['foto']['error'][$i];
					$_FILES['fileFoto']['size'] = $_FILES['foto']['size'][$i];

					$uploadPath = './uploads/foto/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|jpeg|png';

					$this->load->library('upload', $config);

					$this->upload->initialize($config);
					if($this->upload->do_upload('fileFoto')){
						$fileData = $this->upload->data();
						$list_foto[] = $fileData['file_name'];
					}
				}

				$kegiatan['foto'] = serialize($list_foto);
			}


			$this->kegiatan_model->save($kegiatan);

			$this->session->set_flashdata('success_message', ' Kegiatan berhasil ditambahkan.');
			redirect('kegiatan');
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
			->title('Tambah IDM')
			->build('kegiatan/tambah', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit') || empty($id)){
			show_404();
		}

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['kegiatan'] = $this->kegiatan_model->get($id);
		$data['list_foto'] = unserialize($data['kegiatan']->foto);

		if((!$this->permission->check_permission($this->modules, 'all') && $data['kegiatan']->id_operator != $this->session->userdata('user_id'))){
			redirect('kegiatan');
		}

		if($this->input->post()){
			$kegiatan = $this->input->post('data');
			$kegiatan['tanggal'] = date_reverse($kegiatan['tanggal']);
			$list_foto_hapus = $this->input->post('hapus_foto');

			if(!empty($list_foto_hapus)){
				foreach ($list_foto_hapus as $foto) {
					if(($key = array_search($foto, $data['list_foto'])) !== false){
						unlink('./uploads/foto/'.$foto);
						unset($data['list_foto'][$key]);
					}
				}
			}

			if(!empty($_FILES['foto']['name'][0])){
				for($i = 0; $i < count($_FILES['foto']['name']); $i++){
					$_FILES['fileFoto']['name'] = $_FILES['foto']['name'][$i];
					$_FILES['fileFoto']['type'] = $_FILES['foto']['type'][$i];
					$_FILES['fileFoto']['tmp_name'] = $_FILES['foto']['tmp_name'][$i];
					$_FILES['fileFoto']['error'] = $_FILES['foto']['error'][$i];
					$_FILES['fileFoto']['size'] = $_FILES['foto']['size'][$i];

					$uploadPath = './uploads/foto/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|jpeg|png';

					$this->load->library('upload', $config);

					$this->upload->initialize($config);
					if($this->upload->do_upload('fileFoto')){
						$fileData = $this->upload->data();
						$data['list_foto'][] = $fileData['file_name'];
					}
				}
			}


			$kegiatan['foto'] = serialize($data['list_foto']);

			$this->kegiatan_model->save($kegiatan, $data['kegiatan']->id);

			$this->session->set_flashdata('success_message', ' Kegiatan berhasil diubah.');
			redirect('kegiatan');
		}

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$data['kegiatan']->kabupaten = (array) $this->kabupaten_model->get_by_criteria()
			->select('kabupaten_code AS id, kabupaten_name as text')
			->where('kabupaten_code', $data['kegiatan']->kabupaten_id)
			->get()
			->row();

		$data['kegiatan']->kecamatan = (array) $this->kecamatan_model->get_by_criteria()
			->select('kecamatan_code AS id, kecamatan_name as text')
			->where('kecamatan_code', $data['kegiatan']->kecamatan_id)
			->get()
			->row();

		$data['kegiatan']->desa = (array) $this->desa_model->get_by_criteria()
			->select('desa_code AS id, desa_name as text')
			->where('desa_code', $data['kegiatan']->desa_id)
			->get()
			->row();

		if(!empty($data['kegiatan']->kabupaten)){
			$data['kegiatan']->kabupaten['text'] = $data['kegiatan']->kabupaten['id'] ." - ". $data['kegiatan']->kabupaten['text'];
		}
		if(!empty($data['kegiatan']->kecamatan)){
			$data['kegiatan']->kecamatan['text'] = $data['kegiatan']->kecamatan['id'] ." - ". $data['kegiatan']->kecamatan['text'];
		}
		if(!empty($data['kegiatan']->desa)){
			$data['kegiatan']->desa['text'] = $data['kegiatan']->desa['id'] ." - ". $data['kegiatan']->desa['text'];
		}

		$this->template
			->set_layout('page')
			->title('Edit IDM')
			->build('kegiatan/edit', $data);
	}

	public function gap_mandiri($id)
    {
        $row = $this->ipd_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id' => $row->id,
        'desa' => $row->desa,
        'kecamatan' => $row->kecamatan,
        'kabupaten' => $row->kabupaten,
        'provinsi' => $row->provinsi,
        'i1' => $row->i1,
        'i2' => $row->i2,
        'i3' => $row->i3,
        'i4' => $row->i4,
        'i5' => $row->i5,
        'i6' => $row->i6,
        'i7' => $row->i7,
        'i8' => $row->i8,
        'i9' => $row->i9,
        'i10' => $row->i10,
        'i11' => $row->i11,
        'i12' => $row->i12,
        'i13' => $row->i13,
        'i14' => $row->i14,
        'i15' => $row->i15,
        'i16' => $row->i16,
        'i17' => $row->i17,
        'i18' => $row->i18,
        'i19' => $row->i19,
        'i20' => $row->i20,
        'i21' => $row->i21,
        'i22' => $row->i22,
        'i23' => $row->i23,
        'i24' => $row->i24,
        'i25' => $row->i25,
        'i26' => $row->i26,
        'i27' => $row->i27,
        'i28' => $row->i28,
        'i29' => $row->i29,
        'i30' => $row->i30,
        'i31' => $row->i31,
        'i32' => $row->i32,
        'i33' => $row->i33,
        'i34' => $row->i34,
        'i35' => $row->i35,
        'i36' => $row->i36,
        'i37' => $row->i37,
        'i38' => $row->i38,
        'i39' => $row->i39,
        'i40' => $row->i40,
        'i41' => $row->i41,
        'i42' => $row->i42,
        'status' => $row->status,

        'centroid_mandiri' => $this->ipd_model->get_centroid_mandiri($row->provinsi)->result(),


        );
            //$data['breadcrumb'] = true;
			$data['modules'] = $this->modules;
				
				$this->template
					->set_layout('page')
					->title('GAP Centroid Mandiri')
					->build('ipd/gap_mandiri', $data);
				}
    }

    public function gap_maju($id)
    {
        $row = $this->ipd_model->get_by_id($id);
        if ($row) {
            $data = array(
		        'id' => $row->id,
		        'desa' => $row->desa,
		        'kecamatan' => $row->kecamatan,
		        'kabupaten' => $row->kabupaten,
		        'provinsi' => $row->provinsi,
		        'i1' => $row->i1,
		        'i2' => $row->i2,
		        'i3' => $row->i3,
		        'i4' => $row->i4,
		        'i5' => $row->i5,
		        'i6' => $row->i6,
		        'i7' => $row->i7,
		        'i8' => $row->i8,
		        'i9' => $row->i9,
		        'i10' => $row->i10,
		        'i11' => $row->i11,
		        'i12' => $row->i12,
		        'i13' => $row->i13,
		        'i14' => $row->i14,
		        'i15' => $row->i15,
		        'i16' => $row->i16,
		        'i17' => $row->i17,
		        'i18' => $row->i18,
		        'i19' => $row->i19,
		        'i20' => $row->i20,
		        'i21' => $row->i21,
		        'i22' => $row->i22,
		        'i23' => $row->i23,
		        'i24' => $row->i24,
		        'i25' => $row->i25,
		        'i26' => $row->i26,
		        'i27' => $row->i27,
		        'i28' => $row->i28,
		        'i29' => $row->i29,
		        'i30' => $row->i30,
		        'i31' => $row->i31,
		        'i32' => $row->i32,
		        'i33' => $row->i33,
		        'i34' => $row->i34,
		        'i35' => $row->i35,
		        'i36' => $row->i36,
		        'i37' => $row->i37,
		        'i38' => $row->i38,
		        'i39' => $row->i39,
		        'i40' => $row->i40,
		        'i41' => $row->i41,
		        'i42' => $row->i42,
		        'status' => $row->status,

		        'centroid_maju' => $this->ipd_model->get_centroid_maju($row->provinsi)->result(),


	        );
            //$data['breadcrumb'] = true;
			$data['modules'] = $this->modules;
				
				$this->template
					->set_layout('page')
					->title('GAP Centroid Maju')
					->build('ipd/gap_maju', $data);
		}
    }

    public function gap_berkembang($id)
    {
        $row = $this->ipd_model->get_by_id($id);
        if ($row) {
            $data = array(
		        'id' => $row->id,
		        'desa' => $row->desa,
		        'kecamatan' => $row->kecamatan,
		        'kabupaten' => $row->kabupaten,
		        'provinsi' => $row->provinsi,
		        'i1' => $row->i1,
		        'i2' => $row->i2,
		        'i3' => $row->i3,
		        'i4' => $row->i4,
		        'i5' => $row->i5,
		        'i6' => $row->i6,
		        'i7' => $row->i7,
		        'i8' => $row->i8,
		        'i9' => $row->i9,
		        'i10' => $row->i10,
		        'i11' => $row->i11,
		        'i12' => $row->i12,
		        'i13' => $row->i13,
		        'i14' => $row->i14,
		        'i15' => $row->i15,
		        'i16' => $row->i16,
		        'i17' => $row->i17,
		        'i18' => $row->i18,
		        'i19' => $row->i19,
		        'i20' => $row->i20,
		        'i21' => $row->i21,
		        'i22' => $row->i22,
		        'i23' => $row->i23,
		        'i24' => $row->i24,
		        'i25' => $row->i25,
		        'i26' => $row->i26,
		        'i27' => $row->i27,
		        'i28' => $row->i28,
		        'i29' => $row->i29,
		        'i30' => $row->i30,
		        'i31' => $row->i31,
		        'i32' => $row->i32,
		        'i33' => $row->i33,
		        'i34' => $row->i34,
		        'i35' => $row->i35,
		        'i36' => $row->i36,
		        'i37' => $row->i37,
		        'i38' => $row->i38,
		        'i39' => $row->i39,
		        'i40' => $row->i40,
		        'i41' => $row->i41,
		        'i42' => $row->i42,
		        'status' => $row->status,

		        'centroid_berkembang' => $this->ipd_model->get_centroid_berkembang($row->provinsi)->result(),


	        );
            //$data['breadcrumb'] = true;
			$data['modules'] = $this->modules;
				
				$this->template
					->set_layout('page')
					->title('GAP Centroid Berkembang')
					->build('ipd/gap_berkembang', $data);
		}
    }

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$kegiatan = $this->kegiatan_model->get($id);


		if((!$this->permission->check_permission($this->modules, 'all') && $kegiatan->id_operator != $this->session->userdata('user_id'))){
			redirect('kegiatan');
		}

		if(!empty($kegiatan->foto)){
			$kegiatan->foto = unserialize($kegiatan->foto);

			foreach($kegiatan->foto as $foto){
				unlink('./uploads/foto/'.$foto);
			}
		}

		$this->kegiatan_model->delete($kegiatan->id);

		$this->session->set_flashdata('success_message', 'Kegiatan berhasil dihapus.');
		redirect("kegiatan", 'refresh');
	}
}
