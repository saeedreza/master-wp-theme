<?php 
get_header();  
if(have_posts()): the_post();
?>
	<div id="page-contact" class="content"> 
		<div class="row">
			<header class="article-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header> 
		</div>
		<div id="inner-content" class="row">  

		    <main id="main" class="large-6 medium-6 columns" role="main"> 
				 <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
				 			
					<section class="entry-content" itemprop="articleBody">
						<?php echo get_field("description"); ?> 
					</section> <!-- end contact section --> 							
				</article> <!-- end contact -->
			</main>

			<div id="form" class="large-6 medium-6 columns" role="complementary"> 
				  <?php the_content(); ?>
			</div> <!-- end #form -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php
endif; 
get_footer(); 
?>