<?php

namespace App\Http\Controllers;

use App\Authorizable;
use App\Poktan;
Use App\Wilayah\Provinsi;
Use App\Wilayah\Kabupaten;
Use App\Evkin;


use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoktanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function index(Request $request)
    {
        // if (Auth::user()->hasRole('Admin')){
        //     $result = Poktan::orderBy('id', 'ASC')->with(array('user','evkin'))->paginate();
        // }elseif (Auth::user()->hasRole('Desa')){
        //     $result = Poktan::where('desa', Auth::user()->desa)->orderBy('id', 'ASC')->with(array('user','evkin'))->paginate();
        // }elseif (Auth::user()->hasRole('Kecamatan')){
        //     $result = Poktan::where('kecamatan', Auth::user()->kecamatan)->orderBy('id', 'ASC')->with(array('user','evkin'))->paginate();
        // }elseif (Auth::user()->hasRole('Kabupaten')){
        //     $result = Poktan::where('kabupaten', Auth::user()->kabupaten)->orderBy('id', 'ASC')->with(array('user','evkin'))->paginate();
        // }elseif (Auth::user()->hasRole('Provinsi')){
        //     $result = Poktan::where('provinsi', Auth::user()->provinsi)->orderBy('id', 'ASC')->with(array('user','evkin'))->paginate();
        // }else{
        //     $result = Poktan::orderBy('id', 'ASC')->with(array('user','evkin'))->paginate();
        // }
        
        $search = $request->get('search');
        $provinsi = $request->get('provinsi') != '' ? $request->get('provinsi') : -1;
        $field = $request->get('field') != '' ? $request->get('field') : 'id';
        $sort = $request->get('sort') != '' ? $request->get('sort') : 'asc';
        $result = new Poktan();
        if ($provinsi != -1)
            $result = $result->where('provinsi', $provinsi);
        elseif (Auth::user()->hasRole('Provinsi'))    
            $result = Poktan::where('provinsi', Auth::user()->provinsi)->orderBy('id', 'ASC')->with(array('user','evkin'));
        elseif (Auth::user()->hasRole('Kabupaten'))    
            $result = Poktan::where('kabupaten', Auth::user()->kabupaten)->orderBy('id', 'ASC')->with(array('user','evkin'));
        elseif (Auth::user()->hasRole('Kecamatan'))    
            $result = Poktan::where('kecamatan', Auth::user()->kecamatan)->orderBy('id', 'ASC')->with(array('user','evkin'));
        $result = $result->where('nama_kelompok', 'like', '%' . $search . '%')
            ->orderBy($field, $sort)
            ->paginate(20)
            ->withPath('?search=' . $search . '&provinsi=' . $provinsi . '&field=' . $field . '&sort=' . $sort);
        // return view('crud_2.index', compact('customers'));
        
        return view('poktan.index', compact(array('result')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $provinsi = Provinsi::all();
        $provinsi = Provinsi::where('status', 1)->get();
        return view('poktan.new', compact(['provinsi']));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poktan = new Poktan([
            'id'         => $request->input('desa_id'). rand(0, 999),
            'provinsi_id'       => $request->input('provinsi_id'),
            'kabupaten_id'      => $request->input('kabupaten_id'),
            'kecamatan_id'      => $request->input('kecamatan_id'),
            'desa_id'           => $request->input('desa_id'),
            'nama_kelompok'              => $request->input('nama_kelompok'),                       
            'komoditi'          => $request->input('komoditi'),
            'partisipasi'       => $request->input('partisipasi'),                       
            'budidaya'          => $request->input('budidaya'),                       
            'pengolahan'        => $request->input('pengolahan'),                       
            'pemasaran'         => $request->input('pemasaran'),                       
            'pendapatan'        => $request->input('pendapatan'),                       
            'user_id'           => Auth::user()->id,            
        ]);

        $poktan->save();        

        return redirect()->route('poktan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poktan = Poktan::where('id', $id)->get();
        return view('poktan.detail', compact('poktan')); 
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

    public function poktanDesa($desa)
    {
        // $result = Poktan::latest()->with('user')->paginate();
        $result = Poktan::where('desa', $desa)->paginate();
        return view('poktan.poktan_desa', compact(['result'])); 
    }

    public function evkinExcel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }    
}
