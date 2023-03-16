<?php if(isset($designs)): ?>
    <?php $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 col-xl-4">
            <div class="card overflow-hidden">
                <a href="designs/<?php echo e($des->id); ?>"><img class="card-img-top" src="<?php echo e(asset("storage/design/$des->image")); ?>"
                        alt="img"></a>
                <div class="card-body d-flex flex-column">
                    <h4> <?php echo e($des->title); ?> </h4>
                    <div class="text-muted"><?php echo e($des->description); ?></div>
                    <a wire:click="edit(<?php echo e($des->id); ?>)" class="mt-3 btn btn-lg btn-primary">Edit</a>
                    <a wire:click="delete(<?php echo e($des->id); ?>)" class="mt-3 btn btn-lg btn-danger">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <div>
        Empty

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/design/list.blade.php ENDPATH**/ ?>