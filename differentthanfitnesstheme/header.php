<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
        <?php wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body id="body">
    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!--BELOW IS AN EXAMPLE USING THE BOOTSTRAP NAVWALKER MENU: wp_bootstrap_navwalker.php-->
    <div id="all-headings" class="content-page-heading-wrapper">
        <div class="large-banner-wrapper">
            <div id="sticky-nav-wrapper" class="navbar-fixed-top">
                <div id="black-banner-section">
                    <a href="/"><img src="/wp-content/themes/differentthanfitnesstheme/images/DT-logo-3.png" class="img-responsive dtf-logo" id="dtf-logo-contentpage-id" alt="Different Than Fitness - Nashville TN" /></a>
                    <h2 id="dtf-heading-text">DIFFERENT THAN FITNESS</h2>
                </div>
              <header class="navbar navbar-default bs-docs-nav" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                            <?php
                                if(has_nav_menu('main-menu')){
                                    wp_nav_menu(array(
                                        'theme_location'  => 'main-menu',
                                        'container'       => false, 
                                        'menu_class'      => 'nav navbar-nav', 
                                        'menu_id'         => 'main-menu',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'depth'           => 0,
                                        'walker'          => new wp_bootstrap_navwalker()
                                    ));
                                }
                            ?>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
    </div>