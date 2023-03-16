<div>
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Basic DataTable</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">ID</th>
                                    <th class="wd-15p border-bottom-0">Fullname</th>
                                    <th class="wd-15p border-bottom-0">Phone</th>
                                    <th class="wd-25p border-bottom-0">E-mail</th>
                                    <th class="wd-25p border-bottom-0">Address</th>
                                    <th class="wd-25p border-bottom-0">Product</th>
                                    <th class="wd-25p border-bottom-0">Status</th>
                                    <th class="wd-25p border-bottom-0">Time added</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index); ?></td>
                                        <td><?php echo e($order->fullname); ?></td>
                                        <td><?php echo e($order->phone); ?></td>
                                        <td><?php echo e($order->email); ?></td>
                                        <td><?php echo e($order->city); ?>, <?php echo e($order->address); ?></td>

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
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/livewire/admin-orders.blade.php ENDPATH**/ ?>