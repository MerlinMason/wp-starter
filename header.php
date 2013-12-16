<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>

    <meta name="description" content="">

    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">

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
