<!-- START SECTION PROPERTIES FOR SALE -->
<section class="featured portfolio bg-white-2 rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2>Sans commission, Sans intermediare</h2>
            
            
            
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-lancers2">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <div class="landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <a href="/produit/<?php echo e($product->slug); ?>" class="homes-img">
                                            <div
                                                class="homes-tag button alt featured <?php echo e(strtolower($product->category->title)); ?>">
                                                <?php echo e($product->category->title); ?>

                                            </div>
                                            <?php if($product->first_image() !== null): ?>
                                                <img src="<?php echo e(URL::asset('storage/product/images/' . $product->first_image()->image)); ?>"
                                                    alt="<?php echo e($product->slug); ?>" class="img-responsive">
                                            <?php else: ?>
                                                <img src="<?php echo e(URL::asset('admin_assets/images/products/1.jpg')); ?>"
                                                    alt="<?php echo e($product->slug); ?>" class="img-responsive">
                                            <?php endif; ?>

                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <?php if(!empty($product->vr_link)): ?>
                                            <a href="<?php echo e($product->vr_link); ?>" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                        <?php endif; ?>

                                        <?php if(!empty($product->video_link)): ?>
                                            <a href="<?php echo e($product->video_link); ?>"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <?php endif; ?>

                                        <a href="/produit/<?php echo e($product->slug); ?>" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="/produit/<?php echo e($product->slug); ?>"><?php echo e($product->title); ?></a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="/produit/<?php echo e($product->slug); ?>">
                                            <i class="fa fa-map-marker"></i><span><?php echo e($product->ville); ?>,
                                                <?php echo e($product->quartier); ?>, <?php echo e($product->address); ?></span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <?php if($product->type->title != 'Terrains'): ?>
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span><?php echo e($product->nbr_chambres); ?> chambres</span>
                                            </li>
                                        <?php endif; ?>

                                        <li class="the-icons">
                                            <i class="flaticon-square" aria-hidden="true"></i>
                                            <span><?php echo e($product->surface); ?> <?php echo e($product->unite_surface); ?></span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a> <?php echo e($product->prix); ?> dh</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR SALE -->
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/index/catalogueProduits.blade.php ENDPATH**/ ?>