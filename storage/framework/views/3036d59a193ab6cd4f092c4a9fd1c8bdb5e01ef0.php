<section class="music header" id="header">
    <div class="music-content">
        <div class="music-bg bg bg-shadow-top"
            style="background-image: url('<?php echo e(asset("storage/portfolio/$header->background")); ?>')">
            <div class="no-phone text-center w-100" data-tilt data-tilt-max="3" data-tilt-perspective="500"
                data-tilt-speed="400">
                <div class="img-height">
                    <img class="img-fluid souka" src="<?php echo e(asset("storage/portfolio/$header->picture")); ?>">
                </div>
            </div>
            <div class="phone text-center w-100">
                <div class="img-height">
                    <img class="img-fluid souka" src="<?php echo e(asset("storage/portfolio/$header->picture")); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="right-side">
        <div class="circle">
            <img alt="aero" class="img-fluid" src="<?php echo e(asset('assets/images/music/icons/aero.png')); ?>">
        </div>
        <h1>2022 <span>23</span></h1>
    </div>
    <div class="left-side">
        <h6 class="follow-text text-white">follow me</h6>
        <ul>
            <?php if(isset($user->social)): ?>
                <?php $__currentLoopData = json_decode($user->social); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="social_icon" href="https://www.<?php echo e($key); ?>.com/<?php echo e($value); ?>/"
                            target="_blank">
                            <i class="fa fa-<?php echo e($key); ?>"></i>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
    
</section>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/dynamic/header/second.blade.php ENDPATH**/ ?>