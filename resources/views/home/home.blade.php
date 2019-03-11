@extends('layouts.app')

@section('content')

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ url('/admin/home')}}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>
    <!-- <div class="page-toolbar">
        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
            <i class="icon-calendar"></i>&nbsp;
            <span class="thin uppercase hidden-xs"></span>&nbsp;
            <i class="fa fa-angle-down"></i>
        </div>
    </div> -->
</div>
<!-- END PAGE BAR -->


<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Dashboard
    <small>statistik, diagram, kegiatan dan laporan terbaru</small>
</h1>
<!-- END PAGE TITLE-->

<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $dampingan->count() }}">0</span>
                </div>
                <div class="desc"> Desa Dampingan 
                @if (Auth::user()->hasRole('Admin') or Auth::user()->hasRole('Pusat'))
                    <br />PPDM
                @elseif(Auth::user()->hasRole('Provinsi'))
                    <br />di Provinsi {{ Auth::user()->provinsi }}
                @elseif(Auth::user()->hasRole('Kabupaten'))
                    <br />di Kabupaten {{ Auth::user()->kabupaten }}
                @elseif(Auth::user()->hasRole('Kecamatan'))
                    <br />di Distrik {{ Auth::user()->kecamatan }}
                @endif
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="/admin/poktan">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $poktan->count() }}">0</span> </div>
                <div class="desc"> Kelompok Tani 
                @if (Auth::user()->hasRole('Admin') or Auth::user()->hasRole('Pusat'))
                    <br />PPDM
                @elseif(Auth::user()->hasRole('Provinsi'))
                    <br />di Provinsi {{ Auth::user()->provinsi }}
                @elseif(Auth::user()->hasRole('Kabupaten'))
                    <br />di Kabupaten {{ Auth::user()->kabupaten }}
                @elseif(Auth::user()->hasRole('Kecamatan'))
                    <br />di Distrik {{ Auth::user()->kecamatan }}
                @endif
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="0">0</span>
                </div>
                <div class="desc"> Kegiatan </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number"> 
                    <span data-counter="counterup" data-value="0">0</span> </div>
                <div class="desc"> Penggunaan Dana Desa </div>
            </div>
        </a>
    </div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->

@endsection
