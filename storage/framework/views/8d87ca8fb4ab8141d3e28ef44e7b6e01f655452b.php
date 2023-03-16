<div>

    
    <?php if(( $status == 0 && $model->ismodified == 1) || ($model->modifications==0 && $status == 0 && $model->ismodified==0) ): ?> 
    <button class="btn btn-icon  btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-trash"></i> Refuse</button>
    <button wire:click="accept" class="btn btn-icon  btn-success"><i class="fe fe-check"></i> Accept</button>
    <?php elseif($status==1): ?>
    <div class="text-center">
        <button class="btn btn-icon  btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-trash"></i> Refuse</button>
    </div>
    <?php elseif($model->ismodified == 0 && $status==0): ?>
        <button wire:click="accept" class="btn btn-icon btn-success"><i class="fe fe-check"></i> Accept</button>
    <?php endif; ?>
    

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add your Remarks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
            <form method="post">
                <div class="modal-body">
                <div class="col-lg">
                    <textarea name="correction" id="" cols="65" rows="10" wire:model="corrections" required></textarea>
                    <?php $__errorArgs = ['corrections'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="submit" wire:click.prevent="refuse" class="btn btn-danger close-modal" >Yes, Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
    
</div>
<?php /**PATH /var/www/html/resources/views/livewire/blogs-listing.blade.php ENDPATH**/ ?>