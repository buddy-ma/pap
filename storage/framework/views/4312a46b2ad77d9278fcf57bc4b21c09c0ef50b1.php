<div>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-12">
            <div class="card box-widget widget-user">
                <div class="widget-user-image mx-auto mt-5">
                    <?php if($user->avatar): ?>
                        <img alt="User Avatar" class="rounded-circle" style="width: 100%"
                            src="<?php echo e(URL::asset("/storage/user/$user->avatar")); ?>">
                    <?php else: ?>
                        <img alt="User Avatar" class="rounded-circle" style="width: 100%"
                            src="<?php echo e(URL::asset('admin_assets/images/users/avatar.jpg')); ?>">
                    <?php endif; ?>
                </div>
                <div class="card-body text-center">
                    <div class="pro-user">
                        <h4 class="pro-user-username text-dark mb-1 font-weight-bold"><?php echo e($user->firstname); ?>

                            <?php echo e($user->lastname); ?></h4>
                        <h6 class="pro-user-desc text-muted"><?php echo e($user->position ?? 'no position yet'); ?></h6>

                        <?php if(!$edit): ?>
                            <a class="btn btn-primary mt-3" wire:click="edit()">
                                <i class="fa fa-pencil"></i> Edit Profile
                            </a>
                        <?php else: ?>
                            <a class="btn btn-danger mt-3" wire:click="edit()">
                                <i class="fa fa-close"></i> Close
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-footer p-0">
                    <div class="row">
                        <div class="col-sm-6 border-right text-center">
                            <div class="description-block p-4">
                                <h5 class="description-header mb-1 font-weight-bold text-dark number-font">6</h5>
                                <span class="text-muted">Orders</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="description-block text-center p-4">
                                <h5 class="description-header mb-1 font-weight-bold text-dark number-font">3,765</h5>
                                <span class="text-muted">Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Personal Details</h4>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-0">
                                        <span class="font-weight-semibold w-50">Name </span>
                                    </td>
                                    <td class="py-2 px-0"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0">
                                        <span class="font-weight-semibold w-50">Username </span>
                                    </td>
                                    <td class="py-2 px-0"><?php echo e($user->display_name ?? ''); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0">
                                        <span class="font-weight-semibold w-50">Email </span>
                                    </td>
                                    <td class="py-2 px-0"><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0">
                                        <span class="font-weight-semibold w-50">Phone </span>
                                    </td>
                                    <td class="py-2 px-0"><?php echo e($user->phone); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0">
                                        <span class="font-weight-semibold w-50">Position </span>
                                    </td>
                                    <td class="py-2 px-0"><?php echo e($user->position ?? ''); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-0">
                                        <span class="font-weight-semibold w-50">Prefered Language </span>
                                    </td>
                                    <td class="py-2 px-0"><?php echo e($user->language($user->language)); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!$edit): ?>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="main-content-body main-content-body-profile card">
                    <div class="main-profile-body">
                        <div class="card-body">
                            <h5 class="font-weight-bold">Biography</h5>
                            <div class="main-profile-bio mb-0">
                                <p><?php echo e($user->bio ?? 'simply dummy text of the printing and typesetting industry'); ?></p>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="font-weight-bold">Skills</h5>
                            <?php if(isset($user->skills)): ?>
                                <?php $__currentLoopData = $user->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="btn btn-sm btn-light mt-1" href="#"><?php echo e($skill); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <p class="btn btn-sm btn-light mt-1">No skills yet</p>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="font-weight-bold">Contact</h5>
                            <div class="main-profile-contact-list d-lg-flex">
                                <div class="media mr-4">
                                    <div class="media-icon bg-primary text-white  mr-3 mt-1">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <small class="text-muted">Mobile</small>
                                        <div class="font-weight-normal1">
                                            <?php echo e($user->phone); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="media mr-4">
                                    <div class="media-icon bg-warning text-white mr-3 mt-1">
                                        <i class="fa fa-slack"></i>
                                    </div>
                                    <div class="media-body">
                                        <small class="text-muted">Stack</small>
                                        <div class="font-weight-normal1">
                                            <?php echo e($user->email); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-info text-white mr-3 mt-1">
                                        <i class="fa fa-map"></i>
                                    </div>
                                    <div class="media-body">
                                        <small class="text-muted">Address</small>
                                        <div class="font-weight-normal1">
                                            <?php echo e($user->address ?? ''); ?>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- main-profile-contact-list -->
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Personal informations </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Fullname
                                        <span class="text-red">*</span>
                                    </label>
                                    <input wire:model.defer="fullname" type="text" class="form-control"
                                        placeholder="Fullname">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input wire:model.defer="username" type="text" class="form-control"
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Whats your title?</label>
                                    <input wire:model.defer="position" type="text" class="form-control"
                                        placeholder="Position">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Email
                                        <span class="text-red">*</span>
                                    </label>
                                    <input wire:model.defer="email" type="email" class="form-control"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input wire:model.defer="phone" type="tel"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '')" maxlength="10"
                                        class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Prefered Language<span class="text-red">*</span></label>
                                    <select wire:model.defer="lang" class="form-control" id="lang"
                                        style="appearance: auto">
                                        <option value="en">English</option>
                                        <option value="ar">Arabic</option>
                                        <option value="fr">Francais</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input wire:model.defer="address" type="text" class="form-control"
                                        placeholder="Address">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-lg">
                                <div class="custom-controls-stacked">
                                    <label class="col-md-12 form-label">Logo</label>
                                    <div class="dropify-wrapper" style="height: 135px;">
                                        <div class="dropify-message">
                                            <span class="file-icon">
                                                <p>Drag and drop a image here or click</p>
                                            </span>
                                        </div>
                                        <div class="dropify-loader"></div>
                                        <input type="file" id="img" class="dropify" wire:model="logo"
                                            data-height="210">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="custom-controls-stacked">
                                    <label class="col-md-12 form-label">White Logo</label>
                                    <div class="dropify-wrapper" style="height: 135px;">
                                        <div class="dropify-message">
                                            <span class="file-icon">
                                                <p>Drag and drop a image here or click</p>
                                            </span>
                                        </div>
                                        <div class="dropify-loader"></div>
                                        <input type="file" id="img" class="dropify" wire:model="logo_wh"
                                            data-height="210">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg">
                                <div class="custom-controls-stacked">
                                    <label class="col-md-12 form-label">Avatar</label>
                                    <div class="dropify-wrapper" style="height: 135px;">
                                        <div class="dropify-message">
                                            <span class="file-icon">
                                                <p>Drag and drop a image here or click</p>
                                            </span>
                                        </div>
                                        <div class="dropify-loader"></div>
                                        <input type="file" id="img" class="dropify" wire:model="avatar"
                                            data-height="210">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="main-profile-bio mb-0">
                            <label class="form-label">Biography </label>
                            <textarea wire:model.defer="bio" class="form-control mb-4" placeholder="Biography" rows="5"></textarea>
                        </div>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger mt-3" role="alert" style="padding-left: 35px">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        <button wire:click="SavePersonalInfo" type="button"
                            class="btn btn-primary btn-edit mt-2 float-right">save</button>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Skills</h3>
                </div>
                <div class="card-body">
                    <?php if(isset($user->skills)): ?>
                        <?php $__currentLoopData = $user->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="btn btn-sm btn-light mt-1" href="#"><?php echo e($skill); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <p class="btn btn-sm btn-light mt-1">No skills yet</p>
                    <?php endif; ?>
                </div>
            </div>
    <?php endif; ?>
</div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/profile.blade.php ENDPATH**/ ?>