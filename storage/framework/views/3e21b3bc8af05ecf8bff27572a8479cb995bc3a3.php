<div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Services </h3>
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
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Text
                                    <span class="text-red">*</span>
                                </label>
                                <textarea class="form-control" wire:model.defer="text" name="text" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Lordicon</label>
                                <textarea class="form-control" wire:model.defer="lord_icon" name="text" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <label class="custom-switch">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            wire:click="hide()">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Icon instead</span>
                    </label>
                    <?php if($hide): ?>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg">
                                <div class="custom-controls-stacked">
                                    <label class="col-md-12 form-label">Icon</label>
                                    <div class="dropify-wrapper" style="height: 135px;">
                                        <div class="dropify-message">
                                            <span class="file-icon">
                                                <p>Drag and drop a image here or click</p>
                                            </span>
                                        </div>
                                        <div class="dropify-loader"></div>
                                        <input type="file" id="img" class="dropify" wire:model.defer="icon"
                                            data-height="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger mt-3" role="alert" style="padding-left: 35px">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <button wire:click="save" type="button"
                        class="btn btn-primary btn-edit mt-2 float-right">save</button>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12">
        <?php if(!empty($services)): ?>
            <div class="row">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php if($service->is_lord == 1): ?>
                                    <?php echo $service->lord_icon; ?>

                                <?php else: ?>
                                    <img src="<?php echo e(asset("storage/icons/$service->icon")); ?>"
                                        class="avatar avatar-xxl brround" alt="">
                                <?php endif; ?>

                                <h5 class="card-title"><?php echo e($service->title); ?></h5>
                                <p class="card-text"><?php echo e($service->text); ?></p>
                                <label class="custom-switch" wire:click="disable(<?php echo e($service->id); ?>)">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                        <?php if($service->status == 1): ?> checked <?php endif; ?>>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">
                                        <?php if($service->status == 1): ?>
                                            Enabled
                                        <?php else: ?>
                                            Disabled
                                        <?php endif; ?>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <div class="card screenshot"></div>
        <?php endif; ?>
    </div>
</div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/livewire/admin-services.blade.php ENDPATH**/ ?>