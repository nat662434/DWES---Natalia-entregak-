
<?php $__env->startSection('title', 'Pagina1'); ?>

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Ikasgaiak</title>
</head>

<body>
    <?php
        $ikasgaiak = [
            'Programazioa' => 200,
            'Web Garapena' => 160,
            'Datubaseen Diseinua' => 120,
            'Sare Administrazioa' => 140,
            'Web Aplikazioen Garapena' => 180,
            'Entornu Garapena' => 120,
            'Erabilgarritasun Teknikoak eta Ondareak' => 60,
            'Informatika Konpetentzia Laborategia' => 120,
            'Proiektua' => 40,
        ];

        $letra = strtoupper(request()->segment(3)); //coger la letra de la url
        $letra = is_string($letra) ? $letra : null;


    ?>

    <?php if($letra): ?>
        <h1><?php echo e($letra); ?> letratik hasten diren ikasgaiak</h1>
    <?php else: ?>
        <h1>Ikasgai zerrenda</h1>
    <?php endif; ?>


    <table border=1>
        <tr>
            <th>Ikasgaia</th>
            <th>Orduak</th>
        </tr>
        <?php $__currentLoopData = $ikasgaiak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ikasgai => $orduak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($letra && substr($ikasgai, 0, 1) === $letra): ?>
                <tr>
                    <td><?php echo e($ikasgai); ?></td>
                    <td><?php echo e($orduak); ?></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td><?php echo e($ikasgai); ?></td>
                    <td><?php echo e($orduak); ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla_bista', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DWES\Laravel\4_Rutak_Bistak_Blade\resources\views/ikasgaiak_bista.blade.php ENDPATH**/ ?>