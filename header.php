<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- injects various content (scripts, stylesheets & more) into the head section -->
    <?php wp_head(); ?>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div class="container">
                <div class="row">

                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                    </div>

                    <div class="col-sm-6 hidden-xs">
                        <?php get_search_form(); ?>
                    </div>

                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="mobile-search">
            <?php get_search_form(); ?>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">

                    <!-- Displays the navigation menu -->
                    <div class="col-xs-12">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'menu',
                            'container' => 'true',
                        )); ?>
                    </div>

                </div>
            </div>
        </nav>