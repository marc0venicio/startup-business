<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <?php wp_head();?>
        <meta <?php bloginfo('charset'); ?>>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Overlord intellectus </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/slicknav.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/flaticon.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/animate.min.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/themify-icons.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/slick.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/nice-select.css">
            <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
            <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

   </head>
   <body>
    <!-- Preloader Start -->
    <!--<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php bloginfo('template_url');?>/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>-->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header_area header-transparent">
            <div class="main-header">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><img src="<?php bloginfo('template_url');?>/img/logo/logo.png" alt="" width = "170px" height="70px"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <!--
                                    <nav> 
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">Empresa</a></li>
                                            <li><a href="services.html">Serviços</a></li>
                                            <li><a href="work.html">portfólio</a></li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contato</a></li>
                                        </ul>
                                    </nav>
                                    -->
                                    <nav class="navbar navbar-expand-lg rounded" role="navigation">
                                        <div class="container">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon theme-bg"></span>
                                        </button>
                                            <?php
                                            wp_nav_menu( array(
                                                'theme_location'    => 'principal',
                                                'depth'             => 2,
                                                'container'         => 'div',
                                                'container_class'   => 'collapse navbar-collapse',
                                                'container_id'      => 'bs-example-navbar-collapse-1',
                                                'menu_class'        => 'nav navbar-nav',
                                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                'walker'            => new WP_Bootstrap_Navwalker(),
                                            ) );
                                            ?>
                                        </div>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">Ligue-nos agora</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->