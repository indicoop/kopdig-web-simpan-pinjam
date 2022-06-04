<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-beetwen">
                <h4 class="card-title mb-0 flex-grow-1">Detail Koperasi Simpan Pinjam <?php echo e($cooperativeId->name); ?></h4>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                    Pengajuan
                </button>

                
                <?php echo $__env->make('pages.simpan-pinjam.common.modal-pengajuan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="col-xxl-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified nav-border-top nav-border-top-success mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#nav-border-justified-home" role="tab" aria-selected="true">
                                <i class="ri- ri-pencil-line align-middle me-1"></i> Detail Koperasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#nav-border-justified-profile" role="tab" aria-selected="false">
                                <i class="ri-numbers-fill me-1 align-middle"></i> Grafik Pertumbuhan
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="nav-border-justified-home" role="tabpanel">
                            
                            <p class="mb-0">
                                <form action="">
                                    <div>
                                        <label for="labelInput" class="form-label">Nama Ketua</label>
                                        <input type="text" value="<?php echo e($cooperativeId->name); ?>" class="form-control" id="labelInput">
                                    </div>
                                    <div class="mt-3">
                                        <label for="basiInput" class="form-label">Alamat</label>
                                        
                                        <textarea name="" id="" cols="30" rows="10" class="form-control"><?php echo e($cooperativeId->address); ?></textarea>
                                    </div>
                                    <div class="mt-3">
                                        <label for="basiInput" class="form-label">Jumlah Anggota</label>
                                        <input type="text" readonly value="<?php echo e($countCooperative); ?>" class="form-control" id="basiInput">
                                    </div>
                                </form>
                            </p>
                        </div>
                        <div class="tab-pane" id="nav-border-justified-profile" role="tabpanel">
                            
                            <div id="area_chart_spline" data-colors='["--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                    

                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
     <!-- apexcharts -->
     <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
     <!-- areacharts init -->
     <script>

    function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        colors = JSON.parse(colors);
        return colors.map(function (value) {
        var newValue = value.replace(" ", "");

        if (newValue.indexOf(",") === -1) {
            var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
            if (color) return color;else return newValue;
            ;
        } else {
            var val = value.split(',');

            if (val.length == 2) {
            var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
            rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
            return rgbaColor;
            } else {
            return newValue;
            }
        }
        });
    }
    } // Basic area Charts
         var areachartSplineColors = getChartColorsArray("area_chart_spline");
            var options = {
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            chart: {
                height: 350,
                type: 'area',
                toolbar: {
                show: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            colors: areachartSplineColors,
            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
            },
            tooltip: {
                x: {
                format: 'dd/MM/yy HH:mm'
                }
            }
            };
var chart = new ApexCharts(document.querySelector("#area_chart_spline"), options);
chart.render();
     </script>
     
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'Detail Koperasi Simpan Pinjam'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/destroylord/htdocs/kopdig-web-simpan-pinjam/resources/views/pages/simpan-pinjam/detail.blade.php ENDPATH**/ ?>