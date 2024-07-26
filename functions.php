<?php



require_once get_template_directory() . '/inc/custom-post.php';


add_theme_support('title-tag');

add_theme_support('custom-header');

register_nav_menus(array(

	'header_menu'=>'This is our Header Menu',
	'footer_menu'=>'This is our Fotter Menu',

));




/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



function add_css_js(){
    wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array(),'1.0.0','all');

    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0.0','all');

    wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/fontawesome-all.min.css',array(),'1.0.0','all');

    wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.min.css',array(),'1.0.0','all');

    wp_enqueue_style('theme',get_template_directory_uri().'/css/owl.theme.min.css',array(),'1.0.0','all');

    wp_enqueue_style('transitions',get_template_directory_uri().'/css/owl.transitions.min.css',array(),'1.0.0','all');

    wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.0.0','all');


    // wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.3.1.slim.min.js',array(),'1.0.0',true);
    // wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js',array(),'1.0.0',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'1.0.0',true);

    // wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js',array('jquery'),'1.0.0',true);

    wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),'1.0.0',true);

    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('typed',get_template_directory_uri().'/js/typed.min.js',array('jquery'),'1.0.0',true);






}

add_action('wp_enqueue_scripts','add_css_js');


function load_js(){ ?>

    <script type="text/javascript">
//Testimonial JS Starts Here
jQuery(document).ready(function(){
   jQuery("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        slideSpeed:1000,
        singleItem:true,
        transitionStyle:"goDown",
        navigationText:["",""],
        autoPlay:false
    });
}); 
//Testimonial JS Ends Here



//Preloader JS Starts Here
var preloader = document.getElementById('loading');

function myFunction() {
    preloader.style.display = 'none';
}
//Preloader JS Ends Here

 


//Custom Type JS Starts Here
var typed = new Typed(".type", {
            strings: [

                "Web Design?",
                "Web Development?",
                "A WordPress Website?",
                "eCommerce Solution?",
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true

        });

//Custom Type JS Ends Here


        
		</script>
		<?php
}
add_action('wp_footer','load_js',100);


