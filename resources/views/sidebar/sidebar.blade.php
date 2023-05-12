
<!-- Sidebar -->
<div class="sidebar bg-warning " id="sidebar">
    <div class="sidebar-inner slimscroll">
        <br>
       
        <div id="sidebar-menu" class="sidebar-menu">
            
            <ul>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ set_active(['/','dashboard/page']) }}" href="{{ route('dashboard/page') }}">Admin Dashboard</a></li>
                    </ul>
                </li>

                <hr class="sidebar-divider my-0">

                <li class="submenu">
                    <a href="#"><i class="la la-object-group"></i> <span> Form Pengisian</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ set_active(['form/input/page']) }}" href="{{ route('form/input/page') }}">Form Input</a></li>
                        <li><a class="{{ set_active(['form/update/page']) }}" href="{{ route('form/update/page') }}">Form Upload File</a></li>
                    </ul>
                </li>

                <hr class="sidebar-divider my-0">

                
                
                @if (auth()->user()->level == 'Admin') {{-- pengaman antara Admin/User --}}
                <li class="submenu">
                    <a href="#"><i class="la la-pie-chart"></i> <span> Halaman Reporting </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ set_active(['form/page/view']) }} {{ request()->is('form/input/edit/*') ? 'active' : '' }}" href="{{ route('form/page/view') }}">List Penduduk</a></li>
                        <li><a class="{{ set_active(['view/upload/file']) }} {{ request()->is('download/file/*') ? 'active' : '' }}" href="{{ route('view/upload/file') }}">Laporan Upload File</a></li>
                    </ul>
                </li>
                @endif

                <hr>

                <div class="container" >
                    <div class="clock" style="background-image: url('{{ asset('assets/img/clock.png') }}');">
                        <div class="clockwise hours"></div>
                        <div class="clockwise minutes"></div>
                        <div class="clockwise seconds"></div>
                    </div>
                </div>
                
                <hr class="sidebar-divider my-0">
                <br>
                <br>
                <br>
                <div class="mt-auto">
                    <button type="button" class="btn btn-outline-light m-4">
                        <b><a href="{{ route('logout') }}"><i class="bi bi-box-arrow-in-left text-dark"></i> <span class="text-dark"> Logout </span> <span class="menu-arrow"></span></a></b>
                    </button>
                </div>
                

                

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

       
    
    