<div>
    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-body">
                    <div class="card-header">
                        <h3 class="card-title">Update Roles </h3>
                    </div>
                    <div>
                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success" role="alert"><button type="button" class="close"
                                    data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e($message); ?>.
                            </div>
                        <?php endif; ?>
                        <?php if(count($errors) > 0): ?>
                            <div>
                                <strong class="text-danger">Whoops!</strong> There were some problems with your input.
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="text-danger"><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <form>
                        <?php echo csrf_field(); ?>
                        <div class="expanel expanel-default">
                            <div class="expanel-heading">
                                <h3 class="expanel-title" style="text-align: center">User Group Information &nbsp
                                </h3>
                            </div>

                            <div class="expanel-body">
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="col-md-12 form-label">Role Name</label>
                                        <input class="form-control mb-4" placeholder="Role Name" type="text"
                                            wire:model='name' value='<?php echo e(old('name')); ?>'>
                                    </div>

                                    <div class="col-lg">
                                        <div class="col-md-12" style="max-height: 500px ; overflow:auto">
                                            <div class="e-table">
                                                <div class="table-responsive table-lg mt-3">
                                                    <table
                                                        class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                                        <tbody>
                                                            <tr
                                                                <?php if(isset($select[0])): ?> style="background-color:#f4eefd"
                                                                <?php endif; ?>>
                                                                <td><label class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="example-checkbox1" value="1"
                                                                            wire:model="select.0"
                                                                            wire:click="selectAll()"> <span
                                                                            class="custom-control-label"></span>
                                                                    </label></td>
                                                                <td></td>
                                                                <td>Select All</td>
                                                            </tr>
                                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr
                                                                    <?php if(isset($select[$permission->id])): ?>
                                                                style="background-color:#f4eefd" <?php endif; ?>>
                                                                    <td><label class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="example-checkbox1"
                                                                                value="<?php echo e($permission->id); ?>"
                                                                                wire:model="select.<?php echo e($permission->id); ?>">
                                                                            <span class="custom-control-label"></span>
                                                                        </label></td>
                                                                    <td><?php echo e($loop->index + 1); ?></td>
                                                                    <td><?php echo e($permission->name); ?></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" value="Update" name="action" wire:click="RoleUpdate()"
                                            class="btn btn-primary mt-4 mb-0">
                                        <button type="button" wire:click="Close()" class="btn btn-danger mt-4 mb-0">
                                            Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<?php /**PATH /var/www/html/resources/views/livewire/admin/roles/roles-update.blade.php ENDPATH**/ ?>