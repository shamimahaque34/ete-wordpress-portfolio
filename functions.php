<?php

add_theme_support('title-tag');

function add_css_js(){
    wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array(),'1.0.0','all');

    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0.0','all');

    wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/fontawesome-all.min.css',array(),'1.0.0','all');

    wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.min.css',array(),'1.0.0','all');

    wp_enqueue_style('theme',get_template_directory_uri().'/css/owl.theme.min.css',array(),'1.0.0','all');

    wp_enqueue_style('transitions',get_template_directory_uri().'/css/owl.transitions.min.css',array(),'1.0.0','all');

    wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.0.0','all');


    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'1.0.0',true);

    wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js',array('jquery'),'1.0.0',true);

    wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),'1.0.0',true);

    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('typed',get_template_directory_uri().'/js/typed.min.js',array('jquery'),'1.0.0',true);






}

add_action('wp_enqueue_scripts','add_css_js');


