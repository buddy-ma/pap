<div>
    <div wire:loading
        style="width:100%;height:100%;background-color:rgb(238, 231, 255,0.5);position: absolute;
    z-index: 10000;
    right: 0;
    left: 0;
    ">
        <div class='dot-spin' style="top:50%;margin:auto"></div>
    </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
        <a><button type="button" wire:click="ShowAddRole()" class="btn btn-primary mb-2"><i class="fe fe-plus mr-2"></i>Add
                User Group</button>
        </a>
    <?php endif; ?>
    <?php if($ShowAddRole == true): ?>
        <?php echo $__env->make('livewire.admin.roles.roles-add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif($ShowupdateRole == true): ?>
        <?php echo $__env->make('livewire.admin.roles.roles-update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">

                <div class="card-body">

                    <div class="e-table">
                        <div class="table-responsive table-lg mt-3">
                            <table class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Id</th>
                                        <th class="wd-15p border-bottom-0">User Group Name</th>
                                        <th class="wd-15p border-bottom-0">Created at</th>
                                        <th class="wd-15p border-bottom-0">Updated at</th>
                                        <th class="wd-20p border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="change-role">
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($role->id); ?></td>
                                            <td><?php echo e($role->name); ?></td>
                                            <td><?php echo e($role->created_at); ?></td>
                                            <td><?php echo e($role->updated_at); ?></td>
                                            <td class="align-middle">
                                                <div class="btn-group align-top">
                                                    <?php if($confirming === $role->id): ?>
                                                        <button type="button" class="btn btn-icon  btn-primary"
                                                            wire:click.prevent="deleteRole(<?php echo e($role->id); ?>)"><i
                                                                class="fe fe-check"></i></button>
                                                        <button type="button" class="btn btn-icon  btn-danger"
                                                            wire:click.prevent="Canceldelete()"><i
                                                                class="fe fe-x"></i></button>
                                                    <?php else: ?>
                                                        <button type="button" class="btn btn-icon  btn-info mr-1"
                                                            wire:click.prevent="RoleShow(<?php echo e($role->id); ?>)"><i
                                                                class="fe fe-edit"></i></button>
                                                        <button type="button" class="btn btn-icon  btn-danger"
                                                            wire:click.prevent="confirmdelete(<?php echo e($role->id); ?>)"><i
                                                                class="fe fe-trash"></i></button>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($roles->links()); ?>

                        </div>
                    </div>
                    <!--/div-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/admin/roles/roles.blade.php ENDPATH**/ ?>