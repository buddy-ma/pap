<div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Header Informations </h3>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Subtitle </label>
                                <input wire:model.defer="subtitle" type="text" class="form-control"
                                    placeholder="Subtitle">
                            </div>
                        </div>
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
                                <label class="form-label">Button text</label>
                                <input wire:model.defer="button" type="text" class="form-control"
                                    placeholder="Button text">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">Picture</label>
                                <div class="dropify-wrapper" style="height: 135px;">
                                    <div class="dropify-message">
                                        <span class="file-icon">
                                            <p>Drag and drop a image here or click</p>
                                        </span>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <input type="file" id="img" class="dropify" wire:model.defer="picture"
                                        data-height="210">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">Background <small>( 1920*600 )</small></label>
                                <div class="dropify-wrapper" style="height: 135px;">
                                    <div class="dropify-message">
                                        <span class="file-icon">
                                            <p>Drag and drop a image here or click</p>
                                        </span>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <input type="file" id="img" class="dropify" wire:model.defer="background"
                                        data-height="210">
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

                    <button wire:click="save" type="button"
                        class="btn btn-primary btn-edit mt-2 float-right">save</button>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Order Page</h3>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-label">Subtitle </label>
                                <input wire:model.defer="order_subtitle" type="text" class="form-control"
                                    placeholder="Subtitle">
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-label">Title
                                    <span class="text-red">*</span>
                                </label>
                                <input wire:model.defer="order_title" type="text" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg">
                            <div class="custom-controls-stacked">
                                <label class="col-md-12 form-label">Background <small>( 1920*600 )</small></label>
                                <div class="dropify-wrapper" style="height: 135px;">
                                    <div class="dropify-message">
                                        <span class="file-icon">
                                            <p>Drag and drop a image here or click</p>
                                        </span>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <input type="file" id="img" class="dropify"
                                        wire:model.defer="order_background" data-height="210">
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

                    <button wire:click="saveOrder" type="button"
                        class="btn btn-primary btn-edit mt-2 float-right">save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/admin-header.blade.php ENDPATH**/ ?>