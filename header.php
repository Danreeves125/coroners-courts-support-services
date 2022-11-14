<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108366137-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-108366137-1');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>" /> -->


    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php $template_directory_uri = get_template_directory_uri(); ?>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/dist/app.css">
    <script src="<?= get_stylesheet_directory_uri() ?>/dist/app.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="header__top">
            <p>Call Our National Helpline For Support <a href="#"><?= get_field('helpline_number', 'option') ?></a></p>
        </div>
        <div class="container">
            <a href="<?= get_site_url() ?>" class="header__logo">
                <img src="<?= wp_get_attachment_image_url(get_field('logo', 'option'), '') ?>" alt="">
            </a>

            <div class="header__right">
                <div class="header__cta">
                    <p>Call Our National Helpline For Support <a href="tel:<?= get_field('helpline_number', 'option') ?>"><?= get_field('helpline_number', 'option') ?></a></p>
                </div>

                <div class="header__navigation">
                    <?php
                    $primaryNav = wp_nav_menu(
                        array(
                            'theme_location' => 'main_navigation',
                            'container' => '',
                            'menu_class' => 'header__nav',
                            'menu_id' => '',
                        )
                    );
                    ?>
                    <?= $primaryNav ?>

                    <button class="header__hamburger" aria-label="Open Mobile Menu">
                        <span class="bars">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-overlay" style="opacity: 0;pointer-events: none;"></div>
    <div class="mobile" style="transform: translate3d(-100%, 0, 0);">
        <div class="mobile__inner">
            <div class="mobile__links">
                <li class="mobile__link"><a href="#">Get Support</a></li>
                <li class="mobile__link"><a href="#">Get Involved</a></li>
                <li class="mobile__link"><a href="#">About</a></li>
                <li class="mobile__link"><a href="#">News</a></li>
                <li class="mobile__link"><a href="#">For Practitioners</a></li>
                <li class="mobile__link"><a href="#">Contact Us</a></li>
            </div>
        </div>
    </div>