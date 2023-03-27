<?php $__env->startSection('css'); ?>
    <!-- INTERNAL File Uploads css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />
    <!-- INTERNAL File Uploads css-->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fileupload/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />
    <style>
        .bootstrap-tagsinput {
            width: 100% !important;
        }

        .dark-mode .bootstrap-tagsinput {

            color: rgba(255, 255, 255, 1) !important;
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark-mode .bootstrap-tagsinput input {
            color: rgba(255, 255, 255, 1) !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Blogs</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="fe fe-layout  mr-2 fs-14"></i>Blogs</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="">My Blogs</a></li>
            </ol>
        </div>
    </div>
    <!--End Page header-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card overflow-hidden">
        <?php if(isset($blog->image)): ?>
            <div class="item7-card-img px-4 pt-4">
                <img src="<?php echo e(URL::asset('images/' . $blog->image)); ?>" alt="img" class="cover-image br-7 w-100">
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="item7-card-desc d-md-flex mb-5">
                <i class="fe fe-calendar fs-16 mr-1"></i>
                <div class="mt-0"><?php echo e($blog->created_at->format('F-j-Y')); ?></div>
                <div class="ml-auto mb-2">
                    <a class="mr-0 d-flex" href="<?php echo e(url('/' . ($page = '#'))); ?>"><i
                            class="fe fe-message-square fs-16 mr-1"></i>
                        <div class="mt-0"><?php echo e($blog->created_at->diffForHumans()); ?></div>
                    </a>
                </div>
            </div>
            <h5 class="font-weight-semibold"><?php echo e($blog->title); ?></h5>
            <h6 class="font-weight-semibold"><?php echo e($blog->subtitle); ?></h6>
            <?php echo $blog->text; ?>

            <div class="media py-3 mt-0 border-top">
                <div class="tags">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="tag tag-purple"><?php echo e($tag); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="ml-auto">
                    <div class="d-flex">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('blogs-listing', ['model' => $blog, 'field' => 'status'])->html();
} elseif ($_instance->childHasBeenRendered($blog->id)) {
    $componentId = $_instance->getRenderedChildComponentId($blog->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($blog->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($blog->id);
} else {
    $response = \Livewire\Livewire::mount('blogs-listing', ['model' => $blog, 'field' => 'status']);
    $html = $response->html();
    $_instance->logRenderedChild($blog->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- INTERNAL File uploads js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fileupload/js/dropify.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/filupload.js')); ?>"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="<?php echo e(URL::asset('admin_assets/js/formelementadvnced.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/form-elements.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/file-upload.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/date-picker.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/input-mask/jquery.maskedinput.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/mains-admin/blogs/blog-show-all.blade.php ENDPATH**/ ?>