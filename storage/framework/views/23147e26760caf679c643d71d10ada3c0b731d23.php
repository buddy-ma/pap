<section class="portfolio-section portfolio-metro zoom-gallery" id="portfolio">
    <div class="filter-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="filter-container isotopeFilters">
                        <ul class="list-inline filter">
                            <li class="active"><a data-filter="*" href="#"> All </a></li>
                            <li><a data-filter=".digital" href="#"> Digital Art </a></li>
                            <li><a data-filter=".portrait" href="#"> Portaits </a></li>
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
                        <div class="col-lg-4 col-md-4 col-6 isotopeSelector <?php echo e($cats[$design->category_id - 1]); ?>">
                        <?php else: ?>
                            <div class="col-lg-2 col-md-4 col-6 isotopeSelector <?php echo e($cats[$design->category_id - 1]); ?>">
                    <?php endif; ?>
                    <div class="overlay">
                        <div class="border-portfolio">
                            <a class="zoom_gallery" href="<?php echo e(asset('assets' . $design->image)); ?>">
                                <div class="overlay-background">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </div>
                                <img alt="" class="img-fluid" src="<?php echo e(asset('assets' . $design->image)); ?>">
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    </div>
</section>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/dynamic/portfolio.blade.php ENDPATH**/ ?>