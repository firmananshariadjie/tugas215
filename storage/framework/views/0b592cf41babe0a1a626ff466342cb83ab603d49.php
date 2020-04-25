<?php $__env->startSection('title','Form Matakuliah'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class='mt-3'>Form Tambah Matakuliah  !</h1>
  

            <form method='post' action='/ujian'>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nama_mk">Nama MK</label>
                <input type="text" class="form-control <?php if ($errors->has('nama_mk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_mk'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="nama_mk" placeholder="Masukan Mata Kuliah" name="nama_mk" value="<?php echo e(old('nama_mk')); ?>">
                <?php if ($errors->has('nama_mk')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama_mk'); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="form-group">
                <label for="dosen">Nama Dosen</label>
                <input type="text" class="form-control  <?php if ($errors->has('dosen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dosen'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="dosen" placeholder="Masukan Nama Dosen" name="dosen" value="<?php echo e(old('dosen')); ?>">
                <?php if ($errors->has('dosen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dosen'); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="form-group">
                <label for="jumlah_soal">Jumlah Soal</label>
                <input type="number" class="form-control  <?php if ($errors->has('jumlah_soal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jumlah_soal'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="jumlah_soal" placeholder="Masukan Jumlah Soal" name="jumlah_soal" value="<?php echo e(old('jumlah_soal')); ?>">
                <?php if ($errors->has('jumlah_soal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('jumlah_soal'); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan  <?php if ($errors->has('keterangan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('keterangan'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" rows="3" name="keterangan" value="<?php echo e(old('keterangan')); ?>"></textarea>
                <?php if ($errors->has('keterangan')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('keterangan'); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/ujian/create.blade.php ENDPATH**/ ?>