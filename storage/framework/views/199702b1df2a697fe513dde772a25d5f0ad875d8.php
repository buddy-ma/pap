<?php $__env->startSection('css'); ?>
    <style>
        .dropdown img {
            width: 16px;
            height: 16px;
            display: block;
        }
    </style>
<?php $__env->stopSection(); ?>

<header class="app2 loding-header nav-abs custom-scroll">
    <!--div class="animated-bg"><i></i><i></i><i></i></div-->
    <div class="container">
        <div class="row">
            <div class="col">
                <nav>
                    <a class="m-r-auto" href="<?php echo e(url('/')); ?>">
                        <img class="img-fluid" src="<?php echo e(asset('assets/images/logo/wh_logo.png')); ?>" alt="logo">
                    </a>
                    <div class="responsive-btn">
                        <a class="toggle-nav" href="#">
                            <i aria-hidden="true" class="fa fa-bars text-white"></i>
                        </a>
                    </div>
                    <div class="navbar m-l-auto" id="togglebtn">
                        <div class="responsive-btn">
                            <a class="btn-back" href="#">
                                <h5>back</h5>
                            </a>
                        </div>
                        <ul class="main-menu">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('/dev')); ?>">Dev</a></li>
                            <li><a href="<?php echo e(url('/art')); ?>">Art</a></li>
                            
                            <?php if(auth()->guard()->guest()): ?>
                                <li class="nav-bg">
                                    <a href="<?php echo e(route('auth')); ?>">Login</a>
                                </li>
                            <?php else: ?>
                                <li style="padding: 0 10px"><a style="color: white;">Welcome, <?php echo e(Auth::user()->firstname); ?></a></span>
                                    <ul style="width: 140px; padding-top: 10px">
                                        <li>
                                            <a class="m-r-auto" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <?php echo __('home.logout'); ?> </a>
                                        </li>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            

                            <?php
                                $langs = ['en' => 'English','fr' => 'Français','ar' => 'Arabic'];
                                $side = App::getLocale() == 'ar' ? "left" : "right";
                            ?>

                            <li style="padding: 0 10px"><a style="color: white;"><img style="padding-<?php echo e($side); ?>: 20px" class="img-fluid" src="<?php echo e(asset('assets/images/buddy/city/'.App::getLocale().'.png')); ?>" alt="English"><?php echo e($langs[App::getLocale()]); ?></a></span>
                                <ul style="width: 140px; padding-top: 10px">
                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($lang != App::getLocale()): ?>
                                            <li>
                                                <a class="m-r-auto" href="<?php echo e(route('switchLan', $lang)); ?>">
                                                    <img style="padding-right: 20px" class="img-fluid" src="<?php echo e(asset('assets/images/buddy/city/'.$lang.'.png')); ?>" alt="English"><?php echo e($language); ?>

                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Nav end-->

<?php $__env->startSection('js'); ?>
<script type="text/javascript">

</script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\ayman\Desktop\buddy_world\buddy_world\resources\views/partials/header.blade.php ENDPATH**/ ?>