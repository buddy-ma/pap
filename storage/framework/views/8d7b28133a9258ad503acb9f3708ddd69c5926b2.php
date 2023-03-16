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
                        <div class="col-6 col-md-6">
                            <label class="form-label">Icon
                                <span class="text-red">*</span>
                            </label>
                            <input type="file" id="img" class="dropify" wire:model.defer="icon"
                                data-height="85">
                        </div>
                    </div>
                    <label class="custom-switch">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            wire:click="hide()">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Lordicon instead</span>
                    </label>
                    <?php if($hide): ?>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg">
                                <div class="form-group">
                                    <a href="https://lordicon.com" target="_blank">
                                        <label style="cursor: pointer" class="form-label">Lordicon</label></a>
                                    <textarea class="form-control" wire:model.defer="lord_icon" name="text" rows="3"
                                        placeholder='<lord-icon src="https:xxx" trigger="morph" style="width:150px;height:150px"></lord-icon>'>
                                    <lord-icon src="https:xxx" trigger="morph" style="width:150px;height:150px"></lord-icon>
                                </textarea>
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
                    <?php if(!$edit): ?>
                        <button wire:click="save" type="button"
                            class="btn btn-primary btn-edit mt-2 float-right">save</button>
                    <?php else: ?>
                        <button wire:click="update" type="button"
                            class="btn btn-warning btn-edit mt-2 float-right">update</button>
                        <button wire:click="edit()" type="button"
                            class="btn btn-danger btn-edit mt-2 float-right">close</button>
                    <?php endif; ?>
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
                            </div>
                            <div class="card-footer">
                                <a wire:click="edit(<?php echo e($service->id); ?>)" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a wire:click="delete(<?php echo e($service->id); ?>)" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
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
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/admin-services.blade.php ENDPATH**/ ?>