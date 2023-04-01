
<?php $__env->startSection('title', 'Blog'); ?>
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

        .info i {
            font-size: 18px !important;
            line-height: 40px !important;
            color: #fff;
            border-radius: 100px;
            width: 40px;
            height: 40px;
            text-align: center;
            padding-bottom: 10px;
            background: #0098ef;
        }

        .info p {
            font-size: 18px !important;
            line-height: 50px !important;
            padding-bottom: 10px;
            font-weight: 500;
            color: #333;
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/commercialiser.blade.php ENDPATH**/ ?>