<section class="header-image parallax-search8 th-8 d-flex align-items-center" id="slider">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12 col-sm-12" data-aos="fade-left">
                <div class="trip-search contact-us">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo e(asset('assets/images/bg/bg_2.jpg')); ?>" class="mt-5 img-fluid w-100"
                                style="height: 200px; border-radius: 10px">
                            <ul class="pl-5 mt-3">
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="text-icon d-inline ml-2">
                                            <?php echo e($page->address ?? '95 South Park Ave, USA'); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="text-icon d-inline ml-2"> <?php echo e($page->phone ?? '+456 875 369 208'); ?>

                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="text-icon d-inline ml-2 ti">
                                            <?php echo e($page->email ?? 'support@findhouses.com'); ?></p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center mb-4">Commercialiser votre bien</h3>
                            <form class="contact-form" method="POST" action="<?php echo e(route('commercialiserContact')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" required class="form-control input-custom input-full"
                                        name="fullname" placeholder="Nom complet" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control input-custom input-full"
                                        name="phone" placeholder="Telephone" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-custom input-full" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control textarea-custom input-full" name="message" required rows="8"
                                        placeholder="Message..."></textarea>
                                </div>
                                <div class="form-group button">
                                    <button type="submit" class="btn">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/commercialiser/hero.blade.php ENDPATH**/ ?>