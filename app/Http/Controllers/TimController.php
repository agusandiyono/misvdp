<?php

namespace App\Http\Controllers;


use App\Authorizable;
use App\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Tim::paginate();
        return view('tim.index', compact('result'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tim.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (request()->hasFile('foto')) {
            $filename = str_replace(' ', '_', $request->input('nama'));
            $imageName = $filename . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(
                base_path() . '/public/img/tim/', $imageName
            );   
            $tim = new Tim([
                'nama'     => $request->input('nama'),
                'jabatan'     => $request->input('jabatan'),
                'email'     => $request->input('email'),
                'telp'     => $request->input('telp'),
                'jenis'     => $request->input('jenis'),
                'tentang'     => $request->input('tentang'),
                'fb'           => $request->input('fb'),
                'twitter'     => $request->input('twitter'),
                'ig'        => $request->input('ig'),
                'foto'     => $imageName,            
            ]);
        }else{
            $tim = new Tim([
                'nama'     => $request->input('nama'),
                'jabatan'     => $request->input('jabatan'),
                'email'     => $request->input('email'),
                'telp'     => $request->input('telp'),
                'jenis'     => $request->input('jenis'),
                'tentang'     => $request->input('tentang'),
                'fb'           => $request->input('fb'),
                'twitter'     => $request->input('twitter'),
                'ig'        => $request->input('ig'),
                'foto'     => '',            
            ]);
        }

        $tim->save();

        return redirect()->route('tim.index');
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
