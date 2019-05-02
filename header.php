<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134986714-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134986714-1');
    </script>
    <!-- Chatra {literal} -->
    <script>
        (function(d, w, c) {
            w.ChatraID = 'zmGZTCH6sGLxQgAoe';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
    <!-- /Chatra {/literal} -->
</head>

<body <?php body_class(); ?>>

<header class="header-nav nav-down">
    <div class="bg-white container position-relative d-flex align-items-center justify-content-between flex-wrap flex-lg-nowrap">
        <a href="<?php echo home_url('/'); ?>"><img class="logotype" src="<?php the_field('theme_logo', 'option'); ?>" alt="Simplify logo"/></a>
        <div class="header-nav__menu">
            <nav class="nav-bar">
                <input type="checkbox" id="drop-down-cbox"/>
                <label for="drop-down-cbox">
                    <div class="mob-menu-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </label>
                <?php
                wp_nav_menu([
                    'menu' => 'Primary Navigation',
                    'theme_location' => 'primary_navigation',
                    'container' => '',
                    'menu_class' => 'main-nav small-caps d-flex align-items-start justify-content-lg-around m-0',
                ]);
                ?>
                <div class="header-nav__language d-block d-lg-none">
                    <a class="active" href="#ukr"><span>ukr</span></a>
                    <a href="#eng"><span>eng</span></a>
                </div>
            </nav>
        </div>
        <div class="header-nav__language d-lg-block d-none">
            <?php do_action('wpml_add_language_selector'); ?>
<!--            <a class="active" href="#ukr"><span>ukr</span></a>-->
<!--            <a href="#eng"><span>eng</span></a>-->
        </div>
    </div>
</header>
<div style="padding-bottom: 70px;"></div>