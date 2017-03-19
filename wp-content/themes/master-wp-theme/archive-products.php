<?php 
	get_header(); 

//---------------------
$categories = get_terms( 'product_cat', array('hide_empty' => false) );
//---------------------
?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main"> 
			    <?php 
					if ($categories) : 
						foreach($categories as $category ):
				?>
						<a href="/products/<?php echo $category->slug; ?>"><h2><?php echo $category->name; ?></h2></a>
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