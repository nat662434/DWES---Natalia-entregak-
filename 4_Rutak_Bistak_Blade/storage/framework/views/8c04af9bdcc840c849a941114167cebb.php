<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Mi Aplicación'); ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        div {
            padding: 20px;
        }
    </style>
    <!-- Puedes incluir aquí tus estilos, scripts, meta tags, etc. -->
</head>

<body>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('ikasleak')); ?>">Ikasleak</a></li>
            <li><a href="<?php echo e(route('ikasleakAdina', ['zbk' => 19])); ?>">Ikasleak filtroa</a></li>
            <li><a href="<?php echo e(route('ikasgaiak')); ?>">Ikasgaiak</a></li>
            <li><a href="<?php echo e(route('ikasgaiakLetra', ['letra' => 'w'])); ?>">Ikasgaiak filtroa</a></li>
            <!-- Agrega más elementos de menú según sea necesario -->
        </ul>
    </nav>

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Puedes incluir aquí scripts adicionales, pie de página, etc. -->
</body>

</html><?php /**PATH C:\xampp\htdocs\DWES\Laravel\4_Rutak_Bistak_Blade\resources\views/plantilla_bista.blade.php ENDPATH**/ ?>