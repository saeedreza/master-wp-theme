<?php

// Get products by category
function getProductsByCategory($category , $count = -1){
	$post_args = array( 
		'post_type' => 'products', 
		'product_cat' => $category,
		'posts_per_page' => $count
	);
	$wp_query = new WP_Query($post_args);
	return $wp_query;
}

// Get posts by category
function getPostsByCategory($category , $count = -1){
	$post_args = array( 
        'post_type'   => 'post',
        'category_name' => $category,
		'posts_per_page' => $count
	);
	$wp_query = new WP_Query($post_args);
	return $wp_query;
}

// Get featured posts
function getFeaturedPosts($post_type ,$tag_name, $count = -1){
	$post_args = array(
		'post_type' => $post_type,
		$tag_name => 'Featured' ,
		'posts_per_page' => $count
	);
	$wp_query = new WP_Query($post_args);
	return $wp_query;
}

// Get related products by current product
function getRelatedProduct($product_id, $count = -1){
	$category_id = wp_get_object_terms(  $product_id, 'product_cat' , array('fields' => 'slugs'));    
	$post_args = array(
		'post_type' => 'products',  
		'post__not_in' => array( $product_id ),
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => $category_id
			)
		),

		'posts_per_page' => $count
	); 
	$wp_query = new WP_Query($post_args);
	return $wp_query;
}


