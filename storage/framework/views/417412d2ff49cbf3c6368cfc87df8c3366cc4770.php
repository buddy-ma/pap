<div>
    
    

    <div wire:loading
        style="width:100%;height:100%;background-color:rgb(238, 231, 255,0.5);position: absolute;
    z-index: 10000;
    right: 0;
    left: 0;
    ">
        <div class='do        <div class=' dot-spin' style="top:50%;margin:auto"></div>
    </div>

    <div class="text-right">
        <button wire:click="change(1)"
            class="btn btn-outline-info <?php if($is_agency == 1): ?> bg-info text-white <?php endif; ?>  mt-4 mb-4 mr-4">
            Admin Permmissions </button>
        <button wire:click="change(2)"
            class="btn btn-outline-info <?php if($is_agency == 2): ?> bg-info text-white <?php endif; ?> mt-4 mb-4 mr-4">
            Agency Permmissions </button>

    </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-create')): ?>
        <div class="container-fluid mb-2">
            <div class="row">
                <div class="col-2">
                    <button wire:click="ShowAddPermission()" type="button" class="btn btn-primary"><i
                            class="fe fe-plus mr-2"></i>Add Permission</button>
                </div>

            </div>
        </div>
    <?php endif; ?>


    
    <?php if($ShowAddPermission == true): ?>
        <?php echo $__env->make('livewire.admin.permissions.permissions-add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($ShowupdatePermission == true): ?>
        <?php echo $__env->make('livewire.admin.permissions.permissions-update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-body">
                    <div class="e-table">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div id="example1_filter" class="dataTables_filter">
                                    <div id="example1_filter" class="dataTables_filter float-right text-left">

                                        <label class="float-right"><input class="form-control form-control-sm"
                                                placeholder="Search..." wire:model='search'></label>
                                    </div>
                                    <div id="example1_filter" class="dataTables_filter float-left text-left"
                                        style="max-width: 40px; display: inline-block">
                                        <span>&#8203;</span>
                                        <select wire:model='perPage' name="example1_length" aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div id="example1_filter" class="dataTables_filter float-left text-left ml-3"
                                        style="width: 300px; display: inline-block">
                                        <span>Filter by :</span>
                                        <select wire:model='selected_group' name="example1_length"
                                            aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option>Permission Group</option>
                                            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($grp->p_group); ?>"><?php echo e($grp->p_group); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>
                                    <div id="example1_filter" class="dataTables_filter float-left text-left ml-3"
                                        style="width: 20px; display: inline-block">
                                        <span>&#8203;</span>
                                        <label class="float-right ml-3">
                                            <button class="btn btn-danger form-control-sm" wire:click="resetgroup">
                                                <i class="fa fa-close" style="line-height: 20px"></i>
                                            </button>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-lg mt-3">
                                <table
                                    class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("id")'>Id <i
                                                    class="float-right fa fa-unsorted" style="line-height: 20px"></i>
                                            </th>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("p_group")'>
                                                Permission Group <i class="float-right fa fa-unsorted"
                                                    style="line-height: 20px"></i></th>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("title")'>Name <i
                                                    class="float-right fa fa-unsorted" style="line-height: 20px"></i>
                                            </th>
                                            <th class="wd-15p border-bottom-0" wire:click='orderby("name")'>Code <i
                                                    class="float-right fa fa-unsorted" style="line-height: 20px"></i>
                                            </th>
                                            <th class="wd-15p border-bottom-0">Created at</th>
                                            <th class="wd-15p border-bottom-0">Updated at</th>
                                            <th class="wd-20p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="change-permission">
                                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($permission->id); ?></td>
                                                <td><?php echo e($permission->p_group); ?></td>
                                                <td><?php echo e($permission->title); ?></td>
                                                <td><?php echo e($permission->name); ?></td>
                                                <td><?php echo e($permission->created_at); ?></td>
                                                <td><?php echo e($permission->updated_at); ?></td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <?php if($confirming === $permission->id): ?>
                                                            <button type="button" class="btn btn-icon  btn-primary"
                                                                wire:click.prevent="deletePermission(<?php echo e($permission->id); ?>)"><i
                                                                    class="fe fe-check"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-danger"
                                                                wire:click.prevent="Canceldelete()"><i
                                                                    class="fe fe-x"></i></button>
                                                        <?php else: ?>
                                                            <button type="button" class="btn btn-icon  btn-info mr-1"
                                                                wire:click.prevent="PermissionShow(<?php echo e($permission->id); ?>)"><i
                                                                    class="fe fe-edit"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-danger"
                                                                wire:click.prevent="confirmdelete(<?php echo e($permission->id); ?>)"><i
                                                                    class="fe fe-trash"></i></button>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php if($paginate == 1): ?>
                                    <?php echo e($permissions->links()); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php /**PATH /var/www/html/resources/views/livewire/admin/permissions/permissions.blade.php ENDPATH**/ ?>