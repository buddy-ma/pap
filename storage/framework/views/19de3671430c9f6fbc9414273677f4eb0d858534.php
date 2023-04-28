<div>

    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Ajouter des liens</h4>
            <ol class="breadcrumb">
                <?php if(isset($links[0]->ville->title)): ?>
                    <li class="breadcrumb-item"><i class="fe fe-layout  mr-2 fs-14"></i><?php echo e($links[0]->ville->title); ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item"><i class="fe fe-layout  mr-2 fs-14"></i>Tables</li>
                <?php endif; ?>
                <li class="breadcrumb-item active" aria-current="page"><a href="">Ajouter des liens</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6">
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
            <div class="card">
                <div class="card-header">
                    <?php if($edit): ?>
                        <h3 class="card-title">Modifier lien </h3>
                    <?php else: ?>
                        <h3 class="card-title">Ajouter lien </h3>
                    <?php endif; ?>
                </div>
                <div class="card-body pb-2">
                    <form>
                        <div class="row">
                            <div class="col-lg">
                                <label>Titre*</label>
                                <input type="text" wire:model="title" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg">
                                <label class="d-block">Link </label>
                                <input wire:model="link" type="text" class="form-control" />
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <?php if($edit): ?>
                        <button wire:click="update" type="button" class="btn btn-warning">Update</button>
                    <?php else: ?>
                        <button wire:click="store" type="button" class="btn btn-success">Save</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tous les liens </h3>
                </div>
                <div class="card-body pb-2">
                    <ul class="list-group mb-0">
                        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 "
                                tabindex="0">
                                <h5 class="d-inline"><?php echo e($link->title); ?></h5>
                                <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                    <strong>
                                        <a wire:click="edit(<?php echo e($link->id); ?>)" style="cursor: pointer"> Edit
                                        </a>
                                        |
                                        <a wire:click="delete(<?php echo e($link->id); ?>)" style="cursor: pointer">
                                            Delete
                                        </a>
                                    </strong>
                                </p>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/ville-links-livewire.blade.php ENDPATH**/ ?>