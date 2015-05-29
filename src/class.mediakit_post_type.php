<?php

/**
 * Custom Post Type for Media Kit
 *
 * Dependencies and hooked functions for creating the CPT.
 *
 * @link  http://www.chriswgerber.com/
 * @since 1.0.0
 *
 * @package    WordPress
 * @subpackage EPG-Media-Kit
 */

Class Mediakit_Post_Type {

	/**
	 * @since  1.0.0
	 * @access public
	 *
	 * @var string
	 */
	public $post_type_name;

	/**
	 * @since  1.0.0
	 * @access public
	 *
	 * @var string
	 */
	public $post_type_slug = 'epg_creative';

	public function register_post_type() {
		$labels = array(
			'name'                => _x( 'Creative Units', 'Post Type General Name', 'epgmk' ),
			'singular_name'       => _x( $this->post_type_name, 'Post Type Singular Name', 'epgmk' ),
			'menu_name'           => __( $this->post_type_name, 'epgmk' ),
			'name_admin_bar'      => __( 'Creative Units', 'epgmk' ),
			'parent_item_colon'   => __( 'Parent Creative Unit:', 'epgmk' ),
			'all_items'           => __( 'All Creative Units', 'epgmk' ),
			'add_new_item'        => __( 'Add Creative Unit', 'epgmk' ),
			'add_new'             => __( 'Add Creative Unit', 'epgmk' ),
			'new_item'            => __( 'New Creative Unit', 'epgmk' ),
			'edit_item'           => __( 'Edit Creative Unit', 'epgmk' ),
			'update_item'         => __( 'Update Creative Unit', 'epgmk' ),
			'view_item'           => __( 'View Creative Unit', 'epgmk' ),
			'search_items'        => __( 'Search Creative Unit', 'epgmk' ),
			'not_found'           => __( 'Not found', 'epgmk' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'epgmk' ),
		);
		$args = array(
			'label'               => __( $this->post_type_slug, 'epgmk' ),
			'description'         => __( 'Creative units for EPG Media sites', 'epgmk' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-id-alt',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);

		register_post_type( $this->post_type_slug, $args );
	}

}
