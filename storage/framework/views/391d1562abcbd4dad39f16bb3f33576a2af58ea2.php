<?php $__env->startPush('style'); ?>
<link
href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css"
rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <form action="<?php echo e(route('simpan-pinjam.pinjaman.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <select name="user_id" class="form-control <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="select-choices-loans">
                                    <option value="" selected disabled>Cari nama peminjam</option>
                                    
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
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Koperasi</label>
                                <select name="user_id" class="form-control <?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="select-choices-loans">
                                    <option value="" selected disabled>Cari nama peminjam</option>
                                    
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
                        </div>
                        <div class="mb-3">
                                <label for="basiInput" class="form-label">Jenis Kelamin: </label>
                                <input type="text" class="form-control w-25" id="jk" readonly>
                        </div>
                        <hr>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'Form Simpanan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/destroylord/htdocs/kopdig-web-simpan-pinjam/resources/views/pages/simpan-pinjam/simpanan/create.blade.php ENDPATH**/ ?>