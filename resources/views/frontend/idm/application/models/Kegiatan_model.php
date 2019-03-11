<?php
class Kegiatan_model extends MY_Model {
	var $table = 'kegiatan';
	var $id = 'id';
	var $column_order = array(null, 'nama', 'tanggal', 'kabupaten_id','kecamatan_id','desa_id', 'jumlah_lk', 'jumlah_p', 'status'); //set column field database for datatable orderable
	var $column_search = array('nama', 'tanggal', 'kabupaten_id','kecamatan_id','desa_id', 'jumlah_lk', 'jumlah_p', 'status'); //set column field database for datatable searchable 
	var $order = array('id' => 'asc');

    function __construct()
    {
        parent::__construct();
    }
    
     function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->row();
    }
	// get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
	}
	
	function get_by_desa($id)
    {
        $this->db->where('desa_id', $id);
        return $this->db->get($this->table)->row();
    }
    
    function get_by_nama()
    {
        $this->db->select('DISTINCT(nama)');
		$this->db->from($this->table);
		$this->db->order_by('nama','asc');
		return $query = $this->db->get();
    }
    
    private function getData()
	{		
		if($this->input->post('provinsi_id'))
		{
			$this->db->where('provinsi_id', $this->input->post('provinsi_id'));
		}
		if($this->input->post('kabupaten_id'))
		{
			$this->db->where('kabupaten_id', $this->input->post('kabupaten_id'));
		}
		if($this->input->post('kecamatan_id'))
		{
			$this->db->where('kecamatan_id', $this->input->post('kecamatan_id'));
		}
		if($this->input->post('desa_id'))
		{
			$this->db->where('desa_id', $this->input->post('desa_id'));
		}
		if($this->input->post('kegiatan'))
		{
			$this->db->like('nama', $this->input->post('kegiatan'));
		}
		$this->db->from($this->table);
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
	}

	public function get_datatables()
	{
		$this->getData();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->getData();
		$query = $this->db->get();
		return $query->num_rows();
	}	

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
    }
    
    public function get_list_provinsi()
	{
		$this->db->select('DISTINCT(provinsi_id)');
		$this->db->from($this->table);
		$this->db->order_by('provinsi_id','asc');
		return $query = $this->db->get();		
    }
    
    function kabupaten($provId){    
		$kabupaten="<option value='0'>Pilih Kabupaten</pilih>";
		$kab = $this->kegiatan_model->get_by_criteria()
			->select('DISTINCT(kabupaten_id) as id, kabupaten.kabupaten_name AS text')
			->join('kabupaten', 'kabupaten.kabupaten_code = kegiatan.kabupaten_id')
			->where('kegiatan.provinsi_id', $provId)		
			->order_by('kabupaten_code ASC')
			->get();
			// ->result_array();

		foreach ($kab->result_array() as $data ){
			$kabupaten.= "<option value='$data[id]'>$data[id] - $data[text]</option>";
		}

		return $kabupaten;
	}
	function kecamatan($kabId){
		$kecamatan="<option value='0'>Pilih Kecamatan</pilih>";
		$kec = $this->kegiatan_model->get_by_criteria()
		->select('DISTINCT(kecamatan_id) as id, kecamatan.kecamatan_name AS text')
		->join('kecamatan', 'kecamatan.kecamatan_code = kegiatan.kecamatan_id')
		->where('kegiatan.kabupaten_id', $kabId)		
		->order_by('kecamatan_code ASC')
		->get();
		// ->result_array();

		foreach ($kec->result_array() as $data ){
			$kecamatan.= "<option value='$data[id]'>$data[id] - $data[text]</option>";
		}

		return $kecamatan;
	}

	function desa($kecId){
		$desa="<option value='0'>Pilih Desa</pilih>";
		$des = $this->kegiatan_model->get_by_criteria()
		->select('DISTINCT(desa_id) as id, desa.desa_name AS text')
		->join('desa', 'desa.desa_code = kegiatan.desa_id')
		->where('kegiatan.kecamatan_id', $kecId)		
		->order_by('desa_code ASC')
		->get();
		// ->result_array();

		foreach ($des->result_array() as $data ){
			$desa.= "<option value='$data[id]'>$data[id] - $data[text]</option>";
		}

		return $desa;
	}

    
}
