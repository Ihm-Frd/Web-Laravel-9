
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Desa Ciantra</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/ciantra.png') }}">
    <link rel="stylesheet" href="{{ URL::to('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/jam.css') }}">
    <link rel="stylesheet" href="{{ URL::to('https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css') }}"> //data tabel search//

    {{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
    @yield('style')
    
    
</head>

<body>

    <div class="main-wrapper navbar-light  topbar mb-4 static-top shadow">
		<!-- Loader -->
		<div id="loader-wrapper">
			<div id="loader">
				<div class="loader-ellips">
				  <span class="loader-ellips__dot"></span>
				  <span class="loader-ellips__dot"></span>
				  <span class="loader-ellips__dot"></span>
				  <span class="loader-ellips__dot"></span>
				</div>
			</div>
		</div>
		<!-- /Loader -->
        <div class="header">
            <div class="header-left">
                <a href="{{ route('/') }}" class="logo">
                    <img src="{{ URL::to('assets/img/ciantra.png') }}" width="40" height="40" alt="">
                   <b><i> CiantraIndah.com</i></b>
                </a>
            </div>

            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <div class="page-title-box position-center">
                <p id="tanggal" style="font-size: 23px;"></p>

                <script>
                    var tanggalElemen = document.getElementById('tanggal');
                
                    function perbaruiTanggal() {
                        var tanggal = new Date();
                        var options = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};
                        var tanggalTerformat = tanggal.toLocaleDateString('id-ID', options);
                        tanggalElemen.textContent = tanggalTerformat;
                    }
                
                    perbaruiTanggal();
                    setInterval(perbaruiTanggal, 1000);
                </script>
                {{-- <h3>Selamat Datang {{ auth()->user()->nama }}!</h3> --}}
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu">
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </li>

               
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img src="{{ URL::to('assets/img/boy.svg') }}" alt="">
                            <span class="status online"></span></span>
                            <span class="d-none d-lg-inline-block ml-1">
                                <span class="text-dark small">{{ auth()->user()->nama }}</span>
                            </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('dashboard/page') }}">Dashboard</a>


                        @if (auth()->user()->level == 'User') {{-- pengaman antara Admin/User --}}
                        <a class="dropdown-item" href="{{ route('form/input/page') }}">Pengisian</a>
                        @endif
                        
                        @if (auth()->user()->level == 'Admin') {{-- pengaman antara Admin/User --}}
                        <a class="dropdown-item" href="{{ route('form/page/view') }}">Reporting</a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>

            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('dashboard/page') }}">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('form/page/view') }}">Reporting</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>

       <!-- Sidebar -->
		@include('sidebar.sidebar')
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		@yield('content')
		<!-- /Page Wrapper -->
    </div>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/chart.js') }}"></script>
    <script src="{{ URL::to('assets/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/moment.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/fileupload/fileupload.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/app.js') }}"></script>
    <script src="{{ URL::to('assets/js/jam.js') }}"></script>
    
    <script src="{{ URL::to('https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js') }}"></script>
    


	@yield('script')
</body>

</html>
