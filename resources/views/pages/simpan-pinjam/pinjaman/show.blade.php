@extends('layouts.simpanpinjam.app', ['title' => 'Detai Pinjaman'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <button type="button" class="btn btn-success btn-sm" {{ (count($getAllInstallmentById) > $getLoanById->time_period) ? 'disabled' : ''}} data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
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
                            @foreach ($getAllInstallmentById as $item)
                            <tr>
                                @if ($item->installment_to == 0)
                                <td>0</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <div id="installment_start"> {{ $item->remaining_installments}} </div></td>
                                @else
                                <td>{{ $loop->index}}</td>
                                <td>{{ $getLoanById->installment_principal}}</td>
                                <td>{{ $item->installment_amount}}</td>
                                <td>{{ $item->total_installment}}</td>
                                <td class="remainingInstallment">{{ $item->remaining_installments}}</td>
                                @endif
                            </tr>
                            @endforeach
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
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(function(){

            // Rumus Bunga
            let installmentPrincipal = $('#installmentPrincipal').val();
            let remainingInstallments = $('.remainingInstallment:last').text();

            const isLastPay = {{ $getLoanById->time_period - count($getAllInstallmentById) }}

            let interestInstallment = (remainingInstallments * 10 / 100) / $('#installment_to').val()
            $('#interesetPerMonth').val(interestInstallment)

            // Rumus besar angsuran
            let bigInstallment = parseInt(installmentPrincipal) + parseInt(interestInstallment)
            $('#totalInstallment').val(bigInstallment)

            // Sisa angsuran
            let totalRemainingInstallment = parseInt(remainingInstallments) - parseInt(bigInstallment)
            if (isLastPay == 0) totalRemainingInstallment = 0

            $('#remainingInstallment').val(totalRemainingInstallment)
            $('#remainingInstallmentStart').val(remainingInstallments)

        })
    </script>
@endpush
