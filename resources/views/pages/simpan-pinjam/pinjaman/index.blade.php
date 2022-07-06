@extends('layouts.simpanpinjam.app', ['title' => 'List Pinjaman'])

@push('style')
<link
href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css"
rel="stylesheet"
/>
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a  href="{{ route('simpan-pinjam.pinjaman.create') }}" class="btn btn-success btn-label"><i class="ri-user-add-line label-icon align-middle fs-16 me-2"></i>Tambah Peminjam</a>

            </div><!-- end card header -->

            <div class="card-body">
                <div id="table-gridjs"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
@endsection

@push('scripts')
    <!-- gridjs js -->
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

    <!-- gridjs init -->
    <script>
    new gridjs.Grid({
        search: true,
        columns: ['Nama Peminjam', 'Nama Koperasi', 'Nominal Pinjaman', 'Jangka Waktu Pinjaman'],
        server: {
            url: 'http://127.0.0.1:8000/api/pinjaman',
            then: data => data.results.map(loan => [
                loan.user.name,
                loan.cooperative_id,
                loan.big_loan,
                loan.time_period
            ])
        }
      }).render(document.getElementById("table-gridjs"));
    </script>
@endpush
