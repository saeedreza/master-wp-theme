<?php 
get_header();
 
$product_post_category = get_category(get_field('post_category')); 
$blog_posts = getPostsByCategory($product_post_category->slug,3);

?>
			
<div id="content">
	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns first" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										
					<header class="article-header">	
						<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					</header> <!-- end article header -->
									
					<section class="entry-content" itemprop="articleBody">
						<img src="<?php the_post_thumbnail_url(); ?>" />
						<?php the_content(); ?>
					</section> <!-- end article section -->
										
					<footer class="article-footer">
						
					</footer> <!-- end article footer -->
											
				</article> <!-- end article -->				
		    					
		    <?php endwhile; else : ?>
		
				<header class="article-header">
					<h1>Post Not Found!</h1>
				</header>
				<section class="entry-content">
					<p>Uh Oh. Something is missing. Try double checking things.</p>
				</section>

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