<div>
    <div class="row mt-5">
        <div class="col-4">
            <?php if($addCategory): ?>
                <div class="card mg-b-20 card--events">
                    <div class="card-header">
                        <h3 class="card-title">
                            Add category
                        </h3>
                        <button wire:click="addCategory" type="button"
                            class="btn btn-danger btn-edit mt-2 float-right ml-auto mr-2">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>

                    <div class="card-body p-0 mt-3">
                        <div class="container">
                            <div class="col-lg">
                                <label class="col-md-12 form-label">Title*</label>
                                <input class="form-control mb-4" placeholder="Title" type="text" wire:model='cTitle'>
                            </div>
                            <div class="col-lg">
                                <label class="col-md-12 form-label">Sort*</label>
                                <input class="form-control mb-4" placeholder="Sort" type="number" wire:model='cSort'>
                            </div>
                            <div class="col-lg">
                                <button wire:click="saveCategory" type="button"
                                    class="btn btn-primary mt-1 mb-5 float-right ml-auto mr-2">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif($editCategory): ?>
                <div class="card mg-b-20 card--events">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Category
                        </h3>
                        <button wire:click="closeEditCategory" type="button"
                            class="btn btn-danger btn-edit mt-2 float-right ml-auto mr-2">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>

                    <div class="card-body p-0 mt-3">
                        <div class="container">
                            <div class="col-lg">
                                <label class="col-md-12 form-label">Title*</label>
                                <input class="form-control mb-4" placeholder="Title" type="text" wire:model='cTitle'>
                            </div>
                            <div class="col-lg">
                                <label class="col-md-12 form-label">Sort*</label>
                                <input class="form-control mb-4" placeholder="Sort" type="number" wire:model='cSort'>
                            </div>
                            <div class="col-lg">
                                <button wire:click="updateCategory()" type="button"
                                    class="btn btn-primary mt-1 mb-5 float-right ml-auto mr-2">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="card mg-b-20 card--events">
                    <div class="card-header">
                        <h3 class="card-title">
                            All statuses
                        </h3>
                        <button wire:click="addCategory" type="button"
                            class="btn btn-primary btn-edit mt-2 float-right ml-auto mr-2">Add Category</button>
                    </div>

                    <div class="card-body p-0 mt-3">
                        <div class="container">
                            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
                                    <div class="card-status card-status-left bg-dark br-bl-7 br-tl-7"></div>
                                    <span class="d-inline"><?php echo e($cat->category); ?></span>
                                    <p class="mb-0 text-muted fs-12 ml-auto float-right d-inline">
                                        <strong>
                                            <a wire:click="editCategory(<?php echo e($cat->id); ?>)" style="cursor: pointer">
                                                Edit
                                            </a>
                                            |
                                            <a wire:click="deleteCategory(<?php echo e($cat->id); ?>)" style="cursor: pointer">
                                                Delete
                                            </a>
                                        </strong>
                                    </p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
                                    <div class="card-status card-status-left bg-dark br-bl-7 br-tl-7"></div>
                                    Empty
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
        <div class="col-8">
            <?php if($updateMode): ?>
                <?php echo $__env->make('livewire.design.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php if($createMode): ?>
                <?php echo $__env->make('livewire.design.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php if(!($createMode || $updateMode)): ?>
                <?php if(count($categories) == 0): ?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Please insert at least a category to select it.
                    </div>
                <?php else: ?>
                    <div class="text-right">
                        <button wire:click="toggleAddDesign" class="mb-3 btn btn-lg btn-primary"> Add new work
                        </button>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <?php echo $__env->make('livewire.design.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/design-live.blade.php ENDPATH**/ ?>