<div class="row">
    <div class="col-md-8 col-12">
        <section class="headings-2 pt-1 pb-2 mt-5">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <h4><?php echo e($product->title); ?></h4>
                    </div>
                </div>
            </div>
        </section>
        <div class="blog-info details mb-30">
            <h5 class="mb-4">Description</h5>
            <p class="mb-3"><?php echo e($product->description); ?></p>
            <?php if(isset($product->proprietaire->pdf)): ?>
                <a class="btn btn-primary mt-5 border-0 font-weight-bold px-4"
                    href="<?php echo e(URL::asset('storage/product/pdf/' . $product->proprietaire->pdf)); ?>"
                    style="height: 60px; line-height: 50px">
                    <i class="fas fa-download mr-2"></i>Telecharger la brochure PDF
                </a>
            <?php endif; ?>
        </div>
        <div class="single homes-content details mb-30 mt-4">
            <h5 class="mb-4">Details</h5>
            <ul class="homes-list clearfix">
                <?php $__currentLoopData = json_decode($product->extras); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="w-100">
                        <i class="fa fa-check-square" aria-hidden="true"></i>
                        <span><?php echo e($value); ?></span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
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
                                    <h4>Information du <?php if($product->product_category_id == 3): ?>
                                            promoteur
                                        <?php else: ?>
                                            proprietaire
                                        <?php endif; ?>
                                    </h4>
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
                                            </span><?php echo e(substr($product->proprietaire->phone, 0, 3)); ?>****
                                        </li>
                                    </ul>
                                <?php else: ?>
                                    <h4>Information du
                                        <?php if($product->product_category_id == 3): ?>
                                            promoteur
                                        <?php else: ?>
                                            proprietaire
                                        <?php endif; ?>
                                    </h4>
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