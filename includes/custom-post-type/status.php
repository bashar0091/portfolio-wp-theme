<?php

// Portfolio Custom Post Type
function status_post_type() {

	$labels = array(
		'name'                  => _x( 'Status', 'Post Type General Name', 'bashar-portfolio' ),
		'singular_name'         => _x( 'Status', 'Post Type Singular Name', 'bashar-portfolio' ),
		'menu_name'             => __( 'Status', 'bashar-portfolio' ),
		'name_admin_bar'        => __( 'Status', 'bashar-portfolio' ),
		'archives'              => __( 'Item Archives', 'bashar-portfolio' ),
		'attributes'            => __( 'Item Attributes', 'bashar-portfolio' ),
		'all_items'             => __( 'All Items', 'bashar-portfolio' ),
		'add_new_item'          => __( 'Add New Item', 'bashar-portfolio' ),
	);
	$args = array(
		'label'                 => __( 'Status', 'bashar-portfolio' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 55,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Status', $args );

}
add_action( 'init', 'status_post_type', 0 );
