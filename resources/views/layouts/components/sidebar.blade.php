<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="https://marketplace.kopdig.id/assets/img/logo-utama.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-header.png') }}" alt="" height="35">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span >@lang('translation.menu')</span></li>
                 <!-- Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="{{ route('dashboard')}}">
                        <i class="ri-home-8-line"></i> <span data-key="t-landing">Dasboard</span>

                    </a>
                </li>
                <!-- End Dashboard Menu -->

                <!-- Koperasi Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSimpanPinjam" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSimpanPinjam">
                        <i class="ri-boxing-line"></i> <span >Simpan Pinjam</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSimpanPinjam">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('simpan-pinjam.index')}}" class="nav-link" role="button"
                                    aria-expanded="false" aria-controls="sidebarSignUp" >Semua Data
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link"  >List Simpanan
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="{{ route('simpan-pinjam.pinjaman.index') }}" class="nav-link"  >List Pinjaman
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Koperasi Menu -->

                 <!-- Laporan Menu -->
                 <li class="nav-item">
                    <a class="nav-link menu-link"  href="javascript:void(0)">
                        <i class="ri-settings-3-line"></i> <span data-key="t-landing">Pengaturan</span>
                    </a>
                </li>
                <!-- End Laporan Menu Laporan -->

                {{-- <!-- Surat Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link"  href="landing">
                        <i class="ri-logout-box-line"></i> <span data-key="t-landing">Log Out</span>
                    </a>
                </li>
                <!-- End Surat Menu --> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
