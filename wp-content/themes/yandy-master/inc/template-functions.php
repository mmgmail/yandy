<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package yandy-master
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function yandy_master_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'yandy_master_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function yandy_master_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'yandy_master_pingback_header' );

	
if ( ! function_exists( 'red_book_cp' ) ) {
 
// Опишем требуемый функционал
    function red_book_cp() {
 
        $labels = array(
            'name'                => _x( 'Spirit-Blog', 'Post Type General Name', 'red_book' ),
            'singular_name'       => _x( 'Spirit-Blog', 'Post Type Singular Name', 'red_book' ),
            'menu_name'           => __( 'Spirit-Blog', 'red_book' ),
            'parent_item_colon'   => __( 'Parental:', 'red_book' ),
            'all_items'           => __( 'All posts', 'red_book' ),
            'view_item'           => __( 'View', 'red_book' ),
            'add_new_item'        => __( 'Add post to Spirit-blog', 'red_book' ),
            'add_new'             => __( 'Add new', 'red_book' ),
            'edit_item'           => __( 'Edit entry', 'red_book' ),
            'update_item'         => __( 'Update Record', 'red_book' ),
            'search_items'        => __( 'Find a record', 'red_book' ),
            'not_found'           => __( 'Not found', 'red_book' ),
            'not_found_in_trash'  => __( 'Not found in cart', 'red_book' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
            'taxonomies'          => array( 'red_book_tax' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-book',
        );
        register_post_type( 'red_book', $args );
 
    }
 
    add_action( 'init', 'red_book_cp', 0 ); // инициализируем
 
}

/*
if ( ! function_exists( 'red_book_tax' ) ) {
 
// Опишем требуемый функционал
    function red_book_tax() {
 
        $labels = array(
            'name'                       => _x( 'Category spirit-blog', 'Taxonomy General Name', 'red_book' ),
            'singular_name'              => _x( 'Category Spirit-blog', 'Taxonomy Singular Name', 'red_book' ),
            'menu_name'                  => __( 'Category', 'red_book' ),
            'all_items'                  => __( 'Category', 'red_book' ),
            'parent_item'                => __( 'Parent category Spirit-blog', 'red_book' ),
            'parent_item_colon'          => __( 'Parent category Spirit-blog:', 'red_book' ),
            'new_item_name'              => __( 'New Category', 'red_book' ),
            'add_new_item'               => __( 'Add new category', 'red_book' ),
            'edit_item'                  => __( 'Edit category', 'red_book' ),
            'update_item'                => __( 'Update category', 'red_book' ),
            'search_items'               => __( 'Fiend', 'red_book' ),
            'add_or_remove_items'        => __( 'Add or delete category', 'red_book' ),
            'choose_from_most_used'      => __( 'Search among popular', 'red_book' ),
            'not_found'                  => __( 'Not found', 'red_book' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
        );
        register_taxonomy( 'red_book_tax', array( 'red_book' ), $args );
 
    }
 
    add_action( 'init', 'red_book_tax', 0 ); // инициализируем
 
}