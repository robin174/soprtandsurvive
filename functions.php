<?php
/**
* sortandsurvive functions and definitions
* @link https://developer.wordpress.org/themes/basics/theme-functions/
* @package sortandsurvive
*/

/* TODO: cross-reference with SmilePl and Foundation. */
/* Set container width here? */

/* Store the theme's directory path and uri in constants */
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());


/* Timestamp css files (works on js too):
https://www.youtube.com/watch?v=kHp_yz3_6rI */

/* Enqueue styles and scripts */
function sortandsurvive_scripts() {

    // load Bootstrap CSS v5.1
    wp_enqueue_style( 'sortandsurvive-bootstrap-css', THEME_DIR_URI . '/includes/css/bootstrap.min.css');

    // load website CSS, versioned
    wp_enqueue_style( 'sortandsurvive-css', THEME_DIR_URI . '/assets/css/style.css', [], filemtime( get_stylesheet_directory() . '/assets/css/style.css') );

	// load Bootstrap JS v5.1
	wp_enqueue_script( 'sortandsurvive-bootstrap-js', THEME_DIR_URI . '/includes/js/bootstrap.min.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'sortandsurvive_scripts' );


/* Add Page Slug to Body Class
------------------------------------------------------------- */
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/* Custom Entry Meta // Code added
------------------------------------------------------------- */
// Return custom entry meta information for posts, used by multiple loops.
function custom_entry_meta() {
  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s', 'reverie'), get_the_time('F Y'), get_the_time()) .'</time>'; 
}

/* Register navigation */
function sortandsurvive_nav() {
    wp_nav_menu( 
        array( 
            'theme_location'    => 'primary',
            'depth'             => 2,
            'menu_id'           => 'primary-menu', 
            'container_class'   => 'ms-auto', 
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback', // check this
            'walker'            => new wp_bootstrap_navwalker(), // check this
        ) 
    );
}

/* Register menus */
if ( ! function_exists( 'sortandsurvive_setup' ) ) :
    function sortandsurvive_setup() {

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'sortandsurvive' ),
        'footer'  => __( 'Footer Menu', 'sortandsurvive' ),
    ) );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    // To make the theme widget aware: https://developer.wordpress.org/themes/functionality/widgets/
}
endif;
add_action( 'after_setup_theme', 'sortandsurvive_setup');

/* Load custom WordPress nav walker */
require_once THEME_DIR_PATH . '/includes/wp-bootstrap-navwalker5.php';