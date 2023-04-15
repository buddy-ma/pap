
<?php $__env->startSection('title', 'Particulier a particulier'); ?>
<?php $__env->startSection('logo', 'orange'); ?>
<?php $__env->startSection('bodyClasses', 'decouvrez homepage-3 the-search'); ?>

<?php $__env->startSection('css'); ?>
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

    <?php echo $__env->make('landing.decouvrezMaroc.villes-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('landing.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/decouvrezMaroc.blade.php ENDPATH**/ ?>