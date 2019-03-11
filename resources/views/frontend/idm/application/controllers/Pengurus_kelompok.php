<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus_kelompok extends MY_Controller {
	private $modules = array('pengurus_kelompok');

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengurus_kelompok_model');
	}

	public function modal($where = null)
	{
		if(!$this->permission->check_permission($this->modules, 'add') || !IS_AJAX){
			show_404();
		}

		$data['where'] = $where;

		if($where == "impor"){
			$this->load->view('pengurus_kelompok/impor', $data);
		}
		else if($where == "ekspor"){
			$this->load->view('pengurus_kelompok/ekspor', $data);
		}
	}

	public function index()
	{
		if(!$this->permission->check_module($this->modules)){
			show_404();
		}

		if($this->input->post()){
			if($this->input->post('where') == "impor"){
				if(!empty($_FILES['file']['name'])){
					$file = $_FILES['file']['tmp_name'];
					$ekstension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

					if(!in_array($ekstension, array('xls', 'xlsx')) ) {
						$this->session->set_flashdata('error_message', 'File impor pengurus tidak diperbolehkan selain dari xls dan xlsx.');
						redirect('pengurus_kelompok');
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

					$all_row_data = array_filter(array_map('array_filter', $all_row_data));

					foreach($all_row_data as $row_data) {
						$pengurus = array();
						$pengurus['nama'] = !empty($row_data['A']) ? $row_data['A'] : "";
						$pengurus['jabatan'] = !empty($row_data['B']) ? $row_data['B'] : "";
						$pengurus['jenis_kelamin'] = strtolower($row_data['C']);
						$pengurus['pendidikan'] = $row_data['D'];
						$pengurus['pelatihan'] = $row_data['E'];
						$pengurus['frekuensi_pelatihan'] = $row_data['F'];

						$this->pengurus_kelompok_model->save($pengurus);
					}

					$this->session->set_flashdata('success_message', 'Pengurus berhasil diimport.');
					redirect('pengurus_kelompok');
				}
				elseif(empty($_FILES['file']['name'])){
					$this->session->set_flashdata('error_message', 'Tidak ada file yang diupload.');
					redirect('pengurus_kelompok');
				}
			}
			if($this->input->post('where') == "ekspor"){
				$list_pengurus = $this->pengurus_kelompok_model->get_by_criteria()
					->select('*')
					->order_by('nama ASC')
					->get()
					->result();

				if(!empty($list_pengurus)){
					$this->load->library('excel');

					$objTpl = PHPExcel_IOFactory::load("uploads/Format Ekspor Pengurus Kelompok.xlsx");
					$objTpl->setActiveSheetIndex(0);

					$i = 3;
					foreach ($list_pengurus as $pengurus) {
						$objTpl->getActiveSheet()->setCellValue('A'.$i, $pengurus->nama);
						$objTpl->getActiveSheet()->setCellValue('B'.$i, ucfirst($pengurus->jabatan));
						$objTpl->getActiveSheet()->setCellValue('C'.$i, ucfirst($pengurus->jenis_kelamin));
						$objTpl->getActiveSheet()->setCellValue('D'.$i, $pengurus->pendidikan);
						$objTpl->getActiveSheet()->setCellValue('E'.$i, $pengurus->pelatihan);
						$objTpl->getActiveSheet()->setCellValue('F'.$i, $pengurus->frekuensi_pelatihan);
						$i++;
					}

					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="List Pengurus Kelompok.xls"');
					header('Cache-Control: max-age=0');

					$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');
					$objWriter->save('php://output');

					exit;
				}
				else{
					$this->session->set_flashdata('error_message', '<strong>Gagal Ekspor Pengurus!</strong> Tidak ada data pengurus untuk saat ini.');
					redirect('pengurus_kelompok');
				}
			}
		}

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['list_pengurus_kelompok'] = $this->pengurus_kelompok_model->get_by_criteria()
			->select('*')
			->order_by('nama ASC')
			->get()
			->result();

		$this->template
			->set_layout('page')
			->title('Daftar Pengurus Kelompok Tani')
			->build('pengurus_kelompok/index', $data);
	}

	public function tambah()
	{
		if(!$this->permission->check_permission($this->modules, 'add')){
			show_404();
		}

		if($this->input->post()){
			$pengurus_kelompok = $this->input->post('data');

			$this->pengurus_kelompok_model->save($pengurus_kelompok);

			$this->session->set_flashdata('success_message', 'Pengurus kelompok berhasil ditambahkan.');
			redirect('pengurus_kelompok');
		}

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$this->template
			->set_layout('page')
			->title('Tambah Pengurus Kelompok')
			->build('pengurus_kelompok/tambah', $data);
	}

	public function edit($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'edit') || empty($id)){
			show_404();
		}

		if($this->input->post()){
			$pengurus_kelompok = $this->input->post('data');

			$this->pengurus_kelompok_model->save($pengurus_kelompok, $id);

			$this->session->set_flashdata('success_message', 'Pengurus kelompok berhasil diubah.');
			redirect('pengurus_kelompok');
		}

		$data['breadcrumb'] = true;
		$data['modules'] = $this->modules;

		$data['pengurus'] = $this->pengurus_kelompok_model->get($id);

		$this->template
			->set_layout('page')
			->title('Edit Pengurus Kelompok')
			->build('pengurus_kelompok/edit', $data);
	}

	public function hapus($id = null)
	{
		if(!$this->permission->check_permission($this->modules, 'delete') || empty($id)){
			show_404();
		}

		$pengurus = $this->pengurus_kelompok_model->get($id);

		$this->pengurus_kelompok_model->delete($pengurus->id);

		$this->session->set_flashdata('success_message', 'Pengurus kelompok berhasil dihapus.');
		redirect("pengurus_kelompok");
	}
}
