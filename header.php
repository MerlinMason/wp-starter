<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

    <!-- Meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>

    <meta name="description" content="">

    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicons/logo-icon-32x32.png">

    <!-- New iOS7 Sizes -->
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/favicons/logo-icon-76x76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/favicons/logo-icon-120x120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/favicons/logo-icon-152x152.png" sizes="152x152">

    <!-- Metro Tiles -->
    <meta name="msapplication-TileColor" content="#d25353">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/favicons/logo-icon-152x152.png">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="container">

    <header class="page-header">
        <h1 class="sitename">
            <a href="<?php echo home_url('/'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </h1>

        <nav class="menu">
            <?php wp_nav_menu( array('container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
        </nav>
    </header>
