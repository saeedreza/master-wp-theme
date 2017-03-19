<?php 
get_header();
 
$product_post_category = get_category(get_field('post_category')); 
$blog_posts = getPostsByCategory($product_post_category->slug,3);

?>
			
<div id="content">
	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns first" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
		    	<?php get_template_part( 'parts/loop', 'single_product' ); ?>
		    					
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->


		<div>
			<ul>
			<?php if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>

				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								
			<?php endwhile; ?>
		 
			<?php endif; ?>
			</ul>
		</div>
 
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>