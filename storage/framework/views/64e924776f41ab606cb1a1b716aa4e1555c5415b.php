<div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
    <div class="carousel-inner">
        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="<?php if($loop->first): ?> active <?php endif; ?> item carousel-item"
                data-slide-number="<?php echo e($loop->index); ?>">
                <img src="<?php echo e(URL::asset('storage/product/images/' . $image->image)); ?>" class="img-fluid"
                    alt="slider-listing">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                class="fa fa-angle-left"></i></a>
        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                class="fa fa-angle-right"></i></a>

    </div>
    <!-- main slider carousel nav controls -->
    <ul class="carousel-indicators smail-listing list-inline">
        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-inline-item <?php if($loop->first): ?> active <?php endif; ?>">
                <a id="carousel-selector-<?php echo e($loop->index); ?>" class="selected" data-slide-to="<?php echo e($loop->index); ?>"
                    data-target="#listingDetailsSlider">
                    <img src="<?php echo e(URL::asset('storage/product/images/' . $image->image)); ?>" class="img-fluid"
                        alt="listing-small">
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /var/www/html/resources/views/landing/product/carousel.blade.php ENDPATH**/ ?>