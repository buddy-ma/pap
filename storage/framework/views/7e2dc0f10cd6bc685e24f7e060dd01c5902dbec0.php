<div class="row">
    <div class="col-md-8 col-12">
        <section class="headings-2 pt-1 pb-2 mt-4">
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
                <a class="btn btn-primary mt-3 border-0 font-weight-bold px-4"
                    href="<?php echo e(URL::asset('storage/product/pdf/' . $product->proprietaire->pdf)); ?>"
                    style="height: 60px; line-height: 50px">
                    <i class="fas fa-download mr-2"></i>Telecharger la brochure PDF
                </a>
            <?php endif; ?>
        </div>
        <div class="single homes-content details mb-30 mt-4">
            <h5 class="mb-4">Details</h5>
            <ul class="homes-list clearfix">
                <li>
                    <b>Category : </b>
                    <span><?php echo e($product->category->title); ?></span>
                </li>
                <li>
                    <b>Type : </b>
                    <span><?php echo e($product->type->title); ?></span>
                </li>
                <li>
                    <b>Reference : </b>
                    <span><?php echo e($product->reference); ?></span>
                </li>
                <li>
                    <b>Prix : </b>
                    <?php if($product->prix_by == 'a partir de'): ?>
                        <span><?php echo e($product->prix_by); ?> <?php echo e($product->prix); ?> dh</span>
                    <?php elseif($product->prix_by != 'fix'): ?>
                        <span><?php echo e($product->prix); ?> / <?php echo e($product->prix_by); ?> dh</span>
                    <?php else: ?>
                        <span><?php echo e($product->prix); ?> dh</span>
                    <?php endif; ?>
                </li>
            </ul>
            <ul class="homes-list clearfix">
                <li>
                    <b>Ville : </b>
                    <span><?php echo e($product->ville); ?></span>
                </li>
                <li>
                    <b>Quartier : </b>
                    <span><?php echo e($product->quartier); ?></span>
                </li>
                <li>
                    <b>Addresse : </b>
                    <span><?php echo e($product->address); ?></span>
                </li>
                <li>
                    <b>Surface : </b>
                    <span><?php echo e($product->surface); ?> <?php echo e($product->unite_surface); ?></span>
                </li>
                <li>
                    <b>Nbr Chambres : </b>
                    <span><?php echo e($product->nbr_chambres); ?></span>
                </li>
                <li>
                    <b>Nbr Salons : </b>
                    <span><?php echo e($product->nbr_salons); ?></span>
                </li>
            </ul>
            <ul class="homes-list clearfix">
                <hr class="default">
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
                <div class="widget-boxed mt-3">
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
                                    <ul class="author__contact" id="app">
                                        <?php if(isset($product->proprietaire->logo)): ?>
                                            <li>
                                                <img src="<?php echo e(asset('storage/product/logo/' . $product->proprietaire->logo)); ?>"
                                                    alt="<?php echo e($product->proprietaire->firstname); ?>

                                                    <?php echo e($product->proprietaire->lastname); ?>"
                                                    class="mb-3 w-50 ml-auto mr-auto d-block">
                                            </li>
                                        <?php endif; ?>
                                        <li>
                                            <span class="la la-user">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span><?php echo e($product->proprietaire->firstname); ?>

                                            <?php echo e($product->proprietaire->lastname); ?>

                                        </li>
                                        <li v-if="show">
                                            <span class="la la-phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span><?php echo e($product->proprietaire->phone); ?>

                                        </li>
                                        <li v-else>
                                            <span class="la la-phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </span><?php echo e(substr($product->proprietaire->phone, 0, 3)); ?>****
                                        </li>

                                        <button v-if="!show" @click="voir(<?php echo e($product->id); ?>)" type="button"
                                            class="btn btn-block btn-primary mt-3">
                                            Voir telephone
                                        </button>
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
<?php $__env->startSection('js'); ?>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    id: 0,
                    show: false,
                };
            },
            methods: {
                voir(id) {
                    axios.get('/vues_phone', {
                            params: {
                                id: id,
                            }
                        })
                        .then(response => {
                            //show phone
                            this.show = true
                        })
                        .catch(error => {});
                },
            }
        }).mount('#app')
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/resources/views/landing/product/description.blade.php ENDPATH**/ ?>