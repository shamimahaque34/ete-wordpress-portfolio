<?php

/* function slider_post(){

	$args = array(

		'label'=>'Sliders',
		'public'=>true,
		'menu_position'=>10,
		'supports'=>array('title','editor','thumbnail','excerpt'),
	);
	register_post_type('slider',$args);
}
add_action('init','slider_post'); */



function slider_post() {
	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Slider', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Slider', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Slider', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Slider', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Slider', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Sliders', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Sliders', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Sliders found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post' );


//Team Custom post type

add_action( 'init', 'team_post_type' );

function team_post_type() {
	$labels = array(
		'name'               => _x( 'Teams', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Team', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Teams', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Team', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Team', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Team', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Team', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Team', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Teams', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Teams', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Teams:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Teams found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Teams found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'team', $args );
}









