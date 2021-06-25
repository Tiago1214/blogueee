<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="author" content="themefisher.com">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('novena//images/favicon.ico')); ?>" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo e(asset('novena/plugins/bootstrap/css/bootstrap.min.css')); ?>">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="<?php echo e(asset('novena/plugins/icofont/icofont.min.css')); ?>">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('novena/plugins/slick-carousel/slick/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('novena/plugins/slick-carousel/slick/slick-theme.css')); ?>">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo e(asset('novena/css/style.css')); ?>">

</head>


<body id="top">

    <header>
        <?php echo $__env->make('novenaparts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('novenaparts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('novenaparts.pagetitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    

    <!-- footer Start -->
    <?php echo $__env->make('novenaparts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="<?php echo e(asset('novena/plugins/jquery/jquery.js')); ?>"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="<?php echo e(asset('novena/plugins/bootstrap/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('novena/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('novena/plugins/counterup/jquery.easing.js')); ?>"></script>
    <!-- Slick Slider -->
    <script src="<?php echo e(asset('novena/plugins/slick-carousel/slick/slick.min.js')); ?>"></script>
    <!-- Counterup -->
    <script src="<?php echo e(asset('novena/plugins/counterup/jquery.waypoints.min.js')); ?>"></script>

    <script src="<?php echo e(asset('novena/plugins/shuffle/shuffle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('novena/plugins/counterup/jquery.counterup.min.js')); ?>"></script>
    <!-- Google Map -->
    <script src="<?php echo e(asset('novena/plugins/google-map/map.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="<?php echo e(asset('novena/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('novena/js/contact.js')); ?>"></script>

  </body>
  </html>
<?php /**PATH C:\laragon\www\blogue\resources\views/layouts/base.blade.php ENDPATH**/ ?>