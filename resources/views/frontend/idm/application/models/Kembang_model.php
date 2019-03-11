<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kembang_model extends CI_Model {

	var $table = 'kembang_desa';
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
		$this->db->where('kodeprov', $id);
		return $this->db->get('centroid_idm');
	}

	function get_centroid_maju($id){
		$this->db->where('cluster', 'Maju');
		$this->db->where('kodeprov', $id);
		return $this->db->get('centroid_idm');
	}

	function get_centroid_berkembang($id){
		$this->db->where('cluster', 'Berkembang');
		$this->db->where('kodeprov', $id);
		return $this->db->get('centroid_idm');
	}

	function get_mandiri_nasional(){
		$this->db->where('status', 'Mandiri');
		return $this->db->get('centroid_nasional');
	}
	
	function get_berkembang_nasional(){
		$this->db->where('status', 'Berkembang');
		return $this->db->get('centroid_nasional');
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
			$this->db->where('provinsi', getNamaProvinsi($this->input->post('provinsi')));
		}
		if($this->input->post('kabupaten'))
		{
			$this->db->where('kabupaten', getNamaKabupaten($this->input->post('kabupaten')));
		}
		if($this->input->post('kecamatan'))
		{
			$this->db->where('kodekec', $this->input->post('kecamatan'));
		}
		if($this->input->post('desa'))
		{
			$this->db->where('kodedesa', $this->input->post('desa'));
		}
		if($this->input->post('status'))
		{
			$this->db->where('status', $this->input->post('status'));
		}
		if( strlen($this->input->post('skor_dokter'))>0 && strlen($this->input->post('keskor_dokter'))>0)
        {
            $i1 = $this->input->post('skor_dokter');
            $kei1 = $this->input->post('keskor_dokter');
            $this->db->where("skor_dokter BETWEEN '$i1' AND '$kei1' ");
		}
		if( strlen($this->input->post('skor_bidan'))>0 && strlen($this->input->post('keskor_bidan'))>0)
        {
            $i2 = $this->input->post('skor_bidan');
            $kei2 = $this->input->post('keskor_bidan');
            $this->db->where("skor_bidan BETWEEN '$i2' AND '$kei2' ");
		}
		if( strlen($this->input->post('skor_nakes_lain'))>0 && strlen($this->input->post('keskor_nakes_lain'))>0)
				{
						$i3 = $this->input->post('skor_nakes_lain');
						$kei3 = $this->input->post('keskor_nakes_lain');
						$this->db->where("skor_nakes_lain BETWEEN '$i3' AND '$kei3' ");
		}
		if( strlen($this->input->post('skor_waktu_tempuh'))>0 && strlen($this->input->post('keskor_waktu_tempuh'))>0)
				{
						$i4 = $this->input->post('skor_waktu_tempuh');
						$kei4 = $this->input->post('keskor_waktu_tempuh');
						$this->db->where("skor_waktu_tempuh BETWEEN '$i4' AND '$kei4' ");
		}
		if( strlen($this->input->post('aktifitas_posyandu'))>0 && strlen($this->input->post('keaktifitas_posyandu'))>0)
				{
						$i5 = $this->input->post('aktifitas_posyandu');
						$kei5 = $this->input->post('keaktifitas_posyandu');
						$this->db->where("aktifitas_posyandu BETWEEN '$i5' AND '$kei5' ");
		}
		if( strlen($this->input->post('akses_poskesdes'))>0 && strlen($this->input->post('keakses_poskesdes'))>0)
				{
						$i6 = $this->input->post('akses_poskesdes');
						$kei6 = $this->input->post('keakses_poskesdes');
						$this->db->where("akses_poskesdes BETWEEN '$i6' AND '$kei6' ");
		}
		if( strlen($this->input->post('akses_posyandu'))>0 && strlen($this->input->post('keakses_posyandu'))>0)
				{
						$i7 = $this->input->post('akses_posyandu');
						$kei7 = $this->input->post('keakses_posyandu');
						$this->db->where("akses_posyandu BETWEEN '$i7' AND '$kei7' ");
		}
		if( strlen($this->input->post('kepesertaan_bpjs'))>0 && strlen($this->input->post('kekepesertaan_bpjs'))>0)
				{
						$i8 = $this->input->post('kepesertaan_bpjs');
						$kei8 = $this->input->post('kekepesertaan_bpjs');
						$this->db->where("kepesertaan_bpjs BETWEEN '$i8' AND '$kei8' ");
		}
		if( strlen($this->input->post('akses_sd'))>0 && strlen($this->input->post('keakses_sd'))>0)
				{
						$i9 = $this->input->post('akses_sd');
						$kei9 = $this->input->post('keakses_sd');
						$this->db->where("akses_sd BETWEEN '$i9' AND '$kei9' ");
		}
		if( strlen($this->input->post('akses_smp'))>0 && strlen($this->input->post('keakses_smp'))>0)
				{
						$i10 = $this->input->post('akses_smp');
						$kei10 = $this->input->post('keakses_smp');
						$this->db->where("akses_smp BETWEEN '$i10' AND '$kei10' ");
		}
		if( strlen($this->input->post('skor_sma_smk'))>0 && strlen($this->input->post('keskor_sma_smk'))>0)
				{
						$i11 = $this->input->post('skor_sma_smk');
						$kei11 = $this->input->post('keskor_sma_smk');
						$this->db->where("akses_sma BETWEEN '$i11' AND '$kei11' ");
		}
		// if( strlen($this->input->post('skor_bidan'))>0 && strlen($this->input->post('keskor_bidan'))>0)
		// 		{
		// 				$i12 = $this->input->post('akses_smk');
		// 				$kei12 = $this->input->post('keakses_smk');
		// 				$this->db->where("akses_smk BETWEEN '$i12' AND '$kei12' ");
		// }
		if( strlen($this->input->post('buta_aksara'))>0 && strlen($this->input->post('kebuta_aksara'))>0)
				{
						$i13 = $this->input->post('buta_aksara');
						$kei13 = $this->input->post('kebuta_aksara');
						$this->db->where("buta_aksara BETWEEN '$i13' AND '$kei13' ");
		}
		if( strlen($this->input->post('pkbm'))>0 && strlen($this->input->post('kepkbm'))>0)
				{
						$i14 = $this->input->post('pkbm');
						$kei14 = $this->input->post('kepkbm');
						$this->db->where("pkbm BETWEEN '$i14' AND '$kei14' ");
		}
		if( strlen($this->input->post('paud'))>0 && strlen($this->input->post('kepaud'))>0)
				{
						$i15 = $this->input->post('paud');
						$kei15 = $this->input->post('kepaud');
						$this->db->where("paud BETWEEN '$i15' AND '$kei15' ");
		}
		if( strlen($this->input->post('perpusy'))>0 && strlen($this->input->post('keperpusy'))>0)
				{
						$i16 = $this->input->post('perpusy');
						$kei16 = $this->input->post('keperpusy');
						$this->db->where("perpusy BETWEEN '$i16' AND '$kei16' ");
		}
		if( strlen($this->input->post('ketrampilan'))>0 && strlen($this->input->post('keketrampilan'))>0)
				{
						$i17 = $this->input->post('ketrampilan');
						$kei17 = $this->input->post('keketrampilan');
						$this->db->where("ketrampilan BETWEEN '$i17' AND '$kei17' ");
		}
		if( strlen($this->input->post('keragaman_etnis'))>0 && strlen($this->input->post('kekeragaman_etnis'))>0)
				{
						$i18 = $this->input->post('keragaman_etnis');
						$kei18 = $this->input->post('kekeragaman_etnis');
						$this->db->where("keragaman_etnis BETWEEN '$i18' AND '$kei18' ");
		}
		if( strlen($this->input->post('keragaman_agama'))>0 && strlen($this->input->post('kekeragaman_agama'))>0)
				{
						$i9 = $this->input->post('keragaman_agama');
						$kei9 = $this->input->post('kekeragaman_agama');
						$this->db->where("keragaman_agama BETWEEN '$i9' AND '$kei9' ");
		}
		if( strlen($this->input->post('skor_goroyong'))>0 && strlen($this->input->post('keskor_goroyong'))>0)
				{
						$i20 = $this->input->post('skor_goroyong');
						$kei20 = $this->input->post('keskor_goroyong');
						$this->db->where("skor_goroyong BETWEEN '$i20' AND '$kei20' ");
		}
		if( strlen($this->input->post('skor_ruangpub'))>0 && strlen($this->input->post('keskor_ruangpub'))>0)
				{
						$i21 = $this->input->post('skor_ruangpub');
						$kei21 = $this->input->post('keskor_ruangpub');
						$this->db->where("skor_ruangpub BETWEEN '$i21' AND '$kei21' ");
		}
		if( strlen($this->input->post('skor_fasor'))>0 && strlen($this->input->post('keskor_fasor'))>0)
				{
						$i22 = $this->input->post('skor_fasor');
						$kei22 = $this->input->post('keskor_fasor');
						$this->db->where("skor_fasor BETWEEN '$i22' AND '$kei22' ");
		}
		if( strlen($this->input->post('skor_keg_or'))>0 && strlen($this->input->post('keskor_keg_or'))>0)
				{
						$i23 = $this->input->post('skor_keg_or');
						$kei23 = $this->input->post('keskor_keg_or');
						$this->db->where("skor_keg_or BETWEEN '$i23' AND '$kei23' ");
		}
		if( strlen($this->input->post('pmks'))>0 && strlen($this->input->post('kepmks'))>0)
				{
						$i24 = $this->input->post('pmks');
						$kei24 = $this->input->post('kepmks');
						$this->db->where("pmks BETWEEN $i24 AND $kei24 ");
		}
		if( strlen($this->input->post('akses_slb'))>0 && strlen($this->input->post('keakses_slb'))>0)
				{
						$i25 = $this->input->post('akses_slb');
						$kei25 = $this->input->post('keakses_slb');
						$this->db->where("akses_slb BETWEEN '$i25' AND '$kei25' ");
		}
		if( strlen($this->input->post('poskamling'))>0 && strlen($this->input->post('keposkamling'))>0)
				{
						$i26 = $this->input->post('poskamling');
						$kei26 = $this->input->post('keposkamling');
						$this->db->where("poskamling BETWEEN '$i26' AND '$kei26' ");
		}
		if( strlen($this->input->post('siskamling'))>0 && strlen($this->input->post('kesiskamling'))>0)
				{
						$i27 = $this->input->post('siskamling');
						$kei27 = $this->input->post('kesiskamling');
						$this->db->where("siskamling BETWEEN '$i27' AND '$kei27' ");
		}
		if( strlen($this->input->post('konflik'))>0 && strlen($this->input->post('kekonflik'))>0)
				{
						$i28 = $this->input->post('konflik');
						$kei28 = $this->input->post('kekonflik');
						$this->db->where("konflik BETWEEN '$i28' AND '$kei28' ");
		}
		if( strlen($this->input->post('penyelesaian_konflik'))>0 && strlen($this->input->post('kepenyelesaian_konflik'))>0)
				{
						$i29 = $this->input->post('penyelesaian_konflik');
						$kei29 = $this->input->post('kepenyelesaian_konflik');
						$this->db->where("penyelesaian_konflik BETWEEN '$i29' AND '$kei29' ");
		}
		if( strlen($this->input->post('akses_minum'))>0 && strlen($this->input->post('keakses_minum'))>0)
				{
						$i30 = $this->input->post('akses_minum');
						$kei30 = $this->input->post('keakses_minum');
						$this->db->where("akses_minum BETWEEN '$i30' AND '$kei30' ");
		}
		if( strlen($this->input->post('akses_jamban'))>0 && strlen($this->input->post('keakses_jamban'))>0)
				{
						$i31 = $this->input->post('akses_jamban');
						$kei31 = $this->input->post('keakses_jamban');
						$this->db->where("akses_jamban BETWEEN '$i31' AND '$kei31' ");
		}
		if( strlen($this->input->post('persampahan'))>0 && strlen($this->input->post('kepersampahan'))>0)
				{
						$i32 = $this->input->post('persampahan');
						$kei32 = $this->input->post('kepersampahan');
						$this->db->where("persampahan BETWEEN '$i32' AND '$kei32' ");
		}
		if( strlen($this->input->post('akses_mandi_cuci'))>0 && strlen($this->input->post('keakses_mandi_cuci'))>0)
				{
						$i33 = $this->input->post('akses_mandi_cuci');
						$kei33 = $this->input->post('keakses_mandi_cuci');
						$this->db->where("akses_mandi_cuci BETWEEN '$i33' AND '$kei33' ");
		}
		if( strlen($this->input->post('akses_listrik'))>0 && strlen($this->input->post('keakses_listrik'))>0)
				{
						$i34 = $this->input->post('akses_listrik');
						$kei34 = $this->input->post('keakses_listrik');
						$this->db->where("akses_listrik BETWEEN '$i34' AND '$kei34' ");
		}
		if( strlen($this->input->post('akses_tv'))>0 && strlen($this->input->post('keakses_tv'))>0)
				{
						$i35 = $this->input->post('akses_tv');
						$kei35 = $this->input->post('keakses_tv');
						$this->db->where("akses_tv BETWEEN '$i35' AND '$kei35' ");
		}
		if( strlen($this->input->post('akses_sinyal_selular'))>0 && strlen($this->input->post('keakses_sinyal_selular'))>0)
				{
						$i36 = $this->input->post('akses_sinyal_selular');
						$kei36 = $this->input->post('keakses_sinyal_selular');
						$this->db->where("akses_sinyal_selular BETWEEN '$i36' AND '$kei36' ");
		}
		if( strlen($this->input->post('akses_internet'))>0 && strlen($this->input->post('keakses_internet'))>0)
				{
						$i37 = $this->input->post('akses_internet');
						$kei37 = $this->input->post('keakses_internet');
						$this->db->where("akses_internet BETWEEN '$i37' AND '$kei37' ");
		}
		if( strlen($this->input->post('skor_keragaman'))>0 && strlen($this->input->post('keskor_keragaman'))>0)
				{
						$i38 = $this->input->post('skor_keragaman');
						$kei38 = $this->input->post('keskor_keragaman');
						$this->db->where("skor_keragaman BETWEEN '$i38' AND '$kei38' ");
		}
		if( strlen($this->input->post('skor_lemb_ek'))>0 && strlen($this->input->post('keskor_lemb_ek'))>0)
				{
						$i39 = $this->input->post('skor_lemb_ek');
						$kei39 = $this->input->post('keskor_lemb_ek');
						$this->db->where("skor_lemb_ek BETWEEN '$i39' AND '$kei39' ");
		}
		if( strlen($this->input->post('skor_minimar'))>0 && strlen($this->input->post('keskor_minimar'))>0)
				{
						$i40 = $this->input->post('skor_minimar');
						$kei40 = $this->input->post('keskor_minimar');
						$this->db->where("skor_minimar BETWEEN '$i40' AND '$kei40' ");
		}
		// if( strlen($this->input->post('skor_warung'))>0 && strlen($this->input->post('keskor_warung'))>0)
		// 		{
		// 				$i41 = $this->input->post('skor_warung');
		// 				$kei41 = $this->input->post('keskor_warung');
		// 				$this->db->where("skor_warung BETWEEN '$i41' AND '$kei41' ");
		// }
		// if( strlen($this->input->post('skor_kedai_makan'))>0 && strlen($this->input->post('keskor_kedai_makan'))>0)
		// 		{
		// 				$i42 = $this->input->post('skor_kedai_makan');
		// 				$kei42 = $this->input->post('keskor_kedai_makan');
		// 				$this->db->where("skor_kedai_makan BETWEEN '$i42' AND '$kei42' ");
		// }
		// if( strlen($this->input->post('paud'))>0 && strlen($this->input->post('kepaud'))>0)
		// 		{
		// 				$i43 = $this->input->post('skor_restoran');
		// 				$kei43 = $this->input->post('keskor_restoran');
		// 				$this->db->where("skor_restoran BETWEEN '$i43' AND '$kei43' ");
		// }
		// if( strlen($this->input->post('paud'))>0 && strlen($this->input->post('kepaud'))>0)
		// 		{
		// 				$i44 = $this->input->post('skor_hotel');
		// 				$kei44 = $this->input->post('keskor_hotel');
		// 				$this->db->where("skor_hotel BETWEEN '$i44' AND '$kei44' ");
		// }
		if( strlen($this->input->post('skor_resto_hotel'))>0 && strlen($this->input->post('keskor_resto_hotel'))>0)
				{
						$i45 = $this->input->post('skor_resto_hotel');
						$kei45 = $this->input->post('keskor_resto_hotel');
						$this->db->where("skor_resto_hotel BETWEEN '$i45' AND '$kei45' ");
		}
		if( strlen($this->input->post('skor_jarak_ptkoan'))>0 && strlen($this->input->post('keskor_jarak_ptkoan'))>0)
				{
						$i46 = $this->input->post('skor_jarak_ptkoan');
						$kei46 = $this->input->post('keskor_jarak_ptkoan');
						$this->db->where("skor_jarak_ptkoan BETWEEN '$i46' AND '$kei46' ");
		}
		if( strlen($this->input->post('skor_akses_pasar_semi'))>0 && strlen($this->input->post('keskor_akses_pasar_semi'))>0)
				{
						$i47 = $this->input->post('skor_akses_pasar_semi');
						$kei47 = $this->input->post('keskor_akses_pasar_semi');
						$this->db->where("skor_akses_pasar_semi BETWEEN '$i47' AND '$kei47' ");
		}
		if( strlen($this->input->post('skor_jalan'))>0 && strlen($this->input->post('keskor_jalan'))>0)
				{
						$i48 = $this->input->post('skor_jalan');
						$kei48 = $this->input->post('keskor_jalan');
						$this->db->where("skor_jalan BETWEEN '$i48' AND '$kei48' ");
		}
		if( strlen($this->input->post('skor_keterbukaan_fisik'))>0 && strlen($this->input->post('keskor_keterbukaan_fisik'))>0)
				{
						$i49 = $this->input->post('skor_keterbukaan_fisik');
						$kei49 = $this->input->post('keskor_keterbukaan_fisik');
						$this->db->where("skor_keterbukaan_fisik BETWEEN '$i49' AND '$kei49' ");
		}
		if( strlen($this->input->post('skor_angk_umum'))>0 && strlen($this->input->post('keskor_angk_umum'))>0)
				{
						$i50 = $this->input->post('skor_angk_umum');
						$kei50 = $this->input->post('keskor_angk_umum');
						$this->db->where("skor_angk_umum BETWEEN '$i50' AND '$kei50' ");
		}
		// if( $this->input->post('skor_operasi_au') && $this->input->post('keskor_operasi_au'))
		// 		{
		// 				$i51 = $this->input->post('skor_operasi_au');
		// 				$kei51 = $this->input->post('keskor_operasi_au');
		// 				$this->db->where("skor_operasi_au BETWEEN '$i51' AND '$kei51' ");
		// }
		// if( $this->input->post('skor_jamoper') && $this->input->post('keskor_jamoper'))
		// 		{
		// 				$i52 = $this->input->post('skor_jamoper');
		// 				$kei52 = $this->input->post('keskor_jamoper');
		// 				$this->db->where("skor_jamoper BETWEEN '$i52' AND '$kei52' ");
		// }
		if( strlen($this->input->post('skor_logistik'))>0 && strlen($this->input->post('keskor_logistik'))>0)
				{
						$i53 = $this->input->post('skor_logistik');
						$kei53 = $this->input->post('keskor_logistik');
						$this->db->where("skor_logistik BETWEEN '$i53' AND '$kei53' ");
		}
		// if( $this->input->post('skor_pos_keliling') && $this->input->post('keskor_pos_keliling'))
		// 		{
		// 				$i54 = $this->input->post('skor_pos_keliling');
		// 				$kei54 = $this->input->post('keskor_pos_keliling');
		// 				$this->db->where("skor_pos_keliling BETWEEN '$i54' AND '$kei54' ");
		// }
		if( strlen($this->input->post('skor_kredit'))>0 && strlen($this->input->post('keskor_kredit'))>0)
				{
						$i55 = $this->input->post('skor_kredit');
						$kei55 = $this->input->post('keskor_kredit');
						$this->db->where("skor_kredit BETWEEN '$i55' AND '$kei55' ");
		}
		if( strlen($this->input->post('skor_bank'))>0 && strlen($this->input->post('keskor_bank'))>0)
				{
						$i56 = $this->input->post('skor_bank');
						$kei56 = $this->input->post('keskor_bank');
						$this->db->where("skor_bank BETWEEN '$i56' AND '$kei56' ");
		}
		if( strlen($this->input->post('skor_kualitas_lingkungan'))>0 && strlen($this->input->post('keskor_kualitas_lingkungan'))>0)
				{
						$i57 = $this->input->post('skor_kualitas_lingkungan');
						$kei57 = $this->input->post('keskor_kualitas_lingkungan');
						$this->db->where("skor_bank BETWEEN '$i57' AND '$kei57' ");
		}
		if( strlen($this->input->post('skor_bencana_alam'))>0 && strlen($this->input->post('keskor_bencana_alam'))>0)
				{
						$i58 = $this->input->post('skor_bencana_alam');
						$kei58 = $this->input->post('keskor_bencana_alam');
						$this->db->where("skor_bank BETWEEN '$i58' AND '$kei58' ");
		}
		if( strlen($this->input->post('skor_tanggap_bencana'))>0 && strlen($this->input->post('keskor_tanggap_bencana'))>0)
				{
						$i59 = $this->input->post('skor_tanggap_bencana');
						$kei59 = $this->input->post('keskor_tanggap_bencana');
						$this->db->where("skor_bank BETWEEN '$i59' AND '$kei59' ");
		}
		// if( $this->input->post('pembuangan_limbah_ke_sungai') && $this->input->post('kepembuangan_limbah_ke_sungai'))
		// 		{
		// 				$i57 = $this->input->post('pembuangan_limbah_ke_sungai');
		// 				$kei57 = $this->input->post('kepembuangan_limbah_ke_sungai');
		// 				$this->db->where("pembuangan_limbah_ke_sungai BETWEEN $i57 AND $kei57 ");
		// }
		// if( $this->input->post('air') && $this->input->post('keair'))
		// 		{
		// 				$i58 = $this->input->post('air');
		// 				$kei58 = $this->input->post('keair');
		// 				$this->db->where("air BETWEEN $i58 AND $kei58 ");
		// }
		// if( $this->input->post('tanah') && $this->input->post('ketanah'))
		// 		{
		// 				$i59 = $this->input->post('tanah');
		// 				$kei59 = $this->input->post('ketanah');
		// 				$this->db->where("tanah BETWEEN $i59 AND $kei59 ");
		// }
		// if( $this->input->post('') && $this->input->post(''))
		// 		{
		// 				$i = $this->input->post('');
		// 				$kei = $this->input->post('');
		// 				$this->db->where(" BETWEEN $i AND $kei ");
		// }


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
				$kab = $this->kembang_model->get_by_criteria()
				->select('kodeprov,kodekab, kabupaten')
				->where('kodeprov', $provId)
				->order_by('kabupaten ASC')
				->group_by('kabupaten')
				->get();

		foreach ($kab->result_array() as $data ){
			$kabupaten.= "<option value='$data[kodekab]'>$data[kabupaten]</option>";

		}

		return $kabupaten;
	}
	function kecamatan($kabId){
		$kecamatan="<option value='0'>Pilih Kecamatan</pilih>";
		$kec = $this->kembang_model->get_by_criteria()
		->select('kodekab, kodekec, kecamatan')
		->where('kodekab', $kabId)
		->order_by('kecamatan ASC')
		->group_by('kecamatan')
		->get();

		foreach ($kec->result_array() as $data ){
			$kecamatan.= "<option value='$data[kodekec]'>$data[kecamatan]</option>";
		}

		return $kecamatan;
	}

	function desa($kecId){

		$desa="<option value='0'>Pilih Desa</pilih>";
		$des = $this->kembang_model->get_by_criteria()
		->select('kodekec, kodedesa, desa')
		->where('kodekec', $kecId)
		->order_by('desa ASC')
		->group_by('desa')
		->get();

		foreach ($des->result_array() as $data ){
			$desa.= "<option value='$data[kodedesa]'>$data[desa]</option>";
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
