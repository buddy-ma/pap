<div>
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <?php if($browse): ?>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Contact</div>
                            </div>
                            <div class="card-body">
                                <div class="main-profile-contact-list">
                                    <div class="media mr-4 mt-0">
                                        <div class="media-icon bg-primary text-white mr-3 mt-1">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">Client</small>
                                            <div class="font-weight-normal1">
                                                <?php echo e($order->fullname); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="media mr-4">
                                        <div class="media-icon bg-info text-white mr-3 mt-1">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">Mobile</small>
                                            <div class="font-weight-normal1">
                                                <?php echo e($order->phone); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="media mr-4">
                                        <div class="media-icon bg-secondary text-white mr-3 mt-1">
                                            <i class="fa fa-slack"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">Email</small>
                                            <div class="font-weight-normal1">
                                                <?php echo e($order->email); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-icon bg-warning text-white mr-3 mt-1">
                                            <i class="fa fa-map"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">Address</small>
                                            <div class="font-weight-normal1">
                                                <?php echo e($order->city); ?>, <?php echo e($order->address); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Client Comment</h5>
                                <p class="card-text">
                                    <?php echo e($order->message ?? 'Empty'); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Order #<?php echo e($order->id); ?></div>
                            </div>
                            <div class="card-body">
                                <div class="ibox-content">
                                    <div class="row mb-3">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="bg-light text-center br-4">
                                                        <div class="p-2">
                                                            <?php if($order->image): ?>
                                                                <img src="<?php echo e(asset("storage/clients/$order->image")); ?>"
                                                                    onerror="<?php echo e(asset('assets/images/default.png')); ?>"
                                                                    alt="img" class="img-fluid w-100">
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('assets/images/default.png')); ?>"
                                                                    alt="img" class="img-fluid w-100">
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h3 class="mb-4">
                                                        <?php echo e($order->product->title); ?>

                                                        <span class="float-right ml-auto"><?php echo e($order->total); ?>dh</span>
                                                    </h3>
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Size</th>
                                                                <td><?php echo e($order->size); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Faces</th>
                                                                <td><?php echo e($order->faces); ?></td>
                                                            </tr>
                                                            <?php $__currentLoopData = json_decode($order->extra); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo e($key); ?></th>
                                                                    <td><i class="fa fa-check"></i> <?php echo e($val); ?>

                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <h5 class="mb-4"> Order Status </h5>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <select class="form-control h-7" wire:model="old_status">
                                                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($stt->id); ?>"
                                                                        <?php if($old_status == $stt->id): ?> selected <?php endif; ?>>
                                                                        <?php echo e($stt->status); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <a class="btn btn-primary" wire:click="save()">
                                                                <button type="button"
                                                                    class="btn btn-primary text-white">
                                                                    <i class="fe fe-check mr-2"></i>
                                                                    Save
                                                                </button>
                                                            </a>
                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!$browse): ?>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">All orders</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">ID</th>
                                        <th class="wd-15p border-bottom-0">Fullname</th>
                                        <th class="wd-15p border-bottom-0">Phone</th>
                                        <th class="wd-25p border-bottom-0">Product</th>
                                        <th class="wd-25p border-bottom-0">Status</th>
                                        <th class="wd-25p border-bottom-0">Time added</th>
                                        <th class="wd-25p border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->index + 1); ?></td>
                                            <td><?php echo e($order->fullname); ?></td>
                                            <td><?php echo e($order->phone); ?></td>
                                            <td><?php echo e($order->product->title); ?> </td>
                                            <td>
                                                <span class="badge badge-pill badge-<?php echo e($order->status->color); ?> mt-2">
                                                    <?php echo e($order->status->status); ?>

                                                </span>
                                            </td>
                                            <td><?php echo e($order->updated_at); ?> </td>
                                            <td>
                                                <a class="btn btn-primary" wire:click="browse(<?php echo e($order->id); ?>)">
                                                    <i class="fe fe-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="d-inline-flex align-items-center px-2 py-2">
                                <span class="w-3 h-3 brround bg-<?php echo e($status->color); ?> mr-2"></span>
                                <?php echo e($status->status); ?> </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/admin-orders.blade.php ENDPATH**/ ?>