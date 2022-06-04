@extends('layouts.simpanpinjam.app', ['title' => 'List Koperasi Simpan Pinjam'])

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
                <h4 class="card-title mb-0 flex-grow-1">List Koperasi Simpan Pinjam</h4>
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
        columns: [
            'Nama Koperasi', 'Direktur', 'Rate', 'Nomor Registrasi', 'Email', 'Phone',
            {
                name: 'Actions',
                formatter:function(e){return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>Show</a>")}
            },

    ],
        server: {
            url: 'https://swapi.dev/api/films/',
            then: data => data.results.map(movie => [movie.title, movie.director, movie.producer, null],
            )
        }
      }).render(document.getElementById("table-gridjs"));
    </script>
@endpush
