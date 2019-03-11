<?php

namespace App\Http\Controllers;

use App\Poktan;
use App\Dampingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $poktan = Poktan::all();
        if (Auth::user()->hasRole('Provinsi')){
            $poktan = Poktan::where('provinsi', Auth::user()->provinsi)->with(array('user','evkin'));
            $dampingan = Dampingan::where('provinsi', Auth::user()->provinsi)->with(array('user'));
        }elseif (Auth::user()->hasRole('Kabupaten')){
            $poktan = Poktan::where('kabupaten', Auth::user()->kabupaten)->with(array('user','evkin'));
            $dampingan = Dampingan::where('kabupaten', Auth::user()->kabupaten)->with(array('user'));
        }elseif (Auth::user()->hasRole('Kecamatan')){
            $poktan = Poktan::where('kecamatan', Auth::user()->kecamatan)->with(array('user','evkin'));
            $dampingan = Dampingan::where('kecamatan', Auth::user()->kecamatan)->with(array('user'));
        }else{
            $poktan = Poktan::all();
            $dampingan = Dampingan::all();
        }
        return view('home.home', compact('dampingan', 'poktan'));
        // return view('home');
    }
}
