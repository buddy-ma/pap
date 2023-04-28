<div>
    <div class="row flex-lg-nowrap mt-5">
        <div class="col-12">
            <?php if(Session::get('success')): ?>
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <div class="row flex-lg-nowrap">
                <div class="col-lg-9">
                    <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-xl-4 col-6">
                                <div class="card item-card">
                                    <div class="card-header">
                                        <div class="card-title"> <?php echo e($product->title); ?></div>
                                        <?php if($status == 1): ?>
                                            <button wire:click="turnOff(<?php echo e($product->id); ?>)" type="button"
                                                class="btn btn-icon btn-danger ml-auto"><i
                                                    class="fe fe-trash"></i></button>
                                        <?php else: ?>
                                            <button wire:click="turnOn(<?php echo e($product->id); ?>)" type="button"
                                                class="btn btn-icon btn-danger ml-auto"><i
                                                    class="fe fe-trash"></i></button>
                                        <?php endif; ?>

                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <?php if($product->first_image() !== null): ?>
                                                <img src="<?php echo e(URL::asset('storage/product/images/' . $product->first_image()->image)); ?>"
                                                    alt="img" class="img-fluid w-100" style="max-height: 300px">
                                            <?php else: ?>
                                                <img src="<?php echo e(URL::asset('admin_assets/images/products/1.jpg')); ?>"
                                                    alt="img" class="img-fluid w-100">
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-body px-0 row pb-0">
                                            <div class="col-12 mb-3">
                                                <i class="fe fe-eye"></i> <?php echo e($product->vues); ?> vues
                                            </div>
                                            <div class="col-12 mb-3">
                                                <i class="fe fe-phone"></i> <?php echo e($product->vues_phone); ?> vues telephone
                                            </div>
                                            <div class="col-12">
                                                <i class="fe fe-send"></i> <?php echo e(count($product->contacts)); ?> rempli le
                                                formulaire
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center pb-4 pl-4 pr-4">
                                        <a href="/admin/products/edit/<?php echo e($product->id); ?>"
                                            class="btn btn-primary btn-block mb-2">
                                            <i class="fe fe-edit mr-1"></i>Modifier</a>
                                        <a href="/produit/<?php echo e($product->slug); ?>" target="_blank"
                                            class="btn btn-success btn-block mb-2">
                                            <i class="fe fe-eye mr-1"></i>Voir</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="alert alert-warning d-block w-100" role="alert">
                                <i class="fa fa-exclamation mr-2" aria-hidden="true"></i> No products!
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <div class="card-title"> Categories &amp; Fliters</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mt-3">
                                        <label class="form-label">Category</label>
                                        <select class="form-control" wire:model="selected_category">
                                            <option value="0">--Select--</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($ctg->id); ?>"><?php echo e($ctg->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select class="form-control" wire:model="selected_type">
                                            <option value="0">--Select--</option>
                                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($type->id); ?>"><?php echo e($type->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <label class="custom-switch"
                                            <?php if($status == 1): ?> wire:click="off" <?php else: ?> wire:click="on" <?php endif; ?>>
                                            <input type="checkbox" name="custom-switch-checkbox"
                                                class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">
                                                <?php if($status == 1): ?>
                                                    Juste Désactivés
                                                <?php else: ?>
                                                    Juste activés
                                                <?php endif; ?>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/livewire/product-listing.blade.php ENDPATH**/ ?>