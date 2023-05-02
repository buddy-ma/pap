<div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form encville="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Product </h3>
                    </div>
                    <div class="card-body pb-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Villes</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group mb-0">
                                                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-5 "
                                                        tabindex="0">
                                                        <?php if($ville->id == $selected_ville): ?>
                                                            <div wire:click="selectVille(<?php echo e($ville->id); ?>)"
                                                                style="cursor: pointer"
                                                                class="w-3 h-3 bg-success mr-3 mt-1 brround">
                                                            </div>
                                                        <?php else: ?>
                                                            <div wire:click="selectVille(<?php echo e($ville->id); ?>)"
                                                                style="cursor: pointer"
                                                                class="w-3 h-3 bg-gray mr-3 mt-1 brround">
                                                            </div>
                                                        <?php endif; ?>
                                                        <h5 class="d-inline" style="cursor: pointer"
                                                            wire:click="selectVille(<?php echo e($ville->id); ?>)">
                                                            <?php echo e($ville->title); ?></h5>
                                                        <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                                            <strong>
                                                                <a wire:click="edit(<?php echo e($ville->id); ?>)"
                                                                    style="cursor: pointer"> Edit
                                                                </a>
                                                                |
                                                                <a wire:click="delete(<?php echo e($ville->id); ?>)"
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
                                            <button class="btn btn-block btn-primary" type="button"
                                                wire:click="add">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="e-panel">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Quartiers</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group mb-0">
                                                <?php $__currentLoopData = $quartiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quartier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="list-group-item d-flex border-top-0 border-left-0 border-right-0 pt-5"
                                                        tabindex="0">

                                                        <h5 class="d-inline"><?php echo e($quartier->title); ?></h5>
                                                        <p class="mb-0 text-muted fs-12 ml-auto float-right">
                                                            <strong>
                                                                <a wire:click="editQuartier(<?php echo e($quartier->id); ?>)"
                                                                    style="cursor: pointer"> Edit
                                                                </a>
                                                                |
                                                                <a wire:click="deleteQuartier(<?php echo e($quartier->id); ?>)"
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
                                            <?php if(!empty($selected_ville)): ?>
                                                <button class="btn btn-block btn-primary" type="button"
                                                    wire:click="addQuartier">Add</button>
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
<?php /**PATH /var/www/html/resources/views/livewire/product-villes-admin.blade.php ENDPATH**/ ?>