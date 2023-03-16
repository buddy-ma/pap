<div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Plans </h3>
                    <?php if($edit): ?>
                        <a wire:click="switch" class="btn btn-danger float-right ml-auto">
                            <i class="fa fa-close"></i>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Title
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="title" type="text" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Price
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="price" type="number" class="form-control"
                                    placeholder="Price">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Button text
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="button" type="text" class="form-control"
                                    placeholder="Button">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">Content of the plan
                                    <span class="text-red">*</span>
                                </label>
                                <textarea class="form-control" wire:model.defer="content" rows="3" placeholder="Separate by ( , )"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">Icon</label>
                                <div class="dropify-wrapper">
                                    <input type="file" id="img" class="dropify" wire:model.defer="icon">
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

                    <?php if(!$edit): ?>
                        <button wire:click="save" type="button"
                            class="btn btn-primary btn-edit mt-2 float-right">save</button>
                    <?php else: ?>
                        <button wire:click="update" type="button"
                            class="btn btn-warning btn-edit mt-2 float-right">update</button>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="card screenshot"></div>
        <?php if(isset($plans)): ?>
            <div class="row">
                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="<?php echo e(asset("storage/plans/$plan->icon")); ?>" class="avatar-xl brround"
                                    alt="">
                                <h5 class="card-title pt-5"><?php echo e($plan->title); ?></h5>
                                <p class="card-text" style="line-height: 22px">
                                    <?php echo str_replace(',', '<br>', $plan->content); ?>

                                </p>
                                <a class="btn btn-dark text-white" style="border-radius: 30px"><?php echo e($plan->button); ?></a>
                            </div>
                            <div class="card-footer">
                                <a wire:click="edit(<?php echo e($plan->id); ?>)" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a wire:click="delete(<?php echo e($plan->id); ?>)" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/livewire/admin-plans.blade.php ENDPATH**/ ?>