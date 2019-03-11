<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function date_reverse($tgl){
	$tgl = str_replace("/", "-", $tgl);
	$convert = implode('-', array_reverse(explode('-', $tgl)));
	return $convert;
}
function price_format($price){
	return 'Rp. ' . number_format($price, 0, '', '.');
}
function date_detail($tgl)
{
	$dictionary = array(
			'01' => "Januari",
			'02' => "Februari",
			'03' => "Maret",
			'04' => "April",
			'05' => "Mei",
			'06' => "Juni",
			'07' => "Juli",
			'08' => "Agustus",
			'09' => "September",
			'10' => "Oktober",
			'11' => "November",
			'12' => "Desember"
	);
	$get_tanggal = explode("-",$tgl);
	$tahun = $get_tanggal[0];
	$bulan = $dictionary[$get_tanggal[1]];
	$tanggal = ltrim($get_tanggal[2], '0');
	return $tanggal.' '.$bulan.' '.$tahun;
}
function getNamaProvinsi($id)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from idm where kodeprov='$id'")->row_array();
    return $q['provinsi'];
}
function getNamaKabupaten($id)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from idm where kodekab='$id'")->row_array();
    return $q['kabupaten'];
}
function getNamaKecamatan($id)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from idm where kodekec='$id'")->row_array();
    return $q['kecamatan'];
}
function getNamaDesa($id)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from idm where kodedesa='$id'")->row_array();
    return $q['desa'];
}


function getBerkembang($provinsi,$indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_ipd where cluster='Berkembang' AND provinsi='$provinsi'")->row_array();
    return  $q[$indikator];
}

function getMaju($provinsi,$indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_ipd where cluster='Maju' AND provinsi='$provinsi'")->row_array();
    return  $q[$indikator];
}
function getMandiri($provinsi,$indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_ipd where cluster='Mandiri' AND provinsi='$provinsi'")->row_array();
    return  $q[$indikator];
}
function getIndikator($id)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from indikator_ipd where name='$id'")->row_array();
    return  $q['keterangan'];
}


function idmBerkembang($prov,$indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_idm where cluster='Berkembang' AND kodeprov='$prov'")->row_array();
    return  $q[$indikator];
}

function idmMaju($prov,$indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_idm where cluster='Maju' AND kodeprov='$prov'")->row_array();
    return  $q[$indikator];
}
function idmMandiri($prov,$indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_idm where cluster='Mandiri' AND kodeprov='$prov'")->row_array();
    return  $q[$indikator];
}

function nasionalMandiri($indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_nasional where status='Mandiri'")->row_array();
    return  $q[$indikator];
}

function nasionalBerkembang($indikator)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from centroid_nasional where status='Berkembang'")->row_array();
    return  $q[$indikator];
}

function idmIndikator($id)
{
    $ci=& get_instance();
    $q = $ci->db->query("select * from indikator_idm where name='$id'")->row_array();
    return  $q['keterangan'];
}
