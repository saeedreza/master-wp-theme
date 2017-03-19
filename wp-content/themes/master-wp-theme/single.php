<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										
					<header class="article-header">	
						<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					</header> <!-- end article header -->
									
					<section class="entry-content" itemprop="articleBody">
						<?php the_post_thumbnail('full'); ?>
						<?php the_content(); ?>
					</section> <!-- end article section -->
										
					<footer class="article-footer">
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'masterwp' ), 'after'  => '</div>' ) ); ?>
						<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'masterwp' ) . '</span> ', ', ', ''); ?></p>	
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

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>