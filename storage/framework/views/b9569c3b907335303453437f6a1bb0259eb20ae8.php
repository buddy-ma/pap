<div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Blog </h3>
                </div>
                <div class="card-body pb-2">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success" role="alert"><button type="button" class="close"
                                data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e($message); ?>.
                        </div>
                    <?php endif; ?>
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

                    <form>
                        <div class="row">
                            <div class="col-lg">
                                <label>Title*</label>
                                <input type="text" wire:model="title" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-4" wire:ignore>
                            <div class="col-lg">
                                <label>PDF</label>
                                <input type="file" wire:model="pdf" class="dropify" data-height="180" />
                            </div>
                        </div>

                        <div class="form-group mt-4" wire:ignore>
                            <label>Article :</label>
                            <textarea name="editor1" rows="500" style="min-height: 500px;"></textarea>
                        </div>

                        <div class="btn-list text-right">
                            <button wire:click="save" type="button" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/commercialiser-page-admin.blade.php ENDPATH**/ ?>