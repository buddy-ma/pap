<!-- START SECTION PROPERTIES FOR SALE -->
<section class="featured portfolio bg-white-2 rec-pro">
    <div class="container-fluid">
        <div class="portfolio col-xl-12">
            <div class="slick-villes">
                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <a href="/ville/<?php echo e($ville->id); ?>"
                            class="btn btn-primary ville-tags btn-block"><?php echo e($ville->title); ?></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 2</div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 3</div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 4</div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 5</div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 6</div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 7</div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 8</div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="btn btn-primary ville-tags btn-block">Ville 9</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR SALE -->
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/decouvrezMaroc/villes-tags.blade.php ENDPATH**/ ?>