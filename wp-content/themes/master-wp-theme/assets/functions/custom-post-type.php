<?php

function custom_post_products() { 
	// creating (registering) the custom type 
	register_post_type( 'products', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Products', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Products', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Products', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Product', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Product', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Product', 'jointswp'), /* New Display Title */
			'view_item' => __('View Product', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Product', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Product custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			//'rewrite'	=> array( 'slug' => 'products', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'products', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor',  'thumbnail' )
	 	) /* end of options */
	); /* end of register post type */ 

	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('product_tag', 'products');
} 

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_products');

// now let's add custom tags (these act like categories)
register_taxonomy( 'product_tag', 
	array('products'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */                
		'labels' => array(
			'name' => __( 'Product Tags', 'jointswp' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Product Tag', 'jointswp' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Product Tags', 'jointswp' ), /* search title for taxomony */
			'all_items' => __( 'All Product Tags', 'jointswp' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Product Tag', 'jointswp' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Product Tag:', 'jointswp' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Product Tag', 'jointswp' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Product Tag', 'jointswp' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Product Tag', 'jointswp' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Product Tag Name', 'jointswp' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
); 