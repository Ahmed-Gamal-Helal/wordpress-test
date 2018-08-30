<?php

    require_once('wp-bootstrap-navwalker.php');
    

    // Styles
    function adding_styles() {
        wp_enqueue_style('bootstrap-v4-css', get_template_directory_uri() . '/css/bootstrap-v4.min.css');
        wp_enqueue_style('bootstrap-v4-rtl-css', get_template_directory_uri() . '/css/bootstrap-v4-rtl.min.css');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome-all.css');
        wp_enqueue_style('hover', get_template_directory_uri() . '/css/hover-min.css');
        wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
        wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
        wp_enqueue_style('coco-font', get_template_directory_uri() . '/fonts/coco/stylesheet.css');
        wp_enqueue_style('flat-icon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css');
    }

    // Scripts
    function adding_scripts() {
        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-v4-js', get_template_directory_uri() . '/js/bootstrap-v4.min.js', array('jquery'), false, true);
    }

    // Custom Menu
    function custom_menu() {
        register_nav_menus(array(
            'bootstrap-menu' => 'Navigation Bar',
            'footer-menu' => 'Footer Bar'
        ));
    }

    // Bootstrap Menu
    function bootstrap_nav_menu() {
        wp_nav_menu(array(
            'theme_location'     => 'bootstrap-menu',
            'menu_class'         => 'nav navbar-nav',
            'container'          => false,
            'walker'             => new wp_bootstrap_navwalker(),
            'fallback_cb'        => false,
            'container_class'    => 'collapse navbar-collapse',
            'container_id'       => 'collapse-1'
        ));
    }


    add_action('wp_enqueue_scripts', 'adding_styles');
    add_action('wp_enqueue_scripts', 'adding_scripts');
    add_action('init', 'custom_menu');
