
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="padding-top: 15%">
                        <div class="text-white">
                            <div class="card-body">
                                
                                <?php if($errors->any()): ?>
                                    <div class="bg-danger text-white px-4 py-2 br-3 mb-4" role="alert">
                                        Whoops ! 
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <form method="POST" action="<?php echo e(route('king-login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <h2 class="display-4 mb-2 font-weight-bold text-center mb-5"><strong>Wussup, Buddy
                                            !</strong></h2>
                                    <div class="row">
                                        <div class="col-9 d-block mx-auto">
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fe fe-user"></i>
                                                    </div>
                                                </div>
                                                <input type="email" class="form-control" style="height: 50px"
                                                    name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                                    autofocus placeholder="email">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fe fe-lock"></i>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" style="height: 50px"
                                                    name="password" value="<?php echo e(old('email')); ?>" required
                                                    autocomplete="current-password" placeholder="Password">
                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn  btn-secondary btn-block px-4">Login</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-center">
                    <lottie-player src="<?php echo e(asset('assets/images/lf30_editor_hsama85h.json')); ?>" mode="bounce"
                        background="transparent" speed="0.5" style="width: 500px; height: 500px;" loop autoplay>
                    </lottie-player>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio\resources\views/auth/login.blade.php ENDPATH**/ ?>