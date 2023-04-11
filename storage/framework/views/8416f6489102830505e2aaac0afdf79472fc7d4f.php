<?php $__env->startSection('title', 'Particulier a particulier'); ?>
<?php $__env->startSection('logo', 'blue'); ?>
<?php $__env->startSection('bodyClasses', 'inner-pages hd-white'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/colors/blue.css')); ?>">
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
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php echo $__env->make('landing.product.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->make('landing.product.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="single homes-content details mb-30">
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