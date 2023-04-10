<section class="featured portfolio bg-white-2 rec-pro">
    <div class="container-fluid">
        <div class="portfolio col-xl-12">
            <div class="slick-villes">
                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="agents-grid" onclick="villeTag('<?php echo e($ville); ?>')" data-aos="fade-up"
                        data-aos-delay="150">
                        <a class="btn btn-primary ville-tags btn-block">
                            <?php echo e($ville); ?></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/resources/views/landing/immoneuf/villes-tags.blade.php ENDPATH**/ ?>