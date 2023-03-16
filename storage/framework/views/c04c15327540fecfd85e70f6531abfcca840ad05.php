<!--services start-->
<section class="resume services bg-pink" id="services">
    <div class="container">
        <div class="row">
            <div class=" offset-md-2 col-md-8">
                <div class="title title2">
                    <h6 class="font-primary borders main-text text-uppercase"><span>details</span></h6>
                    <div class="sub-title">
                        <div>
                            <h2 class="title-text">services & experience</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="service bg-white">
                        <div class="img-block">
                            <?php if($service->is_lord == 1): ?>
                                <?php echo $service->lord_icon; ?>

                            <?php else: ?>
                                <img src="<?php echo e(asset("storage/portfolio/$service->icon")); ?>" class="avatar avatar-xxl brround"
                                    alt="icon">
                            <?php endif; ?>
                        </div>
                        <div class="service-feature">
                            <h4 class="feature-text text-center"><?php echo e($service->title); ?></h4>
                            <p><?php echo e($service->text); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/dynamic/services.blade.php ENDPATH**/ ?>