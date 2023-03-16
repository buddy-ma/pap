<div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card mg-b-20 card--events">
                <div class="card-header">
                    <h3 class="card-title">
                        All statuses
                    </h3>
                    <button wire:click="openSort" type="button"
                        class="btn btn-primary btn-edit mt-2 float-right ml-auto mr-2">Sort</button>
                </div>

                <div class="card-body p-0">
                    <ul class="list-group mb-0" style="display: flex" wire:sortable="updateOrder">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li <?php if($open_sort): ?> style="cursor: pointer; display: flex" <?php endif; ?>
                                wire:sortable.item="<?php echo e($stt->id); ?>" wire:key="status-<?php echo e($stt->id); ?>"
                                class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-5">
                                <div class="w-3 h-3 bg-<?php echo e($stt->color); ?> mr-3 mt-1 brround">
                                </div>
                                <h5 class="d-inline"><?php echo e($stt->status); ?></h5>
                                <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                    <?php if(!$edit && !$open_sort): ?>
                                        <strong>
                                            <a wire:click="edit(<?php echo e($stt->id); ?>)" style="cursor: pointer"> Edit
                                            </a>
                                            |
                                            <a wire:click="delete(<?php echo e($stt->id); ?>)" style="cursor: pointer">
                                                Delete
                                            </a>
                                        </strong>
                                    <?php endif; ?>
                                    <?php if($open_sort): ?>
                                        <span class="d-block float-right ml-auto">
                                            <i class="fa fa-unsorted"></i>
                                        </span>
                                    <?php endif; ?>
                                </p>
                            </li>
                            <hr class="m-0">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-2">
                            <button wire:click="add" type="button"
                                class="btn btn-primary btn-edit mt-2 float-right ml-auto mr-2">Add a new
                                status</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php if($edit || $add): ?>
            <div class="col-lg-8">
                <div class="card mg-b-20 card--events">
                    <div class="card-header">
                        <?php if(!$edit): ?>
                            <h3 class="card-title">
                                Add Status
                            </h3>
                            <span class="d-block float-right ml-auto" wire:click="closeAdd">
                                <i class="fa fa-close"></i>
                            </span>
                        <?php else: ?>
                            <h3 class="card-title">
                                Edit Status
                            </h3>
                            <span class="d-block float-right ml-auto" wire:click="closeEdit">
                                <i class="fa fa-close"></i>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Status Title
                                        <span class="text-red">*</span>
                                    </label>
                                    <input wire:model.defer="title" type="text" class="form-control"
                                        placeholder="Status Title">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Color
                                        <span class="text-red">*</span>
                                    </label>
                                    <select wire:model.defer="color" class="form-control">
                                        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($color); ?>"><?php echo e($color); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Sort
                                        <span class="text-red">*</span>
                                    </label>
                                    <input wire:model.defer="sort" type="number" class="form-control" max="9"
                                        min="<?php echo e($last_sort); ?>" placeholder="Status Sort" value="<?php echo e($last_sort); ?>">
                                </div>
                            </div>

                            <?php if(!$edit): ?>
                                <button wire:click="save" type="button"
                                    class="btn btn-primary btn-edit mt-2 float-right ml-auto mr-2">save</button>
                            <?php else: ?>
                                <button wire:click="update" type="button"
                                    class="btn btn-primary btn-edit mt-2 float-right ml-auto mr-2">update</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="d-inline-flex align-items-center px-2 py-2">
                                <span class="w-3 h-3 brround bg-<?php echo e($color); ?> mr-2"></span>
                                <?php echo e($color); ?> </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger mt-3" role="alert" style="padding-left: 35px">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="col-lg-8">
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_S6uJDrOYZv.json"
                background="transparent" mode="bounce" speed="0.5" style="height: 500px;" loop hover>
            </lottie-player>
            <div class="mt-5">
                <h3 class="text-center">Feel free to edit or add a new status</h3>
            </div>
        </div>
    <?php endif; ?>
</div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/status.blade.php ENDPATH**/ ?>