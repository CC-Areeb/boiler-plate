<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <style>
        .bg-login-image,
        .bg-register-image,
        .bg-password-image {
            background: url("<?php echo e(asset('img/banner.png')); ?>");
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<?php echo $__env->yieldContent('content'); ?>

<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>

</html><?php /**PATH D:\Areeb\D\laravel-boilerplate\Laravel-Boilerplate-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>