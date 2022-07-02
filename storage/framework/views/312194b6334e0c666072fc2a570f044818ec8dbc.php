<?php $__env->startPush('style'); ?>
<link
href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css"
rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <select name="" class="form-control" id="select-choices-loans">
                                <option value="" selected disabled>Cari nama peminjam</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="basiInput" class="form-label">Jabatan: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div class="mb-3">
                            <label for="basiInput" class="form-label">NIK: </label>
                            <input type="text" class="form-control" id="basiInput">
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
                            <select name="" class="form-control" id="select-choices-cooperatives">
                                <option value="" selected disabled>Cari nama Koperasi</option>
                                <?php $__currentLoopData = $cooperatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cooperative->id); ?>"><?php echo e($cooperative->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="basiInput" class="form-label">Jenis Pekerjaan: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div class="mb-3">
                            <label for="basiInput" class="form-label">Penghasilan Perbulan: </label>
                            <input type="text" class="form-control" id="basiInput">
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
                            <input type="text" class="form-control" id="nominal" value="50000000">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="basiInput" class="form-label">Bulan: </label>
                            <select name="" id="selectedMonth" class="form-control">
                                <option value="" selected disabled>Pilih Bulan</option>
                                <?php for($i = 1; $i <= 12; $i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                <?php endfor; ?>
                            </select>

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
                            <input type="text" id="totalNominal" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="">Bunga Pertahun</label>
                            <input type="text" id="bungaPerTahun" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="">Bunga Perbulan</label>
                            <input type="text" id="bungaPerBulan" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label for="">Cicilan Perbulan</label>
                            <input type="text" id="cicilanPerBulan" class="form-control">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div><!-- end card-body -->
            <div class="card-footer">
                <button class="btn btn-success">Ajukan Pinjaman</button>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'Form Pinjaman'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/destroylord/htdocs/kopdig-web-simpan-pinjam/resources/views/pages/simpan-pinjam/pinjaman/create.blade.php ENDPATH**/ ?>