<?php wp_head(); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.css">
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="navigation">
            <nav class="navbar navbar-expand-md">
                <div class="header_logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
                        <img src="<?php the_field('scrolled_logo', 'option'); ?>" style="display: none;" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_id' => 'menu',
                        'order' => 'ASC',
                        'menu_class' => 'navbar-nav'
                    ));
                    ?>
                </div>
                <div class="search_area">
                    <div class="search_box">
                        <input type="text" placeholder="type for search">
                        <button><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
                    </div>
                </div>
            </nav>
        </div>
    </header>