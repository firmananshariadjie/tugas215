<?php $__env->startSection('title','Detail Matakuliah'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1 class='mt-3'>Detail Matakuliah  !</h1>
           
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Mata Kuliah : <?php echo e($ujian->nama_mk); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Dosen Pengampu : <?php echo e($ujian->dosen); ?></h6>
                <p class="card-text">Jumlah Soal : <?php echo e($ujian->jumlah_soal); ?></p>
                <p class="card-text">Keterangan : <?php echo e($ujian->keterangan); ?></p>
                
                <a href="<?php echo e($ujian->id); ?>/edit" class="badge badge-primary">Edit</a>
                <form action="/ujian/<?php echo e($ujian->id); ?>" method="post" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="badge badge-danger">Hapus</button>
                </form>
            </div>
         </div>
            
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/ujian/show.blade.php ENDPATH**/ ?>