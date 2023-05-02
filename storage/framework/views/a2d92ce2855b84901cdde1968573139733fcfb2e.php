
<?php $__env->startSection('title', 'Particulier a particulier'); ?>
<?php $__env->startSection('logo', 'blue'); ?>
<?php $__env->startSection('bodyClasses', 'homepage-3 the-search'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/colors/blue.css')); ?>">

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

        .hero-title {
            display: table-cell;
            height: 500px;
            padding: 10px;
            font-size: 40px;
            vertical-align: middle;
        }

        .only-mobile {
            display: none !important;
        }

        @media (max-width: 568px) {
            .row-reverse {
                flex-direction: row-reverse;

            }

            .no-mobile {
                display: none;
            }

            .only-mobile {
                display: block !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('landing.hero', ['active' => 'achat', 'index' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('landing.index.catalogueProduits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('landing.index.catalogueConseils', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <?php echo $__env->make('landing.index.catalogueConseilsMaroc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/home.blade.php ENDPATH**/ ?>