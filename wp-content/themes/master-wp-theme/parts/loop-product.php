<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<?php 
			$description = get_field('description'); 
			$image = get_field('image'); 
		?> 
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['caption']; ?>" />
		<div><?php echo $description; ?></div> 
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	
	</footer> <!-- end article footer -->				    						
</article> <!-- end article -->