<?php $__env->startSection('title', 'Commercialiser'); ?>
<?php $__env->startSection('logo', 'blue'); ?>
<?php $__env->startSection('bodyClasses', 'th-8 homepage-4 hp-6 hd-white'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" id="color" href="<?php echo e(asset('assets/css/colors/blue.css')); ?>">
    <style>
        .img-responsive {
            display: inline-block;
            max-width: 100%;
            width: 100%;
            max-height: 200px !important;
            height: auto;
        }

        p {
            text-align: left !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('landing.commercialiser.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($page)): ?>
        <?php echo $__env->make('landing.commercialiser.apropos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('static.apropos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/commercialiser.blade.php ENDPATH**/ ?>