<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>Edit Mahasiswa</h1>
        <form action="/mahasiswa/<?php echo e($student->id); ?>/edit" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <label for="nim">NIM</label>
            <input value="<?php echo e($student->nim); ?>" type="text" name="nim" id="nim" required>

            <br>

            <label for="name">Name</label>
            <input value="<?php echo e($student->name); ?>" type="text" name="name" id="name" required>

            <br>

            <label for="gender">Gender</label>
            <select name="gender" required id="">
                <option value="#">Pilih</option>
                <option selected value="<?php echo e($student->gender); ?>">
                    <?php echo e($student->gender); ?>

                </option>

                <?php $__currentLoopData = $gender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($g); ?>">
                        <?php echo e($g); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <br>

            <label for="departement">Jurusan</label>
            <select name="departement" required id="">
                <option value="#">Pilih</option>
                <option selected value="<?php echo e($student->departement); ?>">
                    <?php echo e($student->departement); ?>

                </option>

                <?php $__currentLoopData = $departement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d); ?>">
                        <?php echo e($d); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <br>

            <label for="address">Address</label>
            <input value="<?php echo e($student->address); ?>" type="text" name="address" id="address" required>

            <br>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html><?php /**PATH /Users/macbookpro/Documents/example-app/resources/views/studentEdit.blade.php ENDPATH**/ ?>