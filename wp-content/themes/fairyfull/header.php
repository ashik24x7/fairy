<!doctype html>
<html class="no-js" <?php language_attributes('html'); ?>>
    <head>
        <meta <?php bloginfo('charset'); ?>>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo wp_get_document_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
        <div class="wrapper">

            <!-- Top header start -->
            <div class="top_header_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
            <!-- Top header end -->

            <!-- Main header start -->
            <div class="main_header_area">
                <div class="container">
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri() ?>/img/important/logo.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Main header end -->

            <!-- Start Menu -->
            <div class="menu_area">
                <div class="container">
                    <div class="row">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location'  => 'main_menu',
                                'menu_id'         => 'nav',
                                'fallback_cb'     => 'fairy_default_menu'
                            )); 
                        ?>
                    </div>
                </div>
            </div>