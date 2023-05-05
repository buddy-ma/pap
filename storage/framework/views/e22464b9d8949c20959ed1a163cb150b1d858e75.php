<?php $__env->startSection('title', 'IMMO NEUF'); ?>
<?php $__env->startSection('logo', 'green'); ?>
<?php $__env->startSection('bodyClasses', 'homepage-3 the-search'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/colors/green.css')); ?>">

    <style>
        .ville h4 {
            position: relative;
            top: 110px;
            background: rgb(52 52 52 / 50%);
            line-height: 60px !important;
        }

        .ville:hover h4 {
            background: none !important;
        }

        .ville-tags {
            background: #18ba60 !important;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('landing.hero', ['active' => 'immoneuf'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <?php echo $__env->make('landing.immoneuf.catalogueProduits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('landing.immoneuf.cataloguePromoteurs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/immoneuf.blade.php ENDPATH**/ ?>