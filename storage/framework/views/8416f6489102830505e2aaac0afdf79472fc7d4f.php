<?php $__env->startSection('title', 'Particulier a particulier'); ?>
<?php $__env->startSection('logo', $color); ?>
<?php $__env->startSection('bodyClasses', 'inner-pages hd-white'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/colors/' . $color . '.css')); ?>">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php echo $__env->make('landing.product.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('landing.product.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php if($product->product_category_id == 3): ?>
                        <div class="single homes-content details mb-30">
                            <h5 class="mb-4">Biens Disponibles</h5>
                            <table id="customers">
                                <tr>
                                    <th>Appartements</th>
                                    <th>A partir de</th>
                                    <th>Surface</th>
                                    <th></th>
                                </tr>
                                <?php $__currentLoopData = $product->biens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($v->title); ?></td>
                                        <td><?php echo e($v->price); ?> dh</td>
                                        <td><?php echo e($v->surface); ?> m²</td>
                                        <td><button class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal<?php echo e($k); ?>">Plan</button></td>
                                    </tr>
                                    <div class="modal fade" id="modal<?php echo e($k); ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="modalTitle<?php echo e($k); ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitle<?php echo e($k); ?>">Obtenir le
                                                        plan
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post"
                                                        action="<?php echo e(route('produitContact', $product->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <label for="fullname">Nom complet</label>
                                                        <input type="text" name="fullname" placeholder="Nom complet"
                                                            class="form-control mb-3" required />
                                                        <label for="phone">Telephone</label>
                                                        <input type="text" maxlength="10" name="phone"
                                                            class="form-control mb-3" placeholder="Telephone" required />
                                                        <label for="email">Email Address</label>
                                                        <input type="email" name="email" placeholder="Email Address"
                                                            class="form-control mb-3" />
                                                        <label for="message">Message</label>
                                                        <textarea placeholder="Message" name="message" required class="form-control mb-2">Bonjour, je souhaite recevoir le plan de <?php echo e($v->title); ?> de <?php echo e($v->surface); ?>m²  à <?php echo e($v->price); ?> dh. Cordialement.
                                                    </textarea>
                                                        <button type="submit" class="btn btn-block btn-primary mt-3">
                                                            Envoyer
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    J'autorise pap.ma à collecter, traiter et transmettre ces données au
                                                    promoteur immobilier qui vous contactera par email ou par téléphone afin
                                                    de
                                                    gérer votre demande.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    <?php endif; ?>

                    <div class="property-location map mt-4">
                        <h5>Localisation</h5>
                        <div class="divider-fade"></div>
                        <p>
                            <i class="fa fa-map-pin mr-3"></i><?php echo e($product->ville); ?>, <?php echo e($product->quartier); ?>,
                            <?php echo e($product->address); ?>

                        </p>
                        <iframe src="<?php echo e($product->position); ?>" width="100%" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                    <?php echo $__env->make('landing.product.similarProduits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>

    <script>
        $('.slick-carousel').each(function() {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                slider.slick('slickNext');
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/produit.blade.php ENDPATH**/ ?>