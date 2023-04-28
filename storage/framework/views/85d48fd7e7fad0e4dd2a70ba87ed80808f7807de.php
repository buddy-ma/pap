<?php $__env->startSection('title', 'Particulier a particulier'); ?>
<?php $__env->startSection('logo', 'red'); ?>
<?php $__env->startSection('bodyClasses', 'conseils homepage-3 the-search'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/colors/red.css')); ?>">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style>
        .tags {
            background: #555 !important;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 30px;
        }

        .articlesHub__menu {
            color: #495960;
            text-align: center;
            width: 100%;
            height: 50px;
            top: 70px;
            left: 0;
            background: #fff;
        }

        .articlesHub__menu__container {
            padding: 0 20px;
            margin: auto;
            text-align: left;
            width: 100%;
        }

        .articlesHub__menu__content {
            display: inline-block;
            white-space: nowrap;
            position: relative;
        }

        .articlesHub__menu__item.selected {
            border-width: 5px;
            border-color: rgb(225, 25, 111);
            color: rgb(225, 25, 111);
        }

        .articlesHub__menu__item:focus,
        .articlesHub__menu__item:hover,
        .articlesHub__menu__item:visited {
            color: #495960;
            text-decoration: none;
        }

        .articlesHub__menu__item {
            padding: 0 20px;
            height: 50px;
            line-height: 60px;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            color: #495960;
            cursor: pointer;
            -webkit-transition: border-width .2s;
            -moz-transition: border-width .2s;
            -o-transition: border-width .2s;
            -ms-transition: border-width ease .2s;
            transition: border-width .2s;
            border-bottom: 0 solid #495960;
        }

        .articlesHub__menu__item i.fa {
            font-size: 18px;
        }

        .caretForSmallMenu,
        .textForSmallMenu {
            display: none;
        }

        .articlesHub__menu__item i.fa {
            font-size: 18px;
        }

        .articlesHub__articles-header {
            font-size: 18px;
            margin-top: 50px;
            display: block;
            line-height: 30px;
            background: #495960;
            overflow: hidden;
            -webkit-transition: background .5s, -webkit-transform .5s, opacity .5s;
            -moz-transition: background .5s, -moz-transform .5s, opacity .5s;
            -o-transition: background .5s, -o-transform .5s, opacity .5s;
            -ms-transition: background ease .5s, -ms-transform ease .5s, opacity ease .5s;
            transition: background .5s, transform .5s, opacity .5s;
        }

        .articlesHub__articles-header .articlesHub__articles-header__content {
            max-width: 1080px;
            padding: 40px 20px;
            margin: auto;
            color: #fff;
        }

        .articlesHub__articles-header .articlesHub__articles-header__content h1 {
            font-size: 45px;
            line-height: 50px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .articlesHub__articles-header .articlesHub__articles-header__content .metaDescription {
            font-size: 20px;
            line-height: 30px;
        }

        @media  screen and (max-width: 600px) {
            .articlesHub__menu__container {
                max-width: 1080px;
                padding: 0 20px;
                margin: auto;
                text-align: left;
                width: 100%;
                overflow-x: auto;
            }

            .articlesHub__menu.smallMenuEnabled {
                height: auto;
            }

            .articlesHub__menu__container {
                padding: 0 10px;
            }

            .articlesHub__menu.smallMenuEnabled .articlesHub__menu__content {
                position: relative;
                border-width: 0;
                display: block;
                white-space: nowrap;
            }

            .articlesHub__menu.smallMenuEnabled .articlesHub__menu__item.selected {
                height: 50px;
                opacity: 1;
                -ms-filter: none;
                filter: none;
                border-width: 5px;
            }

            .articlesHub__menu.smallMenuEnabled .articlesHub__menu__item {
                -webkit-transition: height .3s, opacity .3s;
                -moz-transition: height .3s, opacity .3s;
                -o-transition: height .3s, opacity .3s;
                -ms-transition: height ease .3s, opacity ease .3s;
                transition: height .3s, opacity .3s;
                height: 0;
                opacity: 0;
                overflow: hidden;
                line-height: 50px;
                display: block;
                padding: 0;
                border-bottom: 0 solid #495960;
            }

            .articlesHub__menu.smallMenuEnabled .iconForBigMenu {
                display: none;
            }

            .articlesHub__menu.smallMenuEnabled .textForSmallMenu {
                display: inline-block;
            }

            .articlesHub__menu.smallMenuEnabled .articlesHub__menu__item.selected .caretForSmallMenu {
                opacity: 1;
                -ms-filter: none;
                filter: none;
            }

            .articlesHub__menu.smallMenuEnabled .articlesHub__menu__item .caretForSmallMenu {
                display: inline-block;
                opacity: 0;
                -webkit-transition: .3s;
                -moz-transition: .3s;
                -o-transition: .3s;
                -ms-transition: all ease .3s;
                transition: .3s;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    
    
    

    <?php echo $__env->make('landing.conseils.filterTags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function tags($t) {
            console.log($t);
            $('#search').val($t);
            $('#decouvrezMaroc').submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/conseils.blade.php ENDPATH**/ ?>