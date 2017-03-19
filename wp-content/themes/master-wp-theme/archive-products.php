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

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
						<header class="article-header">
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</header> <!-- end article header -->
										
						<section class="entry-content" itemprop="articleBody">
							<img src="<?php the_post_thumbnail_url(); ?>" />
							<?php the_content(); ?>
						</section> <!-- end article section -->
											
						<footer class="article-footer">
							
						</footer> <!-- end article footer -->				    						
					</article> <!-- end article -->

					<?php endwhile; ?>	

					<?php endforeach; ?>	
 
				<?php else : ?>
											
					<header class="article-header">
						<h1>Post Not Found!</h1>
					</header>
					<section class="entry-content">
						<p>Uh Oh. Something is missing. Try double checking things.</p>
					</section>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->
  
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
<?php get_footer(); ?>