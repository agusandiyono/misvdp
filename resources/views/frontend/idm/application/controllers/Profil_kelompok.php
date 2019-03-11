<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_kelompok extends MY_Controller {
	private $modules = array('profil_kelompok');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_kelompok_model');
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
			$this->load->view('profil_kelompok/impor', $data);
		}
		else if($where == "ekspor"){
			$this->load->view('profil_kelompok/ekspor', $data);
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
	public function ambil_data(){
		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		if($modul=="kab"){
			echo $this->profil_kelompok_model->kabupaten($id);
		}else if($modul=="kec"){
			echo $this->profil_kelompok_model->kecamatan($id);
		}else if($modul=="des"){
			echo $this->profil_kelompok_model->desa($id);
		}		
	}
	
	public function ajax_list()
    {
		//$this->session->userdata('user_id')
        $list = $this->profil_kelompok->get_datatables();      
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $r) {
            $no++;
            $row = array();
                $row[] = $no;
                $row[] = $r->no_kelompok;
                $row[] = $r->pewawancara;
                $row[] = $r->tanggal;
                $row[] = $r->nama;
                $row[] = "<p><div class='label label-info'>Laki-laki: $r->jumlah_lk </div></p>
							<p><div class='label label-secondary'>Perempuan: $r->jumlah_p</div></p>";
				if($r->status == 0){
					$row[] = "<div class='label label-danger'>Aktif</div>";
				}
				elseif($r->status == 1){
					$row[] = "<div class='label label-success'>Tidak Aktif</div>";
				};	
						
				if($this->permission->check_permission($this->modules, 'all') || $this->session->userdata('edit_saran') == 1 ){ 
				$row[] = "<a class='btn btn-blue btn-sm' href='kegiatan/detail/$r->id' title='Detail Kegiatan' target='_blank'>
							<i class='entypo-newspaper'></i>
							</a>
							<a class='btn btn-info btn-sm' href='kegiatan/saran/$r->id' title='Edit Saran' target='_blank'>
								<i class='entypo-clipboard'></i>
							</a><a class='btn btn-green btn-sm' href='kegiatan/edit/$r->id' title='Edit'>
							<i class='entypo-pencil'></i>
						</a><button class='btn btn-danger btn-sm delete-trigger' data-href='kegiatan/hapus/$r->id' data-toggle='modal' data-target='#confirm-delete' title='Hapus Kegiatan'>
							<i class='entypo-cancel'></i>
						</button>";
				}
				else if($this->permission->check_permission($this->modules, 'all') || ($this->permission->check_permission($this->modules, 'edit') && $r->id_operator == $this->session->userdata('user_id'))){
				$row[] = "<a class='btn btn-blue btn-sm' href='kegiatan/detail/$r->id' title='Detail Kegiatan' target='_blank'>
							<i class='entypo-newspaper'></i>
							</a>
							<a class='btn btn-info btn-sm' href='kegiatan/saran/$r->id' title='Edit Saran' target='_blank'>
								<i class='entypo-clipboard'></i>
							</a><a class='btn btn-green btn-sm' href='kegiatan/edit/$r->id' title='Edit'>
							<i class='entypo-pencil'></i>
						</a>";
				}
				else{
					$row[] = "<a class='btn btn-blue btn-sm' href='kegiatan/detail/$r->id' title='Detail Kegiatan' target='_blank'>
							<i class='entypo-newspaper'></i>
							</a>
							<a class='btn btn-green btn-sm' href='kegiatan/edit/$r->id' title='Edit'>
							<i class='entypo-pencil'></i>
						</a><button class='btn btn-danger btn-sm delete-trigger' data-href='kegiatan/hapus/$r->id' data-toggle='modal' data-target='#confirm-delete' title='Hapus Kegiatan'>
							<i class='entypo-cancel'></i>
						</button>
							";
				}
				
													
				$data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->kegiatan_model->count_all() ,                      
                        "recordsFiltered" => $this->kegiatan_model->count_filtered(),                                           
                        "data" => $data,
                        
                        //"data" => $this->sisperdes_model->total_luas(),
                );
        //output to json format
        echo json_encode($output);
    }

	public function index()
	{
		if(!$this->permission->check_module($this->modules)){
			show_404();
		}

		if($this->input->post()){
			if($this->input->post('where') == "impor"){
				if(!empty($this->input->post('provinsi')) && !empty($_FILES['file']['name'])){
					$file = $_FILES['file']['tmp_name'];
					$ekstension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

					if(!in_array($ekstension, array('xls', 'xlsx')) ) {
						$this->session->set_flashdata('error_message', 'File impor kegiatan tidak diperbolehkan selain dari xls dan xlsx.');
						redirect('profil_kelompok');
					}

					$this->load->library('excel');

					$objPHPExcel = PHPExcel_IOFactory::load($file);
					
					$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

					$all_row_data = array();
					foreach ($cell_collection as $cell) {
						$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
						$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
						$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
						if ($row > 3) {
							$all_row_data[$row][$column] = $data_value;
						}
					}

					$all_row_data = array_filter(array_map('array_filter', $all_row_data));

					if(!empty($all_row_data)){
						$is_error = false;

						if($is_error == false){
							foreach($all_row_data as $row_data) {
								$profil = array();
								$profil['id_operator'] = $this->session->userdata('user_id');
								$profil['provinsi_id'] = $this->input->post('provinsi');
								$profil['kabupaten_id'] = $this->input->post('kabupaten');
								$profil['kecamatan_id'] = $this->input->post('kecamatan');
								$profil['desa_id'] = $this->input->post('desa');
								$profil['no_kelompok'] = !empty($row_data['A']) ? $row_data['A'] : "";
								$profil['pewawancara'] = !empty($row_data['B']) ? $row_data['B'] : "";
								$profil['tanggal'] = !empty($row_data['C']) ? date_reverse($row_data['C']) : "";
								$profil['no_urut'] = !empty($row_data['D']) ? $row_data['D'] : "";
								$profil['nama'] = !empty($row_data['E']) ? $row_data['E'] : "";
								$profil['no_hp'] = !empty($row_data['F']) ? $row_data['F'] : "";
								$profil['bidang_kegiatan'] = !empty($row_data['G']) ? $row_data['G'] : "";
								$profil['pendirian'] = !empty($row_data['H']) ? $row_data['H'] : "";
								$profil['tgl_berdiri'] = !empty($row_data['I']) ? date_reverse($row_data['I']) : "";
								$profil['tgl_operasional'] = !empty($row_data['J']) ? date_reverse($row_data['J']) : "";
								$profil['jumlah_lk'] = !empty($row_data['K']) ? $row_data['K'] : "";
								$profil['jumlah_p'] = !empty($row_data['L']) ? $row_data['L'] : "";
								$profil['status'] = !empty($row_data['M']) ? $row_data['M'] : "";

								$profil['detail']["pertanian"]["komoditi"]["lahan"] = !empty($row_data['N']) ? $row_data['N'] : "";
								$profil['detail']["pertanian"]["komoditi"]["status_lahan"] = !empty($row_data['O']) && $row_data['O'] != "lainnya" ? $row_data['O'] : "lainnya";
								$profil['detail']["pertanian"]["komoditi"]["status_lahan_lain"] = !empty($row_data['O']) && $row_data['O'] == "lainnya" ? $row_data['O'] : "";
								$profil['detail']["pertanian"]["komoditi"]["komoditi_unggulan"] = !empty($row_data['P']) ? $row_data['P'] : "";
								$profil['detail']["pertanian"]["komoditi"]["panen"][1] = !empty($row_data['Q']) ? $row_data['Q'] : "";
								$profil['detail']["pertanian"]["komoditi"]["panen"][2] = !empty($row_data['R']) ? $row_data['R'] : "";
								$profil['detail']["pertanian"]["komoditi"]["konsumsi"] = !empty($row_data['S']) ? $row_data['S'] : "";
								$profil['detail']["pertanian"]["komoditi"]["terjual"] = !empty($row_data['T']) ? $row_data['T'] : "";
								$profil['detail']["pertanian"]["komoditi"]["pemasaran"] = !empty($row_data['U']) && $row_data['U'] != "lainnya" ? $row_data['U'] : "lainnya";
								$profil['detail']["pertanian"]["komoditi"]["pemasaran_lain"] = !empty($row_data['U']) && $row_data['U'] == "lainnya" ? $row_data['U'] : "";
								$profil['detail']["pertanian"]["komoditi"]["harga"] = !empty($row_data['V']) ? $row_data['V'] : "";

								$profil['detail']["perkebunan"]["komoditi"]["lahan"] = !empty($row_data['W']) ? $row_data['W'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["status_lahan"] = !empty($row_data['X']) && $row_data['X'] != "lainnya" ? $row_data['X'] : "lainnya";
								$profil['detail']["perkebunan"]["komoditi"]["status_lahan_lain"] = !empty($row_data['X']) && $row_data['X'] == "lainnya" ? $row_data['X'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["komoditi_unggulan"][1] = !empty($row_data['Y']) ? $row_data['Y'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["komoditi_unggulan"][2] = !empty($row_data['Z']) ? $row_data['Z'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["panen"][1] = !empty($row_data['AA']) ? $row_data['AA'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["panen"][2] = !empty($row_data['AB']) ? $row_data['AB'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["konsumsi"] = !empty($row_data['AC']) ? $row_data['AC'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["terjual"] = !empty($row_data['AD']) ? $row_data['AD'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["pemasaran"] = !empty($row_data['AE']) && $row_data['AE'] != "lainnya" ? $row_data['AE'] : "lainnya";
								$profil['detail']["perkebunan"]["komoditi"]["pemasaran_lain"] = !empty($row_data['AE']) && $row_data['AE'] == "lainnya" ? $row_data['AE'] : "";
								$profil['detail']["perkebunan"]["komoditi"]["harga"] = !empty($row_data['AF']) ? $row_data['AF'] : "";

								$profil['detail']["buah"]["komoditi"]["lahan"] = !empty($row_data['AG']) ? $row_data['AG'] : "";
								$profil['detail']["buah"]["komoditi"]["status_lahan"] = !empty($row_data['AH']) && $row_data['AH'] != "lainnya" ? $row_data['AH'] : "lainnya";
								$profil['detail']["buah"]["komoditi"]["status_lahan_lain"] = !empty($row_data['AH']) && $row_data['AH'] == "lainnya" ? $row_data['AH'] : "";
								$profil['detail']["buah"]["komoditi"]["komoditi_unggulan"][1] = !empty($row_data['AI']) ? $row_data['AI'] : "";
								$profil['detail']["buah"]["komoditi"]["komoditi_unggulan"][2] = !empty($row_data['AJ']) ? $row_data['AJ'] : "";
								$profil['detail']["buah"]["komoditi"]["panen"][1] = !empty($row_data['AK']) ? $row_data['AK'] : "";
								$profil['detail']["buah"]["komoditi"]["panen"][2] = !empty($row_data['AL']) ? $row_data['AL'] : "";
								$profil['detail']["buah"]["komoditi"]["konsumsi"] = !empty($row_data['AM']) ? $row_data['AM'] : "";
								$profil['detail']["buah"]["komoditi"]["terjual"] = !empty($row_data['AN']) ? $row_data['AN'] : "";
								$profil['detail']["buah"]["komoditi"]["pemasaran"] = !empty($row_data['AO']) && $row_data['AO'] != "lainnya" ? $row_data['AO'] : "lainnya";
								$profil['detail']["buah"]["komoditi"]["pemasaran_lain"] = !empty($row_data['AO']) && $row_data['AO'] == "lainnya" ? $row_data['AO'] : "";
								$profil['detail']["buah"]["komoditi"]["harga"] = !empty($row_data['AP']) ? $row_data['AP'] : "";

								$profil['detail']["peternakan"]["komoditi"]["jenis"] = !empty($row_data['AQ']) ? $row_data['AQ'] : "";
								$profil['detail']["peternakan"]["komoditi"]["lahan"] = !empty($row_data['AR']) ? $row_data['AR'] : "";
								$profil['detail']["peternakan"]["komoditi"]["jumlah_awal"] = !empty($row_data['AS']) ? $row_data['AS'] : "";
								$profil['detail']["peternakan"]["komoditi"]["jumlah_sekarang"] = !empty($row_data['AT']) ? $row_data['AT'] : "";
								$profil['detail']["peternakan"]["komoditi"]["status_lahan"] = !empty($row_data['AU']) && $row_data['AU'] != "lainnya" ? $row_data['AU'] : "lainnya";
								$profil['detail']["peternakan"]["komoditi"]["status_lahan_lain"] = !empty($row_data['AU']) && $row_data['AU'] == "lainnya" ? $row_data['AU'] : "";
								$profil['detail']["peternakan"]["komoditi"]["konsumsi"] = !empty($row_data['AV']) ? $row_data['AV'] : "";
								$profil['detail']["peternakan"]["komoditi"]["terjual"] = !empty($row_data['AW']) ? $row_data['AW'] : "";
								$profil['detail']["peternakan"]["komoditi"]["pemasaran"] = !empty($row_data['AX']) && $row_data['AX'] != "lainnya" ? $row_data['AX'] : "lainnya";
								$profil['detail']["peternakan"]["komoditi"]["pemasaran_lain"] = !empty($row_data['AX']) && $row_data['AX'] == "lainnya" ? $row_data['AX'] : "";
								$profil['detail']["peternakan"]["komoditi"]["harga"] = !empty($row_data['AY']) ? $row_data['AY'] : "";

								$profil['detail']["perikanan"]["komoditi"]["lahan"] = !empty($row_data['AZ']) ? $row_data['AZ'] : "";
								$profil['detail']["perikanan"]["komoditi"]["jenis"] = !empty($row_data['BA']) ? $row_data['BA'] : "";
								$profil['detail']["perikanan"]["komoditi"]["jumlah_benih"] = !empty($row_data['BB']) ? $row_data['BB'] : "";
								$profil['detail']["perikanan"]["komoditi"]["status_lahan"] = !empty($row_data['BC']) && $row_data['BC'] != "lainnya" ? $row_data['BC'] : "lainnya";
								$profil['detail']["perikanan"]["komoditi"]["status_lahan_lain"] = !empty($row_data['BC']) && $row_data['BC'] == "lainnya" ? $row_data['BC'] : "";
								$profil['detail']["perikanan"]["komoditi"]["konsumsi"] = !empty($row_data['BD']) ? $row_data['BD'] : "";
								$profil['detail']["perikanan"]["komoditi"]["terjual"] = !empty($row_data['BE']) ? $row_data['BE'] : "";
								$profil['detail']["perikanan"]["komoditi"]["pemasaran"] = !empty($row_data['BF']) && $row_data['BF'] != "lainnya" ? $row_data['BF'] : "lainnya";
								$profil['detail']["perikanan"]["komoditi"]["pemasaran_lain"] = !empty($row_data['BF']) && $row_data['BF'] == "lainnya" ? $row_data['BF'] : "";
								$profil['detail']["perikanan"]["komoditi"]["harga"] = !empty($row_data['BG']) ? $row_data['BG'] : "";

								$profil['detail']["hasil"]["komoditi"]["lahan"] = !empty($row_data['BH']) ? $row_data['BH'] : "";
								$profil['detail']["hasil"]["komoditi"]["status_lahan"] = !empty($row_data['BI']) && $row_data['BI'] != "lainnya" ? $row_data['BI'] : "lainnya";
								$profil['detail']["hasil"]["komoditi"]["status_lahan_lain"] = !empty($row_data['BI']) && $row_data['BI'] == "lainnya" ? $row_data['BI'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan"][1] = !empty($row_data['BJ']) ? $row_data['BJ'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan"][2] = !empty($row_data['BK']) ? $row_data['BK'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan"][3] = !empty($row_data['BL']) ? $row_data['BL'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan"][4] = !empty($row_data['BM']) ? $row_data['BM'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][1]['jenis'] = !empty($row_data['BN']) ? $row_data['BN'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][1]['harga'] = !empty($row_data['BO']) ? $row_data['BO'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][2]['jenis'] = !empty($row_data['BP']) ? $row_data['BP'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][2]['harga'] = !empty($row_data['BQ']) ? $row_data['BQ'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][3]['jenis'] = !empty($row_data['BR']) ? $row_data['BR'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][3]['harga'] = !empty($row_data['BS']) ? $row_data['BS'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][4]['jenis'] = !empty($row_data['BT']) ? $row_data['BT'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_sebelum"][4]['harga'] = !empty($row_data['BU']) ? $row_data['BU'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][1]['jenis'] = !empty($row_data['BV']) ? $row_data['BV'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][1]['harga'] = !empty($row_data['BW']) ? $row_data['BW'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][2]['jenis'] = !empty($row_data['BX']) ? $row_data['BX'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][2]['harga'] = !empty($row_data['BY']) ? $row_data['BY'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][3]['jenis'] = !empty($row_data['BZ']) ? $row_data['BZ'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][3]['harga'] = !empty($row_data['CA']) ? $row_data['CA'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][4]['jenis'] = !empty($row_data['CB']) ? $row_data['CB'] : "";
								$profil['detail']["hasil"]["komoditi"]["olahan_setelah"][4]['harga'] = !empty($row_data['CC']) ? $row_data['CC'] : "";
								$profil['detail']["hasil"]["komoditi"]["konsumsi"] = !empty($row_data['CD']) ? $row_data['CD'] : "";
								$profil['detail']["hasil"]["komoditi"]["terjual"] = !empty($row_data['CE']) ? $row_data['CE'] : "";
								$profil['detail']["hasil"]["komoditi"]["pemasaran"] = !empty($row_data['CF']) && $row_data['CF'] != "lainnya" ? $row_data['CF'] : "lainnya";
								$profil['detail']["hasil"]["komoditi"]["pemasaran_lain"] = !empty($row_data['CF']) && $row_data['CF'] == "lainnya" ? $row_data['CF'] : "";
								$profil['detail']["hasil"]["komoditi"]["harga"] = !empty($row_data['CG']) ? $row_data['CG'] : "";

								$profil['detail']["pertanian"]["sarana"]["pertemuan"] = !empty($row_data['CH']) && $row_data['CH'] != "lainnya" ? $row_data['CH'] : "lainnya";
								$profil['detail']["pertanian"]["sarana"]["pertemuan_lainnya"] = !empty($row_data['CH']) && $row_data['CH'] == "lainnya" ? $row_data['CH'] : "";
								$profil['detail']['pertanian']['sarana']['peralatan'] = array();
								if(!empty($row_data['CI'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Cangkul";
								if(!empty($row_data['CJ'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Parang";
								if(!empty($row_data['CK'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Sekop";
								if(!empty($row_data['CL'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Pakuel";
								if(!empty($row_data['CM'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Garpu";
								if(!empty($row_data['CN'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Peralatan tukang";
								if(!empty($row_data['CO'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Selang";
								if(!empty($row_data['CP'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Handsprayer";
								if(!empty($row_data['CQ'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Gembor";
								if(!empty($row_data['CR'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Hand tractor";
								if(!empty($row_data['CS'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Sepatu boat, serok, jerigen, kored, dll";
								if(!empty($row_data['CT'])) $profil['detail']['pertanian']['sarana']['peralatan'][] = "Motor roda tiga";
								$profil['detail']["pertanian"]["sarana"]["transportasi"] = !empty($row_data['CU']) && $row_data['CU'] != "lainnya" ? $row_data['CU'] : "lainnya";
								$profil['detail']["pertanian"]["sarana"]["transportasi_lainnya"] = !empty($row_data['CU']) && $row_data['CU'] == "lainnya" ? $row_data['CU'] : "";
								$profil['detail']["pertanian"]["sarana"]["gudang"] = !empty($row_data['CV']) ? $row_data['CV'] : "";

								$profil['detail']["perkebunan"]["sarana"]["pertemuan"] = !empty($row_data['CW']) && $row_data['CW'] != "lainnya" ? $row_data['CW'] : "lainnya";
								$profil['detail']["perkebunan"]["sarana"]["pertemuan_lainnya"] = !empty($row_data['CW']) && $row_data['CW'] == "lainnya" ? $row_data['CW'] : "";
								$profil['detail']['perkebunan']['sarana']['peralatan'] = array();
								if(!empty($row_data['CX'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Cangkul";
								if(!empty($row_data['CY'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Parang";
								if(!empty($row_data['CZ'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Sekop";
								if(!empty($row_data['DA'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Pakuel";
								if(!empty($row_data['DB'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Garpu";
								if(!empty($row_data['DC'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Peralatan tukang";
								if(!empty($row_data['DD'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Selang";
								if(!empty($row_data['DE'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Handsprayer";
								if(!empty($row_data['DF'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Gembor";
								if(!empty($row_data['DG'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Hand tractor";
								if(!empty($row_data['DH'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Sepatu boat, serok, jerigen, kored, dll";
								if(!empty($row_data['DI'])) $profil['detail']['perkebunan']['sarana']['peralatan'][] = "Motor roda tiga";
								$profil['detail']["perkebunan"]["sarana"]["transportasi"] = !empty($row_data['DJ']) && $row_data['DJ'] != "lainnya" ? $row_data['DJ'] : "lainnya";
								$profil['detail']["perkebunan"]["sarana"]["transportasi_lainnya"] = !empty($row_data['DJ']) && $row_data['DJ'] == "lainnya" ? $row_data['DJ'] : "";
								$profil['detail']["perkebunan"]["sarana"]["gudang"] = !empty($row_data['DK']) ? $row_data['DK'] : "";

								$profil['detail']["buah"]["sarana"]["pertemuan"] = !empty($row_data['DL']) && $row_data['DL'] != "lainnya" ? $row_data['DL'] : "lainnya";
								$profil['detail']["buah"]["sarana"]["pertemuan_lainnya"] = !empty($row_data['DL']) && $row_data['DL'] == "lainnya" ? $row_data['DL'] : "";
								$profil['detail']['buah']['sarana']['peralatan'] = array();
								if(!empty($row_data['DM'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Cangkul";
								if(!empty($row_data['DN'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Parang";
								if(!empty($row_data['DO'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Sekop";
								if(!empty($row_data['DP'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Pakuel";
								if(!empty($row_data['DQ'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Garpu";
								if(!empty($row_data['DR'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Peralatan tukang";
								if(!empty($row_data['DS'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Selang";
								if(!empty($row_data['DT'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Handsprayer";
								if(!empty($row_data['DU'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Gembor";
								if(!empty($row_data['DV'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Hand tractor";
								if(!empty($row_data['DW'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Sepatu boat, serok, jerigen, kored, dll";
								if(!empty($row_data['DX'])) $profil['detail']['buah']['sarana']['peralatan'][] = "Motor roda tiga";
								$profil['detail']["buah"]["sarana"]["transportasi"] = !empty($row_data['DY']) && $row_data['DY'] != "lainnya" ? $row_data['DY'] : "lainnya";
								$profil['detail']["buah"]["sarana"]["transportasi_lainnya"] = !empty($row_data['DY']) && $row_data['DY'] == "lainnya" ? $row_data['DY'] : "";
								$profil['detail']["buah"]["sarana"]["gudang"] = !empty($row_data['DZ']) ? $row_data['DZ'] : "";

								$profil['detail']["peternakan"]["sarana"]["pertemuan"] = !empty($row_data['EA']) && $row_data['EA'] != "lainnya" ? $row_data['EA'] : "lainnya";
								$profil['detail']["peternakan"]["sarana"]["pertemuan_lainnya"] = !empty($row_data['EA']) && $row_data['EA'] == "lainnya" ? $row_data['EA'] : "";
								$profil['detail']['peternakan']['sarana']['peralatan'] = array();
								if(!empty($row_data['EB'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Kandang ternak";
								if(!empty($row_data['EC'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Peralatan masak makanan ternak";
								if(!empty($row_data['ED'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Peralatan tempat bertelur ternak";
								if(!empty($row_data['EE'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Cangkul";
								if(!empty($row_data['EF'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Garpu";
								if(!empty($row_data['EG'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Sekop";
								if(!empty($row_data['EH'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Peralatan tukang";
								if(!empty($row_data['EI'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Sepatu boat, selang, dll";
								if(!empty($row_data['EJ'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Perlengkapan membuat kandang";
								if(!empty($row_data['EK'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Gerobak untuk angkut makanan ternak";
								if(!empty($row_data['EL'])) $profil['detail']['peternakan']['sarana']['peralatan'][] = "Lainnya";
								$profil['detail']["peternakan"]["sarana"]["peralatan_lain"] = !empty($row_data['EL']) ? $row_data['EL'] : "";
								$profil['detail']["peternakan"]["sarana"]["kondisi"] = !empty($row_data['EM']) ? $row_data['EM'] : "";
								$profil['detail']["peternakan"]["sarana"]["perbaikan"] = !empty($row_data['EN']) && $row_data['EN'] != "lainnya" ? $row_data['EN'] : "lainnya";
								$profil['detail']["peternakan"]["sarana"]["perbaikan_lainnya"] = !empty($row_data['EN']) && $row_data['EN'] == "lainnya" ? $row_data['EN'] : "";
								$profil['detail']["peternakan"]["sarana"]["transportasi_makanan"] = !empty($row_data['EO']) ? $row_data['EO'] : "";
								$profil['detail']["peternakan"]["sarana"]["transportasi_kampung"] = !empty($row_data['EP']) ? $row_data['EP'] : "";
								$profil['detail']["peternakan"]["sarana"]["transportasi_pasar"] = !empty($row_data['EQ']) ? $row_data['EQ'] : "";

								$profil['detail']["perikanan"]["sarana"]["pertemuan"] = !empty($row_data['ER']) && $row_data['ER'] != "lainnya" ? $row_data['ER'] : "lainnya";
								$profil['detail']["perikanan"]["sarana"]["pertemuan_lainnya"] = !empty($row_data['ER']) && $row_data['ER'] == "lainnya" ? $row_data['ER'] : "";
								$profil['detail']['perikanan']['sarana']['peralatan'] = array();
								if(!empty($row_data['ES'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Perahu";
								if(!empty($row_data['ET'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Jaring";
								if(!empty($row_data['EU'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Alat memancing";
								if(!empty($row_data['EV'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Mesin perahu";
								if(!empty($row_data['EW'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Cool box";
								if(!empty($row_data['EX'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Petromax, sepatu Boat";
								if(!empty($row_data['EY'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Perlengkapan mancing";
								if(!empty($row_data['EZ'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Cangkul";
								if(!empty($row_data['FA'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Sekop";
								if(!empty($row_data['FB'])) $profil['detail']['perikanan']['sarana']['peralatan'][] = "Parang";
								$profil['detail']["perikanan"]["sarana"]["kondisi_perahu"] = !empty($row_data['FC']) && $row_data['FC'] == "baik" ? "baik" : "tidak";
								$profil['detail']["perikanan"]["sarana"]["kondisi_mesin"] = !empty($row_data['FD']) && $row_data['FD'] == "baik" ? "baik" : "tidak";
								$profil['detail']["perikanan"]["sarana"]["kondisi_menangkap"] = !empty($row_data['FE']) && $row_data['FE'] == "baik" ? "baik" : "tidak";
								$profil['detail']["perikanan"]["sarana"]["kondisi_memancing"] = !empty($row_data['FF']) && $row_data['FF'] == "baik" ? "baik" : "tidak";
								$profil['detail']["perikanan"]["sarana"]["perbaikan"] = !empty($row_data['FG']) && $row_data['FG'] != "lainnya" ? $row_data['FG'] : "lainnya";
								$profil['detail']["perikanan"]["sarana"]["perbaikan_lainnya"] = !empty($row_data['FG']) && $row_data['FG'] == "lainnya" ? $row_data['FG'] : "";
								$profil['detail']["perikanan"]["sarana"]["gudang"] = !empty($row_data['FH']) && $row_data['FH'] != "lainnya" ? $row_data['FH'] : "lainnya";
								$profil['detail']["perikanan"]["sarana"]["gudang_lainnya"] = !empty($row_data['FH']) && $row_data['FH'] == "lainnya" ? $row_data['FH'] : "";

								$profil['detail']["hasil"]["sarana"]["pertemuan"] = !empty($row_data['FI']) && $row_data['FI'] != "lainnya" ? $row_data['FI'] : "lainnya";
								$profil['detail']["hasil"]["sarana"]["pertemuan_lainnya"] = !empty($row_data['FI']) && $row_data['FI'] == "lainnya" ? $row_data['FI'] : "";
								if(!empty($row_data['FJ'])) $profil['detail']['hasil']['sarana']['peralatan'][] = "Alat mengiris";
								if(!empty($row_data['FK'])) $profil['detail']['hasil']['sarana']['peralatan'][] = "Alat masak";
								if(!empty($row_data['FL'])) $profil['detail']['hasil']['sarana']['peralatan'][] = "Kompor masak";
								if(!empty($row_data['FM'])) $profil['detail']['hasil']['sarana']['peralatan'][] = "Tempat menjemur";
								if(!empty($row_data['FN'])) $profil['detail']['hasil']['sarana']['peralatan'][] = "Lainnya";
								$profil['detail']["hasil"]["sarana"]["peralatan_lain"] = !empty($row_data['FN']) ? $row_data['FN'] : "";
								$profil['detail']["hasil"]["sarana"]["penjualan"] = !empty($row_data['FO']) ? $row_data['FO'] : "";
								$profil['detail']["hasil"]["sarana"]["transportasi"] = !empty($row_data['FP']) && $row_data['FP'] != "lainnya" ? $row_data['FP'] : "lainnya";
								$profil['detail']["hasil"]["sarana"]["transportasi_lainnya"] = !empty($row_data['FP']) && $row_data['FP'] == "lainnya" ? $row_data['FP'] : "";
								$profil['detail']["hasil"]["sarana"]["gudang"] = !empty($row_data['FQ']) && $row_data['FQ'] != "lainnya" ? $row_data['FQ'] : "lainnya";
								$profil['detail']["hasil"]["sarana"]["gudang_lainnya"] = !empty($row_data['FQ']) && $row_data['FQ'] == "lainnya" ? $row_data['FQ'] : "";

								$profil['detail']['pembinaan']['bpmd_kabupaten'] = !empty($row_data['FR']) && $row_data['FR'] == "rutin" ? "rutin" : "tidak";
								$profil['detail']['pembinaan']['penyuluh'] = !empty($row_data['FS']) && $row_data['FS'] == "rutin" ? "rutin" : "tidak";
								$profil['detail']['pembinaan']['bpmd_provinsi'] = !empty($row_data['FT']) && $row_data['FT'] == "rutin" ? "rutin" : "tidak";
								$profil['detail']["pembinaan"]["dinas_lain"]["nama"] = !empty($row_data['FU']) ? $row_data['FU'] : "";
								$profil['detail']["pembinaan"]["dinas_lain"]['status'] = !empty($row_data['FV']) && $row_data['FV'] == "rutin" ? "rutin" : "tidak";
								$profil['detail']["pembinaan"]["pertemuan_poktan"] = !empty($row_data['FW']) && $row_data['FW'] != "lainnya" ? $row_data['FW'] : "lainnya";
								$profil['detail']["pembinaan"]["pertemuan_poktan_lainnya"] = !empty($row_data['FW']) && $row_data['FW'] == "lainnya" ? $row_data['FW'] : "";
								$profil['detail']["pembinaan"]["kursus"] = !empty($row_data['FX']) && $row_data['FX'] != "lainnya" ? $row_data['FX'] : "lainnya";
								$profil['detail']["pembinaan"]["kursus_lainnya"] = !empty($row_data['FX']) && $row_data['FX'] == "lainnya" ? $row_data['FX'] : "";
								$profil['detail']["pembinaan"]["demplot"] = !empty($row_data['FY']) && $row_data['FY'] != "ada" ? "ada" : "tidak";
								$profil['detail']["pembinaan"]["kepala_kampung"] = !empty($row_data['FZ']) ? $row_data['FZ'] : "";
								$profil['detail']["pembinaan"]["ketua"] = !empty($row_data['GA']) ? $row_data['GA'] : "";
								$profil['detail']["pembinaan"]["pendamping"] = !empty($row_data['GB']) ? $row_data['GB'] : "";

								$profil['detail'] = serialize($profil['detail']);

								$this->profil_kelompok_model->save($profil);
							}

							$this->session->set_flashdata('success_message', 'Profil Kelompok berhasil diimport.');
							redirect('profil_kelompok');
						}
						else{
							$this->session->set_flashdata('error_message', 'Terjadi kesalahan ketika mengimpor profil kelompok. Silahkan periksa data yang akan diimpor.');
							redirect('profil_kelompok');
						}
					}
				}
				elseif(empty($_FILES['file']['name'])){
					$this->session->set_flashdata('error_message', 'Tidak ada file yang diupload.');
					redirect('profil_kelompok');
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Provinsi, kabupaten, Kecamatan, dan Desa</strong> tidak boleh kosong.');
					redirect('profil_kelompok');
				}
			}
			if($this->input->post('where') == "ekspor"){
				$lokasi = "";
				if($this->input->post('provinsi')){
					$lokasi .= " AND provinsi_code = " . $this->input->post('provinsi');
				}
				if($this->input->post('kabupaten')){
					$lokasi .= " AND kabupaten_code = " . $this->input->post('kabupaten');
				}
				if($this->input->post('kecamatan')){
					$lokasi .= " AND kecamatan_code = " . $this->input->post('kecamatan');
				}
				if($this->input->post('desa')){
					$lokasi .= " AND desa_code = " . $this->input->post('desa');
				}

				if(!$this->permission->check_permission($this->modules, 'all')){
					$list_profil = $this->profil_kelompok_model->get_by_criteria()
						->select('*')
						->join('provinsi', 'provinsi.provinsi_code = profil_kelompok.provinsi_id', 'left')
						->join('kabupaten', 'kabupaten.kabupaten_code = profil_kelompok.kabupaten_id', 'left')
						->join('kecamatan', 'kecamatan.kecamatan_code = profil_kelompok.kecamatan_id', 'left')
						->join('desa', 'desa.desa_code = profil_kelompok.desa_id', 'left')
						->where('id_operator = ' . $this->session->userdata('user_id') .' AND tanggal BETWEEN "'.date_reverse($this->input->post('dari')).'" AND "'.date_reverse($this->input->post('sampai')).'"'.$lokasi)
						->order_by('id DESC, tanggal DESC, provinsi_name ASC, kabupaten_name ASC, kecamatan_name ASC, desa_name ASC')
						->get()
						->result();
				}
				else{
					$list_profil = $this->profil_kelompok_model->get_by_criteria()
						->select('*')
						->join('provinsi', 'provinsi.provinsi_code = profil_kelompok.provinsi_id', 'left')
						->join('kabupaten', 'kabupaten.kabupaten_code = profil_kelompok.kabupaten_id', 'left')
						->join('kecamatan', 'kecamatan.kecamatan_code = profil_kelompok.kecamatan_id', 'left')
						->join('desa', 'desa.desa_code = profil_kelompok.desa_id', 'left')
						->where('tanggal BETWEEN "'.date_reverse($this->input->post('dari')).'" AND "'.date_reverse($this->input->post('sampai')).'"'.$lokasi)
						->order_by('id DESC, tanggal DESC, provinsi_name ASC, kabupaten_name ASC, kecamatan_name ASC, desa_name ASC')
						->get()
						->result();
				}

				if(!empty($list_profil)){
					$this->load->library('excel');

					$objTpl = PHPExcel_IOFactory::load("uploads/Format Ekspor Profil Kelompok.xlsx");
					$objTpl->setActiveSheetIndex(0);

					$i = 4;
					foreach ($list_profil as $profil) {
						$profil->detail = unserialize($profil->detail);

						$objTpl->getActiveSheet()->setCellValue('A'.$i, $profil->no_kelompok);
						$objTpl->getActiveSheet()->setCellValue('B'.$i, $profil->pewawancara);
						$objTpl->getActiveSheet()->setCellValue('C'.$i, date_reverse($profil->tanggal));
						$objTpl->getActiveSheet()->setCellValue('D'.$i, $profil->no_urut);
						$objTpl->getActiveSheet()->setCellValue('E'.$i, $profil->nama);
						$objTpl->getActiveSheet()->setCellValue('F'.$i, $profil->provinsi_name);
						$objTpl->getActiveSheet()->setCellValue('G'.$i, $profil->kabupaten_name);
						$objTpl->getActiveSheet()->setCellValue('H'.$i, $profil->kecamatan_name);
						$objTpl->getActiveSheet()->setCellValue('I'.$i, $profil->desa_name);
						$objTpl->getActiveSheet()->setCellValue('J'.$i, preg_replace('/^0/', '+62', $profil->no_hp));

						if($profil->bidang_kegiatan == "pertanian") $profil->bidang_kegiatan = "Pertanian-Tan. Pangan";
						elseif($profil->bidang_kegiatan == "perkebunan") $profil->bidang_kegiatan = "Perkebunan";
						elseif($profil->bidang_kegiatan == "buah") $profil->bidang_kegiatan = "Buah-Buahan";
						elseif($profil->bidang_kegiatan == "peternakan") $profil->bidang_kegiatan = "Peternakan";
						elseif($profil->bidang_kegiatan == "perikanan") $profil->bidang_kegiatan = "Perikanan";
						elseif($profil->bidang_kegiatan == "hasil") $profil->bidang_kegiatan = "Pengolahan Hasil";
						$objTpl->getActiveSheet()->setCellValue('K'.$i, $profil->bidang_kegiatan);

						$objTpl->getActiveSheet()->setCellValue('L'.$i, ucwords($profil->pendirian));
						$objTpl->getActiveSheet()->setCellValue('M'.$i, date_reverse($profil->tgl_berdiri));
						$objTpl->getActiveSheet()->setCellValue('N'.$i, date_reverse($profil->tgl_operasional));
						$objTpl->getActiveSheet()->setCellValue('O'.$i, $profil->jumlah_lk);
						$objTpl->getActiveSheet()->setCellValue('P'.$i, $profil->jumlah_p);
						$objTpl->getActiveSheet()->setCellValue('Q'.$i, $profil->status == "aktif" ? "Aktif" : "Tidak Aktif");
						$objTpl->getActiveSheet()->setCellValue('R'.$i, $profil->detail["pertanian"]["komoditi"]["lahan"]);
						$objTpl->getActiveSheet()->setCellValue('S'.$i, $profil->detail["pertanian"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["pertanian"]["komoditi"]["status_lahan"]) : $profil->detail["pertanian"]["komoditi"]["status_lahan_lain"]);
						$objTpl->getActiveSheet()->setCellValue('T'.$i, $profil->detail["pertanian"]["komoditi"]["komoditi_unggulan"]);
						$objTpl->getActiveSheet()->setCellValue('U'.$i, $profil->detail["pertanian"]["komoditi"]["panen"][1]);
						$objTpl->getActiveSheet()->setCellValue('V'.$i, $profil->detail["pertanian"]["komoditi"]["panen"][2]);
						$objTpl->getActiveSheet()->setCellValue('W'.$i, $profil->detail["pertanian"]["komoditi"]["konsumsi"]);
						$objTpl->getActiveSheet()->setCellValue('X'.$i, $profil->detail["pertanian"]["komoditi"]["terjual"]);
						$objTpl->getActiveSheet()->setCellValue('Y'.$i, $profil->detail["pertanian"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["pertanian"]["komoditi"]["pemasaran"])) : $profil->detail["pertanian"]["komoditi"]["pemasaran_lain"]);
						$objTpl->getActiveSheet()->setCellValue('Z'.$i, $profil->detail["pertanian"]["komoditi"]["harga"]);
						$objTpl->getActiveSheet()->setCellValue('AA'.$i, $profil->detail["perkebunan"]["komoditi"]["lahan"]);
						$objTpl->getActiveSheet()->setCellValue('AB'.$i, $profil->detail["perkebunan"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["perkebunan"]["komoditi"]["status_lahan"]) : $profil->detail["perkebunan"]["komoditi"]["status_lahan_lain"]);
						$objTpl->getActiveSheet()->setCellValue('AC'.$i, $profil->detail["perkebunan"]["komoditi"]["komoditi_unggulan"][1]);
						$objTpl->getActiveSheet()->setCellValue('AD'.$i, $profil->detail["perkebunan"]["komoditi"]["komoditi_unggulan"][2]);
						$objTpl->getActiveSheet()->setCellValue('AE'.$i, $profil->detail["perkebunan"]["komoditi"]["panen"][1]);
						$objTpl->getActiveSheet()->setCellValue('AF'.$i, $profil->detail["perkebunan"]["komoditi"]["panen"][2]);
						$objTpl->getActiveSheet()->setCellValue('AG'.$i, $profil->detail["perkebunan"]["komoditi"]["konsumsi"]);
						$objTpl->getActiveSheet()->setCellValue('AH'.$i, $profil->detail["perkebunan"]["komoditi"]["terjual"]);
						$objTpl->getActiveSheet()->setCellValue('AI'.$i, $profil->detail["perkebunan"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["perkebunan"]["komoditi"]["pemasaran"])) : $profil->detail["perkebunan"]["komoditi"]["pemasaran_lain"]);
						$objTpl->getActiveSheet()->setCellValue('AJ'.$i, $profil->detail["perkebunan"]["komoditi"]["harga"]);
						$objTpl->getActiveSheet()->setCellValue('AK'.$i, $profil->detail["buah"]["komoditi"]["lahan"]);
						$objTpl->getActiveSheet()->setCellValue('AL'.$i, $profil->detail["buah"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["buah"]["komoditi"]["status_lahan"]) : $profil->detail["buah"]["komoditi"]["status_lahan_lain"]);
						$objTpl->getActiveSheet()->setCellValue('AM'.$i, $profil->detail["buah"]["komoditi"]["komoditi_unggulan"][1]);
						$objTpl->getActiveSheet()->setCellValue('AN'.$i, $profil->detail["buah"]["komoditi"]["komoditi_unggulan"][2]);
						$objTpl->getActiveSheet()->setCellValue('AO'.$i, $profil->detail["buah"]["komoditi"]["panen"][1]);
						$objTpl->getActiveSheet()->setCellValue('AP'.$i, $profil->detail["buah"]["komoditi"]["panen"][2]);
						$objTpl->getActiveSheet()->setCellValue('AQ'.$i, $profil->detail["buah"]["komoditi"]["konsumsi"]);
						$objTpl->getActiveSheet()->setCellValue('AR'.$i, $profil->detail["buah"]["komoditi"]["terjual"]);
						$objTpl->getActiveSheet()->setCellValue('AS'.$i, $profil->detail["buah"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["buah"]["komoditi"]["pemasaran"])) : $profil->detail["buah"]["komoditi"]["pemasaran_lain"]);
						$objTpl->getActiveSheet()->setCellValue('AT'.$i, $profil->detail["buah"]["komoditi"]["harga"]);
						$objTpl->getActiveSheet()->setCellValue('AU'.$i, $profil->detail["peternakan"]["komoditi"]["jenis"]);
						$objTpl->getActiveSheet()->setCellValue('AV'.$i, $profil->detail["peternakan"]["komoditi"]["lahan"]);
						$objTpl->getActiveSheet()->setCellValue('AW'.$i, $profil->detail["peternakan"]["komoditi"]["jumlah_awal"]);
						$objTpl->getActiveSheet()->setCellValue('AX'.$i, $profil->detail["peternakan"]["komoditi"]["jumlah_sekarang"]);
						$objTpl->getActiveSheet()->setCellValue('AY'.$i, $profil->detail["peternakan"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["peternakan"]["komoditi"]["status_lahan"]) : $profil->detail["peternakan"]["komoditi"]["status_lahan_lain"]);
						$objTpl->getActiveSheet()->setCellValue('AZ'.$i, $profil->detail["peternakan"]["komoditi"]["konsumsi"]);
						$objTpl->getActiveSheet()->setCellValue('BA'.$i, $profil->detail["peternakan"]["komoditi"]["terjual"]);
						$objTpl->getActiveSheet()->setCellValue('BB'.$i, $profil->detail["peternakan"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["peternakan"]["komoditi"]["pemasaran"])) : $profil->detail["peternakan"]["komoditi"]["pemasaran_lain"]);
						$objTpl->getActiveSheet()->setCellValue('BC'.$i, $profil->detail["peternakan"]["komoditi"]["harga"]);
						$objTpl->getActiveSheet()->setCellValue('BD'.$i, $profil->detail["perikanan"]["komoditi"]["lahan"]);
						$objTpl->getActiveSheet()->setCellValue('BE'.$i, $profil->detail["perikanan"]["komoditi"]["jenis"] == "perikanan" ? "Perikanan" : "Rumput Laut");
						$objTpl->getActiveSheet()->setCellValue('BF'.$i, $profil->detail["perikanan"]["komoditi"]["jumlah_benih"]);
						$objTpl->getActiveSheet()->setCellValue('BG'.$i, $profil->detail["perikanan"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["perikanan"]["komoditi"]["status_lahan"]) : $profil->detail["perikanan"]["komoditi"]["status_lahan_lain"]);
						$objTpl->getActiveSheet()->setCellValue('BH'.$i, $profil->detail["perikanan"]["komoditi"]["konsumsi"]);
						$objTpl->getActiveSheet()->setCellValue('BI'.$i, $profil->detail["perikanan"]["komoditi"]["terjual"]);
						$objTpl->getActiveSheet()->setCellValue('BJ'.$i, $profil->detail["perikanan"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["perikanan"]["komoditi"]["pemasaran"])) : $profil->detail["perikanan"]["komoditi"]["pemasaran_lain"]);
						$objTpl->getActiveSheet()->setCellValue('BK'.$i, $profil->detail["perikanan"]["komoditi"]["harga"]);
						$objTpl->getActiveSheet()->setCellValue('BL'.$i, $profil->detail["hasil"]["komoditi"]["lahan"]);
						$objTpl->getActiveSheet()->setCellValue('BM'.$i, $profil->detail["hasil"]["komoditi"]["status_lahan"] != "lainnya" ? ucwords($profil->detail["hasil"]["komoditi"]["status_lahan"]) : $profil->detail["hasil"]["komoditi"]["status_lahan_lain"]);
						$objTpl->getActiveSheet()->setCellValue('BN'.$i, $profil->detail["hasil"]["komoditi"]["olahan"][1]);
						$objTpl->getActiveSheet()->setCellValue('BO'.$i, $profil->detail["hasil"]["komoditi"]["olahan"][2]);
						$objTpl->getActiveSheet()->setCellValue('BP'.$i, $profil->detail["hasil"]["komoditi"]["olahan"][3]);
						$objTpl->getActiveSheet()->setCellValue('BQ'.$i, $profil->detail["hasil"]["komoditi"]["olahan"][4]);
						$objTpl->getActiveSheet()->setCellValue('BR'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][1]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('BS'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][1]['harga']);
						$objTpl->getActiveSheet()->setCellValue('BT'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][2]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('BU'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][2]['harga']);
						$objTpl->getActiveSheet()->setCellValue('BV'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][3]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('BW'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][3]['harga']);
						$objTpl->getActiveSheet()->setCellValue('BX'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][4]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('BY'.$i, $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][4]['harga']);
						$objTpl->getActiveSheet()->setCellValue('BZ'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][1]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('CA'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][1]['harga']);
						$objTpl->getActiveSheet()->setCellValue('CB'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][2]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('CC'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][2]['harga']);
						$objTpl->getActiveSheet()->setCellValue('CD'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][3]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('CE'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][3]['harga']);
						$objTpl->getActiveSheet()->setCellValue('CF'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][4]['jenis']);
						$objTpl->getActiveSheet()->setCellValue('CG'.$i, $profil->detail["hasil"]["komoditi"]["olahan_setelah"][4]['harga']);
						$objTpl->getActiveSheet()->setCellValue('CH'.$i, $profil->detail["hasil"]["komoditi"]["konsumsi"]);
						$objTpl->getActiveSheet()->setCellValue('CI'.$i, $profil->detail["hasil"]["komoditi"]["terjual"]);
						$objTpl->getActiveSheet()->setCellValue('CJ'.$i, $profil->detail["hasil"]["komoditi"]["pemasaran"] != "lainnya" ? ucwords(str_replace("_", " ", $profil->detail["hasil"]["komoditi"]["pemasaran"])) : $profil->detail["hasil"]["komoditi"]["pemasaran_lain"]);
						$objTpl->getActiveSheet()->setCellValue('CK'.$i, $profil->detail["hasil"]["komoditi"]["harga"]);

						if($profil->detail["pertanian"]["sarana"]["pertemuan"] == "saung") $profil->detail["pertanian"]["sarana"]["pertemuan"] = "Saung kelompok";
						elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "balai") $profil->detail["pertanian"]["sarana"]["pertemuan"] = "Balai kampung/desa";
						elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "rumah_pengurus") $profil->detail["pertanian"]["sarana"]["pertemuan"] = "Rumah pengurus";
						elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "rumah_anggota") $profil->detail["pertanian"]["sarana"]["pertemuan"] = "Rumah anggota";
						elseif($profil->detail["pertanian"]["sarana"]["pertemuan"] == "lainnya") $profil->detail["pertanian"]["sarana"]["pertemuan"] = $profil->detail["pertanian"]["sarana"]["pertemuan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('CL'.$i, $profil->detail["pertanian"]["sarana"]["pertemuan"]);

						if(!isset($profil->detail['pertanian']['sarana']['peralatan']) || !is_array($profil->detail['pertanian']['sarana']['peralatan'])) $profil->detail['pertanian']['sarana']['peralatan'] = array();
						$objTpl->getActiveSheet()->setCellValue('CM'.$i, in_array("Cangkul", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CN'.$i, in_array("Parang", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CO'.$i, in_array("Sekop", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CP'.$i, in_array("Pakuel", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CQ'.$i, in_array("Garpu", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CR'.$i, in_array("Peralatan tukang", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CS'.$i, in_array("Selang", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CT'.$i, in_array("Handsprayer", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CU'.$i, in_array("Gembor", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CV'.$i, in_array("Hand tractor", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CW'.$i, in_array("Sepatu boat, serok, jerigen, kored, dll", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('CX'.$i, in_array("Motor roda tiga", $profil->detail['pertanian']['sarana']['peralatan']) ? "Ya" : "");

						if($profil->detail["pertanian"]["sarana"]["transportasi"] == "gerobak_kelompok") $profil->detail["pertanian"]["sarana"]["transportasi"] = "Gerobak kelompok";
						elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "gerobak_pribadi") $profil->detail["pertanian"]["sarana"]["transportasi"] = "Gerobak pribadi ";
						elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "beko_kelompok") $profil->detail["pertanian"]["sarana"]["transportasi"] = "Beko (roda tiga) kelompok";
						elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "beko_pribadi") $profil->detail["pertanian"]["sarana"]["transportasi"] = "Beko pribadi";
						elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "motor_kelompok") $profil->detail["pertanian"]["sarana"]["transportasi"] = "Motor kelompok";
						elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "motor_pribadi") $profil->detail["pertanian"]["sarana"]["transportasi"] = "Motor pribadi ";
						elseif($profil->detail["pertanian"]["sarana"]["transportasi"] == "lainnya") $profil->detail["pertanian"]["sarana"]["transportasi"] = $profil->detail["pertanian"]["sarana"]["transportasi_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('CY'.$i, $profil->detail["pertanian"]["sarana"]["transportasi"]);

						if($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_kelompok") $profil->detail["pertanian"]["sarana"]["gudang"] = "Gudang kelompok";
						elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_pengurus") $profil->detail["pertanian"]["sarana"]["gudang"] = "Gudang pribadi pengurus kelompok";
						elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_anggota") $profil->detail["pertanian"]["sarana"]["gudang"] = "Gudang pribadi salah satu anggota";
						elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_desa") $profil->detail["pertanian"]["sarana"]["gudang"] = "Gudang kampung/desa";
						elseif($profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_mitra") $profil->detail["pertanian"]["sarana"]["gudang"] = "Gudang mitra kerja";
						$objTpl->getActiveSheet()->setCellValue('CZ'.$i, $profil->detail["pertanian"]["sarana"]["gudang"]);

						if($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "saung") $profil->detail["perkebunan"]["sarana"]["pertemuan"] = "Saung kelompok";
						elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "balai") $profil->detail["perkebunan"]["sarana"]["pertemuan"] = "Balai kampung/desa";
						elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "rumah_pengurus") $profil->detail["perkebunan"]["sarana"]["pertemuan"] = "Rumah pengurus";
						elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "rumah_anggota") $profil->detail["perkebunan"]["sarana"]["pertemuan"] = "Rumah anggota";
						elseif($profil->detail["perkebunan"]["sarana"]["pertemuan"] == "lainnya") $profil->detail["perkebunan"]["sarana"]["pertemuan"] = $profil->detail["perkebunan"]["sarana"]["pertemuan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('DA'.$i, $profil->detail["perkebunan"]["sarana"]["pertemuan"]);

						if(!isset($profil->detail['perkebunan']['sarana']['peralatan']) || !is_array($profil->detail['perkebunan']['sarana']['peralatan'])) $profil->detail['perkebunan']['sarana']['peralatan'] = array();
						$objTpl->getActiveSheet()->setCellValue('DB'.$i, in_array("Cangkul", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DC'.$i, in_array("Parang", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DD'.$i, in_array("Sekop", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DE'.$i, in_array("Pakuel", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DF'.$i, in_array("Garpu", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DG'.$i, in_array("Peralatan tukang", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DH'.$i, in_array("Selang", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DI'.$i, in_array("Handsprayer", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DJ'.$i, in_array("Gembor", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DK'.$i, in_array("Hand tractor", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DL'.$i, in_array("Sepatu boat, serok, jerigen, kored, dll", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DM'.$i, in_array("Motor roda tiga", $profil->detail['perkebunan']['sarana']['peralatan']) ? "Ya" : "");

						if($profil->detail["perkebunan"]["sarana"]["transportasi"] == "gerobak_kelompok") $profil->detail["perkebunan"]["sarana"]["transportasi"] = "Gerobak kelompok";
						elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "gerobak_pribadi") $profil->detail["perkebunan"]["sarana"]["transportasi"] = "Gerobak pribadi ";
						elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "beko_kelompok") $profil->detail["perkebunan"]["sarana"]["transportasi"] = "Beko (roda tiga) kelompok";
						elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "beko_pribadi") $profil->detail["perkebunan"]["sarana"]["transportasi"] = "Beko pribadi";
						elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "motor_kelompok") $profil->detail["perkebunan"]["sarana"]["transportasi"] = "Motor kelompok";
						elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "motor_pribadi") $profil->detail["perkebunan"]["sarana"]["transportasi"] = "Motor pribadi ";
						elseif($profil->detail["perkebunan"]["sarana"]["transportasi"] == "lainnya") $profil->detail["perkebunan"]["sarana"]["transportasi"] = $profil->detail["perkebunan"]["sarana"]["transportasi_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('DN'.$i, $profil->detail["perkebunan"]["sarana"]["transportasi"]);

						if($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_kelompok") $profil->detail["perkebunan"]["sarana"]["gudang"] = "Gudang kelompok";
						elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_pengurus") $profil->detail["perkebunan"]["sarana"]["gudang"] = "Gudang pribadi pengurus kelompok";
						elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_anggota") $profil->detail["perkebunan"]["sarana"]["gudang"] = "Gudang pribadi salah satu anggota";
						elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_desa") $profil->detail["perkebunan"]["sarana"]["gudang"] = "Gudang kampung/desa";
						elseif($profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_mitra") $profil->detail["perkebunan"]["sarana"]["gudang"] = "Gudang mitra kerja";
						$objTpl->getActiveSheet()->setCellValue('DO'.$i, $profil->detail["perkebunan"]["sarana"]["gudang"]);

						if($profil->detail["buah"]["sarana"]["pertemuan"] == "saung") $profil->detail["buah"]["sarana"]["pertemuan"] = "Saung kelompok";
						elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "balai") $profil->detail["buah"]["sarana"]["pertemuan"] = "Balai kampung/desa";
						elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "rumah_pengurus") $profil->detail["buah"]["sarana"]["pertemuan"] = "Rumah pengurus";
						elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "rumah_anggota") $profil->detail["buah"]["sarana"]["pertemuan"] = "Rumah anggota";
						elseif($profil->detail["buah"]["sarana"]["pertemuan"] == "lainnya") $profil->detail["buah"]["sarana"]["pertemuan"] = $profil->detail["buah"]["sarana"]["pertemuan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('DP'.$i, $profil->detail["buah"]["sarana"]["pertemuan"]);

						if(!isset($profil->detail['buah']['sarana']['peralatan']) || !is_array($profil->detail['buah']['sarana']['peralatan'])) $profil->detail['buah']['sarana']['peralatan'] = array();
						$objTpl->getActiveSheet()->setCellValue('DQ'.$i, in_array("Cangkul", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DR'.$i, in_array("Parang", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DS'.$i, in_array("Sekop", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DT'.$i, in_array("Pakuel", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DU'.$i, in_array("Garpu", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DV'.$i, in_array("Peralatan tukang", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DW'.$i, in_array("Selang", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DX'.$i, in_array("Handsprayer", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DY'.$i, in_array("Gembor", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('DZ'.$i, in_array("Hand tractor", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EA'.$i, in_array("Sepatu boat, serok, jerigen, kored, dll", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EB'.$i, in_array("Motor roda tiga", $profil->detail['buah']['sarana']['peralatan']) ? "Ya" : "");

						if($profil->detail["buah"]["sarana"]["transportasi"] == "gerobak_kelompok") $profil->detail["buah"]["sarana"]["transportasi"] = "Gerobak kelompok";
						elseif($profil->detail["buah"]["sarana"]["transportasi"] == "gerobak_pribadi") $profil->detail["buah"]["sarana"]["transportasi"] = "Gerobak pribadi ";
						elseif($profil->detail["buah"]["sarana"]["transportasi"] == "beko_kelompok") $profil->detail["buah"]["sarana"]["transportasi"] = "Beko (roda tiga) kelompok";
						elseif($profil->detail["buah"]["sarana"]["transportasi"] == "beko_pribadi") $profil->detail["buah"]["sarana"]["transportasi"] = "Beko pribadi";
						elseif($profil->detail["buah"]["sarana"]["transportasi"] == "motor_kelompok") $profil->detail["buah"]["sarana"]["transportasi"] = "Motor kelompok";
						elseif($profil->detail["buah"]["sarana"]["transportasi"] == "motor_pribadi") $profil->detail["buah"]["sarana"]["transportasi"] = "Motor pribadi ";
						elseif($profil->detail["buah"]["sarana"]["transportasi"] == "lainnya") $profil->detail["buah"]["sarana"]["transportasi"] = $profil->detail["buah"]["sarana"]["transportasi_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('EC'.$i, $profil->detail["buah"]["sarana"]["transportasi"]);

						if($profil->detail["buah"]["sarana"]["gudang"] == "gudang_kelompok") $profil->detail["buah"]["sarana"]["gudang"] = "Gudang kelompok";
						elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_pengurus") $profil->detail["buah"]["sarana"]["gudang"] = "Gudang pribadi pengurus kelompok";
						elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_anggota") $profil->detail["buah"]["sarana"]["gudang"] = "Gudang pribadi salah satu anggota";
						elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_desa") $profil->detail["buah"]["sarana"]["gudang"] = "Gudang kampung/desa";
						elseif($profil->detail["buah"]["sarana"]["gudang"] == "gudang_mitra") $profil->detail["buah"]["sarana"]["gudang"] = "Gudang mitra kerja";
						$objTpl->getActiveSheet()->setCellValue('ED'.$i, $profil->detail["buah"]["sarana"]["gudang"]);

						if($profil->detail["peternakan"]["sarana"]["pertemuan"] == "saung") $profil->detail["peternakan"]["sarana"]["pertemuan"] = "Saung kelompok";
						elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "balai") $profil->detail["peternakan"]["sarana"]["pertemuan"] = "Balai kampung/desa";
						elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "rumah_pengurus") $profil->detail["peternakan"]["sarana"]["pertemuan"] = "Rumah pengurus";
						elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "rumah_anggota") $profil->detail["peternakan"]["sarana"]["pertemuan"] = "Rumah anggota";
						elseif($profil->detail["peternakan"]["sarana"]["pertemuan"] == "lainnya") $profil->detail["peternakan"]["sarana"]["pertemuan"] = $profil->detail["peternakan"]["sarana"]["pertemuan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('EE'.$i, $profil->detail["peternakan"]["sarana"]["pertemuan"]);

						if(!isset($profil->detail['peternakan']['sarana']['peralatan']) || !is_array($profil->detail['peternakan']['sarana']['peralatan'])) $profil->detail['peternakan']['sarana']['peralatan'] = array();
						$objTpl->getActiveSheet()->setCellValue('EF'.$i, in_array("Kandang ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EG'.$i, in_array("Peralatan masak makanan ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EH'.$i, in_array("Peralatan tempat bertelur ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EI'.$i, in_array("Cangkul", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EJ'.$i, in_array("Garpu", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EK'.$i, in_array("Sekop", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EL'.$i, in_array("Peralatan tukang", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EM'.$i, in_array("Sepatu boat, selang, dll", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EN'.$i, in_array("Perlengkapan membuat kandang", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EO'.$i, in_array("Gerobak untuk angkut makanan ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EP'.$i, in_array("Lainnya", $profil->detail['peternakan']['sarana']['peralatan']) ? $profil->detail['peternakan']['sarana']['peralatan_lain'] : "");

						if($profil->detail["peternakan"]["sarana"]["kondisi"] == "permanen") $profil->detail["peternakan"]["sarana"]["kondisi"] = "Tembok (permanen)";
						elseif($profil->detail["peternakan"]["sarana"]["kondisi"] == "semi_permanen") $profil->detail["peternakan"]["sarana"]["kondisi"] = "Setengah tembok dan papan (semi permanen)";
						elseif($profil->detail["peternakan"]["sarana"]["kondisi"] == "non_permanen") $profil->detail["peternakan"]["sarana"]["kondisi"] = "Papan (non permanen)";
						$objTpl->getActiveSheet()->setCellValue('EQ'.$i, $profil->detail["peternakan"]["sarana"]["kondisi"]);

						if($profil->detail["peternakan"]["sarana"]["perbaikan"] == "blm") $profil->detail["peternakan"]["sarana"]["perbaikan"] = "Diperbaiki dengan dana BLM";
						elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "pemerintah") $profil->detail["peternakan"]["sarana"]["perbaikan"] = "Diperbaiki dari dana pemerintah / dinas terkait";
						elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "pihak_lain") $profil->detail["peternakan"]["sarana"]["perbaikan"] = "Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya";
						elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "swadaya") $profil->detail["peternakan"]["sarana"]["perbaikan"] = "Diperbaiki secara swadaya";
						elseif($profil->detail["peternakan"]["sarana"]["perbaikan"] == "lainnya") $profil->detail["peternakan"]["sarana"]["perbaikan"] = $profil->detail["peternakan"]["sarana"]["perbaikan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('ER'.$i, $profil->detail["peternakan"]["sarana"]["perbaikan"]);

						$objTpl->getActiveSheet()->setCellValue('ES'.$i, $profil->detail["peternakan"]["sarana"]["transportasi_makanan"]);
						$objTpl->getActiveSheet()->setCellValue('ET'.$i, $profil->detail["peternakan"]["sarana"]["transportasi_kampung"]);
						$objTpl->getActiveSheet()->setCellValue('EU'.$i, $profil->detail["peternakan"]["sarana"]["transportasi_pasar"]);

						if($profil->detail["perikanan"]["sarana"]["pertemuan"] == "saung") $profil->detail["perikanan"]["sarana"]["pertemuan"] = "Saung kelompok";
						elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "balai") $profil->detail["perikanan"]["sarana"]["pertemuan"] = "Balai kampung/desa";
						elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "rumah_pengurus") $profil->detail["perikanan"]["sarana"]["pertemuan"] = "Rumah pengurus";
						elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "rumah_anggota") $profil->detail["perikanan"]["sarana"]["pertemuan"] = "Rumah anggota";
						elseif($profil->detail["perikanan"]["sarana"]["pertemuan"] == "lainnya") $profil->detail["perikanan"]["sarana"]["pertemuan"] = $profil->detail["perikanan"]["sarana"]["pertemuan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('EV'.$i, $profil->detail["perikanan"]["sarana"]["pertemuan"]);

						if(!isset($profil->detail['perikanan']['sarana']['peralatan']) || !is_array($profil->detail['perikanan']['sarana']['peralatan'])) $profil->detail['perikanan']['sarana']['peralatan'] = array();
						$objTpl->getActiveSheet()->setCellValue('EW'.$i, in_array("Perahu", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EX'.$i, in_array("Jaring", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EY'.$i, in_array("Alat memancing", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('EZ'.$i, in_array("Mesin perahu", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FA'.$i, in_array("Cool box", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FB'.$i, in_array("Petromax, sepatu Boat", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FC'.$i, in_array("Perlengkapan mancing", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FD'.$i, in_array("Cangkul", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FE'.$i, in_array("Sekop", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FF'.$i, in_array("Parang", $profil->detail['perikanan']['sarana']['peralatan']) ? "Ya" : "");
						
						$objTpl->getActiveSheet()->setCellValue('FG'.$i, $profil->detail["perikanan"]["sarana"]["kondisi_perahu"] == "baik" ? "Baik" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('FH'.$i, $profil->detail["perikanan"]["sarana"]["kondisi_mesin"] == "baik" ? "Baik" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('FI'.$i, $profil->detail["perikanan"]["sarana"]["kondisi_menangkap"] == "baik" ? "Baik" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('FJ'.$i, $profil->detail["perikanan"]["sarana"]["kondisi_memancing"] == "baik" ? "Baik" : "Tidak");

						if($profil->detail["perikanan"]["sarana"]["perbaikan"] == "blm") $profil->detail["perikanan"]["sarana"]["perbaikan"] = "Diperbaiki dengan dana BLM";
						elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "pemerintah") $profil->detail["perikanan"]["sarana"]["perbaikan"] = "Diperbaiki dari dana pemerintah / dinas terkait";
						elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "pihak_lain") $profil->detail["perikanan"]["sarana"]["perbaikan"] = "Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya";
						elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "swadaya") $profil->detail["perikanan"]["sarana"]["perbaikan"] = "Diperbaiki secara swadaya";
						elseif($profil->detail["perikanan"]["sarana"]["perbaikan"] == "lainnya") $profil->detail["perikanan"]["sarana"]["perbaikan"] = $profil->detail["perikanan"]["sarana"]["perbaikan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('FK'.$i, $profil->detail["perikanan"]["sarana"]["perbaikan"]);

						if($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_kelompok") $profil->detail["perikanan"]["sarana"]["gudang"] = "Gudang kelompok";
						elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_pengurus") $profil->detail["perikanan"]["sarana"]["gudang"] = "Gudang pribadi pengurus kelompok";
						elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_anggota") $profil->detail["perikanan"]["sarana"]["gudang"] = "Gudang pribadi salah satu anggota";
						elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_desa") $profil->detail["perikanan"]["sarana"]["gudang"] = "Gudang kampung/desa";
						elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_mitra") $profil->detail["perikanan"]["sarana"]["gudang"] = "Gudang mitra kerja";
						elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "langsung_jual") $profil->detail["perikanan"]["sarana"]["gudang"] = "Tidak disimpan/ langsung jual";
						elseif($profil->detail["perikanan"]["sarana"]["gudang"] == "lainnya") $profil->detail["perikanan"]["sarana"]["gudang"] = $profil->detail["perikanan"]["sarana"]["gudang_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('FL'.$i, $profil->detail["perikanan"]["sarana"]["gudang"]);

						if($profil->detail["hasil"]["sarana"]["pertemuan"] == "saung") $profil->detail["hasil"]["sarana"]["pertemuan"] = "Saung kelompok";
						elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "balai") $profil->detail["hasil"]["sarana"]["pertemuan"] = "Balai kampung/desa";
						elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "rumah_pengurus") $profil->detail["hasil"]["sarana"]["pertemuan"] = "Rumah pengurus";
						elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "rumah_anggota") $profil->detail["hasil"]["sarana"]["pertemuan"] = "Rumah anggota";
						elseif($profil->detail["hasil"]["sarana"]["pertemuan"] == "lainnya") $profil->detail["hasil"]["sarana"]["pertemuan"] = $profil->detail["hasil"]["sarana"]["pertemuan_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('FM'.$i, $profil->detail["hasil"]["sarana"]["pertemuan"]);
						
						if(!isset($profil->detail['hasil']['sarana']['peralatan']) || !is_array($profil->detail['hasil']['sarana']['peralatan'])) $profil->detail['hasil']['sarana']['peralatan'] = array();
						$objTpl->getActiveSheet()->setCellValue('FN'.$i, in_array("Alat mengiris", $profil->detail['hasil']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FO'.$i, in_array("Alat masak", $profil->detail['hasil']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FP'.$i, in_array("Kompor masak", $profil->detail['hasil']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FQ'.$i, in_array("Tempat menjemur", $profil->detail['hasil']['sarana']['peralatan']) ? "Ya" : "");
						$objTpl->getActiveSheet()->setCellValue('FR'.$i, in_array("Lainnya", $profil->detail['hasil']['sarana']['peralatan']) ? $profil->detail['hasil']['sarana']['peralatan_lain'] : "");

						if($profil->detail["hasil"]["sarana"]["penjualan"] == "kios") $profil->detail["hasil"]["sarana"]["penjualan"] = "Kios depan rumah";
						elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "meja") $profil->detail["hasil"]["sarana"]["penjualan"] = "Para-para / meja di depan rumah";
						elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "konsinyasi") $profil->detail["hasil"]["sarana"]["penjualan"] = "Konsinyasi di pedagang lain";
						elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "pasar") $profil->detail["hasil"]["sarana"]["penjualan"] = "Jual langsung di pasar";
						elseif($profil->detail["hasil"]["sarana"]["penjualan"] == "pengumpul") $profil->detail["hasil"]["sarana"]["penjualan"] = "Jual di pedagang pengumpul";
						$objTpl->getActiveSheet()->setCellValue('FS'.$i, $profil->detail["hasil"]["sarana"]["penjualan"]);

						if($profil->detail["hasil"]["sarana"]["transportasi"] == "gerobak_kelompok") $profil->detail["hasil"]["sarana"]["transportasi"] = "Gerobak kelompok";
						elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "gerobak_pribadi") $profil->detail["hasil"]["sarana"]["transportasi"] = "Gerobak pribadi ";
						elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "beko_kelompok") $profil->detail["hasil"]["sarana"]["transportasi"] = "Beko (roda tiga) kelompok";
						elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "beko_pribadi") $profil->detail["hasil"]["sarana"]["transportasi"] = "Beko pribadi";
						elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "motor_kelompok") $profil->detail["hasil"]["sarana"]["transportasi"] = "Motor kelompok";
						elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "motor_pribadi") $profil->detail["hasil"]["sarana"]["transportasi"] = "Motor pribadi ";
						elseif($profil->detail["hasil"]["sarana"]["transportasi"] == "lainnya") $profil->detail["hasil"]["sarana"]["transportasi"] = $profil->detail["hasil"]["sarana"]["transportasi_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('FT'.$i, $profil->detail["hasil"]["sarana"]["transportasi"]);

						if($profil->detail["hasil"]["sarana"]["gudang"] == "sekretariat_kelompok") $profil->detail["hasil"]["sarana"]["gudang"] = "Sekretariat kelompok";
						elseif($profil->detail["hasil"]["sarana"]["gudang"] == "rumah_pengurus") $profil->detail["hasil"]["sarana"]["gudang"] = "Rumah pribadi pengurus kelompok";
						elseif($profil->detail["hasil"]["sarana"]["gudang"] == "rumah_anggota") $profil->detail["hasil"]["sarana"]["gudang"] = "Rumah pribadi salah satu anggota";
						elseif($profil->detail["hasil"]["sarana"]["gudang"] == "langsung_jual") $profil->detail["hasil"]["sarana"]["gudang"] = "Tidak disimpan/ langsung jual";
						elseif($profil->detail["hasil"]["sarana"]["gudang"] == "lainnya") $profil->detail["hasil"]["sarana"]["gudang"] = $profil->detail["hasil"]["sarana"]["gudang_lainnya"];
						$objTpl->getActiveSheet()->setCellValue('FU'.$i, $profil->detail["hasil"]["sarana"]["gudang"]);

						if(!isset($profil->detail['pembinaan']['bpmd_kabupaten']) || !is_array($profil->detail['pembinaan']['bpmd_kabupaten'])) $profil->detail['pembinaan']['bpmd_kabupaten'] = "";
						elseif($profil->detail["pembinaan"]["bpmd_kabupaten"] == "rutin") $profil->detail['pembinaan']['bpmd_kabupaten'] = "Rutin";
						else $profil->detail['pembinaan']['bpmd_kabupaten'] = "Tidak Rutin";
						$objTpl->getActiveSheet()->setCellValue('FV'.$i, $profil->detail['pembinaan']['bpmd_kabupaten']);

						if(!isset($profil->detail['pembinaan']['penyuluh']) || !is_array($profil->detail['pembinaan']['penyuluh'])) $profil->detail['pembinaan']['penyuluh'] = "";
						elseif($profil->detail["pembinaan"]["penyuluh"] == "rutin") $profil->detail['pembinaan']['penyuluh'] = "Rutin";
						else $profil->detail['pembinaan']['penyuluh'] = "Tidak Rutin";
						$objTpl->getActiveSheet()->setCellValue('FW'.$i, $profil->detail['pembinaan']['penyuluh']);

						if(!isset($profil->detail['pembinaan']['bpmd_provinsi']) || !is_array($profil->detail['pembinaan']['bpmd_provinsi'])) $profil->detail['pembinaan']['bpmd_provinsi'] = "";
						elseif($profil->detail["pembinaan"]["bpmd_provinsi"] == "rutin") $profil->detail['pembinaan']['bpmd_provinsi'] = "Rutin";
						else $profil->detail['pembinaan']['bpmd_provinsi'] = "Tidak Rutin";
						$objTpl->getActiveSheet()->setCellValue('FX'.$i, $profil->detail['pembinaan']['bpmd_provinsi']);

						if(!isset($profil->detail['pembinaan']['dinas_lain']['status']) || !is_array($profil->detail['pembinaan']['dinas_lain']['status'])) $profil->detail['pembinaan']['dinas_lain']['status'] = "";
						elseif(!empty($profil->detail['pembinaan']['dinas_lain']['status']) && $profil->detail["pembinaan"]["dinas_lain"]['status'] == "rutin") $profil->detail["pembinaan"]["dinas_lain"]['status'] = "Rutin";
						else $profil->detail["pembinaan"]["dinas_lain"]['status'] = "Tidak Rutin";
						$objTpl->getActiveSheet()->setCellValue('FY'.$i, $profil->detail["pembinaan"]["dinas_lain"]["nama"]);
						$objTpl->getActiveSheet()->setCellValue('FZ'.$i, $profil->detail["pembinaan"]["dinas_lain"]['status']);

						if($profil->detail["pembinaan"]["pertemuan_poktan"] == "belum") $profil->detail["pembinaan"]["pertemuan_poktan"] = "Belum pernah";
						if($profil->detail["pembinaan"]["pertemuan_poktan"] == "1 minggu") $profil->detail["pembinaan"]["pertemuan_poktan"] = "1 minggu sekali";
						if($profil->detail["pembinaan"]["pertemuan_poktan"] == "2 minggu") $profil->detail["pembinaan"]["pertemuan_poktan"] = "2 minggu sekali";
						if($profil->detail["pembinaan"]["pertemuan_poktan"] == "1 bulan") $profil->detail["pembinaan"]["pertemuan_poktan"] = "1 bulan sekali";
						if($profil->detail["pembinaan"]["pertemuan_poktan"] == "lainnya") $profil->detail["pembinaan"]["pertemuan_poktan"] = $profil->detail["pembinaan"]["pertemuan_poktan_lainnya"];

						$objTpl->getActiveSheet()->setCellValue('GA'.$i, $profil->detail["pembinaan"]["pertemuan_poktan"]);
						$objTpl->getActiveSheet()->setCellValue('GB'.$i, $profil->detail["pembinaan"]["kursus"] == "belum" ? "Belum pernah" : $profil->detail["pembinaan"]["kursus_lainnya"]);
						$objTpl->getActiveSheet()->setCellValue('GC'.$i, $profil->detail["pembinaan"]["demplot"] == "ada" ? "Ada" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GD'.$i, $profil->detail["pembinaan"]["kepala_kampung"]);
						$objTpl->getActiveSheet()->setCellValue('GE'.$i, $profil->detail["pembinaan"]["ketua"]);
						$objTpl->getActiveSheet()->setCellValue('GF'.$i, $profil->detail["pembinaan"]["pendamping"]);

						$i++;
					}

					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="List Profil Kelompok '. $this->input->post('dari') .' - '. $this->input->post('sampai') .'.xls"');
					header('Cache-Control: max-age=0');

					$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');
					$objWriter->save('php://output');

					exit;
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Gagal Ekspor Profil Kelompok!</strong> Tidak ada profil kelompok dalam kurun waktu yang ditentukan.');
					redirect('profil_kelompok');
				}
			}
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

			$data['list_profil_kelompok'] = $this->profil_kelompok_model->get_by_criteria()
				->select('*')
				->join('provinsi', 'provinsi.provinsi_code = profil_kelompok.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = profil_kelompok.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = profil_kelompok.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = profil_kelompok.desa_id', 'left')
				->order_by('id DESC')
				->where($searchQuery)
				->get()
				->result();
		}
		else{
			$data['list_profil_kelompok'] = $this->profil_kelompok_model->get_by_criteria()
				->select('*')
				->order_by('id DESC')
				->get()
				->result();
		}

		$this->template
			->set_layout('page')
			->title('Daftar Profil Kelompok Tani')
			->build('profil_kelompok/index', $data);
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

		$data['profil'] = $this->profil_kelompok_model->get_by_criteria()
			->select('*')
			->join('provinsi', 'provinsi.provinsi_code = profil_kelompok.provinsi_id', 'left')
			->join('kabupaten', 'kabupaten.kabupaten_code = profil_kelompok.kabupaten_id', 'left')
			->join('kecamatan', 'kecamatan.kecamatan_code = profil_kelompok.kecamatan_id', 'left')
			->join('desa', 'desa.desa_code = profil_kelompok.desa_id', 'left')
			->where('profil_kelompok.id = ' . $id . $searchQuery)
			->get()
			->row();

		if(empty($data['profil']) || (!$this->permission->check_permission($this->modules, 'all') && ($data['profil']->id_operator != $this->session->userdata('user_id') && $this->session->userdata('edit_saran') == 0))){
			redirect('profil_kelompok');
		}

		$data['profil']->detail = unserialize($data['profil']->detail);

		$this->template
			->set_layout('page')
			->title('Detail Profil Kelompok')
			->build('profil_kelompok/detail', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$profil_kelompok = $this->input->post('data');
			$profil_kelompok['id_operator'] = $this->session->userdata('user_id');
			$profil_kelompok['tanggal'] = date_reverse($profil_kelompok['tanggal']);
			$profil_kelompok['tgl_berdiri'] = date_reverse($profil_kelompok['tgl_berdiri']);
			$profil_kelompok['tgl_operasional'] = date_reverse($profil_kelompok['tgl_operasional']);
			$profil_kelompok['detail'] = serialize($profil_kelompok['detail']);

			$this->profil_kelompok_model->save($profil_kelompok);

			$this->session->set_flashdata('success_message', 'Profil kelompok tani berhasil ditambahkan.');
			redirect('profil_kelompok');
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
			->title('Tambah Profil Kelompok')
			->build('profil_kelompok/tambah', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit') || empty($id)){
			show_404();
		}

		if($this->input->post()){
			$profil_kelompok = $this->input->post('data');
			$profil_kelompok['tanggal'] = date_reverse($profil_kelompok['tanggal']);
			$profil_kelompok['tgl_berdiri'] = date_reverse($profil_kelompok['tgl_berdiri']);
			$profil_kelompok['tgl_operasional'] = date_reverse($profil_kelompok['tgl_operasional']);
			$profil_kelompok['detail'] = serialize($profil_kelompok['detail']);

			$this->profil_kelompok_model->save($profil_kelompok, $id);

			$this->session->set_flashdata('success_message', 'Profil kelompok tani berhasil diubah.');
			redirect('profil_kelompok');
		}

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['profil'] = $this->profil_kelompok_model->get($id);

		if((!$this->permission->check_permission($this->modules, 'all') && $data['profil']->id_operator != $this->session->userdata('user_id'))){
			redirect('profil_kelompok');
		}
		$data['profil']->detail = unserialize($data['profil']->detail);

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$data['profil']->kabupaten = (array) $this->kabupaten_model->get_by_criteria()
			->select('kabupaten_code AS id, kabupaten_name as text')
			->where('kabupaten_code', $data['profil']->kabupaten_id)
			->get()
			->row();

		$data['profil']->kecamatan = (array) $this->kecamatan_model->get_by_criteria()
			->select('kecamatan_code AS id, kecamatan_name as text')
			->where('kecamatan_code', $data['profil']->kecamatan_id)
			->get()
			->row();

		$data['profil']->desa = (array) $this->desa_model->get_by_criteria()
			->select('desa_code AS id, desa_name as text')
			->where('desa_code', $data['profil']->desa_id)
			->get()
			->row();

		if(!empty($data['profil']->kabupaten)){
			$data['profil']->kabupaten['text'] = $data['profil']->kabupaten['id'] ." - ". $data['profil']->kabupaten['text'];
		}
		if(!empty($data['profil']->kecamatan)){
			$data['profil']->kecamatan['text'] = $data['profil']->kecamatan['id'] ." - ". $data['profil']->kecamatan['text'];
		}
		if(!empty($data['profil']->desa)){
			$data['profil']->desa['text'] = $data['profil']->desa['id'] ." - ". $data['profil']->desa['text'];
		}

		$this->template
			->set_layout('page')
			->title('Edit Profil Kelompok')
			->build('profil_kelompok/edit', $data);
	}

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$profil_kelompok = $this->profil_kelompok_model->get($id);


		if((!$this->permission->check_permission($this->modules, 'all') && $profil_kelompok->id_operator != $this->session->userdata('user_id'))){
			redirect('profil_kelompok');
		}

		$this->profil_kelompok_model->delete($profil_kelompok->id);

		$this->session->set_flashdata('success_message', 'Profil kelompok berhasil dihapus.');
		redirect("profil_kelompok");
	}
}
