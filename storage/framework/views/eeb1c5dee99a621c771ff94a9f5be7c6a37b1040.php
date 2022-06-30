

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

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label for="basiInput" class="form-label">Nama Lengkap: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div>
                            <label for="basiInput" class="form-label">Jabatan: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div>
                            <label for="basiInput" class="form-label">NIP/NUPTK: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        <div>
                            <label for="basiInput" class="form-label">Besar Pinjaman: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                        <div>
                            <label for="basiInput" class="form-label">Angsuran Selama: </label>
                            <input type="text" class="form-control" id="basiInput">
                        </div>
                       <div>
                            <label for="basiInput" class="form-label">Tanggal Pinjaman:</label>
                            <input type="date" class="form-control" id="basiInput">
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
    <!-- gridjs js -->
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

    <!-- gridjs init -->
    <script>
    new gridjs.Grid({
        search: true,
        columns: [
            'Nama Koperasi', 'Direktur', 'Rate', 'Nomor Registrasi', 'Email', 'Phone',
            {
                name: 'Actions',
                formatter:function(e){return gridjs.html("<a href='#' class='text-reset text-decoration-underline'>Show</a>")}
            },

    ],
        server: {
            url: 'https://swapi.dev/api/films/',
            then: data => data.results.map(movie => [movie.title, movie.director, movie.producer, null],
            )
        }
      }).render(document.getElementById("table-gridjs"));
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.simpanpinjam.app', ['title' => 'Form Pinjaman'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kopdig-web-simpan-pinjam\resources\views/pages/simpan-pinjam/pinjaman/create.blade.php ENDPATH**/ ?>