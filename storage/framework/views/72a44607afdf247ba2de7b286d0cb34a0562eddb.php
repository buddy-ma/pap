<!--pricing start-->
<section class="resume pricing bg-pink" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title title2">
                    <h6 class="font-primary borders main-text text-uppercase"><span>pricing</span></h6>
                    <div class="sub-title">
                        <div>
                            <h2>you can hire me</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme pricing-slider">
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="price-container price-margin shadows bg-white text-center">
                                <div class="price-feature-container set-relative">
                                    <div class="feature-text text-center">
                                        <img style="max-width: 75px; margin-right: auto; margin-left: auto"
                                            src="<?php echo e(asset("storage/plans/$plan->icon")); ?>" class="avatar-xl brround"
                                            alt="">
                                        <h4 class="feature-text-heading bold text-uppercase pt-5"><?php echo e($plan->title); ?>

                                        </h4>
                                        <hr class="set-border">
                                    </div>
                                    <div class="price-features">
                                        <h5 class="price-feature"><?php echo str_replace(',', '<br>', $plan->content); ?></h5>
                                    </div>
                                    <div class="price-value">
                                        <h6 class="price text-center"><span class="large"><?php echo e($plan->price); ?></span>MAD
                                        </h6>
                                    </div>
                                    <a class="btn btn-default back-white" href="#"><?php echo e($plan->button); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--pricing end-->
<?php /**PATH C:\Users\BUDDY\OneDrive\Desktop\soukaina-portfolio\resources\views/dynamic/plans.blade.php ENDPATH**/ ?>