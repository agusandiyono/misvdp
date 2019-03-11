<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo-misv.png')}}" alt="logo" ></a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            @if (Auth::check())
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{ asset('metronic/layouts/layout/img/avatar.png')}}" />
                        <span class="username username-hide-on-mobile">  {{ Auth::user()->name }} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> My Profile </a>
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
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
            </ul>
            @endif
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->


<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            @if (Auth::check())
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <!-- END SIDEBAR TOGGLER BUTTON -->
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>

                <li class="nav-item start {{ Request::is('admin/home') ? 'active' : '' }}">
                    <a href="{{ url('admin/home') }}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Features</h3>
                </li>
                @can('view_kegiatans')
                <li class="nav-item start {{ Request::is('admin/kegiatan*') ? 'active' : '' }}">
                    <a href="{{ route('kegiatan.index') }}" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">Kegiatan</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endcan               
                @can('view_poktans')
                <li class="nav-item start {{ Request::is('admin/poktan*') ? 'active' : '' }}">
                    <a href="{{ route('poktan.index') }}" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">Kelompok Tani</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endcan

                @can('view_dampingans')
                <li class="nav-item start {{ Request::is('admin/dampingan*') ? 'active' : '' }}">
                    <a href="{{ route('dampingan.index') }}" class="nav-link nav-toggle">
                        <i class="icon-docs"></i>
                        <span class="title">Desa Dampingan</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @endcan


                @endif

                @role('Admin')
                <li class="heading">
                    <h3 class="uppercase">Admin</h3>
                </li>
                

                @can('view_users')
                <li class="nav-item start {{ Request::is(['roles*', 'users*']) ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}" class="nav-link nav-toggle ">
                        <i class="icon-user"></i>
                        <span class="title">Users</span>
                        <span class="arrow"></span>
                        <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        @can('view_users')
                        <li class="nav-item {{ Request::is('users*') ? 'active' : '' }} ">
                            <a href="{{ route('users.index') }}" class="nav-link ">
                              <i class="icon-user"></i>
                              <span class="title">Users</span>

                            </a>
                        </li>
                        @endcan

                        @can('view_roles')
                        <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }} ">
                            <a href="{{ route('roles.index') }}" class="nav-link ">
                                <i class="icon-key"></i>
                                <span class="title">Roles</span>

                            </a>
                        </li>
                        @endcan

                    </ul>
                </li>
                @endcan
            @endif
            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
