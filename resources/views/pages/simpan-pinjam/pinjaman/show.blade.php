@extends('layouts.simpanpinjam.app', ['title' => 'Detai Pinjaman'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                    Ajukan Pembayaran
                </button>
                @include('pages.simpan-pinjam.pinjaman.common.modal')
                <h5>Kode Pinjaman:   {{$getLoanById->installment_code}}</h5>

            </div><!-- end card header -->

            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2">Jumlah Pinjaman</label>
                    <div class="col-sm-8">
                        <b>Rp {{$getLoanById->big_loan}}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2">Tenor</label>
                    <div class="col-sm-8">
                        <b>{{$getLoanById->time_period}} Bulan</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2">Bunga</label>
                    <div class="col-sm-8">
                        <b>10%</b>
                    </div>
                </div>

                <hr>

                <div class="col-lg-12">
                    <!-- Table Foot -->
                    <table class="table table-nowrap table-responsive">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Angsuran ke</th>
                                <th scope="col">Angsuran Pokok</th>
                                <th scope="col">Angsuran Bunga</th>
                                <th scope="col">Total Angsuran dibayar</th>
                                <th scope="col">Sisa Angsuran</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                        {{-- <tfoot class="table-light">
                            <tr>
                                <td colspan="4">Status</td>
                                <td><h4Lunas</h4></td>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div><!-- end card-body -->
            <div class="card-footer">
                <a href="{{ route('simpan-pinjam.pinjaman.index')}}" class="btn btn-danger btn-sm">Kembali</a>
                <a href="javascript:void(0)" class="btn btn-warning btn-sm">Print</a>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
@endsection
