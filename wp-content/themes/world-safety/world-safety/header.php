<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package World-Safety
 */

?>
<!doctype html>

<html lang="ru-RU" class="no-js">

<head>
    <title></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicon_package_v0.16/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>





    <!-- ######### CSS STYLES ######### -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome/css/font-awesome.min.css">

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri();?>/css/responsive-leyouts.css" type="text/css" />

    <!-- animations -->
    <link href="<?php echo get_template_directory_uri();?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />


    <!-- menu -->
    <link href="<?php echo get_template_directory_uri();?>/js/mainmenu/sticky.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/js/mainmenu/menu.css">

    <!-- MasterSlider -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/js/masterslider/style/masterslider.css" />
    <link href="<?php echo get_template_directory_uri();?>/js/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>
    <link href='<?php echo get_template_directory_uri();?>/js/masterslider/ms-fullscreen.css' rel='stylesheet' type='text/css'>

    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/js/cubeportfolio/cubeportfolio.min.css">

    <!-- carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/js/carousel/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/js/carousel/skin.css" />

    <!-- progressbar -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/js/progressbar/ui.progress-bar.css">

    <!-- forms -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/js/form/sky-forms.css" type="text/css" media="all">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script async data-id="75499" src="https://cdn.widgetwhats.com/script.min.js"></script>
	<meta name="google-site-verification" content="eBaZIJ_9TRDNA40yuXhgiwmE53ZPoLHpnjlP5eIstps" />
</head>

<body>

<div class="site_wrapper ">

    <div id="header">

        <div id="trueHeader">

            <div class="wrapper">

                <div class="container_full">

                    <header>

                        <!-- Logo -->
                        <div class="logo"><a href="#home" data-scroll><img src="<?php the_field('logo')?>" alt="logo"/></a></div>

                        <!-- Menu -->
                        <div class="menu_main">

                            <nav class="nav-collapse">
                                <ul>
                                    <li><a href="#" name="#popup_1" class="sbutton1 popup-link">Заказать звонок</a></li>
                                    <li><a href="#about" data-scroll><i class="fa fa-circle"></i>О компании</a></li>
                                    <li><a href="#portfolio" data-scroll><i class="fa fa-circle"></i>Портфолио</a></li>
                                    <li><a href="#services" data-scroll><i class="fa fa-circle"></i>Наши услуги</a></li>
                                    <li><a href="#blog" data-scroll><i class="fa fa-circle"></i>Технологии</a></li>
                                    <li><a href="#contact" data-scroll><i class="fa fa-circle"></i>Контакты</a></li>

                                </ul>
                            </nav>

                        </div><!-- end menu -->

                    </header>

                </div>

            </div>

        </div>

    </div>

