<div class="articlesHub__menu">
    <div class="articlesHub__menu__container text-center">
        <div class="articlesHub__menu__content">
            <a class="articlesHub__menu__item selected"><i class="fa fa-home"></i>
                <span class="caretForSmallMenu"><i class="fa fa-caret-down"></i></span>
            </a>
            <?php $__currentLoopData = $categoryConseils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryConseil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a data-slug="<?php echo e($categoryConseil->id); ?>" class="articlesHub__menu__item"><?php echo e($categoryConseil->title); ?>

                    <span class="caretForSmallMenu"><i class="fa fa-caret-down"></i></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="articlesHub__menu__content-border"></div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/conseils/tags.blade.php ENDPATH**/ ?>