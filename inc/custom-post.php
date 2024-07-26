<?php

/* function slider_post(){

	$args = array(

		'label'=>'Sliders',
		'public'=>true,
		'menu_position'=>10,// 5 means 1 no position a thakbe,10 means 2 no position a thakbe,15 means 3 no position a thakbe . post ar por theke count hobe
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
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'your-plugin-textdomain' ),//Dashboard a + icon a gale ki name show korbe seita.
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
		'menu_position'      => null,//null ar poribotte 5,10 diye post ar pore kon position a show korbe dakha jabe
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post' );















