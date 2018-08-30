<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='pingback' href='<?php bloginfo('pingback_url'); ?>' />
    <title><?php bloginfo('name'); ?></title>
    <!-- for importing files and details -->
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="first-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 auto-margin">
                        <ul class="d-inline">                        
                            <li class="nav-item"><a href="#" class='hvr-pop'><i class="flaticon-google-plus"></i></a></li>
                            <li class="nav-item"><a href="#" class='hvr-pop'><i class="flaticon-instagram"></i></a></li>
                            <li class="nav-item"><a href="#" class='hvr-pop'><i class="flaticon-twitter"></i></a></li>
                            <li class="nav-item"><a href="#" class='hvr-pop'><i class="flaticon-facebook-logo"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 auto-margin">
                        <ul class="head-left d-inline left-side-nav">
                            <li class="nav-item dropdown">
                                <a class="mail-link" href="favorites.php">
                                    <i class="flaticon-envelope"></i>                            
                                    ahmd@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php bootstrap_nav_menu(); ?>
                </div>
            </div>
        </nav>
    </header>



