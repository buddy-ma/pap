<div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Product </h3>
                    </div>
                    <div class="card-body pb-2">
                        <div class="row">
                            <div class="col-4">
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Categories</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="form-group">
                                                <label class="form-label">Category*</label>
                                                <select wire:model="selected_category" class="form-control">
                                                    <option value="">Select option</option>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Types</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group mb-0">
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-5"
                                                        tabindex="0">
                                                        <div class="w-3 h-3 bg-success mr-3 mt-1 brround">
                                                        </div>
                                                        <h5 class="d-inline"><?php echo e($type->title); ?></h5>
                                                        <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                                            <strong>
                                                                <a wire:click="edit(<?php echo e($type->id); ?>)"
                                                                    style="cursor: pointer"> Edit
                                                                </a>
                                                                |
                                                                <a wire:click="delete(<?php echo e($type->id); ?>)"
                                                                    style="cursor: pointer">
                                                                    Delete
                                                                </a>
                                                            </strong>
                                                        </p>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <div class="expanel-footer">
                                            <?php if(!empty($selected_category)): ?>
                                                <button class="btn btn-block btn-primary" type="button"
                                                    wire:click="add">Add</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Extras</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group mb-0">
                                                <?php $__currentLoopData = $extras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-5"
                                                        tabindex="0">
                                                        <div class="w-3 h-3 bg-success mr-3 mt-1 brround">
                                                        </div>
                                                        <h5 class="d-inline"><?php echo e($extra->title); ?></h5>
                                                        <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                                            <strong>
                                                                <a wire:click="editExtra(<?php echo e($extra->id); ?>)"
                                                                    style="cursor: pointer"> Edit
                                                                </a>
                                                                |
                                                                <a wire:click="deleteExtra(<?php echo e($extra->id); ?>)"
                                                                    style="cursor: pointer">
                                                                    Delete
                                                                </a>
                                                            </strong>
                                                        </p>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                        <div class="expanel-footer">
                                            <?php if(!empty($selected_category)): ?>
                                                <button class="btn btn-block btn-primary" type="button"
                                                    wire:click="addExtra">Add</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/livewire/product-types-admin.blade.php ENDPATH**/ ?>