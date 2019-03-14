<?php
/**
 * @package WP Custom Admin Pages
*/
 
/*
Plugin Name: WP Custom Admin Pages
Plugin URI: 
Description: 
Version: 0.0.1
Author: 
Author URI: 
License: GPLv2 or later
Text Domain: wphacks-custom-admin-pages
*/

if ( ! function_exists('wphacks_register_cpt_admin_pages') ) {

// Register Custom Post Type
function wphacks_register_cpt_admin_pages() {

	$labels = array(
		'name'                  => _x( 'Pages', 'Post Type General Name', 'wphacks-custom-admin-pages' ),
		'singular_name'         => _x( 'Page', 'Post Type Singular Name', 'wphacks-custom-admin-pages' ),
		'menu_name'             => __( 'Pages', 'wphacks-custom-admin-pages' ),
		'name_admin_bar'        => __( 'Page', 'wphacks-custom-admin-pages' ),
		'archives'              => __( 'Page Archives', 'wphacks-custom-admin-pages' ),
		'attributes'            => __( 'Page Attributes', 'wphacks-custom-admin-pages' ),
		'parent_item_colon'     => __( 'Parent Page', 'wphacks-custom-admin-pages' ),
		'all_items'             => __( 'All Pages', 'wphacks-custom-admin-pages' ),
		'add_new_item'          => __( 'Add Page', 'wphacks-custom-admin-pages' ),
		'add_new'               => __( 'Add Page', 'wphacks-custom-admin-pages' ),
		'new_item'              => __( 'New Page', 'wphacks-custom-admin-pages' ),
		'edit_item'             => __( 'Edit Page', 'wphacks-custom-admin-pages' ),
		'update_item'           => __( 'Update Page', 'wphacks-custom-admin-pages' ),
		'view_item'             => __( 'View Page', 'wphacks-custom-admin-pages' ),
		'view_items'            => __( 'View Pages', 'wphacks-custom-admin-pages' ),
		'search_items'          => __( 'Search Pages', 'wphacks-custom-admin-pages' ),
		'not_found'             => __( 'Not found', 'wphacks-custom-admin-pages' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wphacks-custom-admin-pages' ),
		'featured_image'        => __( 'Featured Image', 'wphacks-custom-admin-pages' ),
		'set_featured_image'    => __( 'Set featured image', 'wphacks-custom-admin-pages' ),
		'remove_featured_image' => __( 'Remove featured image', 'wphacks-custom-admin-pages' ),
		'use_featured_image'    => __( 'Use as featured image', 'wphacks-custom-admin-pages' ),
		'insert_into_item'      => __( 'Insert into item', 'wphacks-custom-admin-pages' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Page', 'wphacks-custom-admin-pages' ),
		'items_list'            => __( 'List of All Pages', 'wphacks-custom-admin-pages' ),
		'items_list_navigation' => __( 'Pages list navigation', 'wphacks-custom-admin-pages' ),
		'filter_items_list'     => __( 'Filter Pages', 'wphacks-custom-admin-pages' ),
	);
	$args = array(
		'label'                 => __( 'Page', 'Pages' ),
		'description'           => __( 'Post Type Description', 'wphacks-custom-admin-pages' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', 'excerpt', 'revisions' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 80,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'admin_page', $args );

}
add_action( 'init', 'wphacks_register_cpt_admin_pages', 0 );
}


if ( ! function_exists( 'register_trip_taxonomy_admin_menu_heading' ) ) {

// Register Custom Taxonomy
function register_trip_taxonomy_admin_menu_heading() {

	$labels = array(
		'name'                       => _x( 'Menu Heading', 'Taxonomy General Name', 'wphacks-trips' ),
		'singular_name'              => _x( 'Menu Heading', 'Taxonomy Singular Name', 'wphacks-trips' ),
		'menu_name'                  => __( 'Menu Heading', 'wphacks-trips' ),
		'all_items'                  => __( 'All Menu Heading', 'wphacks-trips' ),
		'parent_item'                => __( 'Parent Menu Heading', 'wphacks-trips' ),
		'parent_item_colon'          => __( 'Parent Menu Heading:', 'wphacks-trips' ),
		'new_item_name'              => __( 'New Menu Heading Name', 'wphacks-trips' ),
		'add_new_item'               => __( 'Add New Menu Heading', 'wphacks-trips' ),
		'edit_item'                  => __( 'Edit Menu Heading', 'wphacks-trips' ),
		'update_item'                => __( 'Update Menu Heading', 'wphacks-trips' ),
		'view_item'                  => __( 'View Menu Heading', 'wphacks-trips' ),
		'separate_items_with_commas' => __( 'Separate Menu Heading with commas', 'wphacks-trips' ),
		'add_or_remove_items'        => __( 'Add or remove Menu Heading', 'wphacks-trips' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wphacks-trips' ),
		'popular_items'              => __( 'Popular Menu Heading', 'wphacks-trips' ),
		'search_items'               => __( 'Search Menu Heading', 'wphacks-trips' ),
		'not_found'                  => __( 'Not Found', 'wphacks-trips' ),
		'no_terms'                   => __( 'No Menu Heading', 'wphacks-trips' ),
		'items_list'                 => __( 'Menu Heading list', 'wphacks-trips' ),
		'items_list_navigation'      => __( 'Menu Heading list navigation', 'wphacks-trips' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'admin_menu_heading', array( 'admin_page' ), $args );

}
add_action( 'init', 'register_trip_taxonomy_admin_menu_heading', 0 );

}

add_action( 'admin_menu', 'wphacks_add_admin_menu_headings_and_pages_to_admin_menu' );
function wphacks_add_admin_menu_headings_and_pages_to_admin_menu(){
	$admin_menu_heading_args = array(
	
	);
	$headings = get_terms( array( 'taxonomy' => 'admin_menu_heading', 'hide_empty' => true, 'fields' => 'all' ) );
	//echo '<pre style="margin-left:200px;">'. print_r($headings,true) .'</pre>';
	
	foreach( $headings as $heading ){
		add_menu_page( $heading->name, $heading->name, 'read', $heading->slug, 'wphacks_display_admin_menu_page');
	
	
	$admin_menu_pages_args = array(
		'post_type' 		=> 'admin_page',
		'post_status'		=> 'publish',
		'tax_query'			=> array(
			array(
				'taxonomy' => 'admin_menu_heading',
				'field' => 'term_id',
				'terms' => $heading->term_id
			)
		)
	);
	
	$pages = get_posts( $admin_menu_pages_args);
	//echo '<pre style="margin-left:200px;">'. print_r($pages,true) .'</pre>';
		foreach( $pages as $page ){
			add_submenu_page( $heading->slug, $page->post_title, $page->post_title, 'read', 'admin_page_'. $page->post_name, 'wphacks_display_admin_menu_page' );

		}
	
	}
	
}

function wphacks_display_admin_menu_page(){
	$posts = get_posts( 
		array( 
			'post_status' 		=> 'publish',
			'name' 				=> str_replace('admin_page_', '', $_GET['page'] ),
			'posts_per_page'	=> 1,
			'post_type'			=> 'admin_page',
			'fields'			=> 'admin_page',
		) 
	);
	foreach ( $posts as $post ){
	setup_postdata( $post );

	echo '<h1>'. $post->post_title .'</h1>';
	echo apply_filters( 'the_content', $post->post_content );
	}
	wp_reset_postdata();
}

?>