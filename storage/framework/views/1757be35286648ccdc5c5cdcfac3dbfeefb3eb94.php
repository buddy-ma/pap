<div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Services </h3>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-sm-6 col-md-6">
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
                                <label class="form-label">Number
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="number" type="number" class="form-control"
                                    placeholder="Number">
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
        <?php if(isset($numbers)): ?>
            <div class="row">
                <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="<?php echo e(asset("storage/icons/$number->icon")); ?>" class="avatar-xl brround"
                                    alt="">
                                <h5 class="card-title pt-5 mb-0"><?php echo e($number->number); ?></h5>
                                <p class="card-text"><?php echo e($number->title); ?></p>
                            </div>
                            <div class="card-footer">
                                <a wire:click="edit(<?php echo e($number->id); ?>)" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a wire:click="delete(<?php echo e($number->id); ?>)" class="btn btn-danger"><i
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
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/admin-numbers.blade.php ENDPATH**/ ?>