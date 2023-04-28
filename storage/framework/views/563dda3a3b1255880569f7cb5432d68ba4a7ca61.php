<div class="row">
    <div class="col-md-8 col-12">
        <div class="blog-info details mb-30">
            <h5 class="mb-4">Description</h5>
            <p class="mb-3"><?php echo e($product->description); ?></p>
        </div>
    </div>
    <aside class="col-lg-4 col-md-12 col-12 car">
        <div class="single widget">
            <div class="sidebar">
                <div class="widget-boxed mt-33">
                    <div class="widget-boxed-body">
                        <div class="sidebar-widget author-widget2">
                            <div class="agent-contact-form-sidebar">
                                <?php if($product->proprietaire->hide_infos == 0): ?>
                                    <h4>Information du proprietaire</h4>
                                    <ul class="author__contact">
                                        <li>
                                            <span class="la la-user">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span><?php echo e($product->proprietaire->firstname); ?>

                                            <?php echo e($product->proprietaire->lastname); ?>

                                        </li>
                                        <li>
                                            <span class="la la-phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span><?php echo e($product->proprietaire->phone); ?>

                                        </li>
                                    </ul>
                                <?php else: ?>
                                    <h4>Information du proprietaire</h4>
                                    <p>NB : Le propriétaire refuse le démarchage commercial.</p>
                                <?php endif; ?>
                                <hr>
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
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/product/description.blade.php ENDPATH**/ ?>