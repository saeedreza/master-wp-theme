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

