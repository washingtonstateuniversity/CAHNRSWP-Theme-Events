<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'CAHNRS_Events_enqueue_front_page_scripts' );

function CAHNRS_Events_enqueue_front_page_scripts() {
    if( is_front_page() )
    {
//	   wp_enqueue_style( 'hslider', get_stylesheet_directory_uri() . '/css/hslider.css', array(), '1.1', 'all');
//	   wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/hslider.js', array ( 'jquery' ), 1.1, true);
	   
	   wp_enqueue_style( 'article-slider', get_stylesheet_directory_uri() . '/css/article-slider.css', array(), '1.1', 'all');
//	   wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/article-slider.js', array ( 'jquery' ), 1.1, true);
	   wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/article-sliderv2.js', array ( 'jquery' ), 1.1, true);
	   
//	   wp_enqueue_style( 'easingslider', get_stylesheet_directory_uri() . '/css/easingslider.css', array(), '1.1', 'all');
//	   wp_enqueue_script( 'myeasingsliderscript', get_stylesheet_directory_uri() . '/js/myeasingslider.js', array ( 'jquery' ), 1.1, true);
//	   wp_enqueue_script( 'easingscript', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array ( 'jquery' ), 1.1, true);
	   
	   
     }
}

/* Add Menu options to theme  */
function register_my_menu() {

   register_nav_menus(
      array(
      'confernce-menu' => __( 'Conference Menu' ),
	   ) 
	 );
}
add_action( 'init', 'register_my_menu' );


/* found at: http://www.wptricks24.com/add-class-li-using-wp_nav_menu/ */
/*
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'slide active-class';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

*/