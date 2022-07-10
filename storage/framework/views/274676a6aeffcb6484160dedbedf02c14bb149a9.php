<!-- Grids in modals -->
<div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="exampleModalgridLabel">Pengajuan pembayaran cicilan 1 / <?php echo e($getLoanById->time_period); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);" autocomplete="off">
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
                                <input type="text" class="form-control" value="<?php echo e($getLoanById->installment_principal); ?>" name="installment_principal" id="installment_principal" readonly>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div>
                                <label for="" class="form-label">Angsuran Bunga</label>
                                <input type="text" class="form-control" value="<?php echo e($getLoanById->interest_per_month); ?>" name="intereset_per_month" id="intereset_per_month">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="" class="form-label">Total Angsuran</label>
                                <input type="text" class="form-control" name="total_installment" id="total_installment">
                                <input type="text" id="remaining_installment" placeholder="sisa angsuran">
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
<?php /**PATH C:\xampp\htdocs\kopdig-web-simpan-pinjam\resources\views/pages/simpan-pinjam/pinjaman/common/modal.blade.php ENDPATH**/ ?>