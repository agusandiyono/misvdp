<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends MY_Controller {
	private $modules = array('kegiatan');

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('kegiatan_model','kembang_model'));
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

		if($this->input->post()){
			if($this->input->post('where') == "impor"){
				if(!empty($this->input->post('provinsi'))){
					$file = $_FILES['file']['tmp_name'];
					$ekstension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

					if(!in_array($ekstension, array('xls', 'xlsx')) ) {
						$this->session->set_flashdata('error_message', 'File impor kegiatan tidak diperbolehkan selain dari xls dan xlsx.');
						redirect('kegiatan');
					}

					$this->load->library('excel');

					$objPHPExcel = PHPExcel_IOFactory::load($file);

					$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

					$all_row_data = array();
					foreach ($cell_collection as $cell) {
						$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
						$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
						$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
						if ($row > 1) {
							$all_row_data[$row][$column] = $data_value;
						}
					}

					if(!empty($all_row_data)){
						foreach($all_row_data as $row_data) {
							$kegiatan = array();
							$kegiatan['id_operator'] = $this->session->userdata('user_id');
							$kegiatan['nama'] = $row_data['A'];
							$kegiatan['provinsi_id'] = $this->input->post('provinsi');
							$kegiatan['kabupaten_id'] = $this->input->post('kabupaten');
							$kegiatan['kecamatan_id'] = $this->input->post('kecamatan');
							$kegiatan['desa_id'] = $this->input->post('desa');
							$kegiatan['tanggal'] = \PHPExcel_Style_NumberFormat::toFormattedString($row_data['F'], 'YYYY-MM-DD');
							$kegiatan['masalah'] = $row_data['B'];
							$kegiatan['sasaran'] = $row_data['C'];
							$kegiatan['deskripsi'] = $row_data['D'];
							$kegiatan['jumlah_p'] = $row_data['E'];
							$kegiatan['aktivitas_posyandu'] = $row_data['H'];
							$kegiatan['kepesertaan_bpjs'] = $row_data['I'];
							$kegiatan['pendidikan_dasar'] = $row_data['J'];
							$kegiatan['smp_mts'] = $row_data['K'];
							$kegiatan['smu_smk'] = $row_data['L'];
							$kegiatan['buta_aksara'] = $row_data['M'];
							$kegiatan['kegiatan_paud'] = $row_data['N'];
							$kegiatan['kegiatan_pkbm'] = $row_data['O'];
							$kegiatan['pusat_kursus'] = $row_data['P'];
							$kegiatan['perpus_desa'] = $row_data['Q'];
							$kegiatan['gotong_royong'] = $row_data['R'];
							$kegiatan['ruang_publik'] = $row_data['S'];
							$kegiatan['lapangan_olahraga'] = $row_data['T'];
							$kegiatan['kegiatan_olahraga'] = $row_data['U'];
							$kegiatan['suku_etnis'] = $row_data['V'];
							$kegiatan['bahasa'] = $row_data['W'];
							$kegiatan['keragaman_agama'] = $row_data['X'];
							$kegiatan['poskamling'] = $row_data['Y'];
							$kegiatan['siskamling'] = $row_data['Z'];
							$kegiatan['kriminalitas'] = $row_data['AA'];
							$kegiatan['konflik'] = $row_data['AB'];
							$kegiatan['penyelesaian_konflik'] = $row_data['AC'];
							$kegiatan['sekolah_lb'] = $row_data['AD'];
							$kegiatan['kesejahteraan_sosial'] = $row_data['AE'];
							$kegiatan['bunuh_diri'] = $row_data['AF'];
							$kegiatan['sumber_air'] = $row_data['AG'];
							$kegiatan['air_mandi'] = $row_data['AH'];
							$kegiatan['memiliki_jamban'] = $row_data['AI'];
							$kegiatan['tempat_sampah'] = $row_data['AJ'];
							$kegiatan['aliran_listrik'] = $row_data['AK'];
							$kegiatan['sinyal_kuat'] = $row_data['AL'];
							$kegiatan['televisi'] = $row_data['AM'];
							$kegiatan['internet'] = $row_data['AN'];
							//$kegiatan['iks'] = $row_data ['BE'];
							$kegiatan['ekonomi_penduduk'] = $row_data['AO'];
							$kegiatan['pusat_perdagangan'] = $row_data['AP'];
							$kegiatan['minimarket'] = $row_data['AQ'];
							$kegiatan['penginapan'] = $row_data['AR'];
							$kegiatan['logistik'] = $row_data['AS'];
							$kegiatan['bank'] = $row_data['AT'];
							$kegiatan['bpr'] = $row_data['AU'];
							$kegiatan['kredit'] = $row_data['AV'];
							$kegiatan['koperasi'] = $row_data['AW'];
							$kegiatan['transportasi'] = $row_data['AX'];
							$kegiatan['jalan_umum'] = $row_data['AY'];
							$kegiatan['jalan_desa'] = $row_data['AZ'];
							//$kegiatan['ike'] = $row_data ['BF'];
							//$kegiatan['pencemaran'] = $row_data['BA']; rasio cemar
							$kegiatan['air'] = $row_data ['BH'];
							$kegiatan['tanah'] = $row_data ['BI'];
							$kegiatan['udara'] = $row_data ['BJ'];
							$kegiatan['limbah'] = $row_data['BB'];
							//$kegiatan['skor_cemar'] = $row_data ['BK'];
							$kegiatan['longsor'] = $row_data ['BL'];
							$kegiatan['banjir'] = $row_data ['BM'];
							$kegiatan['kebakaran_hutan'] = $row_data['BN'];
							//$kegiatan['rasio_bencana'] = $row_data['BO'];
							//$kegiatan['skor_bencana'] = $row_data['BP'];
							$kegiatan['peringatan_dini'] = $row_data['BC'];
							$kegiatan['dini_tsunami'] = $row_data['BQ'];
							$kegiatan['per_keselamatan'] = $row_data['BR'];
							$kegiatan['jalur_evakuasi'] = $row_data['BS'];
							//$kegiatan['rasio_tanggap'] = $row_data['BD'];
							//$kegiatan['skor_tanggap'] = $row_data['BT'];
							//$kegiatan['ikl'] = $row_data['BU'];
							$kegiatan['jenis_aturan'] = $row_data['BV'];
							$kegiatan['jumlah_aturan'] = $row_data['BW'];
							$kegiatan['musda'] = $row_data['BX'];
							$kegiatan['efek_musda'] = $row_data['BY'];
							$kegiatan['keputusan_kades'] = $row_data['BZ'];
							$kegiatan['bidang_kerjasama'] = $row_data['CA'];
							$kegiatan['jumlah_kerjasama'] = $row_data['CB'];
							$kegiatan['kkbatas_hutan'] = $row_data['CD'];
							$kegiatan['kk_negaralain'] = $row_data['CE'];
							$kegiatan['putus_sekolah'] = $row_data['CF'];
							$kegiatan['buta_aksara'] = $row_data['CG'];
							$kegiatan['keluhan_kesehatan'] = $row_data['CH'];
							$kegiatan['kematian_ibuanak'] = $row_data['CI'];
							$kegiatan['kdrt'] = $row_data['CJ'];
							$kegiatan['usaha_bumdes'] = $row_data['CK'];
							$kegiatan['jumlah_bumdes'] = $row_data['CL'];
							$kegiatan['dana_bumdes'] = $row_data['CM'];
							$kegiatan['komoditas_unggulan'] = $row_data['CN'];
							$kegiatan['kemiskinan'] = $row_data['CO'];
							$kegiatan['gini_rasio'] = $row_data['CP'];
							$kegiatan['pendapatan'] = $row_data['CQ'];
							$kegiatan['tumbuh_ekonomi'] = $row_data['CR'];
							$kegiatan['angkatan_kerja'] = $row_data['CS'];
							$kegiatan['pengangguran'] = $row_data['CT'];
							$kegiatan['sdmalam_desa'] = $row_data['CU'];
							$kegiatan['jumlah_keyakinan'] = $row_data['CV'];
							$kegiatan['tempat_ibadah'] = $row_data['CW'];
							$kegiatan['seremonial'] = $row_data['CX'];
							$kegiatan['musyawarah'] = $row_data['CY'];
							$kegiatan['lembaga_adat'] = $row_data['CZ'];
							$kegiatan['hukum_adat'] = $row_data['DA'];
							$kegiatan['forum_musyawarah'] = $row_data['DB'];
							$kegiatan['posyantek'] = $row_data['DC'];
							$kegiatan['seni_budaya'] = $row_data['DD'];
							$kegiatan['haki'] = $row_data['DE'];



							$this->kegiatan_model->save($kegiatan);
						}

						$this->session->set_flashdata('success_message', 'Kegiatan berhasil diimport.');
						redirect('kegiatan');
					}
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Provinsi</strong> tidak boleh kosong.');
					redirect('kegiatan');
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
					$list_kegiatan = $this->kegiatan_model->get_by_criteria()
						->select('nama,tanggal,provinsi_name AS provinsi,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa,deskripsi,sasaran,jumlah_p, masalah, aktivitas_posyandu,kepesertaan_bpjs,pendidikan_dasar,smp_mts,smu_smk,buta_aksara,kegiatan_paud,kegiatan_pkbm,pusat_kursus,perpus_desa,gotong_royong,ruang_publik,lapangan_olahraga,kegiatan_olahraga,suku_etnis,bahasa,keragaman_agama,poskamling,siskamling,kriminalitas,konflik,penyelesaian_konflik,sekolah_lb,kesejahteraan_sosial,bunuh_diri,sumber_air,air_mandi,memiliki_jamban,tempat_sampah,aliran_listrik,sinyal_kuat,televisi,internet,ekonomi_penduduk,pusat_perdagangan,minimarket,penginapan,logistik,bank,bpr,kredit,koperasi,transportasi,jalan_umum,jalan_desa,air,tanah,udara,limbah,longsor,banjir,kebakaran_hutan,peringatan_dini,dini_tsunami,per_keselamatan,jalur_evakuasi,jenis_aturan,jumlah_aturan,musda,efek_musda,keputusan_kades,bidang_kerjasama,jumlah_kerjasama,kkbatas_hutan,kk_negaralain,putus_sekolah,buta_aksara,keluhan_kesehatan,kematian_ibuanak,kdrt,usaha_bumdes,jumlah_bumdes,dana_bumdes,komoditas_unggulan,kemiskinan,gini_rasio,pendapatan,tumbuh_ekonomi,angkatan_kerja,pengangguran,sdmalam_desa,jumlah_keyakinan,tempat_ibadah,seremonial,musyawarah,lembaga_adat,hukum_adat,forum_musyawarah,posyantek,seni_budaya,haki')
						->join('provinsi', 'provinsi.provinsi_code = kegiatan.provinsi_id', 'left')
						->join('kabupaten', 'kabupaten.kabupaten_code = kegiatan.kabupaten_id', 'left')
						->join('kecamatan', 'kecamatan.kecamatan_code = kegiatan.kecamatan_id', 'left')
						->join('desa', 'desa.desa_code = kegiatan.desa_id', 'left')
						->where('id_operator = ' . $this->session->userdata('user_id') .' AND tanggal BETWEEN "'.date_reverse($this->input->post('dari')).'" AND "'.date_reverse($this->input->post('sampai')).'"'.$lokasi)
						->order_by('id DESC, tanggal DESC, provinsi ASC, kabupaten ASC, kecamatan ASC, desa ASC')
						->get()
						->result();
				}
				else{
					$list_kegiatan = $this->kegiatan_model->get_by_criteria()
						->select('nama,tanggal,provinsi_name AS provinsi,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa,deskripsi,sasaran,jumlah_p, masalah, aktivitas_posyandu,kepesertaan_bpjs,pendidikan_dasar,smp_mts,smu_smk,buta_aksara,kegiatan_paud,kegiatan_pkbm,pusat_kursus,perpus_desa,gotong_royong,ruang_publik,lapangan_olahraga,kegiatan_olahraga,suku_etnis,bahasa,keragaman_agama,poskamling,siskamling,kriminalitas,konflik,penyelesaian_konflik,sekolah_lb,kesejahteraan_sosial,bunuh_diri,sumber_air,air_mandi,memiliki_jamban,tempat_sampah,aliran_listrik,sinyal_kuat,televisi,internet,ekonomi_penduduk,pusat_perdagangan,minimarket,penginapan,logistik,bank,bpr,kredit,koperasi,transportasi,jalan_umum,jalan_desa,air,tanah,udara,limbah,longsor,banjir,kebakaran_hutan,peringatan_dini,dini_tsunami,per_keselamatan,jalur_evakuasi,jenis_aturan,jumlah_aturan,musda,efek_musda,keputusan_kades,bidang_kerjasama,jumlah_kerjasama,kkbatas_hutan,kk_negaralain,putus_sekolah,buta_aksara,keluhan_kesehatan,kematian_ibuanak,kdrt,usaha_bumdes,jumlah_bumdes,dana_bumdes,komoditas_unggulan,kemiskinan,gini_rasio,pendapatan,tumbuh_ekonomi,angkatan_kerja,pengangguran,sdmalam_desa,jumlah_keyakinan,tempat_ibadah,seremonial,musyawarah,lembaga_adat,hukum_adat,forum_musyawarah,posyantek,seni_budaya,haki')
						->join('provinsi', 'provinsi.provinsi_code = kegiatan.provinsi_id', 'left')
						->join('kabupaten', 'kabupaten.kabupaten_code = kegiatan.kabupaten_id', 'left')
						->join('kecamatan', 'kecamatan.kecamatan_code = kegiatan.kecamatan_id', 'left')
						->join('desa', 'desa.desa_code = kegiatan.desa_id', 'left')
						->where('tanggal BETWEEN "'.date_reverse($this->input->post('dari')).'" AND "'.date_reverse($this->input->post('sampai')).'"'.$lokasi)
						->order_by('id DESC, tanggal DESC, provinsi ASC, kabupaten ASC, kecamatan ASC, desa ASC')
						->get()
						->result();
				}

				if(!empty($list_kegiatan)){
					$this->load->library('excel');

					$objTpl = PHPExcel_IOFactory::load("uploads/Format Ekspor.xlsx");
					$objTpl->setActiveSheetIndex(0);

					$i = 3;
					foreach ($list_kegiatan as $kegiatan) {
						$objTpl->getActiveSheet()->setCellValue('A'.$i, $kegiatan->provinsi.', '.$kegiatan->kabupaten.', '.$kegiatan->kecamatan.', '.$kegiatan->desa);
						$objTpl->getActiveSheet()->setCellValue('B'.$i, $kegiatan->nama);
						$objTpl->getActiveSheet()->setCellValue('C'.$i, $kegiatan->masalah);
						$objTpl->getActiveSheet()->setCellValue('D'.$i, $kegiatan->sasaran);
						$objTpl->getActiveSheet()->setCellValue('E'.$i, $kegiatan->deskripsi);
						$objTpl->getActiveSheet()->setCellValue('F'.$i, $kegiatan->jumlah_p);
						$objTpl->getActiveSheet()->setCellValue('G'.$i, $kegiatan->tanggal);
						$objTpl->getActiveSheet()->setCellValue('H'.$i, $kegiatan->aktivitas_posyandu);
						$objTpl->getActiveSheet()->setCellValue('I'.$i, $kegiatan->kepesertaan_bpjs);
						$objTpl->getActiveSheet()->setCellValue('J'.$i, $kegiatan->pendidikan_dasar);
						$objTpl->getActiveSheet()->setCellValue('K'.$i, $kegiatan->smp_mts);
						$objTpl->getActiveSheet()->setCellValue('L'.$i, $kegiatan->smu_smk);
						$objTpl->getActiveSheet()->setCellValue('M'.$i, $kegiatan->buta_aksara);
						$objTpl->getActiveSheet()->setCellValue('N'.$i, $kegiatan->kegiatan_paud);
						$objTpl->getActiveSheet()->setCellValue('O'.$i, $kegiatan->kegiatan_pkbm);
						$objTpl->getActiveSheet()->setCellValue('P'.$i, $kegiatan->pusat_kursus);
						$objTpl->getActiveSheet()->setCellValue('Q'.$i, $kegiatan->perpus_desa);
						$objTpl->getActiveSheet()->setCellValue('R'.$i, $kegiatan->gotong_royong);
						$objTpl->getActiveSheet()->setCellValue('S'.$i, $kegiatan->ruang_publik);
						$objTpl->getActiveSheet()->setCellValue('T'.$i, $kegiatan->lapangan_olahraga);
						$objTpl->getActiveSheet()->setCellValue('U'.$i, $kegiatan->kegiatan_olahraga);
						$objTpl->getActiveSheet()->setCellValue('V'.$i, $kegiatan->suku_etnis);
						$objTpl->getActiveSheet()->setCellValue('W'.$i, $kegiatan->bahasa);
						$objTpl->getActiveSheet()->setCellValue('X'.$i, $kegiatan->keragaman_agama);
						$objTpl->getActiveSheet()->setCellValue('Y'.$i, $kegiatan->poskamling);
						$objTpl->getActiveSheet()->setCellValue('Z'.$i, $kegiatan->siskamling);
						$objTpl->getActiveSheet()->setCellValue('AA'.$i, $kegiatan->kriminalitas);
						$objTpl->getActiveSheet()->setCellValue('AB'.$i, $kegiatan->konflik);
						$objTpl->getActiveSheet()->setCellValue('AC'.$i, $kegiatan->penyelesaian_konflik);
						$objTpl->getActiveSheet()->setCellValue('AD'.$i, $kegiatan->sekolah_lb);
						$objTpl->getActiveSheet()->setCellValue('AE'.$i, $kegiatan->kesejahteraan_sosial);
						$objTpl->getActiveSheet()->setCellValue('AF'.$i, $kegiatan->bunuh_diri);
						$objTpl->getActiveSheet()->setCellValue('AG'.$i, $kegiatan->sumber_air);
						$objTpl->getActiveSheet()->setCellValue('AH'.$i, $kegiatan->air_mandi);
						$objTpl->getActiveSheet()->setCellValue('AI'.$i, $kegiatan->memiliki_jamban);
						$objTpl->getActiveSheet()->setCellValue('AJ'.$i, $kegiatan->tempat_sampah);
						$objTpl->getActiveSheet()->setCellValue('AK'.$i, $kegiatan->aliran_listrik);
						$objTpl->getActiveSheet()->setCellValue('AL'.$i, $kegiatan->sinyal_kuat);
						$objTpl->getActiveSheet()->setCellValue('AM'.$i, $kegiatan->televisi);
						$objTpl->getActiveSheet()->setCellValue('AN'.$i, $kegiatan->internet);
						$objTpl->getActiveSheet()->setCellValue('AO'.$i, $kegiatan->ekonomi_penduduk);
						$objTpl->getActiveSheet()->setCellValue('AP'.$i, $kegiatan->pusat_perdagangan);
						$objTpl->getActiveSheet()->setCellValue('AQ'.$i, $kegiatan->minimarket);
						$objTpl->getActiveSheet()->setCellValue('AR'.$i, $kegiatan->penginapan);
						$objTpl->getActiveSheet()->setCellValue('AS'.$i, $kegiatan->logistik);
						$objTpl->getActiveSheet()->setCellValue('AT'.$i, $kegiatan->bank);
						$objTpl->getActiveSheet()->setCellValue('AU'.$i, $kegiatan->bpr);
						$objTpl->getActiveSheet()->setCellValue('AV'.$i, $kegiatan->kredit);
						$objTpl->getActiveSheet()->setCellValue('AW'.$i, $kegiatan->koperasi);
						$objTpl->getActiveSheet()->setCellValue('AX'.$i, $kegiatan->transportasi);
						$objTpl->getActiveSheet()->setCellValue('AY'.$i, $kegiatan->jalan_umum);
						$objTpl->getActiveSheet()->setCellValue('AZ'.$i, $kegiatan->jalan_desa);
						$objTpl->getActiveSheet()->setCellValue('BA'.$i, $kegiatan->pencemaran);
						$objTpl->getActiveSheet()->setCellValue('BB'.$i, $kegiatan->limbah);
						$objTpl->getActiveSheet()->setCellValue('BC'.$i, $kegiatan->bencana_alam);
						$objTpl->getActiveSheet()->setCellValue('BD'.$i, $kegiatan->potensi_bencana);


						$i++;
					}

					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="List Kegiatan '. $this->input->post('dari') .' - '. $this->input->post('sampai') .'.xls"');
					header('Cache-Control: max-age=0');

					$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');
					$objWriter->save('php://output');

					exit;
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Gagal Ekspor Kegiatan!</strong> Tidak ada kegiatan dalam kurun waktu yang ditentukan.');
					redirect('kegiatan');
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
			if(!$this->session->userdata('edit_saran')){
				if(!empty($searchQuery)) $searchQuery .= " AND ";
				$searchQuery .= " id_operator = " . $this->session->userdata('user_id');
			}

			$data['list_kegiatan'] = $data['list_kegiatan'] = $this->kegiatan_model->get_by_criteria()
				->select('id, id_operator, nama, tanggal,kabupaten_name AS kabupaten,kecamatan_name AS kecamatan,desa_name AS desa,masalah,sasaran,deskripsi,jumlah_p,tanggal')
				->join('provinsi', 'provinsi.provinsi_code = kegiatan.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = kegiatan.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = kegiatan.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = kegiatan.desa_id', 'left')
				->order_by('id DESC, tanggal DESC')
				->where($searchQuery)
				->get()
				->result();
		}
		else{
			$this->load->model('provinsi_model');
			// $data['list_provinsi'] = $this->kembang_model->get_by_criteria()
			// ->select('DISTINCT(provinsi)')
			// ->order_by('provinsi ASC')
			// ->get()
			// ->result();
			$data['list_provinsi'] = $this->kembang_model->get_by_criteria()
			->select('kodeprov, provinsi')
			->order_by('kodeprov ASC')
			->group_by('provinsi')
			->get()
			->result();
		}

		$data['list_status'] = $this->kembang_model->get_by_criteria()
		->select('DISTINCT(status)')
		->order_by('status ASC')
		->get()
		->result();


		$this->template
			->set_layout('page')
			->title('Daftar Perkembangan Desa')
			->build('desa/index', $data);
	}

	public function ambil_data(){
		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		if($modul=="kab"){
			echo $this->kembang_model->kabupaten($id);
		}else if($modul=="kec"){
			echo $this->kembang_model->kecamatan($id);
		}else if($modul=="des"){
			echo $this->kembang_model->desa($id);
		}
	}

  public function ajax_list()
    {
        $list = $this->kembang_model->get_datatables();
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
                $row[] = "<a href='desa/read/$r->id' class='btn btn-success' title='detail'><i class='fa fa-eye'></i></a>";
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->kembang_model->count_all() ,
                        "recordsFiltered" => $this->kembang_model->count_filtered(),
                        "data" => $data,

                        //"data" => $this->sisperdes_model->total_luas(),
                );
        //output to json format
        echo json_encode($output);
    }

    public function read($id)
      {
          $row = $this->kembang_model->get_by_id($id);
          if ($row) {
              $data = array(
		          'id' 					=> $row->id,
		          'desa'                => $row->desa,
		          'kecamatan'           => $row->kecamatan,
		          'kabupaten'           => $row->kabupaten,
				  'provinsi'            => $row->provinsi,
		          //'kodeprov'            => $row->kodeprov,
		          'iks2017'             => $row->iks2017,
		          'ike2017'             => $row->ike2017,
		          'ikl2017'             => $row->ikl2017,
		          'nilaiidm'             => $row->nilaiidm,
		          'status'               => $row->status,
		          
		          );
              //$this->load->view('indonesia/indonesia_read', $data);
              //$this->template->load('template','indonesia/indonesia_read', $data);
              $this->template
          			->set_layout('page')
          			->title('Detail Perkembangan Desa')
          			->build('desa/read', $data);
          } else {
              $this->session->set_flashdata('message', 'Record Not Found');
              redirect(site_url('indonesia'));
          }
      }

			public function gap_mandiri($id)
		    {
		        $row = $this->kembang_model->get_by_id($id);
		        if ($row) {
		            $data = array(
									'id' 									=> $row->id,
									'desa'                => $row->desa,
									'kecamatan'           => $row->kecamatan,
									'kabupaten'           => $row->kabupaten,
									'provinsi'            => $row->provinsi,
									'kodeprov'            => $row->kodeprov,
									'status'              => $row->status,

									'skor_dokter'         => $row->skor_dokter,
									'skor_bidan'          => $row->skor_bidan,
									'skor_nakes_lain'     => $row->skor_nakes_lain,
									'skor_waktu_tempuh'   => $row->skor_waktu_tempuh,
									'aktifitas_posyandu'   => $row->aktifitas_posyandu,
									'akses_poskesdes'     => $row->akses_poskesdes,
									'akses_posyandu'      => $row->akses_posyandu,
									'kepesertaan_bpjs'    => $row->kepesertaan_bpjs,
									'akses_sd'            => $row->akses_sd,
									'akses_smp'           => $row->akses_smp,
									'skor_sma_smk'        => $row->skor_sma_smk,
									'buta_aksara'         => $row->buta_aksara,
									'pkbm'                => $row->pkbm,
									'paud'                => $row->paud,
									'perpusy'             => $row->perpusy,
									'ketrampilan'         => $row->ketrampilan,
									'keragaman_etnis'     => $row->keragaman_etnis,
									'keragaman_komunikasi'=> $row->keragaman_komunikasi,
									'keragaman_agama'     => $row->keragaman_agama,
									'skor_goroyong'       => $row->skor_goroyong,
									'skor_ruangpub'       => $row->skor_ruangpub,
									'skor_fasor'          => $row->skor_fasor,
									'skor_keg_or'         => $row->skor_keg_or,
									'pmks'                => $row->pmks,
									'akses_slb'           => $row->akses_slb,
									'poskamling'          => $row->poskamling,
									'siskamling'          => $row->siskamling,
									'konflik'             => $row->konflik,
									'penyelesaian_konflik'=> $row->penyelesaian_konflik,
									'akses_minum'         => $row->akses_minum,
									'akses_jamban'        => $row->akses_jamban,
									'persampahan'         => $row->persampahan,
									'akses_mandi_cuci'    => $row->akses_mandi_cuci,
									'akses_listrik'       => $row->akses_listrik,
									'akses_tv'            => $row->akses_tv,
									'akses_sinyal_seluler'=> $row->akses_sinyal_seluler,
									'akses_internet'      => $row->akses_internet,
									'skor_keragaman'      => $row->skor_keragaman,
									'skor_lemb_ek'        => $row->skor_lemb_ek,
									'skor_minimar'        => $row->skor_minimar,
									'skor_resto_hotel'        => $row->skor_resto_hotel,
									'skor_jarak_ptkoan'   => $row->skor_jarak_ptkoan,
									'skor_akses_pasar_semi'=> $row->skor_akses_pasar_semi,
									'skor_jalan'          => $row->skor_jalan,
									'skor_keterbukaan_fisik'=> $row->skor_keterbukaan_fisik,
									'skor_angk_umum'      => $row->skor_angk_umum,
									'skor_logistik'       => $row->skor_logistik,
									'skor_kredit'         => $row->skor_kredit,
									'skor_bank'           => $row->skor_bank,
									'skor_kualitas_lingkungan'=> $row->skor_kualitas_lingkungan,
									'skor_bencana_alam'=> $row->skor_bencana_alam,
									'skor_tanggap_bencana'=> $row->skor_tanggap_bencana,
									'tahun'               => $row->tahun,

									'centroid_mandiri' => $this->kembang_model->get_centroid_mandiri($row->kodeprov)->result(),

		        );
						$this->template
							->set_layout('page')
							->title('GAP Mandiri Desa')
							->build('idm/gap_mandiri', $data);
						}
		    }

				public function gap_maju($id)
					{
							$row = $this->kembang_model->get_by_id($id);
							if ($row) {
									$data = array(
										'id' 									=> $row->id,
										'desa'                => $row->desa,
										'kecamatan'           => $row->kecamatan,
										'kabupaten'           => $row->kabupaten,
										'provinsi'            => $row->provinsi,
										'kodeprov'            => $row->kodeprov,
										'status'              => $row->status,

										'skor_dokter'         => $row->skor_dokter,
										'skor_bidan'          => $row->skor_bidan,
										'skor_nakes_lain'     => $row->skor_nakes_lain,
										'skor_waktu_tempuh'   => $row->skor_waktu_tempuh,
										'aktifitas_posyandu'   => $row->aktifitas_posyandu,
										'akses_poskesdes'     => $row->akses_poskesdes,
										'akses_posyandu'      => $row->akses_posyandu,
										'kepesertaan_bpjs'    => $row->kepesertaan_bpjs,
										'akses_sd'            => $row->akses_sd,
										'akses_smp'           => $row->akses_smp,
										'skor_sma_smk'        => $row->skor_sma_smk,
										'buta_aksara'         => $row->buta_aksara,
										'pkbm'                => $row->pkbm,
										'paud'                => $row->paud,
										'perpusy'             => $row->perpusy,
										'ketrampilan'         => $row->ketrampilan,
										'keragaman_etnis'     => $row->keragaman_etnis,
										'keragaman_komunikasi'=> $row->keragaman_komunikasi,
										'keragaman_agama'     => $row->keragaman_agama,
										'skor_goroyong'       => $row->skor_goroyong,
										'skor_ruangpub'       => $row->skor_ruangpub,
										'skor_fasor'          => $row->skor_fasor,
										'skor_keg_or'         => $row->skor_keg_or,
										'pmks'                => $row->pmks,
										'akses_slb'           => $row->akses_slb,
										'poskamling'          => $row->poskamling,
										'siskamling'          => $row->siskamling,
										'konflik'             => $row->konflik,
										'penyelesaian_konflik'=> $row->penyelesaian_konflik,
										'akses_minum'         => $row->akses_minum,
										'akses_jamban'        => $row->akses_jamban,
										'persampahan'         => $row->persampahan,
										'akses_mandi_cuci'    => $row->akses_mandi_cuci,
										'akses_listrik'       => $row->akses_listrik,
										'akses_tv'            => $row->akses_tv,
										'akses_sinyal_seluler'=> $row->akses_sinyal_seluler,
										'akses_internet'      => $row->akses_internet,
										'skor_keragaman'      => $row->skor_keragaman,
										'skor_lemb_ek'        => $row->skor_lemb_ek,
										'skor_minimar'        => $row->skor_minimar,
										'skor_resto_hotel'        => $row->skor_resto_hotel,
										'skor_jarak_ptkoan'   => $row->skor_jarak_ptkoan,
										'skor_akses_pasar_semi'=> $row->skor_akses_pasar_semi,
										'skor_jalan'          => $row->skor_jalan,
										'skor_keterbukaan_fisik'=> $row->skor_keterbukaan_fisik,
										'skor_angk_umum'      => $row->skor_angk_umum,
										'skor_logistik'       => $row->skor_logistik,
										'skor_kredit'         => $row->skor_kredit,
										'skor_bank'           => $row->skor_bank,
										'skor_kualitas_lingkungan'=> $row->skor_kualitas_lingkungan,
										'skor_bencana_alam'=> $row->skor_bencana_alam,
										'skor_tanggap_bencana'=> $row->skor_tanggap_bencana,
										'tahun'               => $row->tahun,

										'centroid_maju' => $this->kembang_model->get_centroid_maju($row->kodeprov)->result(),

							);
							$this->template
								->set_layout('page')
								->title('GAP Maju Desa')
								->build('idm/gap_maju', $data);
							}
					}

					public function gap_berkembang($id)
				    {
				        $row = $this->kembang_model->get_by_id($id);
				        if ($row) {
				            $data = array(
											'id' 									=> $row->id,
											'desa'                => $row->desa,
											'kecamatan'           => $row->kecamatan,
											'kabupaten'           => $row->kabupaten,
											'provinsi'            => $row->provinsi,
											'kodeprov'            => $row->kodeprov,
											'status'              => $row->status,

											'skor_dokter'         => $row->skor_dokter,
											'skor_bidan'          => $row->skor_bidan,
											'skor_nakes_lain'     => $row->skor_nakes_lain,
											'skor_waktu_tempuh'   => $row->skor_waktu_tempuh,
											'aktifitas_posyandu'   => $row->aktifitas_posyandu,
											'akses_poskesdes'     => $row->akses_poskesdes,
											'akses_posyandu'      => $row->akses_posyandu,
											'kepesertaan_bpjs'    => $row->kepesertaan_bpjs,
											'akses_sd'            => $row->akses_sd,
											'akses_smp'           => $row->akses_smp,
											'skor_sma_smk'        => $row->skor_sma_smk,
											'buta_aksara'         => $row->buta_aksara,
											'pkbm'                => $row->pkbm,
											'paud'                => $row->paud,
											'perpusy'             => $row->perpusy,
											'ketrampilan'         => $row->ketrampilan,
											'keragaman_etnis'     => $row->keragaman_etnis,
											'keragaman_komunikasi'=> $row->keragaman_komunikasi,
											'keragaman_agama'     => $row->keragaman_agama,
											'skor_goroyong'       => $row->skor_goroyong,
											'skor_ruangpub'       => $row->skor_ruangpub,
											'skor_fasor'          => $row->skor_fasor,
											'skor_keg_or'         => $row->skor_keg_or,
											'pmks'                => $row->pmks,
											'akses_slb'           => $row->akses_slb,
											'poskamling'          => $row->poskamling,
											'siskamling'          => $row->siskamling,
											'konflik'             => $row->konflik,
											'penyelesaian_konflik'=> $row->penyelesaian_konflik,
											'akses_minum'         => $row->akses_minum,
											'akses_jamban'        => $row->akses_jamban,
											'persampahan'         => $row->persampahan,
											'akses_mandi_cuci'    => $row->akses_mandi_cuci,
											'akses_listrik'       => $row->akses_listrik,
											'akses_tv'            => $row->akses_tv,
											'akses_sinyal_seluler'=> $row->akses_sinyal_seluler,
											'akses_internet'      => $row->akses_internet,
											'skor_keragaman'      => $row->skor_keragaman,
											'skor_lemb_ek'        => $row->skor_lemb_ek,
											'skor_minimar'        => $row->skor_minimar,
											'skor_resto_hotel'        => $row->skor_resto_hotel,
											'skor_jarak_ptkoan'   => $row->skor_jarak_ptkoan,
											'skor_akses_pasar_semi'=> $row->skor_akses_pasar_semi,
											'skor_jalan'          => $row->skor_jalan,
											'skor_keterbukaan_fisik'=> $row->skor_keterbukaan_fisik,
											'skor_angk_umum'      => $row->skor_angk_umum,
											'skor_logistik'       => $row->skor_logistik,
											'skor_kredit'         => $row->skor_kredit,
											'skor_bank'           => $row->skor_bank,
											'skor_kualitas_lingkungan'=> $row->skor_kualitas_lingkungan,
											'skor_bencana_alam'=> $row->skor_bencana_alam,
											'skor_tanggap_bencana'=> $row->skor_tanggap_bencana,
											'tahun'               => $row->tahun,

											'centroid_berkembang' => $this->kembang_model->get_centroid_berkembang($row->kodeprov)->result(),

				        );
								$this->template
									->set_layout('page')
									->title('GAP Berkembang Desa')
									->build('idm/gap_berkembang', $data);
								}
				    }
		public function mandiri_nasional($id)
		{
			$row = $this->kembang_model->get_by_id($id);
			if ($row) {
					$data = array(
						'id' 									=> $row->id,
						'desa'                => $row->desa,
						'kecamatan'           => $row->kecamatan,
						'kabupaten'           => $row->kabupaten,
						'provinsi'            => $row->provinsi,
						'kodeprov'            => $row->kodeprov,
						'status'              => $row->status,

						'skor_dokter'         => $row->skor_dokter,
						'skor_bidan'          => $row->skor_bidan,
						'skor_nakes_lain'     => $row->skor_nakes_lain,
						'skor_waktu_tempuh'   => $row->skor_waktu_tempuh,
						'aktifitas_posyandu'   => $row->aktifitas_posyandu,
						'akses_poskesdes'     => $row->akses_poskesdes,
						'akses_posyandu'      => $row->akses_posyandu,
						'kepesertaan_bpjs'    => $row->kepesertaan_bpjs,
						'akses_sd'            => $row->akses_sd,
						'akses_smp'           => $row->akses_smp,
						'skor_sma_smk'        => $row->skor_sma_smk,
						'buta_aksara'         => $row->buta_aksara,
						'pkbm'                => $row->pkbm,
						'paud'                => $row->paud,
						'perpusy'             => $row->perpusy,
						'ketrampilan'         => $row->ketrampilan,
						'keragaman_etnis'     => $row->keragaman_etnis,
						'keragaman_komunikasi'=> $row->keragaman_komunikasi,
						'keragaman_agama'     => $row->keragaman_agama,
						'skor_goroyong'       => $row->skor_goroyong,
						'skor_ruangpub'       => $row->skor_ruangpub,
						'skor_fasor'          => $row->skor_fasor,
						'skor_keg_or'         => $row->skor_keg_or,
						'pmks'                => $row->pmks,
						'akses_slb'           => $row->akses_slb,
						'poskamling'          => $row->poskamling,
						'siskamling'          => $row->siskamling,
						'konflik'             => $row->konflik,
						'penyelesaian_konflik'=> $row->penyelesaian_konflik,
						'akses_minum'         => $row->akses_minum,
						'akses_jamban'        => $row->akses_jamban,
						'persampahan'         => $row->persampahan,
						'akses_mandi_cuci'    => $row->akses_mandi_cuci,
						'akses_listrik'       => $row->akses_listrik,
						'akses_tv'            => $row->akses_tv,
						'akses_sinyal_seluler'=> $row->akses_sinyal_seluler,
						'akses_internet'      => $row->akses_internet,
						'skor_keragaman'      => $row->skor_keragaman,
						'skor_lemb_ek'        => $row->skor_lemb_ek,
						'skor_minimar'        => $row->skor_minimar,
						'skor_resto_hotel'        => $row->skor_resto_hotel,
						'skor_jarak_ptkoan'   => $row->skor_jarak_ptkoan,
						'skor_akses_pasar_semi'=> $row->skor_akses_pasar_semi,
						'skor_jalan'          => $row->skor_jalan,
						'skor_keterbukaan_fisik'=> $row->skor_keterbukaan_fisik,
						'skor_angk_umum'      => $row->skor_angk_umum,
						'skor_logistik'       => $row->skor_logistik,
						'skor_kredit'         => $row->skor_kredit,
						'skor_bank'           => $row->skor_bank,
						'skor_kualitas_lingkungan'=> $row->skor_kualitas_lingkungan,
						'skor_bencana_alam'=> $row->skor_bencana_alam,
						'skor_tanggap_bencana'=> $row->skor_tanggap_bencana,
						'tahun'               => $row->tahun,

						'mandiri_nasional' => $this->kembang_model->get_mandiri_nasional()->result(),

			);
			$this->template
				->set_layout('page')
				->title('GAP Mandiri Desa')
				->build('idm/nasional', $data);
			}
	}
	
	public function berkembang_nasional($id)
		{
			$row = $this->kembang_model->get_by_id($id);
			if ($row) {
					$data = array(
						'id' 				=> $row->id,
						'desa'              => $row->desa,
						'kecamatan'         => $row->kecamatan,
						'kabupaten'         => $row->kabupaten,
						'provinsi'          => $row->provinsi,
						'kodeprov'          => $row->kodeprov,
						'status'            => $row->status,

						'skor_dokter'         => $row->skor_dokter,
						'skor_bidan'          => $row->skor_bidan,
						'skor_nakes_lain'     => $row->skor_nakes_lain,
						'skor_waktu_tempuh'   => $row->skor_waktu_tempuh,
						'aktifitas_posyandu'   => $row->aktifitas_posyandu,
						'akses_poskesdes'     => $row->akses_poskesdes,
						'akses_posyandu'      => $row->akses_posyandu,
						'kepesertaan_bpjs'    => $row->kepesertaan_bpjs,
						'akses_sd'            => $row->akses_sd,
						'akses_smp'           => $row->akses_smp,
						'skor_sma_smk'        => $row->skor_sma_smk,
						'buta_aksara'         => $row->buta_aksara,
						'pkbm'                => $row->pkbm,
						'paud'                => $row->paud,
						'perpusy'             => $row->perpusy,
						'ketrampilan'         => $row->ketrampilan,
						'keragaman_etnis'     => $row->keragaman_etnis,
						'keragaman_komunikasi'=> $row->keragaman_komunikasi,
						'keragaman_agama'     => $row->keragaman_agama,
						'skor_goroyong'       => $row->skor_goroyong,
						'skor_ruangpub'       => $row->skor_ruangpub,
						'skor_fasor'          => $row->skor_fasor,
						'skor_keg_or'         => $row->skor_keg_or,
						'pmks'                => $row->pmks,
						'akses_slb'           => $row->akses_slb,
						'poskamling'          => $row->poskamling,
						'siskamling'          => $row->siskamling,
						'konflik'             => $row->konflik,
						'penyelesaian_konflik'=> $row->penyelesaian_konflik,
						'akses_minum'         => $row->akses_minum,
						'akses_jamban'        => $row->akses_jamban,
						'persampahan'         => $row->persampahan,
						'akses_mandi_cuci'    => $row->akses_mandi_cuci,
						'akses_listrik'       => $row->akses_listrik,
						'akses_tv'            => $row->akses_tv,
						'akses_sinyal_seluler'=> $row->akses_sinyal_seluler,
						'akses_internet'      => $row->akses_internet,
						'skor_keragaman'      => $row->skor_keragaman,
						'skor_lemb_ek'        => $row->skor_lemb_ek,
						'skor_minimar'        => $row->skor_minimar,
						'skor_resto_hotel'        => $row->skor_resto_hotel,
						'skor_jarak_ptkoan'   => $row->skor_jarak_ptkoan,
						'skor_akses_pasar_semi'=> $row->skor_akses_pasar_semi,
						'skor_jalan'          => $row->skor_jalan,
						'skor_keterbukaan_fisik'=> $row->skor_keterbukaan_fisik,
						'skor_angk_umum'      => $row->skor_angk_umum,
						'skor_logistik'       => $row->skor_logistik,
						'skor_kredit'         => $row->skor_kredit,
						'skor_bank'           => $row->skor_bank,
						'skor_kualitas_lingkungan'=> $row->skor_kualitas_lingkungan,
						'skor_bencana_alam'=> $row->skor_bencana_alam,
						'skor_tanggap_bencana'=> $row->skor_tanggap_bencana,
						'tahun'               => $row->tahun,

						'berkembang_nasional' => $this->kembang_model->get_berkembang_nasional()->result(),

			);
			$this->template
				->set_layout('page')
				->title('GAP Berkembang Desa')
				->build('idm/berkembang_nasional', $data);
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
