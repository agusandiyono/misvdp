<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rkpdes extends MY_Controller {
	private $modules = array('rkpdes');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rkpdes_model');
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
			$this->load->view('rkpdes/impor', $data);
		}
		else if($where == "ekspor"){
			$this->load->view('rkpdes/ekspor', $data);
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
					$file = $_FILES['file']['tmp_name'];
					$ekstension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

					if(!in_array($ekstension, array('xls', 'xlsx')) ) {
						$this->session->set_flashdata('error_message', 'File impor RKPDES tidak diperbolehkan selain dari xls dan xlsx.');
						redirect('rkpdes');
					}

					$this->load->library('excel');

					$objPHPExcel = PHPExcel_IOFactory::load($file);
					
					$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

					$all_row_data = array();
					foreach ($cell_collection as $cell) {
						$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
						$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
						$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
						if ($row > 2) {
							$all_row_data[$row][$column] = $data_value;
						}
					}

					$all_row_data = array_filter(array_map('array_filter', $all_row_data));

					foreach($all_row_data as $row_data) {
						$rkpdes = array();
						$rkpdes['id_operator'] = $this->session->userdata('user_id');
						$rkpdes['provinsi_id'] = $this->input->post('provinsi');
						$rkpdes['kabupaten_id'] = $this->input->post('kabupaten');
						$rkpdes['kecamatan_id'] = $this->input->post('kecamatan');
						$rkpdes['desa_id'] = $this->input->post('desa');
						$rkpdes['jumlah_dana_desa'] = !empty($row_data['A']) ? $row_data['A'] : "";
						$rkpdes['jumlah_alokasi_dana_desa'] = !empty($row_data['B']) ? $row_data['B'] : "";
						$rkpdes['jenis'] = !empty($row_data['C']) ? $row_data['C'] : "";
						$rkpdes['volume'] = !empty($row_data['D']) ? $row_data['D'] : "";
						$rkpdes['nilai'] = !empty($row_data['E']) ? $row_data['E'] : "";
						$rkpdes['sumber_dana_desa'] = !empty($row_data['F']) ? $row_data['F'] : "";
						$rkpdes['sumber_alokasi_dana_desa'] = !empty($row_data['G']) ? $row_data['G'] : "";
						$rkpdes['persentase'] = !empty($row_data['H']) ? $row_data['H'] : "";
						$rkpdes['pengelola'] = !empty($row_data['I']) ? $row_data['I'] : "";
						$rkpdes['keterangan'] = !empty($row_data['J']) ? $row_data['J'] : "";

						$this->rkpdes_model->save($rkpdes);
					}

					$this->session->set_flashdata('success_message', 'RKPDES berhasil diimport.');
					redirect('rkpdes');
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
					$list_rkpdes = $this->rkpdes_model->get_by_criteria()
						->select('*')
						->join('provinsi', 'provinsi.provinsi_code = rkpdes.provinsi_id', 'left')
						->join('kabupaten', 'kabupaten.kabupaten_code = rkpdes.kabupaten_id', 'left')
						->join('kecamatan', 'kecamatan.kecamatan_code = rkpdes.kecamatan_id', 'left')
						->join('desa', 'desa.desa_code = rkpdes.desa_id', 'left')
						->where('id_operator = ' . $this->session->userdata('user_id') . $lokasi)
						->order_by('id DESC, provinsi_name ASC, kabupaten_name ASC, kecamatan_name ASC, desa_name ASC')
						->get()
						->result();
				}
				else{
					if(!empty($lokasi)){
						$list_rkpdes = $this->rkpdes_model->get_by_criteria()
							->select('*')
							->join('provinsi', 'provinsi.provinsi_code = rkpdes.provinsi_id', 'left')
							->join('kabupaten', 'kabupaten.kabupaten_code = rkpdes.kabupaten_id', 'left')
							->join('kecamatan', 'kecamatan.kecamatan_code = rkpdes.kecamatan_id', 'left')
							->join('desa', 'desa.desa_code = rkpdes.desa_id', 'left')
							->order_by('id DESC, provinsi_name ASC, kabupaten_name ASC, kecamatan_name ASC, desa_name ASC')
							->where(substr($lokasi, 5))
							->get()
							->result();
					}
					else{
						$list_rkpdes = $this->rkpdes_model->get_by_criteria()
							->select('*')
							->join('provinsi', 'provinsi.provinsi_code = rkpdes.provinsi_id', 'left')
							->join('kabupaten', 'kabupaten.kabupaten_code = rkpdes.kabupaten_id', 'left')
							->join('kecamatan', 'kecamatan.kecamatan_code = rkpdes.kecamatan_id', 'left')
							->join('desa', 'desa.desa_code = rkpdes.desa_id', 'left')
							->order_by('id DESC, provinsi_name ASC, kabupaten_name ASC, kecamatan_name ASC, desa_name ASC')
							->get()
							->result();
					}
				}

				if(!empty($list_rkpdes)){
					$this->load->library('excel');

					$objTpl = PHPExcel_IOFactory::load("uploads/Format Ekspor RKPDES.xlsx");
					$objTpl->setActiveSheetIndex(0);

					$i = 3;
					foreach ($list_rkpdes as $rkpdes) {
						$objTpl->getActiveSheet()->setCellValue('A'.$i, $rkpdes->provinsi_name);
						$objTpl->getActiveSheet()->setCellValue('B'.$i, $rkpdes->kabupaten_name);
						$objTpl->getActiveSheet()->setCellValue('C'.$i, date_reverse($rkpdes->kecamatan_name));
						$objTpl->getActiveSheet()->setCellValue('D'.$i, $rkpdes->desa_name);
						$objTpl->getActiveSheet()->setCellValue('E'.$i, price_format($rkpdes->jumlah_dana_desa));
						$objTpl->getActiveSheet()->setCellValue('F'.$i, price_format($rkpdes->jumlah_alokasi_dana_desa));
						$objTpl->getActiveSheet()->setCellValue('G'.$i, $rkpdes->jenis);
						$objTpl->getActiveSheet()->setCellValue('H'.$i, $rkpdes->volume);
						$objTpl->getActiveSheet()->setCellValue('I'.$i, $rkpdes->nilai);
						$objTpl->getActiveSheet()->setCellValue('J'.$i, price_format($rkpdes->sumber_dana_desa));
						$objTpl->getActiveSheet()->setCellValue('K'.$i, price_format($rkpdes->sumber_alokasi_dana_desa));
						$objTpl->getActiveSheet()->setCellValue('L'.$i, $rkpdes->persentase);
						$objTpl->getActiveSheet()->setCellValue('M'.$i, $rkpdes->pengelola);
						$objTpl->getActiveSheet()->setCellValue('N'.$i, $rkpdes->keterangan);
						$i++;
					}

					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="List RKPDES.xls"');
					header('Cache-Control: max-age=0');

					$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');
					$objWriter->save('php://output');

					exit;
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Gagal Ekspor RKPDES!</strong> Tidak ada data RKPDES untuk saat ini.');
					redirect('rkpdes');
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

			$data['list_rkpdes'] = $this->rkpdes_model->get_by_criteria()
				->select('*')
				->join('provinsi', 'provinsi.provinsi_code = rkpdes.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = rkpdes.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = rkpdes.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = rkpdes.desa_id', 'left')
				->order_by('id DESC')
				->where($searchQuery)
				->get()
				->result();
		}
		else{
			$data['list_rkpdes'] = $this->rkpdes_model->get_by_criteria()
				->select('*')
				->join('provinsi', 'provinsi.provinsi_code = rkpdes.provinsi_id', 'left')
				->join('kabupaten', 'kabupaten.kabupaten_code = rkpdes.kabupaten_id', 'left')
				->join('kecamatan', 'kecamatan.kecamatan_code = rkpdes.kecamatan_id', 'left')
				->join('desa', 'desa.desa_code = rkpdes.desa_id', 'left')
				->order_by('id DESC')
				->get()
				->result();
		}

		$this->template
			->set_layout('page')
			->title('Daftar RKPDES')
			->build('rkpdes/index', $data);
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

		$data['rkpdes'] = $this->rkpdes_model->get_by_criteria()
			->select('*')
			->join('provinsi', 'provinsi.provinsi_code = rkpdes.provinsi_id', 'left')
			->join('kabupaten', 'kabupaten.kabupaten_code = rkpdes.kabupaten_id', 'left')
			->join('kecamatan', 'kecamatan.kecamatan_code = rkpdes.kecamatan_id', 'left')
			->join('desa', 'desa.desa_code = rkpdes.desa_id', 'left')
			->where('rkpdes.id = ' . $id . $searchQuery)
			->get()
			->row();

		if(empty($data['rkpdes']) || (!$this->permission->check_permission($this->modules, 'all') && ($data['rkpdes']->id_operator != $this->session->userdata('user_id') && $this->session->userdata('edit_saran') == 0))){
			redirect('rkpdes');
		}

		$this->template
			->set_layout('page')
			->title('Detail RKPDES')
			->build('rkpdes/detail', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$rkpdes = $this->input->post('data');
			$rkpdes['id_operator'] = $this->session->userdata('user_id');
			$rkpdes['persentase'] = ($rkpdes['sumber_dana_desa']*100)/$rkpdes['jumlah_dana_desa'];

			$this->rkpdes_model->save($rkpdes);

			$this->session->set_flashdata('success_message', 'RKPDES berhasil ditambahkan.');
			redirect('rkpdes');
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
			->title('Tambah RKPDES')
			->build('rkpdes/tambah', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit') || empty($id)){
			show_404();
		}

		if($this->input->post()){
			$rkpdes = $this->input->post('data');
			$rkpdes['persentase'] = ($rkpdes['sumber_dana_desa']*100)/$rkpdes['jumlah_dana_desa'];

			$this->rkpdes_model->save($rkpdes, $id);

			$this->session->set_flashdata('success_message', 'RKPDES berhasil diubah.');
			redirect('rkpdes');
		}

		$this->load->model('provinsi_model');
		$this->load->model('kabupaten_model');
		$this->load->model('kecamatan_model');
		$this->load->model('desa_model');

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['rkpdes'] = $this->rkpdes_model->get($id);

		if((!$this->permission->check_permission($this->modules, 'all') && $data['rkpdes']->id_operator != $this->session->userdata('user_id'))){
			redirect('rkpdes');
		}

		$data['list_provinsi'] = $this->provinsi_model->get_by_criteria()
			->select('*')
			->order_by('provinsi_code ASC')
			->get()
			->result();

		$data['rkpdes']->kabupaten = (array) $this->kabupaten_model->get_by_criteria()
			->select('kabupaten_code AS id, kabupaten_name as text')
			->where('kabupaten_code', $data['rkpdes']->kabupaten_id)
			->get()
			->row();

		$data['rkpdes']->kecamatan = (array) $this->kecamatan_model->get_by_criteria()
			->select('kecamatan_code AS id, kecamatan_name as text')
			->where('kecamatan_code', $data['rkpdes']->kecamatan_id)
			->get()
			->row();

		$data['rkpdes']->desa = (array) $this->desa_model->get_by_criteria()
			->select('desa_code AS id, desa_name as text')
			->where('desa_code', $data['rkpdes']->desa_id)
			->get()
			->row();

		if(!empty($data['rkpdes']->kabupaten)){
			$data['rkpdes']->kabupaten['text'] = $data['rkpdes']->kabupaten['id'] ." - ". $data['rkpdes']->kabupaten['text'];
		}
		if(!empty($data['rkpdes']->kecamatan)){
			$data['rkpdes']->kecamatan['text'] = $data['rkpdes']->kecamatan['id'] ." - ". $data['rkpdes']->kecamatan['text'];
		}
		if(!empty($data['rkpdes']->desa)){
			$data['rkpdes']->desa['text'] = $data['rkpdes']->desa['id'] ." - ". $data['rkpdes']->desa['text'];
		}

		$this->template
			->set_layout('page')
			->title('Edit RKPDES')
			->build('rkpdes/edit', $data);
	}

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$rkpdes = $this->rkpdes_model->get($id);


		if((!$this->permission->check_permission($this->modules, 'all') && $rkpdes->id_operator != $this->session->userdata('user_id'))){
			redirect('rkpdes');
		}

		$this->rkpdes_model->delete($rkpdes->id);

		$this->session->set_flashdata('success_message', 'RKPDES berhasil dihapus.');
		redirect("rkpdes");
	}
}
