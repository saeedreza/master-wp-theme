<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-8 columns" role="main">
		    
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
						<header class="article-header">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						
						</header> <!-- end article header -->
										
						<section class="entry-content" itemprop="articleBody">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
							<?php the_content('<button class="tiny">' . __( 'Read more...', 'masterwp' ) . '</button>'); ?>
						</section> <!-- end article section -->
											
						<footer class="article-footer">
							<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
						</footer> <!-- end article footer -->				    						
					</article> <!-- end article -->
				    
				<?php endwhile; ?>	

					<?php master_page_navi(); ?>
					
				<?php else : ?>

					<header class="article-header">
						<h1>Post Not Found!</h1>
					</header>
					<section class="entry-content">
						<p>Uh Oh. Something is missing. Try double checking things.</p>
					</section>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->
		    
		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>