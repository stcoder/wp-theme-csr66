<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php
        wp_title( ':', true, 'right' );
        bloginfo( 'name' );
    ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <?php echo wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js') ?>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
</head>

<body>

<div class="container">
    <div class="row-fluid header">
        <div class="span8">
            <div class="logo">
                <?php if (!is_home()): ?>
                    <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" class="media-object pull-left" alt="<?php bloginfo('name') ?>"></a>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" class="media-object pull-left" alt="<?php bloginfo('name') ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="span4">
            <ul class="contact-widget pull-right">
                <li><i class="icon_contact-telephone"></i><?php dynamic_sidebar('header-contact-telephone-widget-area') ?></li>
                <li><i class="icon_contact-map-point"></i><?php dynamic_sidebar('header-contact-map-widget-area') ?></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navigation')) ?>
        <div class="navigation-shadow"></div>
    </div>