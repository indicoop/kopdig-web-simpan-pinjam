@extends('layouts.simpanpinjam.app', ['title' => 'Form Pinjaman'])

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

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label for="basiInput" class="form-label">Nama Lengkap: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div>
                            <label for="basiInput" class="form-label">Jabatan: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div>
                            <label for="basiInput" class="form-label">NIP/NUPTK: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        <div>
                            <label for="basiInput" class="form-label">Besar Pinjaman: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div>
                            <label for="basiInput" class="form-label">Angsuran Selama: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                       <div>
                            <label for="basiInput" class="form-label">Tanggal Pinjaman:</label>
                            <input type="date" class="form-control" id="basiInput">
                       </div>
                    </div>
                </div>
            
                
                
                
                 
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
