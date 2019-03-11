<?php

namespace App\Http\Controllers;

use App\Authorizable;
use App\Dampingan;
Use App\Wilayah\Provinsi;
Use App\Wilayah\Kabupaten;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DampinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::user()->hasRole('Admin')){
        //     $result = Dampingan::latest()->paginate();
        // }elseif (Auth::user()->hasRole('Desa')){
        //     $result = Dampingan::where('desa_id', Auth::user()->desa_id)->paginate();
        // }elseif (Auth::user()->hasRole('Kecamatan')){
        //     $result = Dampingan::where('kecamatan_id', Auth::user()->kecamatan_id)->paginate();
        // }elseif (Auth::user()->hasRole('Kabupaten')){
        //     $result = Dampingan::where('kabupaten_id', Auth::user()->kabupaten_id)->paginate();
        // }elseif (Auth::user()->hasRole('Provinsi')){
        //     $result = Dampingan::where('provinsi_id', Auth::user()->provinsi_id)->paginate();
        // }else{
        //     $result = Dampingan::latest()->paginate();
        // }        
        $result = Dampingan::latest()->paginate();
        return view('wilayah.dampingan.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::where('status', 1)->get();
        return view('wilayah.dampingan.new', compact(['provinsi']));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dampingan = new Dampingan([            
            'provinsi_id'       => $request->input('provinsi_id'),
            'kabupaten_id'      => $request->input('kabupaten_id'),
            'kecamatan_id'      => $request->input('kecamatan_id'),
            'desa_id'           => $request->input('desa_id'),
            'tahun'              => $request->input('tahun'),                                         
        ]);

        $dampingan->save();        

        return redirect()->route('dampingan.index');
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
