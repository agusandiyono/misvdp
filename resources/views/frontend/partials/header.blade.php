<div class="page-wrapper-row">
    <div class="page-wrapper-top">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('img/logo-misv.png')}}" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    @if (Auth::check())
                      <!-- BEGIN TOP NAVIGATION MENU -->
                      <div class="top-menu">
                          <ul class="nav navbar-nav pull-right">
                              <!-- BEGIN USER LOGIN DROPDOWN -->
                              <li class="dropdown dropdown-user dropdown-dark">
                                  <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                      <img alt="" class="img-circle" src="{{ asset('metronic/layouts/layout3/img/avatar.png')}}">
                                      <span class="username username-hide-mobile">{{ Auth::user()->name }}</span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-default">
                                      <li>
                                          <a href="{{ url('/profil') }}">
                                              <i class="icon-user"></i> Profile </a>
                                      </li>
                                      <li>
                                          <a href="{{ url('/kegiatans') }}">
                                              <i class="icon-calendar"></i> Activities </a>
                                      </li>
                                      <li>
                                          <a href="{{ url('/posts') }}">
                                              <i class="icon-calendar"></i> Farmers Group</a>
                                      </li>

                                      <li class="divider"> </li>
                                      <li>
                                          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                              <i class="icon-key"></i> Log Out </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
                                      </li>
                                  </ul>
                              </li>
                              <!-- END USER LOGIN DROPDOWN -->

                          </ul>
                      </div>
                      <!-- END TOP NAVIGATION MENU -->
                    @else
                        <div class="top-menu">
                            <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
                            <a href="{{ url('/register') }}" class="btn btn-primary">Register</a>
                        </div>                        
                    @endif

                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">
                  @if (Auth::check())
                  <div class="kanan">
                    <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
                          <li class="{{ Request::is('/admin/home') ? 'active' : '' }}">
                              <a href="/admin/home"><i class="icon-settings"></i> Administrator

                              </a>
                          </li>
                        </ul>
                      </div>
                  </div>
                  @endif
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}"><i class="icon-home"></i> Home
                                </a>
                            </li>
                            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is(array('poktan','dampingan', 'poktanDesa')) ? 'active' : '' }}">
                                <a href="javascript:;"><i class="icon-bar-chart"></i> Program
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left ">
                                    <li aria-haspopup="true" class=" ">
                                        <a href="{{ url('poktan') }}" class="nav-link  "><i class="icon-pencil"></i> Kelompok Tani </a>
                                    </li>
                                    <li aria-haspopup="true" class=" ">
                                        <a href="{{ url('dampingan') }}" class="nav-link  "><i class="icon-map"></i> Desa Dampingan </a>
                                    </li>                                    
                                </ul>
                            </li>
                            

                            <li class="">
                                <a href="#"><i class="icon-users"></i> Berita

                                </a>
                            </li>

                            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is(array('tim/manajemen', 'tim/konsultan','tim/satker', 'tim/detail-tim')) ? 'active' : '' }}">
                                <a href="javascript:;"><i class="icon-wrench"></i> Tim Kami
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left ">
                                    <li aria-haspopup="true" class=" ">
                                        <a href="{{ url('/tim/manajemen') }}" class="nav-link  "><i class="glyphicon glyphicon-tags "></i> Manajemen </a>
                                    </li>
                                    <li aria-haspopup="true" class=" ">
                                        <a href="{{ url('/tim/konsultan') }}" class="nav-link  "><i class="glyphicon glyphicon-folder-open "></i> Konsultan </a>
                                    </li> 
                                    <li aria-haspopup="true" class=" ">
                                        <a href="{{ url('/tim/satker') }}" class="nav-link  "><i class="glyphicon glyphicon-pushpin"></i> Satker </a>
                                    </li>                                    
                                </ul>
                            </li>

                            
                            <li class="{{ Request::is('/download') ? 'active' : '' }}">
                                <a href="{{ url('download') }}"><i class="glyphicon glyphicon-download-alt"></i> Download

                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
    </div>
</div>
