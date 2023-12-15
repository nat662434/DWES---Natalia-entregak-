
<?php $__env->startSection('title', 'Pagina1'); ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Ikasleak</title>
</head>

<body>
    <?php
        $ikasleak = [
            ['izena' => 'Ane', 'adina' => 20],
            ['izena' => 'Unai', 'adina' => 22],
            ['izena' => 'Maite', 'adina' => 19],
            ['izena' => 'Gorka', 'adina' => 21],
            ['izena' => 'Leire', 'adina' => 23],
            ['izena' => 'Iker', 'adina' => 20],
            ['izena' => 'Amaia', 'adina' => 21],
            ['izena' => 'Eneko', 'adina' => 22],
            ['izena' => 'Ainhoa', 'adina' => 19],
            ['izena' => 'Jon', 'adina' => 23],
            ];

            $zbk = request()->segment(3); // conseguir en numero de la url

            // comprobar que $zbk es un numero
            $zbk = is_numeric($zbk) ? $zbk : null;
    ?>

    <?php if($zbk != null): ?>
        <h1><?php echo e($zbk); ?> urte baino gehiago duten ikasleak</h1>
    <?php else: ?>
        <h1>Ikasle zerrenda</h1>
    <?php endif; ?>

    <table border=1>
        <tr>
            <th>Izena</th>
            <th>Abizena</th>
        </tr>
        <?php $__currentLoopData = $ikasleak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ikasle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ikasle['adina'] > $zbk): ?>
                <tr>
                    <td><?php echo e($ikasle['izena']); ?></td>
                    <td><?php echo e($ikasle['adina']); ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla_bista', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DWES\Laravel\4_Rutak_Bistak_Blade\resources\views/ikasleak_bista.blade.php ENDPATH**/ ?>