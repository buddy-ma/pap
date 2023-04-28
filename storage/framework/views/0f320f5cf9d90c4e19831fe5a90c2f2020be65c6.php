<div class="articlesHub__menu">
    <div class="articlesHub__menu__container text-center">
        <div class="articlesHub__menu__content">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a onclick="tags('<?php echo e($tag); ?>')" data-slug="acheter"
                    class="articlesHub__menu__item"><?php echo e($tag); ?><span class="caretForSmallMenu"><i
                            class="fa fa-caret-down"></i></span></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="articlesHub__menu__content-border"></div>
        </div>
    </div>
</div>
<div class="articlesHub__articles-header" style="background: rgb(225, 25, 111);">
    <div class="articlesHub__articles-header__content">
        <h1>Acheter</h1>
        <div class="metaDescription">Vous voulez acheter un bien immobilier&nbsp;? Nous vous donnons
            tous les bons conseils pour ne rien oublier, de l’offre d’achat au financement, pour votre
            résidence principale, secondaire, ou votre investissement locatif.</div>
    </div>
</div>
<?php /**PATH C:\Users\ayman\Desktop\Project\pap\resources\views/landing/conseils/tags.blade.php ENDPATH**/ ?>