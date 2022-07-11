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
                <form action="<?php echo e(route('simpan-pinjam.simpanan.store')); ?>" method="POST" autocomplete="off">
                    <?php echo csrf_field(); ?>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="">Pilih User</label>
                        <select name="user_id" class="form-control <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="select-choices-users">
                            <option value="" selected disabled>Cari nama peminjam</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="">Koperasi</label>
                        <select name="cooperative_id" class="form-control <?php $__errorArgs = ['cooperative_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="select-choices-cooperatives">
                            <option value="" selected disabled>Cari nama Koperasi</option>
                            <?php $__currentLoopData = $cooperatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cooperative): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cooperative->id); ?>"><?php echo e($cooperative->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['cooperative_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="">Balance</label>
                        <input type="text" name="beginning_balance" id="" class="form-control <?php $__errorArgs = ['beginning_balance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

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
            url: '<?php echo e(url('api/simpanan')); ?>',
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'List Koperasi Simpanan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/destroylord/htdocs/kopdig-web-simpan-pinjam/resources/views/pages/simpan-pinjam/simpanan/index.blade.php ENDPATH**/ ?>