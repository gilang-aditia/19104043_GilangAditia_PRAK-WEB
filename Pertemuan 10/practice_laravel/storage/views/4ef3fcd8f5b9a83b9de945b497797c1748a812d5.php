<?php
    $array = [1,2,3,4,5];

    $nama = "Zein";
    $nilai = 70;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Beranda</h1>

    <?php echo "Halo dunia" ?>

    <p>
        <?php echo e("Halo Dunia"); ?>

    </p>

    <?php if(1+1 == 3) { ?>
        <p>
            <?php echo e("Halo Dunia"); ?>

        </p>
    <?php } ?>

    <?php if(1+1 == 2): ?>
        <p>
            <?php echo e('Halo Dunia'); ?>

        </p>
    <?php endif; ?>

    <hr>

    <h1>Perulangan</h1>

    <?php for($i = 0; $i < count($array); $i++) { ?>
        <p>
            <?php echo e($array[$i]); ?>

        </p>
    <?php } ?>

    <?php for($i = 0; $i < count($array); $i++): ?>
        <p>
            <?php echo e($array[$i]); ?>

        </p>
    <?php endfor; ?>

    <hr>

    <h1>Percabangan</h1>

    <?php if(1+1 == 3): ?>
        <p>
            <?php echo e('Jawabannya benar'); ?>

        </p>
    <?php else: ?>
        <?php echo e("Jawabanya salah"); ?>

    <?php endif; ?>

    <?php if($nama == "Teguh"): ?>
        <p>
            <?php echo e("Nama saya Teguh"); ?>

        </p>
    <?php elseif($nama == "Zein"): ?>
        <p>
            <?php echo e("Nama saya Zein"); ?>

        </p>
    <?php else: ?>
        <p>
            <?php echo e("Nama saya tidak diketahui"); ?>

        </p>
    <?php endif; ?>

    <hr>

    <h1>Percabangan Switch</h1>

    <?php switch($nilai):
        case (90): ?>
            <?php echo e("Nilai Anda A"); ?>

            <?php break; ?>

        <?php case (80): ?>
            <?php echo e("Nilai Anda B"); ?>

            <?php break; ?>

        <?php case (70): ?>
            <?php echo e("Nilai Anda C"); ?>

            <?php break; ?>

        <?php default: ?>
            <?php echo e("Nilai Anda D"); ?>


    <?php endswitch; ?>

</body>
</html><?php /**PATH /Users/macbookpro/Documents/example-app/resources/views/beranda.blade.php ENDPATH**/ ?>
