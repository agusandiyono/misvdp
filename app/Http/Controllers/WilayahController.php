<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

Use App\Wilayah\Provinsi;
Use App\Wilayah\Kabupaten;
Use App\Wilayah\Kecamatan;
Use App\Wilayah\Desa;

class WilayahController extends Controller
{
    public function kabupaten(){
     $provinsi_id = Input::get('provinsi_id');
     $kabupaten = Kabupaten::where(['provinsi_id'=> $provinsi_id])->get();
     return response()->json($kabupaten);
   }

    public function kecamatan(){
      $kabupaten_id = Input::get('kabupaten_id');
      $kecamatan = Kecamatan::where('kabupaten_id', '=', $kabupaten_id)->get();
      return response()->json($kecamatan);
    }

    public function desa(){
      $kecamatan_id = Input::get('kecamatan_id');
      $desa = Desa::where('kecamatan_id', '=', $kecamatan_id)->get();
      return response()->json($desa);
    }
}
