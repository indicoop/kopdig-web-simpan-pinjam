<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <title>Kopdig.id | Simpan Pinjam - {{ $title ?? 'Teho'}} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="https://marketplace.kopdig.id/assets/img/logo-utama.png">
    @include('layouts.partials.head-css')
</head>

@section('body')
<body>
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.components.navbar')
        @include('layouts.components.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">{{ $title ?? ''}}</h4>
                            </div>
                        </div>
                    </div>
                    @include('sweetalert::alert')
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.components.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    {{-- @include('layouts.customizer') --}}

    <!-- JAVASCRIPT -->
    @include('layouts.partials.vendor-scripts')
</body>

</html>
