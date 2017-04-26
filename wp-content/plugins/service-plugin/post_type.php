<?php
add_action( 'init', 'codex_Service_init' );

function codex_Service_init() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'service-plugin' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'service-plugin' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'service-plugin' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'service-plugin' ),
		'add_new'            => _x( 'Add New', 'Service', 'service-plugin' ),
		'add_new_item'       => __( 'Add New Service', 'service-plugin' ),
		'new_item'           => __( 'New Service', 'service-plugin' ),
		'edit_item'          => __( 'Edit Service', 'service-plugin' ),
		'view_item'          => __( 'View Service', 'service-plugin' ),
		'all_items'          => __( 'All Services', 'service-plugin' ),
		'search_items'       => __( 'Search Services', 'service-plugin' ),
		'parent_item_colon'  => __( 'Parent Services:', 'service-plugin' ),
		'not_found'          => __( 'No Services found.', 'service-plugin' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'service-plugin' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'service-plugin' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_position'         => 5,
		'menu_icon'             =>'dashicons-paperclip',
		'rewrite'            => array( 'slug' => 'service_plugins' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'service_plugins', $args );
}
function wwp_add_submenu_page(){
	add_submenu_page( 
		   'edit.php?post_type=service_plugins',
		   'Reorder services',
		   'Reorder services', 
		   'manage_options', 
		   'reoeder_jobs', 
		   'add_submenu_page_callable' );
}
add_action('admin_menu','wwp_add_submenu_page');