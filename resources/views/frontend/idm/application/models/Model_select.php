<?php

Class Model_select extends CI_Model
{

function __construct(){

parent::__construct();
$this->load->model('evkin_model');

}


function provinsi(){


$this->db->order_by('name','ASC');
$provinces= $this->db->get('provinces');


return $provinces->result_array();


}


function kabupaten($provId){    
    $kabupaten="<option value='0'>----------------------------------</pilih>";
    $kab = $this->evkin_model->get_by_criteria()
        ->select('DISTINCT(kabupaten_id) as id, kabupaten.kabupaten_name AS text')
        ->join('kabupaten', 'kabupaten.kabupaten_code = evkin.kabupaten_id')
        ->where('evkin.provinsi_id', $provId)		
        ->order_by('kabupaten_code ASC')
        ->get();
        // ->result_array();

    foreach ($kab->result_array() as $data ){
        $kabupaten.= "<option value='$data[id]'>$data[id] - $data[text]</option>";
    }

    return $kabupaten;
}

function kecamatan($kabId){
    $kecamatan="<option value='0'>----------------------------------</pilih>";
    $kec = $this->evkin_model->get_by_criteria()
    ->select('DISTINCT(kecamatan_id) as id, kecamatan.kecamatan_name AS text')
    ->join('kecamatan', 'kecamatan.kecamatan_code = evkin.kecamatan_id')
    ->where('evkin.kabupaten_id', $kabId)		
    ->order_by('kecamatan_code ASC')
    ->get();
    // ->result_array();

    foreach ($kec->result_array() as $data ){
        $kecamatan.= "<option value='$data[id]'>$data[id] - $data[text]</option>";
    }

    return $kecamatan;
}

function desa($kecId){
    $desa="<option value='0'>----------------------------------</pilih>";
    $des = $this->evkin_model->get_by_criteria()
    ->select('DISTINCT(desa_id) as id, desa.desa_name AS text')
    ->join('desa', 'desa.desa_code = evkin.desa_id')
    ->where('evkin.kecamatan_id', $kecId)		
    ->order_by('desa_code ASC')
    ->get();
    // ->result_array();

    foreach ($des->result_array() as $data ){
        $desa.= "<option value='$data[id]'>$data[id] - $data[text]</option>";
    }

    return $desa;
}

function kelompok($desId){
    $kelompok="<option value='0'>----------------------------------</pilih>";
    $kel = $this->evkin_model->get_by_criteria()
    ->select('id, nama AS text')
    ->join('desa', 'desa.desa_code = evkin.desa_id')
    ->where('evkin.desa_id', $desId)		
    ->order_by('desa_code ASC')
    ->get();
    

    foreach ($kel->result_array() as $data ){
        $kelompok.= "<option value='dashboard/get_all_kelompok/$data[id]'>$data[id] - $data[text]</option>";
    }

    return $kelompok;
}


}
