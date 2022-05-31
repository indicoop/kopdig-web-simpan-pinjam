@extends('layouts.app')
@section('title') @lang('translation.profile') @endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
<div class="profile-foreground position-relative mx-n4 mt-n4">
    <div class="profile-wid-bg">
        <img src="{{ URL::asset('assets/images/profile-bg.jpg') }}" alt="" class="profile-wid-img" />
    </div>
</div>
<div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
    <div class="row g-4">
        <div class="col-auto">
            <div class="avatar-lg">
                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt="user-img"
                    class="img-thumbnail rounded-circle" />
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="p-2">
                <h1 class="text-white mb-1">Noga Muktiwati</h1>
                <h3 class="text-white-75">KOPERASI CAHAYA</h3>
                <div class="hstack text-white-50 gap-1">
                    <div class="me-2">
                        <i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>Alamat: Ponorogo, Jl. Batoro Katong No. 241 B</div>
                        <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Koperasi Peminjaman Dana: KOPERASI SIP
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-12 col-lg-auto order-last order-lg-0"> 
            <div class="row text text-white-50 text-center">
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->
</div>

<div class="row">
    <div class="col-lg-12">
        <div>
            <div class="d-flex">
                <!-- Nav tabs -->
                <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                    role="tablist">
                </ul>
                <div class="flex-shrink-0">
                    <a href="{{route('editprofile')}}" class="btn btn-success"><i
                            class="ri-edit-box-line align-bottom"></i> Edit Profile Simpan Pinjam</a>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content pt-4 text-muted">

                <div class="col-xxl-9">
                      <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Detail Profile Simpan Pinjam</h5>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <th class="ps-0" scope="row">Nama Lengkap:</th>
                                                    <td class="text-muted">Noga Muktiwati</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Alamat:</th>
                                                    <td class="text-muted">Ponorogo, Jl. Batoro Katong No.241 B</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Nomor Telepon:</th>
                                                    <td class="text-muted">(+62) 899 6543 2166</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Alamat E-mail :</th>
                                                    <td class="text-muted">nogayohuman@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Tanggal Simpan Pinjam:</th>
                                                    <td class="text-muted">30 Mei 2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Status: Anggota</h5>
                            <p>Hallo Noga Muktiwati,  tujuan koperasi simpan pinjam adalah untuk mensejahterakan anggotanya. Tujuan koperasi bukanlah untuk mencari keuntungan semata. Akan tetapi, koperasi dan anggotanya harus sama-sama berusaha agar koperasi tidak merugi. Caranya adalah dengan membayar iuran rutin dan membayar cicilan secara tertib. Ini akan membantu koperasi tidak merugi dan tetap berjalan. Simpanan yang disetorkan akan berfungsi sebagai sumber dana pinjaman. Anggota tak perlu khawatir sebab dana yang disetorkan tidak akan mengendap begitu saja. Dana yang tersimpan tersebut akan bersifat produktif,terjamin, dan aman. Selain itu, juga bisa menjadi simpanan hari tua. Jumlah yang akan diterima oleh anggota akan bertambah dalam jangka waktu tertentu.</p>
                            <p>Pinjaman koperasi tentu akan mempermudah anggotanya yang membutuhkan dana. Misal untuk mengembangkan usaha, kebutuhan keluarga, dan lain-lain. Tentu saja pinjaman koperasi akan membantu anggotanya dari jeratan utang bank atau lilitan rentenir sehingga dapat membantu mengentaskan kemiskinan. Proses peminjaman juga relatif mudah dan dengan bunga ringan. Proses dan persyaratannnya pun mudah dan tanpa jaminan apapun. Namun anggota yang meminjam dana tentu diimbau agar membayar cicilan tepat waktu dan meminjam dana untuk keperluan yang benar-benar penting.</p>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div
                                            class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div
                                                class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-user-2-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Koperasi Asal:</p>
                                            <h6 class="text-truncate mb-0">KOPERASI CAHAYANA</h6>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div
                                            class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div
                                                class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-global-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Koperasi Peminjaman Dana:</p>
                                            <a href="#"
                                                class="fw-semibold">KOPERASI SIP</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div><!-- end card -->
                </div>
                          
                        </div>
                        <!--end col-->

                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end tab-pane-->
            </div>
            <!--end tab-content-->
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
