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
                    <section class="headings-2 pt-1 pb-2 mt-5">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <h3><?php echo e($product->title); ?></h3>
                                    <?php if($product->product_category_id == 3): ?>
                                        <span
                                            class="badge badge-pill badge-success px-3 py-2 mb-3"><?php echo e($product->disponibilite); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php echo $__env->make('landing.product.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('landing.product.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                                                <h5 class="modal-title" id="modalTitle<?php echo e($k); ?>">Obtenir le plan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?php echo e(route('produitContact', $product->id)); ?>">
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
                                                    <button type="submit" class="btn btn-block btn-primary mt-3"> Envoyer
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                J'autorise pap.ma à collecter, traiter et transmettre ces données au
                                                promoteur immobilier qui vous contactera par email ou par téléphone afin de
                                                gérer votre demande.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>




                    <div class="property-location map">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        <p>
                            <i class="fa fa-map-pin mr-3"></i><?php echo e($product->ville); ?>, <?php echo e($product->quartier); ?>,
                            <?php echo e($product->address); ?>

                        </p>
                        <div id="map-contact" class="contact-map"></div>
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
    <script>
        if ($('#map-contact').length) {
            var map = L.map('map-contact', {
                zoom: 15,
                maxZoom: 20,
                tap: false,
                gestureHandling: true,
                center: [<?php echo e($product->longitude); ?>, <?php echo e($product->latitude); ?>]
            });

            map.scrollWheelZoom.disable();

            var Hydda_Full = L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
                scrollWheelZoom: false,
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var icon = L.divIcon({
                html: '<i class="fa fa-building"></i>',
                iconSize: [50, 50],
                iconAnchor: [50, 50],
                popupAnchor: [-20, -42]
            });

            var marker = L.marker([<?php echo e($product->longitude); ?>, <?php echo e($product->latitude); ?>], {
                icon: icon
            }).addTo(map);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/produit.blade.php ENDPATH**/ ?>