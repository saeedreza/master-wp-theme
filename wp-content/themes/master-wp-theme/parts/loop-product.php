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