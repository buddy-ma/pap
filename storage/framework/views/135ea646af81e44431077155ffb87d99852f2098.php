<section class="portfolio-section portfolio-metro zoom-gallery" id="portfolio">
    <div class="filter-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="filter-container isotopeFilters">
                        <ul class="list-inline filter">
                            <li class="active"><a data-filter="*" href="#"> All </a></li>
                            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a data-filter=".<?php echo e($cat->category); ?>"> <?php echo e($cat->category); ?> </a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
                $cats = ['digital', 'portrait'];
            ?>
            <div class="isotopeContainer row">
                <?php $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->index == 4 || $loop->index == 5): ?>
                        <div class="col-lg-4 col-md-4 col-6 isotopeSelector <?php echo e($design->Category->category); ?>">
                        <?php else: ?>
                            <div class="col-lg-2 col-md-4 col-6 isotopeSelector <?php echo e($design->Category->category); ?>">
                    <?php endif; ?>
                    <div class="overlay">
                        <div class="border-portfolio">
                            <a class="zoom_gallery" title="<?php echo e($design->title); ?>"
                                href="<?php echo e(asset('storage/design/' . $design->image)); ?>">
                                <div class="overlay-background">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </div>
                                <img class="img-fluid" alt="<?php echo e($design->title); ?>" title="<?php echo e($design->title); ?>"
                                    src="<?php echo e(asset('storage/design/' . $design->image)); ?>">
                            </a>
                        </div>
                    </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\BUDDY\OneDrive\Desktop\soukaina-portfolio\resources\views/dynamic/portfolio.blade.php ENDPATH**/ ?>