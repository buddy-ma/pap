<!--counter start-->
<section class="resume counter">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-6 counter-container">
                    <div class="counters">
                        <img alt="" class="img-fluid counter-img" src="<?php echo e(asset("storage/icons/$number->icon")); ?>" style="max-width:60px">
                        <div class="counter-text">
                            <h3 class="count-text counts"><?php echo e($number->number); ?></h3>
                            <h5 class="count-desc"><?php echo e($number->title); ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!--counter end-->
<?php /**PATH /var/www/html/resources/views/dynamic/numbers.blade.php ENDPATH**/ ?>