<div>
    <div class="row flex-lg-nowrap mt-5">
        <div class="col-12">
            <?php if(Session::get('success')): ?>
                <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <div class="row flex-lg-nowrap">
                <div class="col-12 mb-3">
                    <div class="e-panel card">
                        <div class="card-header">
                            <h3 class="card-title">Blog List</h3>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog-create')): ?>
                                <a href="<?php echo e(route('show-blog-add')); ?>" class="btn btn-primary float-right ml-auto">
                                    <i class="fe fe-plus mr-2"></i> Add Blog
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">

                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <div id="sender_search" class="dataTables_filter">
                                        <label class="float-right ml-3">
                                            <button class="btn btn-danger form-control-sm" wire:click="resetFilters">
                                                <i class="fa fa-close" style="line-height: 20px"></i>
                                            </button>
                                        </label>
                                        <label class="float-right">
                                            <input class="form-control form-control-sm" placeholder="Search..."
                                                wire:model='search'>
                                        </label>
                                    </div>
                                    <div id="sender_pag" class="dataTables_filter float-left text-center"
                                        style="max-width: 40px; display: inline-block">
                                        <select wire:model='perPage' aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div id="sender_city" class="dataTables_filter float-left text-center ml-3"
                                        style="width: 150px; display: inline-block">
                                        <select wire:model='selected_category' aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="0"> Filter by category </option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->title); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <table
                                        class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">Blog Title</th>
                                                <th class="wd-15p border-bottom-0">Categorie</th>
                                                <th class="wd-15p border-bottom-0">Blogger</th>
                                                
                                                <th class="wd-15p border-bottom-0">Date Creation</th>
                                                <th class="wd-15p border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="change-user">
                                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($blog->title); ?></td>
                                                    <td>
                                                        <?php if(!empty($blog->categories())): ?>
                                                            <?php $__currentLoopData = $blog->categories()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <label
                                                                    class="badge badge-success"><?php echo e($categ->title); ?></label>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($blog->user->firstname); ?> <?php echo e($blog->user->lastname); ?></td>
                                                    
                                                    <td>
                                                        <?php if($blog->status == 0): ?>
                                                            <button class="btn-sm btn-danger mt-2"
                                                                wire:click="enable(<?php echo e($blog->id); ?>)">Désactivé</button>
                                                        <?php else: ?>
                                                            <button class="btn-sm btn-success mt-2"
                                                                wire:click="disable(<?php echo e($blog->id); ?>)">Activé</button>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($blog->created_at); ?></td>
                                                    <td>

                                                        <form action="<?php echo e(route('blog-delete', [$blog->id])); ?>"
                                                            method="post">
                                                            <?php echo method_field('delete'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog-edit')): ?>
                                                                <a href="<?php echo e(route('show-blog-update', [$blog->id])); ?>"
                                                                    class="btn btn-primary">
                                                                    <i class="fe fe-edit"></i>
                                                                </a>
                                                                <a href="<?php echo e(route('show-blog-show', [$blog->id])); ?>"
                                                                    class="btn btn-success <?php echo e($blog->ismodified && $blog->status == 0 ? 'flash' : ''); ?>">
                                                                    <i class="fe fe-eye"></i>
                                                                </a>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blog-delete')): ?>
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fe fe-trash"></i>
                                                                </button>
                                                            <?php endif; ?>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/blog-listing.blade.php ENDPATH**/ ?>