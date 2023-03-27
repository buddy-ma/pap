<div>

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
                                        <th>Date Creation</th>
                                        <th>Repondre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($contacts)): ?>
                                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="table-subheader">
                                                <td><?php echo e($contact->fullname); ?></td>
                                                <td><?php echo e($contact->email ?? ''); ?></td>
                                                <td><?php echo e($contact->phone); ?></td>
                                                <td><?php echo e($contact->message); ?></td>
                                                <td>
                                                    <?php if($contact->answered == 0): ?>
                                                        <span class="badge badge-default mt-2">Non</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-success mt-2">Oui</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($contact->created_at); ?></td>
                                                <td>
                                                    <?php if($contact->answered == 0): ?>
                                                        <a wire:click="repondre(<?php echo e($contact->id); ?>)"
                                                            class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
<?php /**PATH /var/www/html/resources/views/livewire/commercialiser-contacts-admin.blade.php ENDPATH**/ ?>