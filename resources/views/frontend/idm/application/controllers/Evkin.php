<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evkin extends MY_Controller {
	private $modules = array('evkin');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('evkin_model');
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
			$this->load->view('evkin/impor', $data);
		}
		else if($where == "ekspor"){
			$this->load->view('evkin/ekspor', $data);
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
						redirect('evkin');
					}

					$this->load->library('excel');

					$objPHPExcel = PHPExcel_IOFactory::load($file);
					
					$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

					$all_row_data = array();
					foreach ($cell_collection as $cell) {
						$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
						$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
						$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
						if ($row > 5) {
							$all_row_data[$row][$column] = $data_value;
						}
					}

					$all_row_data = array_filter(array_map('array_filter', $all_row_data));

					if(!empty($all_row_data)){
						$is_error = false;

						if($is_error == false){
							foreach($all_row_data as $row_data) {
								$evkin = array();
								$evkin['id_operator'] = $this->session->userdata('user_id');
								$evkin['provinsi_id'] = $this->input->post('provinsi');
								$evkin['kabupaten_id'] = $this->input->post('kabupaten');
								$evkin['kecamatan_id'] = $this->input->post('kecamatan');
								$evkin['desa_id'] = $this->input->post('desa');

								$evkin['no_kuisioner'] = !empty($row_data['A']) ? $row_data['A'] : "";
								$evkin['pewawancara'] = !empty($row_data['B']) ? $row_data['B'] : "";
								$evkin['tanggal'] = !empty($row_data['C']) ? date_reverse($row_data['C']) : "";
								$evkin['no_urut'] = !empty($row_data['D']) ? $row_data['D'] : "";
								$evkin['nama'] = !empty($row_data['E']) ? strtoupper($row_data['E']) : "";

								$evkin['detail']['struktur']['ketua']['opsi'] = !empty($row_data['F']) ? $row_data['F'] : "";
								$evkin['detail']['struktur']['ketua']['keterangan'] = !empty($row_data['G']) ? $row_data['G'] : "";
								$evkin['detail']['struktur']['bendahara']['opsi'] = !empty($row_data['H']) ? $row_data['H'] : "";
								$evkin['detail']['struktur']['bendahara']['keterangan'] = !empty($row_data['I']) ? $row_data['I'] : "";
								$evkin['detail']['struktur']['sekertaris']['opsi'] = !empty($row_data['J']) ? $row_data['J'] : "";
								$evkin['detail']['struktur']['sekertaris']['keterangan'] = !empty($row_data['K']) ? $row_data['K'] : "";
								$evkin['detail']['struktur']['pemasaran']['opsi'] = !empty($row_data['L']) ? $row_data['L'] : "";
								$evkin['detail']['struktur']['pemasaran']['keterangan'] = !empty($row_data['M']) ? $row_data['M'] : "";
								$evkin['detail']['struktur']['peralatan']['opsi'] = !empty($row_data['N']) ? $row_data['N'] : "";
								$evkin['detail']['struktur']['peralatan']['keterangan'] = !empty($row_data['O']) ? $row_data['O'] : "";
								$evkin['detail']['struktur']['pengelola_lainnya']['nama'] = !empty($row_data['P']) ? $row_data['P'] : "";
								$evkin['detail']['struktur']['pengelola_lainnya']['opsi'] = !empty($row_data['Q']) ? $row_data['Q'] : "";
								$evkin['detail']['struktur']['pengelola_lainnya']['keterangan'] = !empty($row_data['R']) ? $row_data['R'] : "";
								$evkin['detail']['struktur']['perencanaan']['opsi'] = !empty($row_data['S']) ? $row_data['S'] : "";
								$evkin['detail']['struktur']['perencanaan']['keterangan'] = !empty($row_data['T']) ? $row_data['T'] : "";
								$evkin['detail']['struktur']['mkpp']['opsi'] = !empty($row_data['U']) ? $row_data['U'] : "";
								$evkin['detail']['struktur']['mkpp']['keterangan'] = !empty($row_data['V']) ? $row_data['V'] : "";
								$evkin['detail']['struktur']['mkp1']['opsi'] = !empty($row_data['W']) ? $row_data['W'] : "";
								$evkin['detail']['struktur']['mkp1']['keterangan'] = !empty($row_data['X']) ? $row_data['X'] : "";
								$evkin['detail']['struktur']['mkp2']['opsi'] = !empty($row_data['Y']) ? $row_data['Y'] : "";
								$evkin['detail']['struktur']['mkp2']['keterangan'] = !empty($row_data['Z']) ? $row_data['Z'] : "";
								$evkin['detail']['struktur']['mkst']['opsi'] = !empty($row_data['AA']) ? $row_data['AA'] : "";
								$evkin['detail']['struktur']['mkst']['keterangan'] = !empty($row_data['AB']) ? $row_data['AB'] : "";
								$evkin['detail']['struktur']['pemantauan']['opsi'] = !empty($row_data['AC']) ? $row_data['AC'] : "";
								$evkin['detail']['struktur']['pemantauan']['keterangan'] = !empty($row_data['AD']) ? $row_data['AD'] : "";
								
								$evkin['detail']['operasional']['tpkk']['opsi'] = !empty($row_data['AE']) ? $row_data['AE'] : "";
								$evkin['detail']['operasional']['tpkk']['keterangan'] = !empty($row_data['AF']) ? $row_data['AF'] : "";
								$evkin['detail']['operasional']['pnpm']['opsi'] = !empty($row_data['AG']) ? $row_data['AG'] : "";
								$evkin['detail']['operasional']['pnpm']['keterangan'] = !empty($row_data['AH']) ? $row_data['AH'] : "";
								$evkin['detail']['operasional']['tujuan_kelompok']['opsi'] = !empty($row_data['AI']) ? $row_data['AI'] : "";
								$evkin['detail']['operasional']['tujuan_kelompok']['keterangan'] = !empty($row_data['AJ']) ? $row_data['AJ'] : "";
								$evkin['detail']['operasional']['permasalahan']['opsi'] = !empty($row_data['AK']) ? $row_data['AK'] : "";
								$evkin['detail']['operasional']['permasalahan']['keterangan'] = !empty($row_data['AL']) ? $row_data['AL'] : "";
								$evkin['detail']['operasional']['dasar_rencana_lainnya']['nama'] = !empty($row_data['AM']) ? $row_data['AM'] : "";
								$evkin['detail']['operasional']['dasar_rencana_lainnya']['opsi'] = !empty($row_data['AN']) ? $row_data['AN'] : "";
								$evkin['detail']['operasional']['dasar_rencana_lainnya']['keterangan'] = !empty($row_data['AO']) ? $row_data['AO'] : "";
								$evkin['detail']['operasional']['pelaksanaan']['opsi'] = !empty($row_data['AP']) ? $row_data['AP'] : "";
								$evkin['detail']['operasional']['pelaksanaan']['keterangan'] = !empty($row_data['AQ']) ? $row_data['AQ'] : "";
								$evkin['detail']['operasional']['tindak_lanjut']['opsi'] = !empty($row_data['AR']) ? $row_data['AR'] : "";
								$evkin['detail']['operasional']['tindak_lanjut']['keterangan'] = !empty($row_data['AS']) ? $row_data['AS'] : "";
								$evkin['detail']['operasional']['tujuan_kegiatan']['opsi'] = !empty($row_data['AT']) ? $row_data['AT'] : "";
								$evkin['detail']['operasional']['tujuan_kegiatan']['keterangan'] = !empty($row_data['AU']) ? $row_data['AU'] : "";
								$evkin['detail']['operasional']['waktu']['opsi'] = !empty($row_data['AV']) ? $row_data['AV'] : "";
								$evkin['detail']['operasional']['waktu']['keterangan'] = !empty($row_data['AW']) ? $row_data['AW'] : "";
								$evkin['detail']['operasional']['rencana']['opsi'] = !empty($row_data['AX']) ? $row_data['AX'] : "";
								$evkin['detail']['operasional']['rencana']['keterangan'] = !empty($row_data['AY']) ? $row_data['AY'] : "";
								$evkin['detail']['operasional']['biaya']['opsi'] = !empty($row_data['AZ']) ? $row_data['AZ'] : "";
								$evkin['detail']['operasional']['biaya']['keterangan'] = !empty($row_data['BA']) ? $row_data['BA'] : "";
								$evkin['detail']['operasional']['penanggungjawab']['opsi'] = !empty($row_data['BB']) ? $row_data['BB'] : "";
								$evkin['detail']['operasional']['penanggungjawab']['keterangan'] = !empty($row_data['BC']) ? $row_data['BC'] : "";
								$evkin['detail']['operasional']['memuat_lainnya']['nama'] = !empty($row_data['BD']) ? $row_data['BD'] : "";
								$evkin['detail']['operasional']['memuat_lainnya']['opsi'] = !empty($row_data['BE']) ? $row_data['BE'] : "";
								$evkin['detail']['operasional']['memuat_lainnya']['keterangan'] = !empty($row_data['BF']) ? $row_data['BF'] : "";
								$evkin['detail']['operasional']['sesuai']['opsi'] = !empty($row_data['BG']) ? $row_data['BG'] : "";
								$evkin['detail']['operasional']['sesuai']['keterangan'] = !empty($row_data['BH']) ? $row_data['BH'] : "";
								$evkin['detail']['operasional']['sdm']['opsi'] = !empty($row_data['BI']) ? $row_data['BI'] : "";
								$evkin['detail']['operasional']['sdm']['keterangan'] = !empty($row_data['BJ']) ? $row_data['BJ'] : "";
								$evkin['detail']['operasional']['keuangan']['opsi'] = !empty($row_data['BK']) ? $row_data['BK'] : "";
								$evkin['detail']['operasional']['keuangan']['keterangan'] = !empty($row_data['BL']) ? $row_data['BL'] : "";
								$evkin['detail']['operasional']['sarana']['opsi'] = !empty($row_data['BM']) ? $row_data['BM'] : "";
								$evkin['detail']['operasional']['sarana']['keterangan'] = !empty($row_data['BN']) ? $row_data['BN'] : "";
								$evkin['detail']['operasional']['penyebab_lainnya']['nama'] = !empty($row_data['BO']) ? $row_data['BO'] : "";
								$evkin['detail']['operasional']['penyebab_lainnya']['opsi'] = !empty($row_data['BP']) ? $row_data['BP'] : "";
								$evkin['detail']['operasional']['penyebab_lainnya']['keterangan'] = !empty($row_data['BQ']) ? $row_data['BQ'] : "";
								
								$evkin['detail']['pertemuan']['perencanaan']['opsi'] = !empty($row_data['BR']) ? $row_data['BR'] : "";
								$evkin['detail']['pertemuan']['perencanaan']['keterangan'] = !empty($row_data['BS']) ? $row_data['BS'] : "";
								$evkin['detail']['pertemuan']['pelaksanaan']['opsi'] = !empty($row_data['BT']) ? $row_data['BT'] : "";
								$evkin['detail']['pertemuan']['pelaksanaan']['keterangan'] = !empty($row_data['BU']) ? $row_data['BU'] : "";
								$evkin['detail']['pertemuan']['permasalahan']['opsi'] = !empty($row_data['BV']) ? $row_data['BV'] : "";
								$evkin['detail']['pertemuan']['permasalahan']['keterangan'] = !empty($row_data['BW']) ? $row_data['BW'] : "";
								$evkin['detail']['pertemuan']['bahasan_lainnya']['nama'] = !empty($row_data['BX']) ? $row_data['BX'] : "";
								$evkin['detail']['pertemuan']['bahasan_lainnya']['opsi'] = !empty($row_data['BY']) ? $row_data['BY'] : "";
								$evkin['detail']['pertemuan']['bahasan_lainnya']['keterangan'] = !empty($row_data['BZ']) ? $row_data['BZ'] : "";
								$evkin['detail']['pertemuan']['pertemuan']['opsi'] = !empty($row_data['CA']) ? $row_data['CA'] : "";
								$evkin['detail']['pertemuan']['pertemuan']['keterangan'] = !empty($row_data['CB']) ? $row_data['CB'] : "";
								$evkin['detail']['pertemuan']['rutinitas']['opsi'] = !empty($row_data['CC']) ? $row_data['CC'] : "";
								$evkin['detail']['pertemuan']['rutinitas']['keterangan'] = !empty($row_data['CD']) ? $row_data['CD'] : "";
								$evkin['detail']['pertemuan']['frekuensi']['opsi'] = !empty($row_data['CE']) ? $row_data['CE'] : "";
								$evkin['detail']['pertemuan']['frekuensi']['keterangan'] = !empty($row_data['CF']) ? $row_data['CF'] : "";
								
								$evkin['jumlah_lk'] = !empty($row_data['CG']) ? $row_data['CG'] : "";
								$evkin['jumlah_p'] = !empty($row_data['CH']) ? $row_data['CH'] : "";
								
								$evkin['detail']['administrasi']['plang']['opsi'] = !empty($row_data['CI']) ? $row_data['CI'] : "";
								$evkin['detail']['administrasi']['plang']['keterangan'] = !empty($row_data['CJ']) ? $row_data['CJ'] : "";
								$evkin['detail']['administrasi']['papan']['opsi'] = !empty($row_data['CK']) ? $row_data['CK'] : "";
								$evkin['detail']['administrasi']['papan']['keterangan'] = !empty($row_data['CL']) ? $row_data['CL'] : "";
								$evkin['detail']['administrasi']['kotak_saran']['opsi'] = !empty($row_data['CM']) ? $row_data['CM'] : "";
								$evkin['detail']['administrasi']['kotak_saran']['keterangan'] = !empty($row_data['CN']) ? $row_data['CN'] : "";
								$evkin['detail']['administrasi']['papan_pengumuman']['opsi'] = !empty($row_data['CO']) ? $row_data['CO'] : "";
								$evkin['detail']['administrasi']['papan_pengumuman']['keterangan'] = !empty($row_data['CP']) ? $row_data['CP'] : "";
								$evkin['detail']['administrasi']['fungsi_papan']['opsi'] = !empty($row_data['CQ']) ? $row_data['CQ'] : "";
								$evkin['detail']['administrasi']['fungsi_papan']['keterangan'] = !empty($row_data['CR']) ? $row_data['CR'] : "";
								$evkin['detail']['administrasi']['buku_tamu']['opsi'] = !empty($row_data['CS']) ? $row_data['CS'] : "";
								$evkin['detail']['administrasi']['buku_tamu']['keterangan'] = !empty($row_data['CT']) ? $row_data['CT'] : "";
								$evkin['detail']['administrasi']['buku_anggota']['opsi'] = !empty($row_data['CU']) ? $row_data['CU'] : "";
								$evkin['detail']['administrasi']['buku_anggota']['keterangan'] = !empty($row_data['CV']) ? $row_data['CV'] : "";
								$evkin['detail']['administrasi']['buku_notulen']['opsi'] = !empty($row_data['CW']) ? $row_data['CW'] : "";
								$evkin['detail']['administrasi']['buku_notulen']['keterangan'] = !empty($row_data['CX']) ? $row_data['CX'] : "";
								$evkin['detail']['administrasi']['buku_inventaris']['opsi'] = !empty($row_data['CY']) ? $row_data['CY'] : "";
								$evkin['detail']['administrasi']['buku_inventaris']['keterangan'] = !empty($row_data['CZ']) ? $row_data['CZ'] : "";
								$evkin['detail']['administrasi']['buku_hadir']['opsi'] = !empty($row_data['DA']) ? $row_data['DA'] : "";
								$evkin['detail']['administrasi']['buku_hadir']['keterangan'] = !empty($row_data['DB']) ? $row_data['DB'] : "";
								$evkin['detail']['administrasi']['buku_kas']['opsi'] = !empty($row_data['DC']) ? $row_data['DC'] : "";
								$evkin['detail']['administrasi']['buku_kas']['keterangan'] = !empty($row_data['DD']) ? $row_data['DD'] : "";
								$evkin['detail']['administrasi']['buku_bank']['opsi'] = !empty($row_data['DE']) ? $row_data['DE'] : "";
								$evkin['detail']['administrasi']['buku_bank']['keterangan'] = !empty($row_data['DF']) ? $row_data['DF'] : "";
								$evkin['detail']['administrasi']['transaksi']['opsi'] = !empty($row_data['DG']) ? $row_data['DG'] : "";
								$evkin['detail']['administrasi']['transaksi']['keterangan'] = !empty($row_data['DH']) ? $row_data['DH'] : "";
								$evkin['detail']['administrasi']['tepat_waktu']['opsi'] = !empty($row_data['DI']) ? $row_data['DI'] : "";
								$evkin['detail']['administrasi']['tepat_waktu']['keterangan'] = !empty($row_data['DJ']) ? $row_data['DJ'] : "";
								$evkin['detail']['administrasi']['dokumentasi_transaksi']['opsi'] = !empty($row_data['DK']) ? $row_data['DK'] : "";
								$evkin['detail']['administrasi']['dokumentasi_transaksi']['keterangan'] = !empty($row_data['DL']) ? $row_data['DL'] : "";
								$evkin['detail']['administrasi']['bukti_transaksi']['opsi'] = !empty($row_data['DM']) ? $row_data['DM'] : "";
								$evkin['detail']['administrasi']['bukti_transaksi']['keterangan'] = !empty($row_data['DN']) ? $row_data['DN'] : "";
								$evkin['detail']['administrasi']['rekapitulasi']['opsi'] = !empty($row_data['DO']) ? $row_data['DO'] : "";
								$evkin['detail']['administrasi']['rekapitulasi']['keterangan'] = !empty($row_data['DP']) ? $row_data['DP'] : "";
								$evkin['detail']['administrasi']['laporan']['opsi'] = !empty($row_data['DQ']) ? $row_data['DQ'] : "";
								$evkin['detail']['administrasi']['laporan']['keterangan'] = !empty($row_data['DR']) ? $row_data['DR'] : "";
								
								$evkin['detail']['kegiatan']['kegiatan_kelompok']['opsi'] = !empty($row_data['DS']) ? $row_data['DS'] : "";
								$evkin['detail']['kegiatan']['kegiatan_kelompok']['keterangan'] = !empty($row_data['DT']) ? $row_data['DT'] : "";
								$evkin['detail']['kegiatan']['sdm_kelompok']['opsi'] = !empty($row_data['DU']) ? $row_data['DU'] : "";
								$evkin['detail']['kegiatan']['sdm_kelompok']['keterangan'] = !empty($row_data['DV']) ? $row_data['DV'] : "";
								$evkin['detail']['kegiatan']['keuangan_kelompok']['opsi'] = !empty($row_data['DW']) ? $row_data['DW'] : "";
								$evkin['detail']['kegiatan']['keuangan_kelompok']['keterangan'] = !empty($row_data['DX']) ? $row_data['DX'] : "";
								$evkin['detail']['kegiatan']['sarana_kelompok']['opsi'] = !empty($row_data['DY']) ? $row_data['DY'] : "";
								$evkin['detail']['kegiatan']['sarana_kelompok']['keterangan'] = !empty($row_data['DZ']) ? $row_data['DZ'] : "";
								$evkin['detail']['kegiatan']['penyebab_lainnya_kelompok']['nama'] = !empty($row_data['EA']) ? $row_data['EA'] : "";
								$evkin['detail']['kegiatan']['penyebab_lainnya_kelompok']['opsi'] = !empty($row_data['EB']) ? $row_data['EB'] : "";
								$evkin['detail']['kegiatan']['penyebab_lainnya_kelompok']['keterangan'] = !empty($row_data['EC']) ? $row_data['EC'] : "";
								$evkin['detail']['kegiatan']['kegiatan_masyarakat']['opsi'] = !empty($row_data['ED']) ? $row_data['ED'] : "";
								$evkin['detail']['kegiatan']['kegiatan_masyarakat']['keterangan'] = !empty($row_data['EE']) ? $row_data['EE'] : "";
								$evkin['detail']['kegiatan']['sdm_masyarakat']['opsi'] = !empty($row_data['EF']) ? $row_data['EF'] : "";
								$evkin['detail']['kegiatan']['sdm_masyarakat']['keterangan'] = !empty($row_data['EG']) ? $row_data['EG'] : "";
								$evkin['detail']['kegiatan']['keuangan_masyarakat']['opsi'] = !empty($row_data['EH']) ? $row_data['EH'] : "";
								$evkin['detail']['kegiatan']['keuangan_masyarakat']['keterangan'] = !empty($row_data['EI']) ? $row_data['EI'] : "";
								$evkin['detail']['kegiatan']['sarana_masyarakat']['opsi'] = !empty($row_data['EJ']) ? $row_data['EJ'] : "";
								$evkin['detail']['kegiatan']['sarana_masyarakat']['keterangan'] = !empty($row_data['EK']) ? $row_data['EK'] : "";
								$evkin['detail']['kegiatan']['penyebab_lainnya_masyarakat']['nama'] = !empty($row_data['EL']) ? $row_data['EL'] : "";
								$evkin['detail']['kegiatan']['penyebab_lainnya_masyarakat']['opsi'] = !empty($row_data['EM']) ? $row_data['EM'] : "";
								$evkin['detail']['kegiatan']['penyebab_lainnya_masyarakat']['keterangan'] = !empty($row_data['EN']) ? $row_data['EN'] : "";
								$evkin['detail']['kegiatan']['persentase'] = !empty($row_data['EO']) ? $row_data['EO'] : "";
								
								$evkin['detail']['produksi']['budidaya_sebelum']['opsi'] = !empty($row_data['EP']) ? $row_data['EP'] : "";
								$evkin['detail']['produksi']['budidaya_sebelum']['keterangan'] = !empty($row_data['EQ']) ? $row_data['EQ'] : "";
								$evkin['detail']['produksi']['hasil_sebelum']['opsi'] = !empty($row_data['ER']) ? $row_data['ER'] : "";
								$evkin['detail']['produksi']['hasil_sebelum']['keterangan'] = !empty($row_data['ES']) ? $row_data['ES'] : "";
								$evkin['detail']['produksi']['harga_sebelum']['opsi'] = !empty($row_data['ET']) ? $row_data['ET'] : "";
								$evkin['detail']['produksi']['harga_sebelum']['keterangan'] = !empty($row_data['EU']) ? $row_data['EU'] : "";
								$evkin['detail']['produksi']['budidaya_setelah']['opsi'] = !empty($row_data['EV']) ? $row_data['EV'] : "";
								$evkin['detail']['produksi']['budidaya_setelah']['keterangan'] = !empty($row_data['EW']) ? $row_data['EW'] : "";
								$evkin['detail']['produksi']['hasil_setelah']['opsi'] = !empty($row_data['EX']) ? $row_data['EX'] : "";
								$evkin['detail']['produksi']['hasil_setelah']['keterangan'] = !empty($row_data['EY']) ? $row_data['EY'] : "";
								$evkin['detail']['produksi']['harga_setelah']['opsi'] = !empty($row_data['EZ']) ? $row_data['EZ'] : "";
								$evkin['detail']['produksi']['harga_setelah']['keterangan'] = !empty($row_data['FA']) ? $row_data['FA'] : "";
								
								$evkin['detail']['kontribusi']['dana']['opsi'] = !empty($row_data['FB']) ? $row_data['FB'] : "";
								$evkin['detail']['kontribusi']['dana']['keterangan'] = !empty($row_data['FC']) ? $row_data['FC'] : "";
								$evkin['detail']['kontribusi']['tenaga']['opsi'] = !empty($row_data['FD']) ? $row_data['FD'] : "";
								$evkin['detail']['kontribusi']['tenaga']['keterangan'] = !empty($row_data['FE']) ? $row_data['FE'] : "";
								$evkin['detail']['kontribusi']['material']['opsi'] = !empty($row_data['FF']) ? $row_data['FF'] : "";
								$evkin['detail']['kontribusi']['material']['keterangan'] = !empty($row_data['FG']) ? $row_data['FG'] : "";
								$evkin['detail']['kontribusi']['lainnya']['nama'] = !empty($row_data['FH']) ? $row_data['FH'] : "";
								$evkin['detail']['kontribusi']['lainnya']['opsi'] = !empty($row_data['FI']) ? $row_data['FI'] : "";
								$evkin['detail']['kontribusi']['lainnya']['keterangan'] = !empty($row_data['FJ']) ? $row_data['FJ'] : "";
								
								$evkin['detail']['kemitraan']['perencanaan']['opsi'] = !empty($row_data['FK']) ? $row_data['FK'] : "";
								$evkin['detail']['kemitraan']['perencanaan']['keterangan'] = !empty($row_data['FL']) ? $row_data['FL'] : "";
								$evkin['detail']['kemitraan']['mkpp']['opsi'] = !empty($row_data['FM']) ? $row_data['FM'] : "";
								$evkin['detail']['kemitraan']['mkpp']['keterangan'] = !empty($row_data['FN']) ? $row_data['FN'] : "";
								$evkin['detail']['kemitraan']['mkp1']['opsi'] = !empty($row_data['FO']) ? $row_data['FO'] : "";
								$evkin['detail']['kemitraan']['mkp1']['keterangan'] = !empty($row_data['FP']) ? $row_data['FP'] : "";
								$evkin['detail']['kemitraan']['mkp2']['opsi'] = !empty($row_data['FQ']) ? $row_data['FQ'] : "";
								$evkin['detail']['kemitraan']['mkp2']['keterangan'] = !empty($row_data['FR']) ? $row_data['FR'] : "";
								$evkin['detail']['kemitraan']['mkst']['opsi'] = !empty($row_data['FS']) ? $row_data['FS'] : "";
								$evkin['detail']['kemitraan']['mkst']['keterangan'] = !empty($row_data['FT']) ? $row_data['FT'] : "";
								$evkin['detail']['kemitraan']['pemantauan']['opsi'] = !empty($row_data['FU']) ? $row_data['FU'] : "";
								$evkin['detail']['kemitraan']['pemantauan']['keterangan'] = !empty($row_data['FV']) ? $row_data['FV'] : "";
								$evkin['detail']['kemitraan']['mitra']['opsi'] = !empty($row_data['FW']) ? $row_data['FW'] : "";
								$evkin['detail']['kemitraan']['mitra']['keterangan'] = !empty($row_data['FX']) ? $row_data['FX'] : "";
								$evkin['detail']['kemitraan']['uptd_kecamatan']['opsi'] = !empty($row_data['FY']) ? $row_data['FY'] : "";
								$evkin['detail']['kemitraan']['uptd_kecamatan']['keterangan'] = !empty($row_data['FZ']) ? $row_data['FZ'] : "";
								$evkin['detail']['kemitraan']['pendamping_kampung']['opsi'] = !empty($row_data['GA']) ? $row_data['GA'] : "";
								$evkin['detail']['kemitraan']['pendamping_kampung']['keterangan'] = !empty($row_data['GB']) ? $row_data['GB'] : "";
								$evkin['detail']['kemitraan']['bpmd_distrik']['opsi'] = !empty($row_data['GC']) ? $row_data['GC'] : "";
								$evkin['detail']['kemitraan']['bpmd_distrik']['keterangan'] = !empty($row_data['GD']) ? $row_data['GD'] : "";
								$evkin['detail']['kemitraan']['pendamping_distrik']['opsi'] = !empty($row_data['GE']) ? $row_data['GE'] : "";
								$evkin['detail']['kemitraan']['pendamping_distrik']['keterangan'] = !empty($row_data['GF']) ? $row_data['GF'] : "";
								$evkin['detail']['kemitraan']['penyuluh']['opsi'] = !empty($row_data['GG']) ? $row_data['GG'] : "";
								$evkin['detail']['kemitraan']['penyuluh']['keterangan'] = !empty($row_data['GH']) ? $row_data['GH'] : "";
								$evkin['detail']['kemitraan']['bpmd_kabupaten']['opsi'] = !empty($row_data['GI']) ? $row_data['GI'] : "";
								$evkin['detail']['kemitraan']['bpmd_kabupaten']['keterangan'] = !empty($row_data['GJ']) ? $row_data['GJ'] : "";
								$evkin['detail']['kemitraan']['lainnya']['nama'] = !empty($row_data['GK']) ? $row_data['GK'] : "";
								$evkin['detail']['kemitraan']['lainnya']['opsi'] = !empty($row_data['GL']) ? $row_data['GL'] : "";
								$evkin['detail']['kemitraan']['lainnya']['keterangan'] = !empty($row_data['GM']) ? $row_data['GM'] : "";
								
								$evkin['detail']['keberlanjutan']['bantuan']['opsi'] = !empty($row_data['GN']) ? $row_data['GN'] : "";
								$evkin['detail']['keberlanjutan']['bantuan']['keterangan'] = !empty($row_data['GO']) ? $row_data['GO'] : "";
								$evkin['detail']['keberlanjutan']['dana_desa']['opsi'] = !empty($row_data['GP']) ? $row_data['GP'] : "";
								$evkin['detail']['keberlanjutan']['dana_desa']['keterangan'] = !empty($row_data['GQ']) ? $row_data['GQ'] : "";
								$evkin['detail']['keberlanjutan']['institusi_lain']['opsi'] = !empty($row_data['GR']) ? $row_data['GR'] : "";
								$evkin['detail']['keberlanjutan']['institusi_lain']['keterangan'] = !empty($row_data['GS']) ? $row_data['GS'] : "";
								
								$evkin['detail']['pembinaan']['pjo_kabupaten'] = !empty($row_data['GT']) ? $row_data['GT'] : "";
								$evkin['detail']['pembinaan']['ketua'] = !empty($row_data['GU']) ? $row_data['GU'] : "";
								$evkin['detail']['pembinaan']['pendamping'] = !empty($row_data['GV']) ? $row_data['GV'] : "";

								$evkin['hasil_struktur'] = 0;
								if($evkin['detail']['struktur']['ketua']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['bendahara']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['sekertaris']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['pemasaran']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['peralatan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['perencanaan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['mkpp']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['mkp1']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['mkp2']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['mkst']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								if($evkin['detail']['struktur']['pemantauan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
								$evkin['hasil_struktur'] = round($evkin['hasil_struktur']/11, 2);

								$evkin['hasil_operasional'] = 0;
								if($evkin['detail']['operasional']['tpkk']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['pnpm']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['tujuan_kelompok']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['permasalahan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['tindak_lanjut']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['tujuan_kegiatan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['waktu']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['rencana']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['biaya']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['penanggungjawab']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['sesuai']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['sdm']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['keuangan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								if($evkin['detail']['operasional']['sarana']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
								$evkin['hasil_operasional'] = round($evkin['hasil_operasional']/15, 2);

								$evkin['hasil_pertemuan'] = 0;
								if($evkin['detail']['pertemuan']['perencanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
								if($evkin['detail']['pertemuan']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
								if($evkin['detail']['pertemuan']['permasalahan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
								if($evkin['detail']['pertemuan']['pertemuan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
								if($evkin['detail']['pertemuan']['rutinitas']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
								if($evkin['detail']['pertemuan']['frekuensi']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
								$evkin['hasil_pertemuan'] = round($evkin['hasil_pertemuan']/6);

								$evkin['hasil_administrasi'] = 0;
								if($evkin['detail']['administrasi']['plang']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['papan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['kotak_saran']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['papan_pengumuman']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['fungsi_papan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['buku_tamu']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['buku_anggota']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['buku_notulen']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['buku_inventaris']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['buku_hadir']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['buku_kas']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['buku_bank']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['tepat_waktu']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['dokumentasi_transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['bukti_transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['rekapitulasi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								if($evkin['detail']['administrasi']['laporan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
								$evkin['hasil_administrasi'] = round($evkin['hasil_administrasi']/18);


								$evkin['hasil_kegiatan'] = 0;
								if($evkin['detail']['kegiatan']['kegiatan_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								if($evkin['detail']['kegiatan']['sdm_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								if($evkin['detail']['kegiatan']['keuangan_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								if($evkin['detail']['kegiatan']['sarana_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								if($evkin['detail']['kegiatan']['kegiatan_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								if($evkin['detail']['kegiatan']['sdm_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								if($evkin['detail']['kegiatan']['keuangan_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								if($evkin['detail']['kegiatan']['sarana_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
								$evkin['hasil_kegiatan'] = round($evkin['hasil_kegiatan']/8);


								$evkin['hasil_produksi'] = 0;
								if($evkin['detail']['produksi']['budidaya_sebelum']['opsi'] == 'a') $evkin['hasil_produksi'] += 100;
								if($evkin['detail']['produksi']['budidaya_setelah']['opsi'] == 'a') $evkin['hasil_produksi'] += 100;
								$evkin['hasil_produksi'] = round($evkin['hasil_produksi']/2);


								$evkin['hasil_kontribusi'] = 0;
								if($evkin['detail']['kontribusi']['dana']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
								if($evkin['detail']['kontribusi']['tenaga']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
								if($evkin['detail']['kontribusi']['material']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
								$evkin['hasil_kontribusi'] = round($evkin['hasil_kontribusi']/3);


								$evkin['hasil_kemitraan'] = 0;
								if($evkin['detail']['kemitraan']['perencanaan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['mkpp']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['mkp1']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['mkp2']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['mkst']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['pemantauan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['mitra']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['uptd_kecamatan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['pendamping_kampung']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['bpmd_distrik']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['pendamping_distrik']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['penyuluh']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								if($evkin['detail']['kemitraan']['bpmd_kabupaten']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
								$evkin['hasil_kemitraan'] = round($evkin['hasil_kemitraan']/13);


								$evkin['hasil_keberlanjutan'] = 0;
								if($evkin['detail']['keberlanjutan']['bantuan']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
								if($evkin['detail']['keberlanjutan']['dana_desa']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
								if($evkin['detail']['keberlanjutan']['institusi_lain']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
								$evkin['hasil_keberlanjutan'] = round($evkin['hasil_keberlanjutan']/3);

								$evkin['detail'] = serialize($evkin['detail']);

								$this->evkin_model->save($evkin);
							}

							$this->session->set_flashdata('success_message', 'Evaluasi kinerja berhasil diimport.');
							redirect('evkin');
						}
						else{
							$this->session->set_flashdata('error_message', 'Terjadi kesalahan ketika mengimpor evaluasi kinerja. Silahkan periksa data yang akan diimpor.');
							redirect('evkin');
						}
					}
				}
				elseif(empty($_FILES['file']['name'])){
					$this->session->set_flashdata('error_message', 'Tidak ada file yang diupload.');
					redirect('evkin');
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Provinsi, kabupaten, Kecamatan, dan Desa</strong> tidak boleh kosong.');
					redirect('evkin');
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
					$list_evkin = $this->evkin_model->get_by_criteria()
						->select('*')
						->join('provinsi', 'provinsi.provinsi_code = evkin.provinsi_id', 'left')
						->join('kabupaten', 'kabupaten.kabupaten_code = evkin.kabupaten_id', 'left')
						->join('kecamatan', 'kecamatan.kecamatan_code = evkin.kecamatan_id', 'left')
						->join('desa', 'desa.desa_code = evkin.desa_id', 'left')
						->where('id_operator = ' . $this->session->userdata('user_id') .' AND tanggal BETWEEN "'.date_reverse($this->input->post('dari')).'" AND "'.date_reverse($this->input->post('sampai')).'"'.$lokasi)
						->order_by('id DESC, tanggal DESC, provinsi_name ASC, kabupaten_name ASC, kecamatan_name ASC, desa_name ASC')
						->get()
						->result();
				}
				else{
					$list_evkin = $this->evkin_model->get_by_criteria()
						->select('*')
						->join('provinsi', 'provinsi.provinsi_code = evkin.provinsi_id', 'left')
						->join('kabupaten', 'kabupaten.kabupaten_code = evkin.kabupaten_id', 'left')
						->join('kecamatan', 'kecamatan.kecamatan_code = evkin.kecamatan_id', 'left')
						->join('desa', 'desa.desa_code = evkin.desa_id', 'left')
						->where('tanggal BETWEEN "'.date_reverse($this->input->post('dari')).'" AND "'.date_reverse($this->input->post('sampai')).'"'.$lokasi)
						->order_by('id DESC, tanggal DESC, provinsi_name ASC, kabupaten_name ASC, kecamatan_name ASC, desa_name ASC')
						->get()
						->result();
				}

				if(!empty($list_evkin)){
					$this->load->library('excel');

					$objTpl = PHPExcel_IOFactory::load("uploads/Format Ekspor Evaluasi Kinerja.xlsx");
					$objTpl->setActiveSheetIndex(0);

					$i = 6;
					foreach ($list_evkin as $evkin) {
						$evkin->detail = unserialize($evkin->detail);

						$objTpl->getActiveSheet()->setCellValue('A'.$i, $evkin->no_kuisioner);
						$objTpl->getActiveSheet()->setCellValue('B'.$i, $evkin->pewawancara);
						$objTpl->getActiveSheet()->setCellValue('C'.$i, date_reverse($evkin->tanggal));
						$objTpl->getActiveSheet()->setCellValue('D'.$i, $evkin->no_urut);
						$objTpl->getActiveSheet()->setCellValue('E'.$i, $evkin->nama);
						$objTpl->getActiveSheet()->setCellValue('F'.$i, $evkin->provinsi_name);
						$objTpl->getActiveSheet()->setCellValue('G'.$i, $evkin->kabupaten_name);
						$objTpl->getActiveSheet()->setCellValue('H'.$i, $evkin->kecamatan_name);
						$objTpl->getActiveSheet()->setCellValue('I'.$i, $evkin->desa_name);

						$objTpl->getActiveSheet()->setCellValue('J'.$i, $evkin->detail['struktur']['ketua']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('K'.$i, !empty($evkin->detail['struktur']['ketua']['keterangan']) ? $evkin->detail['struktur']['ketua']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('L'.$i, $evkin->detail['struktur']['bendahara']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('M'.$i, !empty($evkin->detail['struktur']['bendahara']['keterangan']) ? $evkin->detail['struktur']['bendahara']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('N'.$i, $evkin->detail['struktur']['sekertaris']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('O'.$i, !empty($evkin->detail['struktur']['sekertaris']['keterangan']) ? $evkin->detail['struktur']['sekertaris']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('P'.$i, $evkin->detail['struktur']['pemasaran']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('Q'.$i, !empty($evkin->detail['struktur']['pemasaran']['keterangan']) ? $evkin->detail['struktur']['pemasaran']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('R'.$i, $evkin->detail['struktur']['peralatan']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('S'.$i, !empty($evkin->detail['struktur']['peralatan']['keterangan']) ? $evkin->detail['struktur']['peralatan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('T'.$i, !empty($evkin->detail['struktur']['pengelola_lainnya']['nama']) ? $evkin->detail['struktur']['pengelola_lainnya']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('U'.$i, $evkin->detail['struktur']['pengelola_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('V'.$i, !empty($evkin->detail['struktur']['pengelola_lainnya']['keterangan']) ? $evkin->detail['struktur']['pengelola_lainnya']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('W'.$i, $evkin->detail['struktur']['perencanaan']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('X'.$i, !empty($evkin->detail['struktur']['perencanaan']['keterangan']) ? $evkin->detail['struktur']['perencanaan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('Y'.$i, $evkin->detail['struktur']['mkpp']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('Z'.$i, !empty($evkin->detail['struktur']['mkpp']['keterangan']) ? $evkin->detail['struktur']['mkpp']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AA'.$i, $evkin->detail['struktur']['mkp1']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('AB'.$i, !empty($evkin->detail['struktur']['mkp1']['keterangan']) ? $evkin->detail['struktur']['mkp1']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AC'.$i, $evkin->detail['struktur']['mkp2']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('AD'.$i, !empty($evkin->detail['struktur']['mkp2']['keterangan']) ? $evkin->detail['struktur']['mkp2']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AE'.$i, $evkin->detail['struktur']['mkst']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('AF'.$i, !empty($evkin->detail['struktur']['mkst']['keterangan']) ? $evkin->detail['struktur']['mkst']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AG'.$i, $evkin->detail['struktur']['pemantauan']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('AH'.$i, !empty($evkin->detail['struktur']['pemantauan']['keterangan']) ? $evkin->detail['struktur']['pemantauan']['keterangan'] : "");

						$objTpl->getActiveSheet()->setCellValue('AI'.$i, $evkin->detail['operasional']['tpkk']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('AJ'.$i, !empty($evkin->detail['operasional']['tpkk']['keterangan']) ? $evkin->detail['operasional']['tpkk']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AK'.$i, $evkin->detail['operasional']['pnpm']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('AL'.$i, !empty($evkin->detail['operasional']['pnpm']['keterangan']) ? $evkin->detail['operasional']['pnpm']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AM'.$i, $evkin->detail['operasional']['tujuan_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('AN'.$i, !empty($evkin->detail['operasional']['tujuan_kelompok']['keterangan']) ? $evkin->detail['operasional']['tujuan_kelompok']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AO'.$i, $evkin->detail['operasional']['permasalahan']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('AP'.$i, !empty($evkin->detail['operasional']['permasalahan']['keterangan']) ? $evkin->detail['operasional']['permasalahan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AQ'.$i, !empty($evkin->detail['operasional']['dasar_rencana_lainnya']['nama']) ? $evkin->detail['operasional']['dasar_rencana_lainnya']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('AR'.$i, $evkin->detail['operasional']['dasar_rencana_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('AS'.$i, !empty($evkin->detail['operasional']['dasar_rencana_lainnya']['keterangan']) ? $evkin->detail['operasional']['dasar_rencana_lainnya']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AT'.$i, $evkin->detail['operasional']['pelaksanaan']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('AU'.$i, !empty($evkin->detail['operasional']['pelaksanaan']['keterangan']) ? $evkin->detail['operasional']['pelaksanaan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AV'.$i, $evkin->detail['operasional']['tindak_lanjut']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('AW'.$i, !empty($evkin->detail['operasional']['tindak_lanjut']['keterangan']) ? $evkin->detail['operasional']['tindak_lanjut']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AX'.$i, $evkin->detail['operasional']['tujuan_kegiatan']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('AY'.$i, !empty($evkin->detail['operasional']['tujuan_kegiatan']['keterangan']) ? $evkin->detail['operasional']['tujuan_kegiatan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('AZ'.$i, $evkin->detail['operasional']['waktu']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('BA'.$i, !empty($evkin->detail['operasional']['waktu']['keterangan']) ? $evkin->detail['operasional']['waktu']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BB'.$i, $evkin->detail['operasional']['rencana']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('BC'.$i, !empty($evkin->detail['operasional']['rencana']['keterangan']) ? $evkin->detail['operasional']['rencana']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BD'.$i, $evkin->detail['operasional']['biaya']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('BE'.$i, !empty($evkin->detail['operasional']['biaya']['keterangan']) ? $evkin->detail['operasional']['biaya']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BF'.$i, $evkin->detail['operasional']['penanggungjawab']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('BG'.$i, !empty($evkin->detail['operasional']['penanggungjawab']['keterangan']) ? $evkin->detail['operasional']['penanggungjawab']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BH'.$i, !empty($evkin->detail['operasional']['memuat_lainnya']['nama']) ? $evkin->detail['operasional']['memuat_lainnya']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('BI'.$i, $evkin->detail['operasional']['memuat_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('BJ'.$i, !empty($evkin->detail['operasional']['memuat_lainnya']['keterangan']) ? $evkin->detail['operasional']['memuat_lainnya']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BK'.$i, $evkin->detail['operasional']['sesuai']['opsi'] == 'a' ? "Sesuai" : "Tidak Sesuai");
						$objTpl->getActiveSheet()->setCellValue('BL'.$i, !empty($evkin->detail['operasional']['sesuai']['keterangan']) ? $evkin->detail['operasional']['sesuai']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BM'.$i, $evkin->detail['operasional']['sdm']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('BN'.$i, !empty($evkin->detail['operasional']['sdm']['keterangan']) ? $evkin->detail['operasional']['sdm']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BO'.$i, $evkin->detail['operasional']['keuangan']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('BP'.$i, !empty($evkin->detail['operasional']['keuangan']['keterangan']) ? $evkin->detail['operasional']['keuangan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BQ'.$i, $evkin->detail['operasional']['sarana']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('BR'.$i, !empty($evkin->detail['operasional']['sarana']['keterangan']) ? $evkin->detail['operasional']['sarana']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BS'.$i, !empty($evkin->detail['operasional']['penyebab_lainnya']['nama']) ? $evkin->detail['operasional']['penyebab_lainnya']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('BT'.$i, $evkin->detail['operasional']['penyebab_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('BU'.$i, !empty($evkin->detail['operasional']['penyebab_lainnya']['keterangan']) ? $evkin->detail['operasional']['penyebab_lainnya']['keterangan'] : "");

						$objTpl->getActiveSheet()->setCellValue('BV'.$i, $evkin->detail['pertemuan']['perencanaan']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('BW'.$i, !empty($evkin->detail['pertemuan']['perencanaan']['keterangan']) ? $evkin->detail['pertemuan']['perencanaan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BX'.$i, $evkin->detail['pertemuan']['pelaksanaan']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('BY'.$i, !empty($evkin->detail['pertemuan']['pelaksanaan']['keterangan']) ? $evkin->detail['pertemuan']['pelaksanaan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('BZ'.$i, $evkin->detail['pertemuan']['permasalahan']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('CA'.$i, !empty($evkin->detail['pertemuan']['permasalahan']['keterangan']) ? $evkin->detail['pertemuan']['permasalahan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CB'.$i, !empty($evkin->detail['pertemuan']['bahasan_lainnya']['nama']) ? $evkin->detail['pertemuan']['bahasan_lainnya']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('CC'.$i, $evkin->detail['pertemuan']['bahasan_lainnya']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('CD'.$i, !empty($evkin->detail['pertemuan']['bahasan_lainnya']['keterangan']) ? $evkin->detail['pertemuan']['bahasan_lainnya']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CE'.$i, $evkin->detail['pertemuan']['pertemuan']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('CF'.$i, !empty($evkin->detail['pertemuan']['pertemuan']['keterangan']) ? $evkin->detail['pertemuan']['pertemuan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CG'.$i, $evkin->detail['pertemuan']['pelaksanaan']['opsi'] == 'a' ? "Rutin" : "Tidak Rutin");
						$objTpl->getActiveSheet()->setCellValue('CH'.$i, !empty($evkin->detail['pertemuan']['pelaksanaan']['keterangan']) ? $evkin->detail['pertemuan']['pelaksanaan']['keterangan'] : "");

						if($evkin->detail['pertemuan']['frekuensi']['opsi'] == 'a') $evkin->detail['pertemuan']['frekuensi']['opsi'] = "1 kali sebulan";
						if($evkin->detail['pertemuan']['frekuensi']['opsi'] == 'b') $evkin->detail['pertemuan']['frekuensi']['opsi'] = "1 kali per 2 bulan";
						if($evkin->detail['pertemuan']['frekuensi']['opsi'] == 'c') $evkin->detail['pertemuan']['frekuensi']['opsi'] = "1 kali per 3 bulan";
						$objTpl->getActiveSheet()->setCellValue('CI'.$i, $evkin->detail['pertemuan']['frekuensi']['opsi']);
						$objTpl->getActiveSheet()->setCellValue('CJ'.$i, !empty($evkin->detail['pertemuan']['frekuensi']['keterangan']) ? $evkin->detail['pertemuan']['frekuensi']['keterangan'] : "");
						
						$objTpl->getActiveSheet()->setCellValue('CK'.$i, $evkin->jumlah_lk > 0 ? $evkin->jumlah_lk : 0);
						$objTpl->getActiveSheet()->setCellValue('CL'.$i, $evkin->jumlah_p > 0 ? $evkin->jumlah_p : 0);

						$objTpl->getActiveSheet()->setCellValue('CM'.$i, $evkin->detail['administrasi']['plang']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('CN'.$i, !empty($evkin->detail['administrasi']['plang']['keterangan']) ? $evkin->detail['administrasi']['plang']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CO'.$i, $evkin->detail['administrasi']['papan']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('CP'.$i, !empty($evkin->detail['administrasi']['papan']['keterangan']) ? $evkin->detail['administrasi']['papan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CQ'.$i, $evkin->detail['administrasi']['kotak_saran']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('CR'.$i, !empty($evkin->detail['administrasi']['kotak_saran']['keterangan']) ? $evkin->detail['administrasi']['kotak_saran']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CS'.$i, $evkin->detail['administrasi']['papan_pengumuman']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('CT'.$i, !empty($evkin->detail['administrasi']['papan_pengumuman']['keterangan']) ? $evkin->detail['administrasi']['papan_pengumuman']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CU'.$i, $evkin->detail['administrasi']['fungsi_papan']['opsi'] == 'a' ? "Berfungsi" : "Tidak Berfungsi");
						$objTpl->getActiveSheet()->setCellValue('CV'.$i, !empty($evkin->detail['administrasi']['fungsi_papan']['keterangan']) ? $evkin->detail['administrasi']['fungsi_papan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CW'.$i, $evkin->detail['administrasi']['buku_tamu']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('CX'.$i, !empty($evkin->detail['administrasi']['buku_tamu']['keterangan']) ? $evkin->detail['administrasi']['buku_tamu']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('CY'.$i, $evkin->detail['administrasi']['buku_anggota']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('CZ'.$i, !empty($evkin->detail['administrasi']['buku_anggota']['keterangan']) ? $evkin->detail['administrasi']['buku_anggota']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DA'.$i, $evkin->detail['administrasi']['buku_notulen']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('DB'.$i, !empty($evkin->detail['administrasi']['buku_notulen']['keterangan']) ? $evkin->detail['administrasi']['buku_notulen']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DC'.$i, $evkin->detail['administrasi']['buku_inventaris']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('DD'.$i, !empty($evkin->detail['administrasi']['buku_inventaris']['keterangan']) ? $evkin->detail['administrasi']['buku_inventaris']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DE'.$i, $evkin->detail['administrasi']['buku_hadir']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('DF'.$i, !empty($evkin->detail['administrasi']['buku_hadir']['keterangan']) ? $evkin->detail['administrasi']['buku_hadir']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DG'.$i, $evkin->detail['administrasi']['buku_kas']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('DH'.$i, !empty($evkin->detail['administrasi']['buku_kas']['keterangan']) ? $evkin->detail['administrasi']['buku_kas']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DI'.$i, $evkin->detail['administrasi']['buku_bank']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('DJ'.$i, !empty($evkin->detail['administrasi']['buku_bank']['keterangan']) ? $evkin->detail['administrasi']['buku_bank']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DK'.$i, $evkin->detail['administrasi']['transaksi']['opsi'] == 'a' ? "Sesuai" : "Tidak Sesuai");
						$objTpl->getActiveSheet()->setCellValue('DL'.$i, !empty($evkin->detail['administrasi']['transaksi']['keterangan']) ? $evkin->detail['administrasi']['transaksi']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DM'.$i, $evkin->detail['administrasi']['tepat_waktu']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('DN'.$i, !empty($evkin->detail['administrasi']['tepat_waktu']['keterangan']) ? $evkin->detail['administrasi']['tepat_waktu']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DO'.$i, $evkin->detail['administrasi']['dokumentasi_transaksi']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('DP'.$i, !empty($evkin->detail['administrasi']['dokumentasi_transaksi']['keterangan']) ? $evkin->detail['administrasi']['dokumentasi_transaksi']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DQ'.$i, $evkin->detail['administrasi']['bukti_transaksi']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('DR'.$i, !empty($evkin->detail['administrasi']['bukti_transaksi']['keterangan']) ? $evkin->detail['administrasi']['bukti_transaksi']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DS'.$i, $evkin->detail['administrasi']['rekapitulasi']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('DT'.$i, !empty($evkin->detail['administrasi']['rekapitulasi']['keterangan']) ? $evkin->detail['administrasi']['rekapitulasi']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DU'.$i, $evkin->detail['administrasi']['laporan']['opsi'] == 'a' ? "Tepat waktu" : "Tidak tepat waktu");
						$objTpl->getActiveSheet()->setCellValue('DV'.$i, !empty($evkin->detail['administrasi']['laporan']['keterangan']) ? $evkin->detail['administrasi']['laporan']['keterangan'] : "");

						$objTpl->getActiveSheet()->setCellValue('DW'.$i, $evkin->detail['kegiatan']['kegiatan_kelompok']['opsi'] == 'a' ? "Sudah" : "Belum");
						$objTpl->getActiveSheet()->setCellValue('DX'.$i, !empty($evkin->detail['kegiatan']['kegiatan_kelompok']['keterangan']) ? $evkin->detail['kegiatan']['kegiatan_kelompok']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('DY'.$i, $evkin->detail['kegiatan']['sdm_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('DZ'.$i, !empty($evkin->detail['kegiatan']['sdm_kelompok']['keterangan']) ? $evkin->detail['kegiatan']['sdm_kelompok']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EA'.$i, $evkin->detail['kegiatan']['keuangan_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('EB'.$i, !empty($evkin->detail['kegiatan']['keuangan_kelompok']['keterangan']) ? $evkin->detail['kegiatan']['keuangan_kelompok']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EC'.$i, $evkin->detail['kegiatan']['sarana_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('ED'.$i, !empty($evkin->detail['kegiatan']['sarana_kelompok']['keterangan']) ? $evkin->detail['kegiatan']['sarana_kelompok']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EE'.$i, !empty($evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['nama']) ? $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('EF'.$i, $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('EG'.$i, !empty($evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['keterangan']) ? $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EH'.$i, $evkin->detail['kegiatan']['kegiatan_masyarakat']['opsi'] == 'a' ? "Sudah" : "Belum");
						$objTpl->getActiveSheet()->setCellValue('EI'.$i, !empty($evkin->detail['kegiatan']['kegiatan_masyarakat']['keterangan']) ? $evkin->detail['kegiatan']['kegiatan_masyarakat']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EJ'.$i, $evkin->detail['kegiatan']['sdm_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('EK'.$i, !empty($evkin->detail['kegiatan']['sdm_masyarakat']['keterangan']) ? $evkin->detail['kegiatan']['sdm_masyarakat']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EL'.$i, $evkin->detail['kegiatan']['keuangan_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('EM'.$i, !empty($evkin->detail['kegiatan']['keuangan_masyarakat']['keterangan']) ? $evkin->detail['kegiatan']['keuangan_masyarakat']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EN'.$i, $evkin->detail['kegiatan']['sarana_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('EO'.$i, !empty($evkin->detail['kegiatan']['sarana_masyarakat']['keterangan']) ? $evkin->detail['kegiatan']['sarana_masyarakat']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EP'.$i, !empty($evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['nama']) ? $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('EQ'.$i, $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('ER'.$i, !empty($evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['keterangan']) ? $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('ES'.$i, !empty($evkin->detail['kegiatan']['persentase']) ? $evkin->detail['kegiatan']['persentase'] : "");

						if($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'tidak') $evkin->detail['produksi']['budidaya_sebelum']['opsi'] = "Tidak Ada";
						if($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'a') $evkin->detail['produksi']['budidaya_sebelum']['opsi'] = "1 Kali setahun";
						if($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'b') $evkin->detail['produksi']['budidaya_sebelum']['opsi'] = "2 Kali setahun";
						if($evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'c') $evkin->detail['produksi']['budidaya_sebelum']['opsi'] = "3 Kali setahun";
						$objTpl->getActiveSheet()->setCellValue('ET'.$i, $evkin->detail['produksi']['budidaya_sebelum']['opsi']);
						$objTpl->getActiveSheet()->setCellValue('EU'.$i, !empty($evkin->detail['produksi']['budidaya_sebelum']['keterangan']) ? $evkin->detail['produksi']['budidaya_sebelum']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EV'.$i, !empty($evkin->detail['produksi']['hasil_sebelum']['opsi']) ? $evkin->detail['produksi']['hasil_sebelum']['opsi'] : "");
						$objTpl->getActiveSheet()->setCellValue('EW'.$i, !empty($evkin->detail['produksi']['hasil_sebelum']['keterangan']) ? $evkin->detail['produksi']['hasil_sebelum']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('EX'.$i, !empty($evkin->detail['produksi']['harga_sebelum']['opsi']) ? $evkin->detail['produksi']['harga_sebelum']['opsi'] : "");
						$objTpl->getActiveSheet()->setCellValue('EY'.$i, !empty($evkin->detail['produksi']['harga_sebelum']['keterangan']) ? $evkin->detail['produksi']['harga_sebelum']['keterangan'] : "");

						if($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'tidak') $evkin->detail['produksi']['budidaya_setelah']['opsi'] = "Tidak Ada";
						if($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'a') $evkin->detail['produksi']['budidaya_setelah']['opsi'] = "1 Kali setahun";
						if($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'b') $evkin->detail['produksi']['budidaya_setelah']['opsi'] = "2 Kali setahun";
						if($evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'c') $evkin->detail['produksi']['budidaya_setelah']['opsi'] = "3 Kali setahun";
						$objTpl->getActiveSheet()->setCellValue('EZ'.$i, $evkin->detail['produksi']['budidaya_setelah']['opsi']);
						$objTpl->getActiveSheet()->setCellValue('FA'.$i, !empty($evkin->detail['produksi']['budidaya_setelah']['keterangan']) ? $evkin->detail['produksi']['budidaya_setelah']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FB'.$i, !empty($evkin->detail['produksi']['hasil_setelah']['opsi']) ? $evkin->detail['produksi']['hasil_setelah']['opsi'] : "");
						$objTpl->getActiveSheet()->setCellValue('FC'.$i, !empty($evkin->detail['produksi']['hasil_setelah']['keterangan']) ? $evkin->detail['produksi']['hasil_setelah']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FD'.$i, !empty($evkin->detail['produksi']['harga_setelah']['opsi']) ? $evkin->detail['produksi']['harga_setelah']['opsi'] : "");
						$objTpl->getActiveSheet()->setCellValue('FE'.$i, !empty($evkin->detail['produksi']['harga_setelah']['keterangan']) ? $evkin->detail['produksi']['harga_setelah']['keterangan'] : "");

						$objTpl->getActiveSheet()->setCellValue('FF'.$i, $evkin->detail['kontribusi']['dana']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('FG'.$i, !empty($evkin->detail['kontribusi']['dana']['keterangan']) ? $evkin->detail['kontribusi']['dana']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FH'.$i, $evkin->detail['kontribusi']['tenaga']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('FI'.$i, !empty($evkin->detail['kontribusi']['tenaga']['keterangan']) ? $evkin->detail['kontribusi']['tenaga']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FJ'.$i, $evkin->detail['kontribusi']['material']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('FK'.$i, !empty($evkin->detail['kontribusi']['material']['keterangan']) ? $evkin->detail['kontribusi']['material']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FL'.$i, !empty($evkin->detail['kontribusi']['lainnya']['nama']) ? $evkin->detail['kontribusi']['lainnya']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('FM'.$i, $evkin->detail['kontribusi']['lainnya']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('FN'.$i, !empty($evkin->detail['kontribusi']['lainnya']['keterangan']) ? $evkin->detail['kontribusi']['lainnya']['keterangan'] : "");

						$objTpl->getActiveSheet()->setCellValue('FO'.$i, $evkin->detail['kemitraan']['perencanaan']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('FP'.$i, !empty($evkin->detail['kemitraan']['perencanaan']['keterangan']) ? $evkin->detail['kemitraan']['perencanaan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FQ'.$i, $evkin->detail['kemitraan']['mkpp']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('FR'.$i, !empty($evkin->detail['kemitraan']['mkpp']['keterangan']) ? $evkin->detail['kemitraan']['mkpp']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FS'.$i, $evkin->detail['kemitraan']['mkp1']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('FT'.$i, !empty($evkin->detail['kemitraan']['mkp1']['keterangan']) ? $evkin->detail['kemitraan']['mkp1']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FU'.$i, $evkin->detail['kemitraan']['mkp2']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('FV'.$i, !empty($evkin->detail['kemitraan']['mkp2']['keterangan']) ? $evkin->detail['kemitraan']['mkp2']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FW'.$i, $evkin->detail['kemitraan']['mkst']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('FX'.$i, !empty($evkin->detail['kemitraan']['mkst']['keterangan']) ? $evkin->detail['kemitraan']['mkst']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('FY'.$i, $evkin->detail['kemitraan']['pemantauan']['opsi'] == 'a' ? "Berperan" : "Tidak Berperan");
						$objTpl->getActiveSheet()->setCellValue('FZ'.$i, !empty($evkin->detail['kemitraan']['pemantauan']['keterangan']) ? $evkin->detail['kemitraan']['pemantauan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GA'.$i, $evkin->detail['kemitraan']['mitra']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GB'.$i, !empty($evkin->detail['kemitraan']['mitra']['keterangan']) ? $evkin->detail['kemitraan']['mitra']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GC'.$i, $evkin->detail['kemitraan']['uptd_kecamatan']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GD'.$i, !empty($evkin->detail['kemitraan']['uptd_kecamatan']['keterangan']) ? $evkin->detail['kemitraan']['uptd_kecamatan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GE'.$i, $evkin->detail['kemitraan']['pendamping_kampung']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GF'.$i, !empty($evkin->detail['kemitraan']['pendamping_kampung']['keterangan']) ? $evkin->detail['kemitraan']['pendamping_kampung']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GG'.$i, $evkin->detail['kemitraan']['bpmd_distrik']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GH'.$i, !empty($evkin->detail['kemitraan']['bpmd_distrik']['keterangan']) ? $evkin->detail['kemitraan']['bpmd_distrik']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GI'.$i, $evkin->detail['kemitraan']['pendamping_distrik']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GJ'.$i, !empty($evkin->detail['kemitraan']['pendamping_distrik']['keterangan']) ? $evkin->detail['kemitraan']['pendamping_distrik']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GK'.$i, $evkin->detail['kemitraan']['penyuluh']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GL'.$i, !empty($evkin->detail['kemitraan']['penyuluh']['keterangan']) ? $evkin->detail['kemitraan']['penyuluh']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GM'.$i, $evkin->detail['kemitraan']['bpmd_kabupaten']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GN'.$i, !empty($evkin->detail['kemitraan']['bpmd_kabupaten']['keterangan']) ? $evkin->detail['kemitraan']['bpmd_kabupaten']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GO'.$i, !empty($evkin->detail['kemitraan']['lainnya']['nama']) ? $evkin->detail['kemitraan']['lainnya']['nama'] : "");
						$objTpl->getActiveSheet()->setCellValue('GP'.$i, $evkin->detail['kemitraan']['lainnya']['opsi'] == 'a' ? "Ya" : "Tidak");
						$objTpl->getActiveSheet()->setCellValue('GQ'.$i, !empty($evkin->detail['kemitraan']['lainnya']['keterangan']) ? $evkin->detail['kemitraan']['lainnya']['keterangan'] : "");

						$objTpl->getActiveSheet()->setCellValue('GR'.$i, $evkin->detail['keberlanjutan']['bantuan']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('GS'.$i, !empty($evkin->detail['keberlanjutan']['bantuan']['keterangan']) ? $evkin->detail['keberlanjutan']['bantuan']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GT'.$i, $evkin->detail['keberlanjutan']['dana_desa']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('GU'.$i, !empty($evkin->detail['keberlanjutan']['dana_desa']['keterangan']) ? $evkin->detail['keberlanjutan']['dana_desa']['keterangan'] : "");
						$objTpl->getActiveSheet()->setCellValue('GV'.$i, $evkin->detail['keberlanjutan']['institusi_lain']['opsi'] == 'a' ? "Ada" : "Tidak Ada");
						$objTpl->getActiveSheet()->setCellValue('GW'.$i, !empty($evkin->detail['keberlanjutan']['institusi_lain']['keterangan']) ? $evkin->detail['keberlanjutan']['institusi_lain']['keterangan'] : "");

						$hitung = round(($evkin->hasil_struktur + $evkin->hasil_operasional + $evkin->hasil_pertemuan + $evkin->hasil_administrasi + $evkin->hasil_kegiatan + $evkin->hasil_produksi + $evkin->hasil_kontribusi + $evkin->hasil_kemitraan + $evkin->hasil_keberlanjutan)/9);
					
						if($hitung >= 67) $hasil = $hitung .' (UTAMA)';
						elseif($hitung >= 34 && $hitung <= 66) $hasil = $hitung .' (MADYA)';
						else $hasil = $hitung .' (PEMULA)';

						$objTpl->getActiveSheet()->setCellValue('GX'.$i, $hitung);
						$objTpl->getActiveSheet()->setCellValue('GY'.$i, !empty($evkin->detail['pembinaan']['pjo_kabupaten']) ? $evkin->detail['pembinaan']['pjo_kabupaten'] : "");
						$objTpl->getActiveSheet()->setCellValue('GZ'.$i, !empty($evkin->detail['pembinaan']['ketua']) ? $evkin->detail['pembinaan']['ketua'] : "");
						$objTpl->getActiveSheet()->setCellValue('HA'.$i, !empty($evkin->detail['pembinaan']['pendamping']) ? $evkin->detail['pembinaan']['pendamping'] : "");
						
						$i++;
					}


					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="List Evaluasi Kinerja '. $this->input->post('dari') .' - '. $this->input->post('sampai') .'.xls"');
					header('Cache-Control: max-age=0');

					$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');
					$objWriter->save('php://output');

					exit;
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Gagal Ekspor Evaluasi Kinerja!</strong> Tidak ada evaluasi kinerja dalam kurun waktu yang ditentukan.');
					redirect('evkin');
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

			$data['list_evkin'] = $this->evkin_model->get_by_criteria()
				->select('*')
				->join('provinsi', 'provinsi.provinsi_code = evkin.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = evkin.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = evkin.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = evkin.desa_id', 'left')
				->order_by('id DESC')
				->where($searchQuery)
				->get()
				->result();
		}
		else{
			$data['list_evkin'] = $this->evkin_model->get_by_criteria()
				->select('*')
				->order_by('id DESC')
				->get()
				->result();
		}

		$this->template
			->set_layout('page')
			->title('Daftar Evaluasi Kinerja')
			->build('evkin/index', $data);
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

		$data['evkin'] = $this->evkin_model->get_by_criteria()
			->select('*')
			->join('provinsi', 'provinsi.provinsi_code = evkin.provinsi_id', 'left')
			->join('kabupaten', 'kabupaten.kabupaten_code = evkin.kabupaten_id', 'left')
			->join('kecamatan', 'kecamatan.kecamatan_code = evkin.kecamatan_id', 'left')
			->join('desa', 'desa.desa_code = evkin.desa_id', 'left')
			->where('evkin.id = ' . $id . $searchQuery)
			->get()
			->row();

		if(empty($data['evkin']) || (!$this->permission->check_permission($this->modules, 'all') && ($data['evkin']->id_operator != $this->session->userdata('user_id') && $this->session->userdata('edit_saran') == 0))){
			redirect('evkin');
		}

		$data['evkin']->detail = unserialize($data['evkin']->detail);

		$this->template
			->set_layout('page')
			->title('Detail Evaluasi Kinerja')
			->build('evkin/detail', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$evkin = $this->input->post('data');
			$evkin['nama'] = strtoupper($evkin['nama']);
			$evkin['id_operator'] = $this->session->userdata('user_id');
			$evkin['tanggal'] = date_reverse($evkin['tanggal']);

			$evkin['hasil_struktur'] = 0;
			if($evkin['detail']['struktur']['ketua']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['bendahara']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['sekertaris']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['pemasaran']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['peralatan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['perencanaan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkpp']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkp1']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkp2']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkst']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['pemantauan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			$evkin['hasil_struktur'] = round($evkin['hasil_struktur']/11, 2);

			$evkin['hasil_operasional'] = 0;
			if($evkin['detail']['operasional']['tpkk']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['pnpm']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['tujuan_kelompok']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['permasalahan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['tindak_lanjut']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['tujuan_kegiatan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['waktu']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['rencana']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['biaya']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['penanggungjawab']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['sesuai']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['sdm']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['keuangan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['sarana']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			$evkin['hasil_operasional'] = round($evkin['hasil_operasional']/15, 2);

			$evkin['hasil_pertemuan'] = 0;
			if($evkin['detail']['pertemuan']['perencanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['permasalahan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['pertemuan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['frekuensi']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			$evkin['hasil_pertemuan'] = round($evkin['hasil_pertemuan']/6);

			$evkin['hasil_administrasi'] = 0;
			if($evkin['detail']['administrasi']['plang']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['papan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['kotak_saran']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['papan_pengumuman']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['fungsi_papan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_tamu']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_anggota']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_notulen']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_inventaris']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_hadir']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_kas']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_bank']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['tepat_waktu']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['dokumentasi_transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['bukti_transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['rekapitulasi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['laporan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			$evkin['hasil_administrasi'] = round($evkin['hasil_administrasi']/18);


			$evkin['hasil_kegiatan'] = 0;
			if($evkin['detail']['kegiatan']['kegiatan_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sdm_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['keuangan_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sarana_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['kegiatan_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sdm_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['keuangan_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sarana_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			$evkin['hasil_kegiatan'] = round($evkin['hasil_kegiatan']/8);


			$evkin['hasil_produksi'] = 0;
			if($evkin['detail']['produksi']['budidaya_sebelum']['opsi'] == 'a') $evkin['hasil_produksi'] += 100;
			if($evkin['detail']['produksi']['budidaya_setelah']['opsi'] == 'a') $evkin['hasil_produksi'] += 100;
			$evkin['hasil_produksi'] = round($evkin['hasil_produksi']/2);


			$evkin['hasil_kontribusi'] = 0;
			if($evkin['detail']['kontribusi']['dana']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
			if($evkin['detail']['kontribusi']['tenaga']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
			if($evkin['detail']['kontribusi']['material']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
			$evkin['hasil_kontribusi'] = round($evkin['hasil_kontribusi']/3);


			$evkin['hasil_kemitraan'] = 0;
			if($evkin['detail']['kemitraan']['perencanaan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkpp']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkp1']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkp2']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkst']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['pemantauan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mitra']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['uptd_kecamatan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['pendamping_kampung']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['bpmd_distrik']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['pendamping_distrik']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['penyuluh']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['bpmd_kabupaten']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			$evkin['hasil_kemitraan'] = round($evkin['hasil_kemitraan']/13);


			$evkin['hasil_keberlanjutan'] = 0;
			if($evkin['detail']['keberlanjutan']['bantuan']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
			if($evkin['detail']['keberlanjutan']['dana_desa']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
			if($evkin['detail']['keberlanjutan']['institusi_lain']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
			$evkin['hasil_keberlanjutan'] = round($evkin['hasil_keberlanjutan']/3);

			$evkin['detail'] = serialize($evkin['detail']);

			$this->evkin_model->save($evkin);

			$this->session->set_flashdata('success_message', 'Evaluasi kinerja berhasil ditambahkan.');
			redirect('evkin');
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
			->title('Tambah Evaluasi Kinerja')
			->build('evkin/tambah', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit') || empty($id)){
			show_404();
		}

		if($this->input->post()){
			$evkin = $this->input->post('data');
			$evkin['nama'] = strtoupper($evkin['nama']);
			$evkin['tanggal'] = date_reverse($evkin['tanggal']);

			$evkin['hasil_struktur'] = 0;
			if($evkin['detail']['struktur']['ketua']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['bendahara']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['sekertaris']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['pemasaran']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['peralatan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['perencanaan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkpp']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkp1']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkp2']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['mkst']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			if($evkin['detail']['struktur']['pemantauan']['opsi'] == 'a') $evkin['hasil_struktur'] += 100;
			$evkin['hasil_struktur'] = round($evkin['hasil_struktur']/11, 2);

			$evkin['hasil_operasional'] = 0;
			if($evkin['detail']['operasional']['tpkk']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['pnpm']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['tujuan_kelompok']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['permasalahan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['tindak_lanjut']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['tujuan_kegiatan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['waktu']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['rencana']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['biaya']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['penanggungjawab']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['sesuai']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['sdm']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['keuangan']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			if($evkin['detail']['operasional']['sarana']['opsi'] == 'a') $evkin['hasil_operasional'] += 100;
			$evkin['hasil_operasional'] = round($evkin['hasil_operasional']/15, 2);

			$evkin['hasil_pertemuan'] = 0;
			if($evkin['detail']['pertemuan']['perencanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['permasalahan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['pertemuan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['pelaksanaan']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			if($evkin['detail']['pertemuan']['frekuensi']['opsi'] == 'a') $evkin['hasil_pertemuan'] += 100;
			$evkin['hasil_pertemuan'] = round($evkin['hasil_pertemuan']/6);

			$evkin['hasil_administrasi'] = 0;
			if($evkin['detail']['administrasi']['plang']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['papan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['kotak_saran']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['papan_pengumuman']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['fungsi_papan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_tamu']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_anggota']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_notulen']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_inventaris']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_hadir']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_kas']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['buku_bank']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['tepat_waktu']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['dokumentasi_transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['bukti_transaksi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['rekapitulasi']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			if($evkin['detail']['administrasi']['laporan']['opsi'] == 'a') $evkin['hasil_administrasi'] += 100;
			$evkin['hasil_administrasi'] = round($evkin['hasil_administrasi']/18);


			$evkin['hasil_kegiatan'] = 0;
			if($evkin['detail']['kegiatan']['kegiatan_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sdm_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['keuangan_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sarana_kelompok']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['kegiatan_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sdm_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['keuangan_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			if($evkin['detail']['kegiatan']['sarana_masyarakat']['opsi'] == 'a') $evkin['hasil_kegiatan'] += 100;
			$evkin['hasil_kegiatan'] = round($evkin['hasil_kegiatan']/8);


			$evkin['hasil_produksi'] = 0;
			if($evkin['detail']['produksi']['budidaya_sebelum']['opsi'] == 'a') $evkin['hasil_produksi'] += 100;
			if($evkin['detail']['produksi']['budidaya_setelah']['opsi'] == 'a') $evkin['hasil_produksi'] += 100;
			$evkin['hasil_produksi'] = round($evkin['hasil_produksi']/2);


			$evkin['hasil_kontribusi'] = 0;
			if($evkin['detail']['kontribusi']['dana']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
			if($evkin['detail']['kontribusi']['tenaga']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
			if($evkin['detail']['kontribusi']['material']['opsi'] == 'a') $evkin['hasil_kontribusi'] += 100;
			$evkin['hasil_kontribusi'] = round($evkin['hasil_kontribusi']/3);


			$evkin['hasil_kemitraan'] = 0;
			if($evkin['detail']['kemitraan']['perencanaan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkpp']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkp1']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkp2']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mkst']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['pemantauan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['mitra']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['uptd_kecamatan']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['pendamping_kampung']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['bpmd_distrik']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['pendamping_distrik']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['penyuluh']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			if($evkin['detail']['kemitraan']['bpmd_kabupaten']['opsi'] == 'a') $evkin['hasil_kemitraan'] += 100;
			$evkin['hasil_kemitraan'] = round($evkin['hasil_kemitraan']/13);


			$evkin['hasil_keberlanjutan'] = 0;
			if($evkin['detail']['keberlanjutan']['bantuan']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
			if($evkin['detail']['keberlanjutan']['dana_desa']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
			if($evkin['detail']['keberlanjutan']['institusi_lain']['opsi'] == 'a') $evkin['hasil_keberlanjutan'] += 100;
			$evkin['hasil_keberlanjutan'] = round($evkin['hasil_keberlanjutan']/3);

			$evkin['detail'] = serialize($evkin['detail']);

			$this->evkin_model->save($evkin, $id);

			$this->session->set_flashdata('success_message', 'Evaluasi kinerja berhasil diubah.');
			redirect('evkin');
		}

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['evkin'] = $this->evkin_model->get($id);

		if((!$this->permission->check_permission($this->modules, 'all') && $data['evkin']->id_operator != $this->session->userdata('user_id'))){
			redirect('evkin');
		}
		$data['evkin']->detail = unserialize($data['evkin']->detail);

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$data['evkin']->kabupaten = (array) $this->kabupaten_model->get_by_criteria()
			->select('kabupaten_code AS id, kabupaten_name as text')
			->where('kabupaten_code', $data['evkin']->kabupaten_id)
			->get()
			->row();

		$data['evkin']->kecamatan = (array) $this->kecamatan_model->get_by_criteria()
			->select('kecamatan_code AS id, kecamatan_name as text')
			->where('kecamatan_code', $data['evkin']->kecamatan_id)
			->get()
			->row();

		$data['evkin']->desa = (array) $this->desa_model->get_by_criteria()
			->select('desa_code AS id, desa_name as text')
			->where('desa_code', $data['evkin']->desa_id)
			->get()
			->row();

		if(!empty($data['evkin']->kabupaten)){
			$data['evkin']->kabupaten['text'] = $data['evkin']->kabupaten['id'] ." - ". $data['evkin']->kabupaten['text'];
		}
		if(!empty($data['evkin']->kecamatan)){
			$data['evkin']->kecamatan['text'] = $data['evkin']->kecamatan['id'] ." - ". $data['evkin']->kecamatan['text'];
		}
		if(!empty($data['evkin']->desa)){
			$data['evkin']->desa['text'] = $data['evkin']->desa['id'] ." - ". $data['evkin']->desa['text'];
		}

		$this->template
			->set_layout('page')
			->title('Edit Profil Kelompok')
			->build('evkin/edit', $data);
	}

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$evkin = $this->evkin_model->get($id);


		if((!$this->permission->check_permission($this->modules, 'all') && $evkin->id_operator != $this->session->userdata('user_id'))){
			redirect('evkin');
		}

		$this->evkin_model->delete($evkin->id);

		$this->session->set_flashdata('success_message', 'Evaluasi kinerja berhasil dihapus.');
		redirect("evkin");
	}
}
