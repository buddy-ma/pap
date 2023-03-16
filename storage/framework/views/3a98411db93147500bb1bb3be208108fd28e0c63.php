<section class="checkout-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <div class="checkout-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="checkout-title">
                                        <h3>Billing Details</h3>
                                    </div>
                                    <div class="row check-out">
                                        <div class="form-group col-sm-12 col-xs-12">
                                            <div class="field-label">Full Name</div>
                                            <input wire:model="fullname" placeholder="Full Name" type="text">
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <div class="field-label">Phone</div>
                                            <input wire:model="phone" placeholder="Phone" type="tel"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                                                maxlength="10">
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <div class="field-label">Email</div>
                                            <input wire:model="email" placeholder="Email" type="text">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                            <div class="field-label">Country</div>
                                            <select>
                                                <option>Morocco</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                            <div class="field-label">City</div>
                                            <input wire:model="city" placeholder="City" type="text">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Address</div>
                                            <input wire:model="address" placeholder="Street address" type="text">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Your image</div>
                                            <input style="width: 100%" wire:model="image" type="file">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Message</div>
                                            <textarea style="height: 100px" wire:model="message" placeholder="Message" rows="5" type="text">
                                            </textarea>
                                        </div>

                                        <?php if($image): ?>
                                            <div class="checkout-details mt-4">
                                                <h3 style="font-weight: bold; margin-bottom: 15px">Photo Preview : </h3>
                                                <img src="<?php echo e($image->temporaryUrl()); ?>" style="max-width: 100%;">
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <a class="btn btn-danger danger-btn radius-0 ml-0 mt-4" wire:click="order">
                                                < Go back </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="checkout-details">
                                        <div class="order-box">
                                            <div class="title-box">
                                                <div>Product <span>Total</span></div>
                                            </div>
                                            <ul class="qty">
                                                <li><?php echo e($product->title); ?>

                                                    <br>
                                                    - <small>
                                                        <?php echo e($selected_size->title); ?> paper,
                                                        <?php echo e($faces); ?> faces</small>
                                                    <span class="count"><?php echo e($subtotal); ?> dh</span>
                                                </li>
                                            </ul>
                                            <ul class="sub-total">
                                                <?php $__currentLoopData = $pluses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($key); ?> <span class="count"><?php echo e($v); ?>

                                                            dh</span></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <li>Shipping
                                                    <?php if($selected_size->livraison == 0): ?>
                                                        <div class="shipping">
                                                            <div class="shopping-option">
                                                                <i class="fa fa-check"></i>
                                                                <label for="free-shipping">Free Shipping</label>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <span class="count">
                                                            <?php echo e($selected_size->livraison); ?> dh
                                                        </span>
                                                    <?php endif; ?>
                                                </li>
                                                <li>Packaging
                                                    <?php if($selected_size->livraison == 0): ?>
                                                        <div class="shipping">
                                                            <div class="shopping-option">
                                                                <i class="fa fa-check"></i>
                                                                <label for="free-shipping">Free Packaging</label>

                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <span class="count">
                                                            <?php echo e($selected_size->packaging); ?> dh
                                                        </span>
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                            <ul class="total">
                                                <li>Total <span class="count"><?php echo e($total); ?> dh</span></li>
                                            </ul>
                                        </div>
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
                                        <a class="btn btn-default primary-btn radius-0 d-block"
                                            wire:click="complete">Place
                                            Order</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/livewire/checkout.blade.php ENDPATH**/ ?>