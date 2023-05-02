<!-- START SECTION PROPERTIES FOR SALE -->
<section class="featured portfolio bg-white-2 rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Catalogue des </span>promoteurs.</h2>
        </div>
        <div class="portfolio row">
            <?php $__currentLoopData = $promoteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo e(asset('storage/product/logo/' . $prm->logo)); ?>" alt=""
                            class="mb-3 w-50 ml-auto mr-auto d-block">
                        <h3><?php echo e($prm->firstname); ?> <?php echo e($prm->lastname); ?></h3>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/immoneuf/cataloguePromoteurs.blade.php ENDPATH**/ ?>