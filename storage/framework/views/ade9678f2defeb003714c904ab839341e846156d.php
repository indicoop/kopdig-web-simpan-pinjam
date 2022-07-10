<!-- Grids in modals -->
<div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="exampleModalgridLabel">😎 Pengajuan pembayaran cicilan <?php echo e(count($getAllInstallmentById)); ?> / <?php echo e($getLoanById->time_period); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('simpan-pinjam.pinjaman.loan.store')); ?>" method="POST" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="row g-3">
                        <div class="col-xxl-12">
                            <div>
                                <label for="" class="form-label">Tanggal bayar</label>
                                <input type="date" name="pay_date" class="form-control" id="pay_date" placeholder="Enter pay_date">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="" class="form-label">Angsuran Pokok</label>
                                <input type="text" class="form-control" value="<?php echo e($getLoanById->installment_principal); ?>" name="installment_principal" id="installmentPrincipal" readonly>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div>
                                <label for="" class="form-label">Angsuran Bunga</label>
                                <input type="text" class="form-control" value="" name="installment_amount" id="interesetPerMonth">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="" class="form-label">Total Angsuran</label>
                                <input type="text" class="form-control" name="total_installment" id="totalInstallment">

                              <?php
                                  $time_period = $getLoanById->time_period;
                              ?>
                                <input type="text" name="loan_id" value="<?php echo e($getLoanById->id); ?>">

                                <input type="text" name="installment_to" placeholder="cicilan ke" value="<?php echo e($time_period - (count($getAllInstallmentById) - 1)); ?>" id="installment_to">

                                <input type="text" id="remainingInstallmentStart" class="remainingInstallment" value="<?php echo e($getLoanById->big_loan); ?>" placeholder="sisa angsuran">

                                <input type="text" id="remainingInstallment" name="remaining_installments">
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="">
                                <button type="submit" class="btn btn-primary w-100">Bayar</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/destroylord/htdocs/kopdig-web-simpan-pinjam/resources/views/pages/simpan-pinjam/pinjaman/common/modal.blade.php ENDPATH**/ ?>