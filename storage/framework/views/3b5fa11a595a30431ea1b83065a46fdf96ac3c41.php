<section class="popular-places bg-white">
    <div class="container">
        <div class="sec-title">
            <h2><span>Nos </span>Villes</h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-3 col-xl-3 ville" data-aos="zoom-in" data-aos-delay="150">
                    <a href="/ville/<?php echo e($ville->id); ?>" class="img-box hover-effect">
                        <img src="<?php echo e(asset('images/villes/' . $ville->image)); ?>" class="img-responsive"
                            alt="<?php echo e($ville->title); ?>">
                        
                        <div class="img-box-content visible">
                            <h4><?php echo e($ville->title); ?> </h4>
                            
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/index/villes.blade.php ENDPATH**/ ?>