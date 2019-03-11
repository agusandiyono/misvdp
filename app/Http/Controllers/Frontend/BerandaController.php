<?php

namespace App\Http\Controllers\Frontend;

use App\Authorizable;
use App\Poktan;
use App\Dampingan;
use App\Tim;
use App\Evkin;
Use App\Wilayah\Provinsi;
Use App\Wilayah\Kabupaten;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BerandaController extends Controller
{
    public function index()
    {
        $dampingan = Dampingan::all();
        $poktan = Poktan::all();
        

        return view('frontend.index', compact('dampingan', 'poktan'));
    }

    public function poktan(Request $request)
    {
        $search = $request->get('search');
        $provinsi = $request->get('provinsi') != '' ? $request->get('provinsi') : -1;
        $field = $request->get('field') != '' ? $request->get('field') : 'id';
        $sort = $request->get('sort') != '' ? $request->get('sort') : 'asc';
        $result = new Poktan();
        if ($provinsi != -1)
            $result = $result->where('provinsi', $provinsi);
        
        $result = $result->where('nama_kelompok', 'like', '%' . $search . '%')
            ->orderBy($field, $sort)
            ->paginate(20)
            ->withPath('?search=' . $search . '&provinsi=' . $provinsi . '&field=' . $field . '&sort=' . $sort);
        return view('frontend.poktan.index', compact(array('result')));
    }

    public function poktanDetail($id)
    {
        $evkin = Evkin::where('poktan_id', $id)->get();
        $poktan = Poktan::where('id', $id)->get();
        // $evkin = Evkin::where('poktan_id', $id)->get();
        return view('frontend.poktan.detail', compact('poktan', 'evkin'));
    }


    public function chartDashboard(Request $request){
        
    }


    public function dampingan()
    {
        $result = Dampingan::latest()->paginate();
        return view('frontend.dampingan.index', compact('result'));
    }

    public function poktanDesa($desa)
    {        
        $poktan = Poktan::where('desa', $desa)->paginate();
        $dampingan = Dampingan::where('desa', $desa)->get();
        return view('frontend.dampingan.profil', compact(['poktan', 'dampingan'])); 
    }

    public function konsultan()
    {        
        $konsultan = Tim::where('jenis', '2')->get();
        return view('frontend.tim.konsultan', compact('konsultan')); 
    }

    public function detailTim($id)
    {        
        $tim = Tim::where('id', $id)->get();
        return view('frontend.tim.tim', compact('tim')); 
    }

    public function berita()
    {                
        return view('frontend.berita.index'); 
    }
}
