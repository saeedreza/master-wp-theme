<?php 
get_header();  
if(have_posts()): the_post();
?>
	<div id="page-about" class="content">  
		<div id="inner-content" class="row">  

		    <main id="main" class="large-12 medium-12 columns" role="main"> 
				 <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header> 
					
					<section class="entry-content" itemprop="articleBody">
						<?php the_content(); ?>
					</section> <!-- end about section --> 							
				</article> <!-- end about -->

				<?php dynamic_sidebar('cta_staticpages'); ?>
			</main> 
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php
endif; 
get_footer(); 
?>