<?php 
	get_header(); 

//---------------------
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$post_args = array( 
	'posts_per_page' => 10,
	'paged'          => $paged
);
$wp_query = new WP_Query($post_args);
//---------------------
?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-8 columns" role="main">
		    
			    <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			 
					<?php get_template_part( 'parts/loop', 'blog' ); ?>
				    
				<?php endwhile; ?>	

					<?php master_page_navi(); ?>
					 
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>				 
																
		    </main> <!-- end #main -->
		    
		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>