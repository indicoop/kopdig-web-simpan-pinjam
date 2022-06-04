@extends('layouts.simpanpinjam.app', ['title' => 'Dashboard'])

@section('content')
<div class="row">
    <div class="col-xl-4">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase text-primary"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        </span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden ms-3">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                            Anggota</p>
                        <div class="d-flex align-items-center mb-3">
                            <h4 class="fs-4 flex-grow-1 mb-0">24 Anggota</span></h4>
                            <span class="badge badge-soft-primary fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>4 Anggota Baru</span>
                        </div>
                        {{-- <p class="text-muted text-truncate mb-0">Projects this month</p> --}}
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-success"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-medium text-muted mb-3">Persetujuan</p>
                        <div class="d-flex align-items-center mb-3">
                            <h4 class="fs-4 flex-grow-1 mb-0">64 Koperasi</span></h4>
                            <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>2 Koperasi Baru</span>
                        </div>
                        {{-- <p class="text-muted mb-0">Leads this month</p> --}}
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div><!-- end col -->

    <div class="col-xl-4">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-info"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </span>
                    </div>
                    <div class="flex-grow-1 overflow-hidden ms-3">
                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                            Transaksi</p>
                        <div class="d-flex align-items-center mb-3">
                            <h4 class="fs-4 flex-grow-1 mb-0">25 Transaksi</span></h4>
                            <span class="badge badge-soft-info fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>5 Transaksi baru</span>
                        </div>
                        {{-- <p class="text-muted text-truncate mb-0">Work this month</p> --}}
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div><!-- end col -->

    {{-- Balance Overview --}}
    <div class="col-xxl-12">
        <div class="card card-height-100">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Balance Overview</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Current Year<i class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Current Year</a>
                        </div>
                    </div>
                </div>
            </div><!-- end card header -->
            <div class="card-body px-0">
                <ul class="list-inline main-chart text-center mb-0">
                    <li class="list-inline-item chart-border-left me-0 border-0">
                        <h4 class="text-primary">$584k <span class="text-muted d-inline-block fs-13 align-middle ms-2">Revenue</span></h4>
                    </li>
                    <li class="list-inline-item chart-border-left me-0">
                        <h4>$497k<span class="text-muted d-inline-block fs-13 align-middle ms-2">Expenses</span>
                        </h4>
                    </li>
                    <li class="list-inline-item chart-border-left me-0">
                        <h4><span data-plugin="counterup">3.6</span>%<span class="text-muted d-inline-block fs-13 align-middle ms-2">Profit Ratio</span></h4>
                    </li>
                </ul>

                <div id="revenue-expenses-charts" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

    {{-- Datatable list User --}}
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Barang / transaksi terbanyak</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                        <thead class="table-light">
                            <tr class="text-muted">
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 20%;">Last Contacted</th>
                                <th scope="col">Sales Representative</th>
                                <th scope="col" style="width: 16%;">Status</th>
                                <th scope="col" style="width: 12%;">Deal Value</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Absternet LLC</td>
                                <td>Sep 20, 2021</td>
                                <td><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);" class="text-body fw-medium">Donald Risher</a></td>
                                <td><span class="badge badge-soft-success p-2">Deal Won</span></td>
                                <td><div class="text-nowrap">$100.1K</div></td>
                            </tr>
                            <tr>
                                <td>Raitech Soft</td>
                                <td>Sep 23, 2021</td>
                                <td><img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);" class="text-body fw-medium">Sofia Cunha</a></td>
                                <td><span class="badge badge-soft-warning p-2">Intro Call</span></td>
                                <td><div class="text-nowrap">$150K</div></td>
                            </tr>
                            <tr>
                                <td>William PVT</td>
                                <td>Sep 27, 2021</td>
                                <td><img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);" class="text-body fw-medium">Luis Rocha</a></td>
                                <td><span class="badge badge-soft-danger p-2">Stuck</span></td>
                                <td><div class="text-nowrap">$78.18K</div></td>
                            </tr>
                            <tr>
                                <td>Loiusee LLP</td>
                                <td>Sep 30, 2021</td>
                                <td><img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria Rodrigues</a></td>
                                <td><span class="badge badge-soft-success p-2">Deal Won</span></td>
                                <td><div class="text-nowrap">$180K</div></td>
                            </tr>
                            <tr>
                                <td>Apple Inc.</td>
                                <td>Sep 30, 2021</td>
                                <td><img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                    <a href="#javascript: void(0);" class="text-body fw-medium">Vitoria Rodrigues</a></td>
                                <td><span class="badge badge-soft-info p-2">New Lead</span></td>
                                <td><div class="text-nowrap">$78.9K</div></td>
                            </tr>
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div><!-- end table responsive -->
            </div><!-- end card body -->
        </div><!-- end card -->
    </div>
</div>
@endsection

@push('scripts')
         <!-- apexcharts -->
         <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

         <!-- Dashboard init -->
         <script src="{{ asset('assets/js/pages/dashboard-crm.init.js')}}"></script>
@endpush
