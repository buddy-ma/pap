<?php $__env->startSection('page-header'); ?>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Set design</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a wire:click="toggleAddDesign()"><i
                            class="fe fe-file-text mr-2 fs-14"></i>designs</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a wire:click="toggleAddDesign()">Add design</a></li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Design</h3>
                <div class="card-options"><a wire:click="toggleAddDesign()" class="card-options-remove"><i
                            class="fe fe-x"></i></a> </div>
            </div>
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="card-body pb-2">
                <form enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="expanel expanel-default">
                        <div class="expanel-heading">
                            <h3 class="expanel-title" style="text-align: center">Design Informations</h3>
                        </div>
                        <div class="expanel-body">
                            <div class="row row-sm">
                                <div class="col-lg">
                                    <label class="col-md-12 form-label">Title*</label>
                                    <input class="form-control mb-4" placeholder="Full Name" type="text"
                                        wire:model='title'>
                                </div>
                                <div class="col-lg">
                                    <label class="col-md-12 form-label">Client</label>
                                    <input class="form-control mb-4" placeholder="Client" type="text"
                                        wire:model='client'>
                                </div>
                                <div class="col-lg">
                                    <label class="col-md-12 form-label">Link</label>
                                    <input class="form-control mb-4" placeholder="Link" type="text"
                                        wire:model='link'>
                                </div>
                            </div>
                            <div class="row row-sm">
                                <div class="col-lg">
                                    <label class="col-md-12 form-label">Category*</label>
                                    <select class="form-control mb-4" wire:model='category_id'>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->category); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-lg">
                                    <label class="col-md-12 form-label">Date*</label>
                                    <input class="form-control mb-4" placeholder="project date" type="date"
                                        wire:model='date'>
                                </div>

                            </div>
                            <div class="row row-sm">
                                <div class="col-lg">
                                    <label class="col-md-12 form-label">Description</label>
                                    <textarea class="form-control mb-4" wire:model='description' rows="5">project description</textarea>
                                </div>
                                <div class="col-lg">
                                    <div class="custom-controls-stacked">
                                        <label class="col-md-12 form-label">Design Image* <small
                                                class="float-right">(960 x 980px)</small></label>
                                        <div class="dropify-wrapper" style="height: 135px;">
                                            <div class="dropify-message">
                                                <span class="file-icon">
                                                    <p>Drag and drop a image here or click</p>
                                                </span>
                                            </div>
                                            <div class="dropify-loader"></div>
                                            <input type="file" id="img" class="dropify" wire:model="image"
                                                data-height="210">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="margin-bottom: 20px; text-align: right;">
                        <button type="button" wire:click="toggleUpdateDesign()"
                            class="btn btn-dark mt-4 mb-0">Close</button>
                        <button type="button" wire:click="update()" class="btn btn-success mt-4 mb-0"
                            style="width: 10%; margin-left: 5px">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/design/update.blade.php ENDPATH**/ ?>