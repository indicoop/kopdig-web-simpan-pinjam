@extends('layouts.simpanpinjam.app', ['title' => 'List Koperasi Simpanan'])

@push('style')
<link
href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css"
rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endpush

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-body">
                <form action="{{ route('simpan-pinjam.simpanan.store')}}" method="POST" autocomplete="off">
                    @csrf
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="">Pilih User</label>
                        <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="select-choices-users">
                            <option value="" selected disabled>Cari nama peminjam</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Koperasi</label>
                        <select name="cooperative_id" class="form-control @error('cooperative_id') is-invalid @enderror" id="select-choices-cooperatives">
                            <option value="" selected disabled>Cari nama Koperasi</option>
                            @foreach ($cooperatives as $cooperative)
                                <option value="{{$cooperative->id}}">{{$cooperative->name}}</option>
                            @endforeach
                        </select>
                        @error('cooperative_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Balance</label>
                        <input type="text" name="beginning_balance" id="" class="form-control @error('beginning_balance') is-invalid @enderror">
                        <small class="text-muted">Minimal saldo 50k</small>
                    </div>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-primary">Tambah Simpanan</button>
                </div>
            </form>
                <hr>
                <br>
                <div id="table-gridjs"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
@endsection

@push('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- gridjs js -->
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

    <!-- gridjs init -->
    <script>

        $(function(){

            // Select
            $('#select-choices-users').select2();
            $('#select-choices-cooperatives').select2();
        })

    new gridjs.Grid({
        search: true,
        columns: [
            'Si Kang nyimpen', 'Koperasi', 'Balance',
            {
                name: 'Actions',
                formatter:function(e){return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>Show</a>")}
            },

    ],
        server: {
            url: '{{url('api/simpanan')}}',
            then: data => data.results.map(stash => [
                    stash.user.name,
                    stash.cooperative.name,
                    stash.beginning_balance,
                    null
                ],
            )
        }
      }).render(document.getElementById("table-gridjs"));
    </script>
@endpush
