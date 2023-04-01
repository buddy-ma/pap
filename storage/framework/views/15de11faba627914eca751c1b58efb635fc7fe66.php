<div>
    <?php if($voir): ?>
        <div class="card">
            <div class="card-body">
                <div class="email-media">
                    <div class="mt-0 d-sm-flex">
                        <img class="mr-2 rounded-circle avatar avatar-lg"
                            src="<?php echo e(asset('admin_assets/images/users/avatar.png')); ?>" alt="avatar">
                        <div class="media-body pt-0">
                            <div class="float-right d-none d-md-flex fs-15">
                                <a wire:click="repondre(<?php echo e($contact->id); ?>)" class="btn btn-primary">
                                    <i class="fa fa-check mr-2"></i> Repondre
                                </a>
                                <a wire:click="closeVoir()" class="btn btn-danger ml-2">
                                    <i class="fa fa-close"></i>
                                </a>
                            </div>
                            <div class="media-title text-dark font-weight-semibold mt-1"><?php echo e($contact->fullname); ?> <span
                                    class="text-muted font-weight-semibold">( <?php echo e($contact->email); ?> )</span></div>
                            <small class="mb-0"><?php echo e($contact->phone); ?></small>
                        </div>
                    </div>
                </div>
                <div class="eamil-body mt-5">
                    <h6>Produit : <?php echo e($contact->product->title); ?></h6>
                    <p>
                        <?php echo e($contact->message); ?>

                    </p>
                </div>
            </div>
            <div class="card-footer">
                <?php echo e($contact->updated_at->translatedFormat('F j, Y, h:m')); ?>

            </div>
        </div>
    <?php endif; ?>
    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-header">
                    <h3 class="card-title">Contact Commerciaux List
                    </h3>
                </div>
                <div class="card-body">
                    <div class="e-table">
                        <div class="table-responsive table-lg mt-3">
                            <table class="table card-table table-vcenter text-nowrap border p-0">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Repondu</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($contacts)): ?>
                                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="table-subheader">
                                                <td><?php echo e($contact->fullname); ?></td>
                                                <td><?php echo e($contact->email ?? ''); ?></td>
                                                <td><?php echo e($contact->phone); ?></td>
                                                <td><?php echo e(substr($contact->message, 0, 60)); ?>...</td>
                                                <td>
                                                    <?php if($contact->answered == 0): ?>
                                                        <span class="badge badge-default mt-2">Non</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-success mt-2">Oui</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a wire:click="voir(<?php echo e($contact->id); ?>)" class="btn btn-success"><i
                                                            class="fa fa-eye mr-2"></i>Voir</a>
                                                    <?php if($contact->answered == 0): ?>
                                                        <a wire:click="repondre(<?php echo e($contact->id); ?>)"
                                                            class="btn btn-primary">
                                                            <i class="fa fa-check mr-2"></i> Repondre
                                                        </a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/product-contacts-admin.blade.php ENDPATH**/ ?>