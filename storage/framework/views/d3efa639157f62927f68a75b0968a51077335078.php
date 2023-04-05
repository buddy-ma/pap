<div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <form enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Product </h3>
                    </div>
                    <div class="card-body pb-2">
                        <div class="row">
                            <div class="col-4">
                                <div class="e-panel ">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Promoteur / Proprietaire</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="form-group">
                                                <label class="form-label">Prenom*</label>
                                                <input type="text" wire:model="firstname" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nom*</label>
                                                <input type="text" wire:model="lastname" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telephone*</label>
                                                <input type="text" wire:model="phone" maxlength="10"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" wire:model="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="expanel-footer">
                                            <div class="form-group mb-0">
                                                <label class="custom-switch">
                                                    <input type="checkbox" wire:click="is_promoteur()"
                                                        class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Promoteur ?</span>
                                                </label>
                                            </div>
                                        </div>
                                        <?php if($is_promoteur): ?>
                                            <div class="expanel-body">
                                                <label class="form-label">Logo*</label>
                                                <input type="file" class="dropify" data-height="180"
                                                    wire:model="logo" />
                                            </div>
                                            <div class="expanel-body">
                                                <label class="form-label">PDF</label>
                                                <input type="file" class="dropify" data-height="180"
                                                    wire:model="pdf" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel ">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Produit</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="form-group">
                                                <label class="form-label">Category*</label>
                                                <select wire:model="category" class="form-control">
                                                    <option>Select option</option>
                                                    <?php $__currentLoopData = $productcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($pc->id); ?>"><?php echo e($pc->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Type*</label>
                                                <select wire:model="type" class="form-control">
                                                    <option>Select option</option>
                                                    <?php $__currentLoopData = $producttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($pt->id); ?>"><?php echo e($pt->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Titre*</label>
                                                <input type="text" wire:model="title" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Description*</label>
                                                <textarea wire:model="description" class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Prix*</label>
                                                <input type="number" wire:model="prix" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Video</label>
                                                <input type="text" wire:model="video" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Visite Virtuelle</label>
                                                <input type="text" wire:model="vr" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Position*</label>
                                                <input type="text" wire:model="position" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Ville*</label>
                                                <input type="text" wire:model="ville" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Quartier*</label>
                                                <input type="text" wire:model="quartier" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Addresse*</label>
                                                <input type="text" wire:model="address" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Unite Surface</label>
                                                <select wire:model="unite_surface" class="form-control"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option>Select option</option>
                                                    <option value="m²">m²</option>
                                                    <option value="hec">hec</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Surface*</label>
                                                <input type="text" wire:model="surface" class="form-control" />
                                            </div>
                                            <?php if($category == 1 || $category == 3): ?>
                                                <div class="form-group">
                                                    <label class="form-label">Surface Habitable</label>
                                                    <input type="text" wire:model="surface_habitable"
                                                        class="form-control" />
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label">Surface Terrain</label>
                                                    <input type="text" wire:model="surface_terrain"
                                                        class="form-control" />
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label class="form-label">Nbr Salons*</label>
                                                <input type="number" wire:model="nbr_salons" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nbr Chambres</label>
                                                <input type="number" wire:model="nbr_chambres"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="expanel-body">
                                            <ul class="list-group">
                                                <label class="form-label">Extras</label>
                                                <?php $__currentLoopData = $productextras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <label class="custom-control custom-checkbox">
                                                        <input wire:model="hasextras.<?php echo e($extra->id); ?>"
                                                            type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="<?php echo e($extra->title); ?>">
                                                        <span class="custom-control-label"><?php echo e($extra->title); ?></span>
                                                    </label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="e-panel ">
                                    <div class="expanel expanel-default">
                                        <div class="expanel-heading">
                                            <h3 class="expanel-title text-center">Images</h3>
                                        </div>
                                        <div class="expanel-body">
                                            <div class="row">
                                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-12 mb-3">
                                                        <label class="form-label">Image <?php echo e($loop->iteration); ?>*</label>
                                                        <input type="file" data-height="100"
                                                            wire:model="images.<?php echo e($loop->index); ?>" />
                                                        <button class="btn btn-danger ml-auto float-right"
                                                            type="button"
                                                            wire:click="removeimg(<?php echo e($loop->index); ?>)">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <button class="btn btn-primary btn-block" type="button"
                                                wire:click="addImage">
                                                Ajouter Image
                                            </button>
                                        </div>
                                        <div class="expanel-body">
                                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ke => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-6 col-md-3 input-group">
                                                    <button type="button"
                                                        class="btn btn-icon btn-outline-danger btn-delete mt-2 ml-2"
                                                        wire:click="removeimg(<?php echo e($ke); ?>)">
                                                        <i class="fas fa-trash m-0"></i>
                                                    </button>

                                                    <div class="dropify-wrapper" style="height: 160px;">
                                                        <img src="storage/product/images/<?php echo e($val); ?>"
                                                            style="height: 100%;width:100%">
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="btn-list text-right">
                            <button type="button" wire:click="save" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/add-product.blade.php ENDPATH**/ ?>