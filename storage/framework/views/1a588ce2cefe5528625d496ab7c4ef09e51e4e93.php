<div>
    <div class="card p-5" id="left-defaults">
        <h4 class="card-title mb-6">Emails Subscribers</h4>
        <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card border shadow-none p-3 overflow-hidden font-weight-semibold mb-4 br-3">
                <div class="card-status card-status-left bg-warning br-bl-7 br-tl-7"></div><?php echo e($email->email); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/admin-email.blade.php ENDPATH**/ ?>