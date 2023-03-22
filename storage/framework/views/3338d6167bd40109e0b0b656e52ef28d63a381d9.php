<div>

    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-header">
                    <h3 class="card-title">Add User</h3>
                </div>
                <div class="card-body">
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
                    <form>
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="expanel expanel-default">
                                    <div class="expanel-heading">
                                        <h3 class="expanel-title" style="text-align: center">User Personal Information
                                            &nbsp
                                        </h3>
                                    </div>
                                    <div class="expanel-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="form-label">First Name</label>
                                                <input class="form-control mb-4" placeholder="First Name" type="text"
                                                    wire:model.defer='firstname' value='<?php echo e(old('firstname')); ?>'>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Last Name</label>
                                                <input class="form-control mb-4" placeholder="Last Name" type="text"
                                                    wire:model.defer='lastname' value='<?php echo e(old('lastname')); ?>'>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Email</label>
                                                <input class="form-control mb-4" placeholder="Email" type="text"
                                                    wire:model.defer='email' value='<?php echo e(old('email')); ?>'>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Phone </label>
                                                <input class="form-control mb-4" placeholder="Phone" maxlength="10"
                                                    type="text" wire:model.defer='phone'
                                                    value='<?php echo e(old('phone')); ?>'>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="input-group file-browser mb-3">
                                                    <label class="form-label d-block w-100">Image </label>
                                                    <input type="text"
                                                        <?php if(!$avatar): ?> placeholder="choose" <?php else: ?> placeholder="selected &#x2713;" <?php endif; ?>
                                                        readonly="" class="form-control border-right-0 browse-file">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-primary">Browse
                                                            <input type="file" style="display: none;"
                                                                wire:model='avatar'>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group ">
                                                    <label class="col-md-12 form-label">Password </label>
                                                    <?php if($showpassword): ?>
                                                        <input type="text" wire:model.defer="password"
                                                            class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            placeholder="Password *">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <a wire:click="showpassword()"><i
                                                                        class="fe fe-eye"></i></a>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <input type="password" wire:model.defer="password"
                                                            class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            placeholder="Password *">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <a wire:click="showpassword()"><i
                                                                        class="fe fe-eye-off"></i></a>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <a wire:click="rand_string()"><i
                                                                    class="fe fe-refresh-ccw"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="expanel expanel-default">
                                    <div class="expanel-heading">
                                        <h3 class="expanel-title" style="text-align: center">Roles
                                            &nbsp
                                        </h3>
                                    </div>
                                    <div class="expanel-body" style="max-height: 376px; overflow-y:scroll">
                                        <div class="e-table">
                                            <div class="table-responsive table-lg mt-3">
                                                <table
                                                    class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap">
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td width='10px'><label
                                                                        class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="example-checkbox1"
                                                                            value="<?php echo e($role->name); ?>"
                                                                            wire:model.defer="select.<?php echo e($role->name); ?>">
                                                                        <span class="custom-control-label"></span>
                                                                    </label></td>
                                                                <td width='50px'>
                                                                    <?php echo e($loop->index + 1); ?>

                                                                </td>
                                                                <td><?php echo e($role->name); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            empty
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="button" wire:click="UserAdd()" class="btn btn-primary mt-2 mb-2 ml-2 ">
                        Save</button>
                    <button type="button" wire:click="Close()" class="btn btn-danger">
                        Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fileupload/js/dropify.js')); ?>"></script>

    <script>
        $(function() {
            $('#select2-dropdown').select2();
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/resources/views/livewire/admin/users/user-add.blade.php ENDPATH**/ ?>