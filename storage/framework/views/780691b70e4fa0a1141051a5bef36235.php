<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<style>
body {
  background-image: url("<?php echo e(Vite::asset('resources/images/photo3.jpg')); ?>");
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
<body>

    
    <?php $__env->startSection('content'); ?>
    <br><br><br><br>
    <div class="container">

        <h1 style="color: white"><a style="font-family: Courier">Stephanie Debora Assa</a></h1>
        <h3 style="color: white "><a style="font-family: Courier">I am an active student at Telkom University Surabaya campus.</a></h3>
        <ul style="color: white">

        <h4 style="font-family: Courier">
        <br>
        <li>Study Program: S1 Information System</li>
        <br>
        <li>NIM: 1204220134</li>
        <br>
        <li>Class: IS 05-01</li>
        </h4>
        </ul>

      </div>
    <?php $__env->stopSection(); ?>



    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masterbarang\resources\views/profile.blade.php ENDPATH**/ ?>