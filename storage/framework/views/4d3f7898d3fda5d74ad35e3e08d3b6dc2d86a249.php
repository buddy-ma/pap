<!-- START SECTION PROPERTIES FOR SALE -->
<section class="featured portfolio bg-white rec-pro">
    <div class="container-fluid">
        <div class="portfolio col-xl-12">
            <div class="slick-villes">
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <button onclick="tags('<?php echo e($tag); ?>')"
                            class="btn btn-primary tags btn-block"><?php echo e($tag); ?></button>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR SALE -->
<?php /**PATH /var/www/html/resources/views/landing/tags.blade.php ENDPATH**/ ?>