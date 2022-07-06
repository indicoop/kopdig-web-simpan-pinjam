<?php $__env->startPush('style'); ?>
<link
href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css"
rel="stylesheet"
/>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a  href="<?php echo e(route('simpan-pinjam.pinjaman.create')); ?>" class="btn btn-success btn-label"><i class="ri-user-add-line label-icon align-middle fs-16 me-2"></i>Tambah Peminjam</a>

            </div><!-- end card header -->

            <div class="card-body">
                <div id="table-gridjs"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'List Pinjaman'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/destroylord/htdocs/kopdig-web-simpan-pinjam/resources/views/pages/simpan-pinjam/pinjaman/index.blade.php ENDPATH**/ ?>