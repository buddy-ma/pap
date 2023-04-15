<?php $__env->startSection('css'); ?>
    <!-- INTERNAL File Uploads css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL File Uploads css-->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/fileupload/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />
    <!--INTERNAL Select2 css -->
    <link href="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Sumoselect css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('admin_assets/plugins/sumoselect/sumoselect.css')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
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
            <h4 class="page-title mb-0">Update Blog</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="fe fe-layout  mr-2 fs-14"></i>Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="">Update Blog</a></li>
            </ol>
        </div>
    </div>
    <!--End Page header-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Blog </h3>
                    <div class="btn-group float-right ml-auto">
                        <button class="btn btn-secondary"
                            onclick="event.preventDefault();askBeforeApprove(<?php echo e($blog->id); ?>);">
                            Approve
                        </button>
                        <button class="btn btn-primary" onclick="event.preventDefault();askBefore();">
                            Save
                        </button>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success" role="alert"><button type="button" class="close"
                                data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i><?php echo e($message); ?>.
                        </div>
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                        <form action="<?php echo e(route('blog-update', [$blog->id])); ?>" onsubmit="event.preventDefault(); askBefore()"
                            method='POST' role="form" id="blog-update" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input id="user_id" type="hidden" value="<?php echo e($blog->id); ?>">
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-lg">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"
                                    value='<?php echo e(old('title') ?? $blog->title); ?>' />
                            </div>

                            <div class="col-lg">
                                <label>Subtitle</label>
                                <input type="text" name="subtitle" class="form-control"
                                    value='<?php echo e(old('subtitle') ?? $blog->subtitle); ?>' />
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select multiple="multiple" onchange="console.log($(this).children(':selected').length)"
                                        id="categories" name="categories[]" class="search-box">
                                        <?php if($categories): ?>
                                            <?php $dash = ''; ?>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"
                                                    <?php echo e(in_array($category->id, $catgs) ? 'selected' : ''); ?>>
                                                    <?php echo e($category->title); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <label class="d-block">Tags </label>
                                <input value="<?php echo e($tags); ?>" name="tags" type="text" class="form-control"
                                    data-role="tagsinput" data-cls-tag-title="text-bold fg-white" />
                            </div>
                            <div class="col-lg">
                                <label class="d-block">Video </label>
                                <input value="<?php echo e($video_link); ?>" name="video_link" type="text" class="form-control" />
                            </div>
                            <div class="col-lg">
                                <label class="d-block">Visite Virtuelle </label>
                                <input value="<?php echo e($vr_link); ?>" name="vr_link" type="text" class="form-control" />
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-lg">
                                <label>Main Image*</label>
                                <input type="file" class="dropify" data-height="180" name="image"
                                    <?php if(isset($blog->image)): ?>
                                    data-default-file="<?php echo e(URL::asset('images/' . $blog->image)); ?>"
                                    <?php endif; ?> />
                            </div>
                            <div class="col-lg">
                                <label>PDF</label>
                                <input type="file" class="dropify" data-height="180" name="pdf" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label><strong>Description :</strong></label>
                            <textarea name="editor1" rows="1000" style="min-height: 900px;"><?php echo $blog->text; ?></textarea>
                        </div>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                            <div class="btn-list text-right">
                                <input type="submit" value="Save" onclick="event.preventDefault();askBefore();"
                                    name="action" class="btn btn-primary">
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- INTERNAL Select2 js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/select2.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/date-picker.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/date-picker/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/input-mask/jquery.maskedinput.js')); ?>"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.ui.widget.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.iframe-transport.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/jquery.fancy-fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fancyuploder/fancy-uploader.js')); ?>"></script>

    <!-- INTERNAL File uploads js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/fileupload/js/dropify.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/filupload.js')); ?>"></script>

    <!--INTERNAL Sumoselect js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/sumoselect/jquery.sumoselect.js')); ?>"></script>

    <!--INTERNAL Form Advanced Element -->
    <script src="<?php echo e(URL::asset('admin_assets/js/formelementadvnced.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/form-elements.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/file-upload.js')); ?>"></script>

    <script type="text/javascript">
        CKEDITOR.config.height = 1000;
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "<?php echo e(route('blog-add', ['_token' => csrf_token()])); ?>",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script>
        function askBefore() {
            new swal({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'C\'est fini'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('blog-update').submit();
                }
            })
        }

        function askBeforeApprove(id) {
            new swal({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'C\'est fini'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/admin/blogs/approve/" + id;
                }
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/mains-admin/blogs/blog-show.blade.php ENDPATH**/ ?>