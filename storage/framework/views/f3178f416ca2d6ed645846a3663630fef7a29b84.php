
<?php $__env->startSection('title', 'Particulier a particulier'); ?>
<?php $__env->startSection('logo', 'orange'); ?>
<?php $__env->startSection('bodyClasses', 'decouvrez homepage-3 the-search'); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('landing.decouvrezMaroc.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('landing.decouvrezMaroc.catalogueConseilsMaroc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/decouvrezMaroc.blade.php ENDPATH**/ ?>