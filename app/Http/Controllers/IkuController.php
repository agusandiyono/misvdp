<?php

namespace App\Http\Controllers;

use App\Authorizable;
use App\Iku;
Use App\Wilayah\Provinsi;
Use App\Wilayah\Kabupaten;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('Admin')){
            $result = Iku::latest()->paginate();
        }elseif (Auth::user()->hasRole('Desa')){
            $result = Iku::where('desa_id', Auth::user()->desa_id)->paginate();
        }elseif (Auth::user()->hasRole('Kecamatan')){
            $result = Iku::where('kecamatan_id', Auth::user()->kecamatan_id)->paginate();
        }elseif (Auth::user()->hasRole('Kabupaten')){
            $result = Iku::where('kabupaten_id', Auth::user()->kabupaten_id)->paginate();
        }elseif (Auth::user()->hasRole('Provinsi')){
            $result = Iku::where('provinsi_id', Auth::user()->provinsi_id)->paginate();
        }else{
            $result = Iku::latest()->paginate();
        }
        // $result = Iku::latest()->with('user')->paginate();
        return view('iku.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('iku.new', compact(['provinsi']));        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [          
            'foto' => 'required',            
        ]);

        $iku = new Iku([
            'provinsi_id'     => $request->input('provinsi_id'),
            'kabupaten_id'     => $request->input('kabupaten_id'),
            'kecamatan_id'     => $request->input('kecamatan_id'),
            'desa_id'     => $request->input('desa_id'),
            'nama_kontak'     => $request->input('nama_kontak'),
            'no_hp'     => $request->input('no_hp'),
            'sektor'     => $request->input('sektor'),
            'jenis_ttg'     => implode(",", $request->get('jenis_ttg')),
            'komoditas'     => $request->input('komoditas'),
            'nama_ttg'     => $request->input('nama_ttg'),
            'harga'     => $request->input('harga'),
            'deskripsi'     => $request->input('deskripsi'),             
            'user_id'   => Auth::user()->id,            
        ]);

        $iku->save();

        $filename = str_replace(' ', '_', $iku->nama_ttg);

        $imageName = $iku->id . '_' .$filename . '.' . $request->file('foto')->getClientOriginalExtension();

        $request->file('foto')->move(
            base_path() . '/public/img/iku/', $imageName
        );

        return redirect()->route('iku.index');
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
    public function destroy(Iku $iku)
    {
        $me = Auth::user();

        if( $me->hasRole('Admin') ) {
            $iku = Iku::findOrFail($iku->id);
        } else {
            $iku = $me->ikus()->findOrFail($iku->id);
        }

        $iku->delete();

        flash()->success('Iku has been deleted.');

        return redirect()->route('iku.index');
    }
}
