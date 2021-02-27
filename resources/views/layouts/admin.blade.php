<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TrackingKopid || Kasus Local dan Global</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/weather-icons/css/weather-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/c3/c3.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/dist/css/theme.min.css')}}">
        <script src="{{asset('assets/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <!-- Datatables-->
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables/datatable.min.css')}}">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
        <script src="{{asset('assets/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        
        @livewireStyles
    </head>

    <body>
        <div class="wrapper">
            <header class="header-top" header-theme="dark">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            {{-- <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div> --}}
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                                <a class="dropdown-item" href="#"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        
            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="">
                            <div class="logo-img">
                               <img src="{{asset('assets/src/img/brand-white.svg')}}" class="header-brand-img" alt="lavalite"> 
                            </div>
                            <span class="text">TrackingKopid</span>
                        </a>
                        <button type="button" class="nav-toggle">
                            <i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i>
                        </button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel"><a><span>Kasus Local</span></a></div>
                                <div class="nav-item">
                                    <a href="{{route('provinsi.index')}}"><i class="ik ik-paperclip"></i><span>Provinsi</span></a>
                                    <a href="{{route('kota.index')}}"><i class="ik ik-paperclip"></i><span>Kota</span></a>
                                    <a href="{{route('kecamatan.index')}}"><i class="ik ik-paperclip"></i><span>Kecamatan</span></a>
                                    <a href="{{route('kelurahan.index')}}"><i class="ik ik-paperclip"></i><span>Kelurahan</span></a>
                                    <a href="{{route('rw.index')}}"><i class="ik ik-paperclip"></i><span>Rukun Warga</span></a>
                                    <a href="{{route('kasus2.index')}}"><i class="ik ik-paperclip"></i><span>Data Kasus</span></a>
                                </div>
                                {{-- <div class="nav-lavel"><a><span>Kasus Global</span></a></div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-paperclip"></i><span>Negara</span></a>
                                    <a href="#"><i class="ik ik-paperclip"></i><span>Data Kasus</span></a>
                                </div> --}}
                                <div class="nav-lavel"><a><span>Authentication</span></a></div>
                                <div class="nav-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                
                                    <i class="ik ik-logout"></i><span>Keluar</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                {{-- <div class="nav-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="ik ik-power dropdown-icon"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    </form>
                                </div> --}}
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="container-fluid">
                        
                        @include('layouts.app')
                    </div>
                </div>
            
                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a class="text-dark" target="_blank">Larafli</a></span>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script window.jQuery || document.write('<script src="{{asset('assets/src/js/vendor/jquery-3.3.1.min.js')}}"></script>')</>
        <script window.jQuerywindow.jQuery src="{{asset('assets/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('assets/plugins/screenfull/dist/screenfull.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/d3/dist/d3.min.js')}}"></script>
        <script src="{{asset('assets/plugins/c3/c3.min.js')}}"></script>
        <script src="{{asset('assets/js/tables.js')}}"></script>
        <script src="{{asset('assets/js/widgets.js')}}"></script>
        <script src="{{asset('assets/js/charts.js')}}"></script>
        <script src="{{asset('assets/dist/js/theme.min.js')}}"></script>
        

        <script src="{{asset('assets/plugins/screenfull/dist/screenfull.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/dist/js/theme.min.js')}}"></script>
        <script src="{{asset('assets/js/datatables.js')}}"></script>
       
        <!-- DataTables -->
        <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}" ></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/js/jquery.dataTables.min.js"></script>
        @yield('js')
        <!-- Page specific script -->
        <script>
            $(document).ready( function () {
                $('#data_table').DataTable();
            } );
        </script>


        @livewireScripts
    </body>
</html>
