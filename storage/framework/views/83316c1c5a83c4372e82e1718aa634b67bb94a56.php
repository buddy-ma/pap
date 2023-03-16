<div>
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xs-12">
                        <div class="container-fluid">
                            <?php if(!$order): ?>
                                <div class="row">
                                    <div class="col-lg-6" wire:ignore>
                                        <div class="product-slick">
                                            <?php $__currentLoopData = $product->ProductImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div><img alt="" class="img-fluid"
                                                        src="<?php echo e(asset("storage/products/$image->image")); ?>"></div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="slider-nav">
                                                    <?php $__currentLoopData = $product->ProductImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div>
                                                            <img alt="" class="img-fluid image_zoom_cls-0"
                                                                src="<?php echo e(asset("storage/products/$image->image")); ?>">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 rtl-text">
                                        <div class="product-right">
                                            <h2><?php echo e($product->title); ?></h2>

                                            <h4>
                                                <del><?php echo e($old_price); ?>dh</del>
                                                <span><?php echo e($percentage); ?>% off</span>
                                            </h4>
                                            <h3><?php echo e($price); ?>dh</h3>
                                            
                                            <div class="product-description border-product">
                                                <h6 class="product-title size-text">select size
                                                    <span>
                                                        <a data-bs-target="#sizemodal" data-bs-toggle="modal"
                                                            href="">size chart</a>
                                                    </span>
                                                </h6>
                                                <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                    class="modal fade" id="sizemodal" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Size
                                                                    chart
                                                                </h5>
                                                                <button aria-label="Close" class="btn-close"
                                                                    data-bs-dismiss="modal" type="button">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img alt="" class="img-fluid"
                                                                    src="<?php echo e(asset("storage/general/$product->size_chart")); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="size-box">
                                                    <ul>
                                                        <?php $__currentLoopData = $product->ProductSizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li
                                                                <?php if($selected_size == $size): ?> class="checked" <?php endif; ?>>
                                                                <a
                                                                    wire:click="setSize(<?php echo e($loop->index); ?>)"><?php echo e($size->title); ?></a>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                                <?php $__currentLoopData = json_decode($selected_size->extras); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="demo mt-4">
                                                        <label class="toggle" for="<?php echo e($key); ?>">
                                                            <input type="checkbox" class="toggle__input"
                                                                id="<?php echo e($key); ?>"
                                                                wire:click="addValue('<?php echo e($key); ?>', <?php echo e($value); ?>)">
                                                            <span class="toggle-track">
                                                                <span class="toggle-indicator">
                                                                    <!-- 	This check mark is optional	 -->
                                                                    <span class="checkMark">
                                                                        <svg viewBox="0 0 24 24" id="ghq-svg-check"
                                                                            role="presentation" aria-hidden="true">
                                                                            <path
                                                                                d="M9.86 18a1 1 0 01-.73-.32l-4.86-5.17a1.001 1.001 0 011.46-1.37l4.12 4.39 8.41-9.2a1 1 0 111.48 1.34l-9.14 10a1 1 0 01-.73.33h-.01z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <p class="font-normal mr-4"
                                                                style="font-size: 16px; padding-top: 0">
                                                                <?php echo e($key); ?>

                                                                <span style="font-weight: 900">
                                                                    (<?php echo e($value); ?>dh)
                                                                </span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <h6 class="product-title pt-2">Faces</h6>
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <button class="btn quantity-left-minus" type="button"
                                                                wire:click="minus">
                                                                <i aria-hidden="true" class="fa fa-chevron-left"></i>
                                                            </button>
                                                        </span>
                                                        <div class="form-control" style="padding: 10px 0">
                                                            <?php echo e($faces); ?>

                                                        </div>
                                                        <span class="input-group-prepend">
                                                            <button class="btn quantity-right-plus" type="button"
                                                                wire:click="plus">
                                                                <i aria-hidden="true" class="fa fa-chevron-right"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="btn btn-default primary-btn radius-0 ml-0 mt-4"
                                                    wire:click="order">
                                                    Order now
                                                </a>
                                            </div>
                                            <div class="border-product">
                                                <h6 class="product-title">product details</h6>
                                                <p>
                                                    <?php echo e($product->description); ?>

                                                </p>
                                            </div>
                                            <div class="border-product">
                                                <h6 class="product-title mb-2">share it</h6>
                                                <div class="product-icon">
                                                    <ul class="product-social">
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <?php echo $__env->make('livewire.checkout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/livewire/client-order.blade.php ENDPATH**/ ?>