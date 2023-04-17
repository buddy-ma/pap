<?php $__env->startSection('title', 'Particulier a particulier'); ?>
<?php $__env->startSection('logo', 'orange'); ?>
<?php $__env->startSection('bodyClasses', 'decouvrez homepage-3 the-search'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/colors/orange.css')); ?>">

    <style>
        .ville-tags {
            background: #ddd !important;
            color: #000;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }

        .tags {
            background: #555 !important;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('landing.decouvrezMaroc.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    

    <?php echo $__env->make('landing.index.catalogueConseilsMaroc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('landing.decouvrezMaroc.catalogueConseilsMaroc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function tags($t) {
            $('#search').val($t);
            $('#decouvrezMaroc').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/decouvrezMaroc.blade.php ENDPATH**/ ?>