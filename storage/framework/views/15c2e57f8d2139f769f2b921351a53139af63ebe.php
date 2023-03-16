<?php $__env->startSection('title', 'Art'); ?>
<?php $__env->startSection('bodyClass', 'agency'); ?>
<?php $__env->startSection('css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/color-7.css')); ?>" rel="stylesheet" type="text/css">

    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        .dropdown img {
            width: 16px;
            height: 16px;
            display: block;
        }

        header.nav-abs {
            position: fixed;
            top: 0;
            padding: 20px 0;
        }

        header nav ul li>a {
            color: black;
        }

        .portfolio-metro h1 {
            font-size: 80px;
            margin-bottom: 100px;
        }

        .app2.fixed ul li>a {
            color: white;
        }

        .app2.fixed ul li a ul li a {
            color: #000;
        }

        .com-modal .modal-content {
            background: url('<?php echo e(asset('assets/images/modal.jpg')); ?>');
            background-repeat: no-repeat;
            background-size: cover;
            height: 720px;
        }

        .com-modal .join {
            text-align: center;
            position: relative;
            top: 75%;
        }

        .com-modal .join h3 {
            font-size: 40px;
            margin-bottom: 20px;
            font-family: 'Pacifico', cursive;
        }

        .com-modal2 .modal-content {
            background: url('<?php echo e(asset('assets/images/modal2.jpg')); ?>');
            background-repeat: no-repeat;
            background-size: cover;
            height: 720px;
            width: 600px;
        }

        .com-modal2 .join {
            text-align: center;
            padding: 80px 50px;
        }

        .com-modal2 .join h3 {
            font-size: 30px;
            margin-bottom: 50px;
            font-family: 'Pacifico', cursive;
        }

        .com-modal2 .join input {
            font-size: 16px;
            padding: 10px 5px;
            border: 1px solid #000;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('static.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('static.bio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('static.portfolio1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('static.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('static.numbers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('static.plans', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/js/portfolio.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script7.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/zoom-gallery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/counters.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>