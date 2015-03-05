<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */

if ( ! isset( $content_width ) ) {
	$content_width = '100%';
}

/**
 * Global function to retrieve the relative child template directory
 */
function get_child_template_directory_uri() {
	return get_stylesheet_directory_uri();
}

/**
 * Remove initial parent theme load scripts function
 */
function remove_fifteen_scripts() {
	remove_action('wp_enqueue_scripts', 'fifteen_scripts');
}
add_action( 'init', 'remove_fifteen_scripts' );


/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_child_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'twentyfifteen-child-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20141212', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );

	// Load javascript libraries (i.e. jQuery, Headroom.js, etc.)

	wp_enqueue_script('javascript-libraries', get_child_template_directory_uri() . '/js/vendor/jquery-1.8.1.min.js', array(), '1.0.0', TRUE);

	// Load custom javascript scripts
	wp_enqueue_script('custom-scripts', get_child_template_directory_uri() . '/js/app.js', array(), '1.0.0', TRUE);
	wp_enqueue_script('custom-scripts', get_child_template_directory_uri() . '/js/map.js', array(), '1.0.0', TRUE);

}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_child_scripts' );

/**
 * enable livereload on localhost
 */
function livereload() {

	if( in_array( $_SERVER[ 'REMOTE_ADDR' ], array( '127.0.0.1', '::1' ))){

		if( gethostname() != 'monarch.local' ){

			wp_register_script( 'livereload', 'http://localhost:35729/livereload.js?snipver=1', NULL, FALSE, TRUE );
			wp_enqueue_script( 'livereload' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'livereload' );
