<div>
    <div wire:loading
        style="width:100%;height:100%;background-color:rgb(238, 231, 255,0.5);position: absolute;
    z-index: 10000;
    right: 0;
    left: 0;
    ">
        <div class='dot-spin' style="top:50%;margin:auto"></div>
    </div>


    <div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
            <button type="button" class="btn btn-primary mb-1" wire:click="ShowAddUser()"><i class="fe fe-plus mr-2"></i>Add
                User</button>
        <?php endif; ?>

        
        <?php if($ShowAddUser == true): ?>
            <?php echo $__env->make('livewire.admin.users.user-add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($ShowupdateUser == true): ?>
            <?php echo $__env->make('livewire.admin.users.user-update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <div class="row flex-lg-nowrap">
            <div class="col-12 mb-3">
                <div class="e-panel card">

                    <div class="card-body">
                        <div class="col-sm-12 col-md-12">
                            <div id="example1_filter" class="dataTables_filter">
                                <label class="float-right ml-3">
                                    <button class="btn btn-danger form-control-sm" wire:click="resetFilters">
                                        <i class="fa fa-close" style="line-height: 20px"></i>
                                    </button>
                                </label>
                                <label class="float-right"><input class="form-control form-control-sm"
                                        placeholder="Search..." wire:model='search_user'></label>


                            </div>
                        </div>
                        <div class="e-table">
                            <div class="table-responsive table-lg mt-3">
                                <table
                                    class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Id</th>
                                            <th class="wd-15p border-bottom-0">First Name</th>
                                            <th class="wd-15p border-bottom-0">Last Name</th>
                                            <th class="wd-15p border-bottom-0">Email</th>
                                            <th class="wd-15p border-bottom-0">Phone</th>
                                            <th class="wd-15p border-bottom-0">Roles</th>
                                            <th class="wd-15p border-bottom-0">status</th>
                                            <th class="wd-15p border-bottom-0">Created At</th>
                                            <th class="wd-20p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="change-user">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->id); ?></td>
                                                <td><?php echo e($user->firstname); ?></td>
                                                <td><?php echo e($user->lastname); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->phone); ?></td>
                                                <td>
                                                    <?php if(!empty($user->getRoleNames())): ?>
                                                        <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <label
                                                                class="badge badge-success"><?php echo e($role); ?></label>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($user->status == 0): ?>
                                                        <button class="btn-sm btn-danger mt-2"
                                                            wire:click="toDesable(<?php echo e($user->id); ?>)"
                                                            id="Desable">Disabled</button>
                                                    <?php else: ?>
                                                        <button class="btn-sm btn-success mt-2"
                                                            wire:click="toDesable(<?php echo e($user->id); ?>)"
                                                            id="Desable">Enabled</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($user->created_at); ?></td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <?php if($confirming === $user->id): ?>
                                                            <button type="button" class="btn btn-icon  btn-primary"
                                                                wire:click.prevent="deleteUser(<?php echo e($user->id); ?>)"><i
                                                                    class="fe fe-check"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-danger"
                                                                wire:click.prevent="Canceldelete()"><i
                                                                    class="fe fe-x"></i></button>
                                                        <?php else: ?>
                                                            <button type="button" class="btn btn-icon  btn-info mr-1"
                                                                wire:click.prevent="UserShow(<?php echo e($user->id); ?>)"><i
                                                                    class="fe fe-edit"></i></button>
                                                            <button type="button" class="btn btn-icon  btn-danger"
                                                                wire:click.prevent="confirmdelete(<?php echo e($user->id); ?>)"><i
                                                                    class="fe fe-trash"></i></button>
                                                        <?php endif; ?>


                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                                <?php echo e($users->links()); ?>

                            </div>
                        </div>
                        <!--/div-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/livewire/admin/users/users.blade.php ENDPATH**/ ?>