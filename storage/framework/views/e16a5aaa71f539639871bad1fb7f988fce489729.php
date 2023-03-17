<div>
    <?php if($addCategory): ?>
        <?php echo $__env->make('livewire.admin.category.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($editCategory): ?>
        <?php echo $__env->make('livewire.admin.category.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <div class="row flex-lg-nowrap">
            <div class="col-12 mb-3">
                <div class="e-panel card">
                    <div class="card-header">
                        <h3 class="card-title">Categories List</h3>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-create')): ?>
                            <a wire:click="addCategory" class="float-right ml-auto">
                                <button type="button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add
                                    Categorie</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="e-table">
                            <div class="table-responsive table-lg mt-3">
                                <table class="table card-table table-vcenter text-nowrap border p-0">
                                    <thead>
                                        <tr>
                                            <th>Categorie</th>
                                            <th>Date Creation</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($categories)): ?>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="table-subheader">
                                                    <td><?php echo e($categorie->title); ?></td>
                                                    <td><?php echo e($categorie->created_at); ?></td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-edit')): ?>
                                                            <a wire:click="editCategory(<?php echo e($categorie->id); ?>)"
                                                                class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-delete')): ?>
                                                            <button wire:click="delete(<?php echo e($categorie->id); ?>)" type="button"
                                                                class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/blog-categories-admin.blade.php ENDPATH**/ ?>