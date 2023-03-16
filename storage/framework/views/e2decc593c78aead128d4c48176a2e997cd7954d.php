<div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products </h3>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">Title
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="title" type="text" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" wire:model.defer="description" rows="3" placeholder="Product description"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">Size chart</label>
                                <div class="dropify-wrapper">
                                    <input type="file" id="img" class="dropify" wire:model.defer="size_chart">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="col-sm-4 col-md-4">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">Product pictures</label>
                                <div class="dropify-wrapper">
                                    <input type="file" class="dropify" wire:model.defer="photos">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">&#8203;</label>
                                <div class="dropify-wrapper">
                                    <input type="file" class="dropify" wire:model.defer="photos">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">&#8203;</label>
                                <div class="dropify-wrapper">
                                    <input type="file" class="dropify" wire:model.defer="photos">
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger mt-3" role="alert" style="padding-left: 35px">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <?php if($edit): ?>
                        <button wire:click="update" type="button"
                            class="btn btn-warning btn-edit mt-2 float-right">Update</button>
                    <?php else: ?>
                        <button wire:click="save" type="button"
                            class="btn btn-primary btn-edit mt-2 float-right">Save</button>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body p-6">
                <div class="inbox-body">
                    
                    <div class="table-responsive">
                        <table class="table table-inbox table-hover text-nowrap mb-0">
                            <tbody>
                                <tr class="">
                                    <td class="inbox-small-cells w-4 ml-4"><i class="fa fa-star"></i>
                                    </td>
                                    <td class="view-message dont-show font-weight-semibold">Title</td>
                                    <td class="view-message font-weight-semibold">Size</td>
                                    <td class="view-message font-weight-semibold">Price 1</td>
                                    <td class="view-message font-weight-semibold">Price 2</td>
                                    <td class="view-message font-weight-semibold">Price 3</td>
                                    <td class="view-message font-weight-semibold">Actions</td>
                                </tr>
                                <?php if(isset($product->ProductSizes)): ?>
                                    <?php $__currentLoopData = $product->ProductSizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">
                                            
                                            <td class="inbox-small-cells w-4 ml-4"><i
                                                    class="fa fa-star text-warning"></i>
                                            </td>
                                            <td class="view-message dont-show font-weight-semibold"><?php echo e($size->title); ?>

                                            </td>
                                            <td class="view-message">( <?php echo e($size->size); ?>cm )</td>
                                            <td class="view-message">
                                                <span class="badge badge-light badge-pill"><?php echo e($size->price1); ?>dh</span>
                                            </td>
                                            <td class="view-message">
                                                <span
                                                    class="badge badge-primary badge-pill"><?php echo e($size->price2); ?>dh</span>
                                            </td>
                                            <td class="view-message">
                                                <span
                                                    class="badge badge-success badge-pill"><?php echo e($size->price3); ?>dh</span>
                                            </td>
                                            <td class="view-message text-center font-weight-semibold">
                                                <i class="fe fe-trash-2"></i>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <?php if($add_option): ?>
                                    <tr class="bg-danger" style="cursor: pointer" wire:click="addSizes">
                                        <td colspan="7" class="text-center text-white font-weight-semibold">
                                            Close
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <tr class="bg-dark" style="cursor: pointer" wire:click="addSizes">
                                        <td colspan="7" class="text-center text-white font-weight-semibold">Add
                                            new size</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php if($add_option): ?>
            <div class="card mt-3">
                <div class="card-body p-6">
                    <div class="row mt-2">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Title
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="size_title" type="text" class="form-control"
                                    placeholder="A4">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Size
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="size_detail" type="text" class="form-control"
                                    placeholder="( L x W ) cm">
                            </div>
                        </div>
                        <?php $__currentLoopData = $extras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><?php echo e($key); ?> </label>
                                    <input wire:model.defer="size_extras.<?php echo e($key); ?>" type="text"
                                        class="form-control" placeholder="Price <?php echo e($key); ?>"
                                        aria-label="<?php echo e($key); ?>">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Price 1
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="size_price1" type="number" class="form-control"
                                    placeholder="One face">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Price 2
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="size_price2" type="number" class="form-control"
                                    placeholder="Two faces">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Price 3
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="size_price3" type="number" class="form-control"
                                    placeholder="Three faces">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Packaging price
                                </label>
                                <input wire:model.defer="size_packaging" type="number" class="form-control"
                                    placeholder="Empty when free">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Delivery price </label>
                                <input wire:model.defer="size_livraison" type="number" class="form-control"
                                    placeholder="Empty when free">
                            </div>
                        </div>
                    </div>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger mt-3" role="alert" style="padding-left: 35px">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <button wire:click="save_option" type="button"
                        class="btn btn-primary btn-edit mt-2 float-right">save</button>
            </div>
        </div>
    <?php endif; ?>
</div>
</div>
</div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/livewire/admin-products.blade.php ENDPATH**/ ?>