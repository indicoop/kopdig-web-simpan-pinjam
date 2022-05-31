<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-header.png') }}" alt="" height="35">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
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
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-home-8-line"></i> <span data-key="t-landing">Dasboard</span>

                    </a>
                </li>
                <!-- End Dashboard Menu -->

                <!-- Unit Usaha Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('market.barang.index')}}">
                        <i class="ri-shopping-bag-3-line"></i> <span data-key="t-landing">Semua Barang</span>
                    </a>
                </li>
                <!-- End Unit Usaha Menu -->

                <!-- Unit Usaha Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('market.barang.detail')}}">
                        <i class="ri-shopping-bag-3-line"></i> <span data-key="t-landing">Detail Jasa atau barang</span>
                    </a>
                </li>
                <!-- End Unit Usaha Menu -->

                <!-- Unit Usaha Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('market.notifikasi')}}">
                        <i class="ri-notification-3-line"></i> <span data-key="t-landing">Notifikasi</span>
                    </a>
                </li>
                <!-- End Unit Usaha Menu -->

                <!-- Unit Usaha Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('market.checkout')}}">
                        <i class="ri-wallet-3-line"></i> <span data-key="t-landing">Checkout</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('market.transaction')}}">
                        <i class="ri-layout-3-line"></i> <span data-key="t-landing">Transaksi</span>
                    </a>
                </li>
                <!-- End Unit Usaha Menu -->

                <!-- Surat Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="landing">
                        <i class="ri-logout-box-line"></i> <span data-key="t-landing">Log Out</span>
                    </a>
                </li>
                <!-- End Surat Menu -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
