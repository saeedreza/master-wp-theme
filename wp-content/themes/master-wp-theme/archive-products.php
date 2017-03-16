<?php 
	get_header(); 

//---------------------
$categories = get_terms( 'product_cat', array('hide_empty' => false) );
 
function getProductsByCategory($category){
	$post_args = array( 
		'post_type' => 'products', 
		'product_cat' => $category,
		'posts_per_page' => -1
	);
	$wp_query = new WP_Query($post_args);
	return $wp_query;
}
//---------------------
?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main"> 
			    <?php 
					if ($categories) : 
						foreach($categories as $category ):
				?>
						<h2><?php echo $category->name; ?></h2>
						<hr /> 
				<?php
						$wp_query = getProductsByCategory($category->slug); 
						
					  	while ($wp_query->have_posts()) :
					  	$wp_query->the_post(); 
				?>
			  
					<?php get_template_part( 'parts/loop', 'product' ); ?>
				    
				<?php endwhile; ?>	

				<?php endforeach; ?>	
 
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->
  
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
<?php get_footer(); ?>