<div class="row">
    <div class="col-8">
        <div class="blog-info details mb-30">
            <h5 class="mb-4">Description</h5>
            <p class="mb-3"><?php echo e($product->description); ?></p>
        </div>
    </div>
    <aside class="col-lg-4 col-md-12 car">
        <div class="single widget">
            <div class="sidebar">
                <div class="widget-boxed mt-33">
                    <div class="widget-boxed-body">
                        <div class="sidebar-widget author-widget2">
                            <div class="agent-contact-form-sidebar">
                                <h4>Contact</h4>
                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <form method="post" action="<?php echo e(route('produitContact', $product->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" name="fullname" placeholder="Nom complet" required />
                                    <input type="text" maxlength="10" name="phone" placeholder="Telephone"
                                        required />
                                    <input type="email" name="email" placeholder="Email Address" />
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <button type="submit" class="btn btn-block btn-primary mt-3"> Envoyer </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
<?php /**PATH /var/www/html/resources/views/landing/product/description.blade.php ENDPATH**/ ?>