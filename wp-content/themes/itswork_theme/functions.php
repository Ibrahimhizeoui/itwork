<?php
function wdp_myressources_css()
{
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'fmagnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css');
    wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','wdp_myressources_css');

function wdp_myressources_js()
{
	
	
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'creative', get_template_directory_uri() . '/js/creative.min.js', array ( 'jquery' ), 1.1, true);

}

add_action('wp_enqueue_scripts','wdp_myressources_js');
add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );

add_theme_support( 'post-thumbnails' ); 
add_image_size('small_thumbnail',450,243,true);
add_image_size('banner_image',920,210,array( 'left', 'top' ));