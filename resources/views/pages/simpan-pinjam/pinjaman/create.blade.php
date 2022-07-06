@extends('layouts.simpanpinjam.app', ['title' => 'Form Pinjaman'])

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
            <form action="{{ route('simpan-pinjam.pinjaman.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="select-choices-loans">
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
                                <label for="basiInput" class="form-label">Jabatan: </label>
                                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" id="">
                                @error('position')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">NIK: </label>
                                <input type="text" name="nik" value="3511110301010004" class="form-control @error('nik') is-invalid @enderror" id="basiInput">
                                @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">No.handphone :</label>
                                <input type="number" class="form-control" id="no" readonly>
                        </div>
                        <div class="mb-3">
                                <label for="basiInput" class="form-label">Jenis Kelamin: </label>
                                <input type="text" class="form-control w-25" id="jk" readonly>
                        </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label class="form-label"> Nama Koperasi</label>
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
                                <label for="basiInput" class="form-label">Jenis Pekerjaan: </label>
                                <input type="text" class="form-control @error('type_of_work') is-invalid @enderror" name="type_of_work" id="" value="{{ old('type_of_work')}}">
                                @error('type_of_work')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Penghasilan Perbulan: </label>
                                <input type="text" value="50000000" class="form-control @error('monthly_income') is-invalid @enderror" name="monthly_income" id="basiInput">
                                @error('monthly_income')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="mb-3">
                                <label for="basiInput" class="form-label">Alamat :</label>
                                <textarea name="" id="address" cols="30" rows="10" readonly class="form-control"></textarea>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Nominal Pinjaman: </label>
                                <input type="text" value="20000000" class="form-control @error('big_loan') is-invalid @enderror" id="nominal" value="" name="big_loan">
                                @error('big_loan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">Bulan: </label>
                                <select name="time_period" id="selectedMonth"
                                        class="form-control @error('time_period') is-invalid @enderror">
                                    <option value="" selected disabled>Pilih Bulan</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{$i}}">{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('time_period')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="basiInput" class="form-label">bunga: </label>
                                <p>10%</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="">Total Nominal</label>
                                <input type="text" name="" id="totalNominal" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="">Bunga Pertahun</label>
                                <input type="text" name="interest_per_year" id="bungaPerTahun" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="">Bunga Perbulan</label>
                                <input type="text" name="interest_per_month" id="bungaPerBulan" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label for="">Cicilan Perbulan</label>
                                <input type="text" id="cicilanPerBulan" name="installment" class="form-control" readonly>
                            </div>
                        </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
                <div class="card-footer">
                    <button class="btn btn-success">Ajukan Pinjaman</button>
                </div>
            </form>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
@endsection

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        $(function(){

            // Select
            $('#select-choices-loans').select2();
            $('#select-choices-cooperatives').select2();

            $('#select-choices-loans').on('change', function(){
                var id = $(this).val();
                const uri = "http://127.0.0.1:8000/api/user/"
                $.ajax({
                    url: uri+id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){

                        var user = data.data[0]
                        if (user.gender == 'L') {
                            $('#jk').val('Laki-laki')
                        } else {
                            $('#jk').val('Perempuan')
                        }
                        $('#no').val(user.phone_number)
                        $('#address').val(user.address)
                    }
                })
            })

            $('#selectedMonth').on('change', function(){
                var nominal = $('#nominal').val();
                var month = $(this).val()

                let PembagianTotaldanBulan = nominal / month;
                let bungaPerTahun = nominal / 100 * 10;
                let bungaPerBulan = bungaPerTahun / month;
                let cicilanPerBulan = PembagianTotaldanBulan + bungaPerBulan;

                $('#totalNominal').val(Math.round(PembagianTotaldanBulan))
                $('#bungaPerTahun').val(bungaPerTahun)
                $('#bungaPerBulan').val(Math.round(bungaPerBulan))
                $('#cicilanPerBulan').val(Math.round(cicilanPerBulan))

            })

        });
    </script>
@endpush
