<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Register Nav Menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'VCWP' ),
    'footer-column-1' => __( 'Footer Column 1 Menu', 'VCWP' ),
    'footer-column-2' => __( 'Footer Column 2 Menu', 'VCWP' ),
) );

// Load JavaScript and CSS
function vcwp_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, false);

	wp_enqueue_script( 'fontawesome-js' , 'https://kit.fontawesome.com/0c96efb8e0.js' , array('jquery'), null, false);
    }
    add_action('wp_enqueue_scripts', 'vcwp_enqueue_scripts');

function vcwp_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' , false, null, 'all' );
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/style.css', false, null, 'screen, print');
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Open+Sans:300,400,600,700,800', false, 'all' );
    }
    add_action('wp_enqueue_scripts', 'vcwp_enqueue_styles');

function bootstrap_responsive_images( $html ){
    $classes = 'img-fluid'; // separated by spaces, e.g. 'img image-link'
    // check if there are already classes assigned to the anchor
    if ( preg_match('/<img.*? class="/', $html) ) {
        $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
    } else {
        $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
    }
    // remove dimensions from images,, does not need it!
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );
