<?php
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {
	$plugins = array(

		array(
			'name'               => 'bashar-portfolio-core', 
			'slug'               => 'bashar-portfolio-core',
			'source'             => get_stylesheet_directory() . '/includes/TGM/bashar-portfolio-core.zip',
			'required'           => true, 
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),

		array(
			'name'               => 'elementor', 
			'slug'               => 'elementor',
			'required'           => true, 
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),

		array(
			'name'               => 'contact-form-7', 
			'slug'               => 'contact-form-7',
			'required'           => false, 
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		)
	);

	$config = array(
		'id'           => 'tgmpa',                 
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'parent_slug'  => 'themes.php',            
		'capability'   => 'edit_theme_options',    
		'has_notices'  => true,                   
		'dismissable'  => true,                   
		'dismiss_msg'  => '',                   
		'is_automatic' => false,             
		'message'      => '',                  
	);

	tgmpa( $plugins, $config );
}
