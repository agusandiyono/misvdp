<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ipd_model extends CI_Model {

	var $table = 'ipd';
	var $id = 'id';
	var $column_order = array(null, 'provinsi','kabupaten','kecamatan','desa','status'); //set column field database for datatable orderable
	var $column_search = array('provinsi','kabupaten','kecamatan','desa','status'); //set column field database for datatable searchable
	var $order = array('id' => 'asc'); // default order

	public function __construct()
	{
		parent::__construct();
	}

	function get_centroid_mandiri($id){
    	$this->db->where('cluster', 'Mandiri');
    	$this->db->where('provinsi', $id);
		return $this->db->get('centroid_ipd');
    }

    function get_centroid_maju($id){
    	$this->db->where('cluster', 'Maju');
    	$this->db->where('provinsi', $id);
		return $this->db->get('centroid_ipd');
    }

    function get_centroid_berkembang($id){
    	$this->db->where('cluster', 'Berkembang');
    	$this->db->where('provinsi', $id);
		return $this->db->get('centroid_ipd');
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

		function get_by_criteria()
  	{
  		$query = $this->db->from($this->table);

  		return $query;
  	}




	private function getData()
	{

		//add custom filter here
		if($this->input->post('cari'))
		{
			/* $this->db->or_like('provinsi', $this->input->post('cari'));
			$this->db->or_like('kabupaten', $this->input->post('cari'));
			$this->db->or_like('kecamatan', $this->input->post('cari'));
			$this->db->or_like('desa', $this->input->post('cari')); */
			$a = $this->input->post('cari');
			$b = $this->input->post('keyword');
			if($a=="Desa"){$this->db->where("DESA LIKE '%$b%'");}
			else if($a=="Kecamatan"){$this->db->where("KECAMATAN LIKE '%$b%'");}
			else{$this->db->where("KABUPATEN LIKE '%$b%'");}
		}
		if($this->input->post('provinsi'))
		{
			$this->db->where('provinsi', $this->input->post('provinsi'));
		}
		if($this->input->post('kabupaten'))
		{
			$this->db->where('kabupaten', $this->input->post('kabupaten'));
		}
		if($this->input->post('kecamatan'))
		{
			$this->db->where('kecamatan', $this->input->post('kecamatan'));
		}
		if($this->input->post('desa'))
		{
			$this->db->where('desa', $this->input->post('desa'));
		}
		if($this->input->post('status'))
		{
			$this->db->where('status', $this->input->post('status'));
		}
		if( strlen($this->input->post('i1'))>0 && strlen($this->input->post('kei1'))>0)
        {
            $i1 = $this->input->post('i1');
            $kei1 = $this->input->post('kei1');
            $this->db->where(" i1 between '$i1' AND '$kei1'");
		}
		if( strlen($this->input->post('i2'))>0 && strlen($this->input->post('kei2'))>0)
        {
            $i2 = $this->input->post('i2');
            $kei2 = $this->input->post('kei2');
            $this->db->where("i2 BETWEEN '$i2' AND '$kei2' ");
		}
		if( strlen($this->input->post('i3'))>0 && strlen($this->input->post('kei3'))>0)
        {
            $i3 = $this->input->post('i3');
            $kei3 = $this->input->post('kei3');
            $this->db->where("i3 BETWEEN '$i3' AND '$kei3' ");
		}
		if( strlen($this->input->post('i4'))>0 && strlen($this->input->post('kei4'))>0)
        {
            $i4 = $this->input->post('i4');
            $kei4 = $this->input->post('kei4');
            $this->db->where("i4 BETWEEN '$i4' AND '$kei4' ");
		}
		if( strlen($this->input->post('i5'))>0 && strlen($this->input->post('kei5'))>0)
        {
            $i5 = $this->input->post('i5');
            $kei5 = $this->input->post('kei5');
            $this->db->where("i5 BETWEEN '$i5' AND '$kei5' ");
		}
		if( strlen($this->input->post('i6'))>0 && strlen($this->input->post('kei6'))>0)
        {
            $i6 = $this->input->post('i6');
            $kei6 = $this->input->post('kei6');
            $this->db->where("i6 BETWEEN '$i6' AND '$kei6' ");
		}
		if( strlen($this->input->post('i17'))>0 && strlen($this->input->post('kei17'))>0)
        {
            $i7 = $this->input->post('i7');
            $kei7 = $this->input->post('kei7');
            $this->db->where("i7 BETWEEN $i7 AND $kei7 ");
		}
		if( strlen($this->input->post('i8'))>0 && strlen($this->input->post('kei8'))>0)
        {
            $i8 = $this->input->post('i8');
            $kei8 = $this->input->post('kei8');
            $this->db->where("i8 BETWEEN $i8 AND $kei8 ");
		}
		if( strlen($this->input->post('i9'))>0 && strlen($this->input->post('kei9'))>0)
        {
            $i9 = $this->input->post('i9');
            $kei9 = $this->input->post('kei9');
            $this->db->where("i9 BETWEEN '$i9' AND '$kei9' ");
		}
		if( strlen($this->input->post('i10'))>0 && strlen($this->input->post('kei10'))>0)
        {
            $i10 = $this->input->post('i10');
            $kei10 = $this->input->post('kei10');
            $this->db->where("i10 BETWEEN '$i10' AND '$kei10' ");
		}
		if( strlen($this->input->post('i11'))>0 && strlen($this->input->post('kei11'))>0)
        {
            $i11 = $this->input->post('i11');
            $kei11 = $this->input->post('kei11');
            $this->db->where("i11 BETWEEN '$i11' AND '$kei11' ");
		}
		if( strlen($this->input->post('i12'))>0 && strlen($this->input->post('kei12'))>0)
        {
            $i12 = $this->input->post('i12');
            $kei12 = $this->input->post('kei12');
            $this->db->where("i12 BETWEEN '$i12' AND '$kei12' ");
		}
		if( strlen($this->input->post('i13'))>0 && strlen($this->input->post('kei13'))>0)
        {
            $i13 = $this->input->post('i13');
            $kei13 = $this->input->post('kei13');
            $this->db->where("i13 BETWEEN '$i13' AND '$kei13' ");
		}
		if( strlen($this->input->post('i14'))>0 && strlen($this->input->post('kei14'))>0)
        {
            $i14 = $this->input->post('i14');
            $kei14 = $this->input->post('kei14');
            $this->db->where("i14 BETWEEN '$i14' AND '$kei14' ");
		}
		if( strlen($this->input->post('i15'))>0 && strlen($this->input->post('kei15'))>0)
        {
            $i15 = $this->input->post('i15');
            $kei15 = $this->input->post('kei15');
            $this->db->where("i15 BETWEEN '$i15' AND '$kei15' ");
		}
		if( strlen($this->input->post('i16'))>0 && strlen($this->input->post('kei16'))>0)
        {
            $i16 = $this->input->post('i16');
            $kei16 = $this->input->post('kei16');
            $this->db->where("i16 BETWEEN '$i16' AND '$kei16' ");
		}
		if( strlen($this->input->post('i17'))>0 && strlen($this->input->post('kei17'))>0)
        {
            $i17 = $this->input->post('i17');
            $kei17 = $this->input->post('kei17');
            $this->db->where("i17 BETWEEN '$i17' AND '$kei17' ");
		}
		if( strlen($this->input->post('i18'))>0 && strlen($this->input->post('kei18'))>0)
        {
            $i18 = $this->input->post('i18');
            $kei18 = $this->input->post('kei18');
            $this->db->where("i18 BETWEEN '$i18' AND '$kei18' ");
		}
		if( strlen($this->input->post('i19'))>0 && strlen($this->input->post('kei19'))>0)
        {
            $i19 = $this->input->post('i19');
            $kei19 = $this->input->post('kei19');
            $this->db->where("i19 BETWEEN '$i19' AND '$kei19' ");
		}
		if( strlen($this->input->post('i20'))>0 && strlen($this->input->post('kei20'))>0)
        {
            $i20 = $this->input->post('i20');
            $kei20 = $this->input->post('kei20');
            $this->db->where("i20 BETWEEN '$i20' AND '$kei20' ");
		}
		if( strlen($this->input->post('i21'))>0 && strlen($this->input->post('kei21'))>0)
        {
            $i21 = $this->input->post('i21');
            $kei21 = $this->input->post('kei21');
            $this->db->where("i21 BETWEEN '$i21' AND '$kei21' ");
		}
		if( strlen($this->input->post('i22'))>0 && strlen($this->input->post('kei22'))>0)
        {
            $i22 = $this->input->post('i22');
            $kei22 = $this->input->post('kei22');
            $this->db->where("i22 BETWEEN '$i22' AND '$kei22' ");
		}
		if( strlen($this->input->post('i23'))>0 && strlen($this->input->post('kei23'))>0)
        {
            $i23 = $this->input->post('i23');
            $kei23 = $this->input->post('kei23');
            $this->db->where("i23 BETWEEN '$i23' AND '$kei23' ");
		}
		if( strlen($this->input->post('i24'))>0 && strlen($this->input->post('kei24'))>0)
        {
            $i24 = $this->input->post('i24');
            $kei24 = $this->input->post('kei24');
            $this->db->where("i24 BETWEEN '$i24' AND '$kei24' ");
		}
		if( strlen($this->input->post('i25'))>0 && strlen($this->input->post('kei25'))>0)
        {
            $i25 = $this->input->post('i25');
            $kei25 = $this->input->post('kei25');
            $this->db->where("i25 BETWEEN '$i25' AND '$kei25' ");
		}
		if( strlen($this->input->post('i26'))>0 && strlen($this->input->post('kei26'))>0)
        {
            $i26 = $this->input->post('i26');
            $kei26 = $this->input->post('kei26');
            $this->db->where("i26 BETWEEN '$i26' AND '$kei26' ");
		}
		if( strlen($this->input->post('i27'))>0 && strlen($this->input->post('kei27'))>0)
        {
            $i27 = $this->input->post('i27');
            $kei27 = $this->input->post('kei27');
            $this->db->where("i27 BETWEEN '$i27' AND '$kei27' ");
		}
		if( strlen($this->input->post('i28'))>0 && strlen($this->input->post('kei28'))>0)
        {
            $i28 = $this->input->post('i28');
            $kei28 = $this->input->post('kei28');
            $this->db->where("i28 BETWEEN '$i28' AND '$kei28' ");
		}
		if( strlen($this->input->post('i29'))>0 && strlen($this->input->post('kei29'))>0)
        {
            $i29 = $this->input->post('i29');
            $kei29 = $this->input->post('kei29');
            $this->db->where("i29 BETWEEN '$i29' AND '$kei29' ");
		}
		if( strlen($this->input->post('i30'))>0 && strlen($this->input->post('kei30'))>0)
        {
            $i30 = $this->input->post('i30');
            $kei30 = $this->input->post('kei30');
            $this->db->where("i30 BETWEEN '$i30' AND '$kei30' ");
		}
		if( strlen($this->input->post('i31'))>0 && strlen($this->input->post('kei31'))>0)
        {
            $i31 = $this->input->post('i31');
            $kei31 = $this->input->post('kei31');
            $this->db->where("i31 BETWEEN '$i31' AND '$kei31' ");
		}
		if( strlen($this->input->post('i32'))>0 && strlen($this->input->post('kei32'))>0)
        {
            $i32 = $this->input->post('i32');
            $kei32 = $this->input->post('kei32');
            $this->db->where("i32 BETWEEN '$i32' AND '$kei32' ");
		}
		if( strlen($this->input->post('i33'))>0 && strlen($this->input->post('kei33'))>0)
        {
            $i33 = $this->input->post('i33');
            $kei33 = $this->input->post('kei33');
            $this->db->where("i33 BETWEEN '$i33' AND '$kei33' ");
		}
		if( strlen($this->input->post('i34'))>0 && strlen($this->input->post('kei34'))>0)
        {
            $i34 = $this->input->post('i34');
            $kei34 = $this->input->post('kei34');
            $this->db->where("i34 BETWEEN '$i34' AND '$kei34' ");
		}
		if( strlen($this->input->post('i35'))>0 && strlen($this->input->post('kei35'))>0)
        {
            $i35 = $this->input->post('i35');
            $kei35 = $this->input->post('kei35');
            $this->db->where("i35 BETWEEN '$i35' AND '$kei35' ");
		}
		if( strlen($this->input->post('i36'))>0 && strlen($this->input->post('kei36'))>0)
        {
            $i36 = $this->input->post('i36');
            $kei36 = $this->input->post('kei36');
            $this->db->where("i36 BETWEEN $i36 AND $kei36 ");
		}
		if( strlen($this->input->post('i37'))>0 && strlen($this->input->post('kei37'))>0)
        {
            $i37 = $this->input->post('i37');
            $kei37 = $this->input->post('kei37');
            $this->db->where("i37 BETWEEN '$i37' AND '$kei37' ");
		}
		if( strlen($this->input->post('i38'))>0 && strlen($this->input->post('kei38'))>0)
        {
            $i38 = $this->input->post('i38');
            $kei38 = $this->input->post('kei38');
            $this->db->where("i38 BETWEEN '$i38' AND '$kei38' ");
		}
		if( strlen($this->input->post('i39'))>0 && strlen($this->input->post('kei39'))>0)
        {
            $i39 = $this->input->post('i39');
            $kei39 = $this->input->post('kei39');
            $this->db->where("i39 BETWEEN '$i39' AND '$kei39' ");
		}
		if( strlen($this->input->post('i40'))>0 && strlen($this->input->post('kei40'))>0)
        {
            $i40 = $this->input->post('i40');
            $kei40 = $this->input->post('kei40');
            $this->db->where("i40 BETWEEN '$i40' AND '$kei40' ");
		}
		if( strlen($this->input->post('i41'))>0 && strlen($this->input->post('kei41'))>0)
        {
            $i41 = $this->input->post('i41');
            $kei41 = $this->input->post('kei41');
            $this->db->where("i41 BETWEEN '$i41' AND '$kei41' ");
		}
		if( strlen($this->input->post('i42'))>0 && strlen($this->input->post('kei42'))>0)
        {
            $i42 = $this->input->post('i42');
            $kei42 = $this->input->post('kei42');
            $this->db->where("i42 BETWEEN '$i42' AND '$kei42' ");
		}
		$this->db->from($this->table);
		$i = 0;

		foreach ($this->column_search as $item) // loop column
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{

				if($i===0) // first loop
				{
					$this->db->group_start('AND'); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->and_like($item, $_POST['search']['value']);
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

	public function get_nganjuk()
	{
		$this->getData();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$this->db->where("KABUPATEN","NGANJUK");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_magetan()
	{
		$this->getData();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$this->db->where("KABUPATEN","MAGETAN");
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
		$this->db->select('DISTINCT(provinsi)');
		$this->db->from($this->table);
		$this->db->order_by('provinsi','asc');
		$query = $this->db->get();
		$result = $query->result();

		$countries = array();
		foreach ($result as $row)
		{
			$countries[] = $row->provinsi;
		}
		return $countries;
	}

	function kabupaten($provId){
//				$this->load->model('kabupaten_model');
				$kabupaten="<option value='0'>Pilih Kabupaten</pilih>";
				$kab = $this->ipd_model->get_by_criteria()
				->select('kodeprov,kabupaten')
				->where('kodeprov', $provId)
				->order_by('kabupaten ASC')
				->group_by('kabupaten')
				->get();

		foreach ($kab->result_array() as $data ){
			$kabupaten.= "<option value='$data[kabupaten]'>$data[kabupaten]</option>";

		}

		return $kabupaten;
	}
	function kecamatan($kabId){

		$kecamatan="<option value='0'>Pilih Kecamatan</pilih>";
		$kec = $this->ipd_model->get_by_criteria()
		->select('kodekab, kodekec, kecamatan')
		->where('kodekab', $kabId)
		->order_by('kodekec ASC')
		->group_by('kecamatan')
		->get();

		foreach ($kec->result_array() as $data ){
			$kecamatan.= "<option value='$data[kodekec]'>$data[kodekec] - $data[kecamatan]</option>";
		}

		return $kecamatan;
	}

	function desa($kecId){

		$desa="<option value='0'>Pilih Desa</pilih>";
		$des = $this->ipd_model->get_by_criteria()
		->select('kodekec, kodedesa, desa')
		->where('kodekec', $kecId)
		->order_by('kodedesa ASC')
		->group_by('desa')
		->get();

		foreach ($des->result_array() as $data ){
			$desa.= "<option value='$data[kodedesa]'>$data[kodedesa] - $data[desa]</option>";
		}

		return $desa;
	}

	public function get_list_status()
	{
		$this->db->select('DISTINCT(status)');
		$this->db->from($this->table);
		$this->db->order_by('status','asc');
		$query = $this->db->get();
		$result = $query->result();

		$cluster = array();
		foreach ($result as $row)
		{
			$cluster[] = $row->status;
		}
		return $cluster;
	}

}
