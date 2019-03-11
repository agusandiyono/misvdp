<?php

namespace App\Http\Controllers;

use App\Authorizable;
use App\Kegiatan;
use App\JenisKegiatan;
Use App\Wilayah\Provinsi;
Use App\Wilayah\Kabupaten;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('Admin')){
            $result = Kegiatan::latest()->with('user')->paginate();
        }elseif (Auth::user()->hasRole('Desa')){
            $result = Kegiatan::where('desa_id', Auth::user()->desa_id)->paginate();
        }elseif (Auth::user()->hasRole('Kecamatan')){
            $result = Kegiatan::where('kecamatan_id', Auth::user()->kecamatan_id)->paginate();
        }elseif (Auth::user()->hasRole('Kabupaten')){
            $result = Kegiatan::where('kabupaten_id', Auth::user()->kabupaten_id)->paginate();
        }elseif (Auth::user()->hasRole('Provinsi')){
            $result = Kegiatan::where('provinsi_id', Auth::user()->provinsi_id)->paginate();
        }else{
            $result = Kegiatan::latest()->with('user')->paginate();
        }
        $provinsi = Provinsi::with('kegiatan')->get();
        // $result = Iku::latest()->with('user')->paginate();
        return view('kegiatan.index', compact('result', 'provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_kegiatan = JenisKegiatan::all();
        $provinsi = Provinsi::where('status', 1)->get();
        return view('kegiatan.new', compact(['provinsi','jenis_kegiatan']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
