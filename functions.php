<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */

// require file 
require_once('includes/custom-post-type/cpt.php');

function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	// custom style 
	wp_enqueue_style( 'font-awesome-theme', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
	wp_enqueue_style( 'theme-custom', get_stylesheet_directory_uri() . '/assets/css/style.css' );

	// custom js 
	wp_enqueue_script( 'custom-app', get_stylesheet_directory_uri( __FILE__ ) . '/assets/js/app.js',  array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );