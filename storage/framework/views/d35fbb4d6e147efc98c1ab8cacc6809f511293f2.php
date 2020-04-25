<?php $__env->startSection('title','Daftar Matakuliah'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1 class='mt-3'>Daftar Matakuliah  !</h1>
        <a href="/ujian/create" class="btn btn-primary my-3">Tambah Matakuliah</a>

            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <!-- <ul class="list-group">
            <?php $__currentLoopData = $ujian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $un): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <li class="list-group-item d-flex justify-content-between align-items-center">                   
                    <?php echo e($un->nama_mk); ?>

                    <a href="/ujian/<?php echo e($un->id); ?>" class="badge badge-info">detail</a>
                </li>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
            </ul> -->
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama MK</th>
                    <th scope="col">Dosen</th>                    
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $ujian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $un): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($un->nama_mk); ?></td>
                        <td><?php echo e($un->dosen); ?></td>                  
                        <td>
                            <a href="/ujian/<?php echo e($un->id); ?>" class="badge badge-info">detail</a>                                            
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
        </table>

      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/ujian/index.blade.php ENDPATH**/ ?>