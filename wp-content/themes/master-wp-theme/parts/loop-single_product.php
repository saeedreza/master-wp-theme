<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
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