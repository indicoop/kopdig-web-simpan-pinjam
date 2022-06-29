

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Kalkulator - Cek Tenor</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <table style="width: 100%">

                    <?php

                    use Illuminate\Support\Str;

                        $label = ["Jumlah Pinjaman", "Cicilan Perbulan", "Bunga Pinjaman", "Perhitungan"];

                        foreach ($label as $key => $value) { ?>

                            <tr style="margin-top: 50px">
                                <td><?php echo e($value); ?></td>
                                <td>
                                    <input type="text" name="<?php echo e(Str::slug($value, '-')); ?>" id="input-<?php echo e($key); ?>" class="form-control">
                                </td>
                            </tr>
                        <?php
                        }
                    ?>
                    
                </table>
                <div class="card-footer">
                    <button class="btn btn-primary">Cek Gan</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Tutorial</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="text-muted">
                    Rumus: Bunga = Sisa Pokok Pinjaman Bulan Sebelumnya x Suku Bunga per Tahun x ( 30 hari / 360 hari)
                </p>

                <div class="mx-n3">
                    <div data-simplebar data-simplebar-auto-hide="false" style="max-height: 220px;" class="px-3">
                        Misal, Anda mengajukan kredit senilai Rp100 juta dengan bunga tahunan 10% selama 12 bulan, maka:
                        <br>
                        <br>

<pre>
Angsuran bulanan pokok = Rp240 juta / 12 = Rp20 juta per bulan.

Bunga bulan ke-1 = (Rp240 juta - (1-1) x Rp20 juta) x 10% / 12 = Rp2 juta.

Sehingga, total cicilan bulan ke-1 ialah Rp20 juta + Rp2 juta = Rp22 juta.

Bunga bula ke-2 = (Rp240 juta - (2-1) x Rp20 juta) x 10% /12 = Rp1.833.333

Sehingga, total cicilan bulan ke-2 ialah Rp20 juta + Rp1.833.333 = Rp21.833.333

Dan begitu seterusnya hingga bulan ke-12, yaitu (Rp240 juta - (12-1) x Rp20 juta) x 10% /12 = Rp166.666
</pre>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->


    
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Koperasi Simpan Pinjam</h4>
                <small class="text-muted">Rekomendasi terbaik untuk peminjaman dana di koperasi simpan pinjam</small>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-hover table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted bg-soft-light">
                            <tr>
                                <th>Coin Name</th>
                                <th>Price</th>
                                <th>24h Change</th>
                                <th>Total Balance</th>
                                <th>Total Coin</th>
                                <th>Actions</th>
                            </tr>
                        </thead><!-- end thead -->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/btc.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Bitcoin</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$48,568.025</td>
                                <td>
                                    <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>5.26
                                    </h6>
                                </td>
                                <td>$53,914.025</td>
                                <td>1.25634801</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/ltc.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Litecoin</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$87,142.027</td>
                                <td>
                                    <h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>3.07
                                    </h6>
                                </td>
                                <td>$75,854.127</td>
                                <td>2.85472161</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/eth.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Eathereum</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$33,847.961</td>
                                <td>
                                    <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>7.13
                                    </h6>
                                </td>
                                <td>$44,152.185</td>
                                <td>1.45612347</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/bnb.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Binance</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$73,654.421</td>
                                <td>
                                    <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>0.97
                                    </h6>
                                </td>
                                <td>$48,367.125</td>
                                <td>0.35734601</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/usdt.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Tether</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$66,742.077</td>
                                <td>
                                    <h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>1.08
                                    </h6>
                                </td>
                                <td>$53,487.083</td>
                                <td>3.62912570</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/dash.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Dash</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$34,736.209</td>
                                <td>
                                    <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>4.52
                                    </h6>
                                </td>
                                <td>$15,203.347</td>
                                <td>1.85412740</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/neo.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Neo</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$56,357.313</td>
                                <td>
                                    <h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>2.87
                                    </h6>
                                </td>
                                <td>$61,843.173</td>
                                <td>1.87732061</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="assets/images/svg/crypto-icons/doge.svg" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="fs-14 mb-0">Dogecoin</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$62,357.649</td>
                                <td>
                                    <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>3.45
                                    </h6>
                                </td>
                                <td>$54,843.173</td>
                                <td>0.95632087</td>
                                <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                            </tr><!-- end -->
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div><!-- end tbody -->
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'Cek Tenor'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kopdig-web-simpan-pinjam\resources\views/pages/simpan-pinjam/tenor/index.blade.php ENDPATH**/ ?>