<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                    Ajukan Pembayaran
                </button>
                <?php echo $__env->make('pages.simpan-pinjam.pinjaman.common.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <h5>Kode Pinjaman:   <?php echo e($getLoanById->installment_code); ?></h5>

            </div><!-- end card header -->

            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2">Jumlah Pinjaman</label>
                    <div class="col-sm-8">
                        <b>Rp <?php echo e($getLoanById->big_loan); ?></b>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2">Tenor</label>
                    <div class="col-sm-8">
                        <b><?php echo e($getLoanById->time_period); ?> Bulan</b>
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

                        
                    </table>
                </div>
            </div><!-- end card-body -->
            <div class="card-footer">
                <a href="<?php echo e(route('simpan-pinjam.pinjaman.index')); ?>" class="btn btn-danger btn-sm">Kembali</a>
                <a href="javascript:void(0)" class="btn btn-warning btn-sm">Print</a>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function(){
            var
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'Detai Pinjaman'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/destroylord/htdocs/kopdig-web-simpan-pinjam/resources/views/pages/simpan-pinjam/pinjaman/show.blade.php ENDPATH**/ ?>