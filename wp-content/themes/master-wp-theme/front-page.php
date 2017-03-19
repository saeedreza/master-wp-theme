<?php 
get_header();  

//--------------------- 
$post_query = getFeaturedPosts('post','tag',-1);
$products_query = getFeaturedPosts('products','product_tag',-1);
//---------------------

if(have_posts()): the_post();
?>
	<div id="page-home" class="content">  
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
			</main> 

			<?php if($post_query->have_posts()): ?>
			<div class="home-posts">
				<?php
				while ( $post_query->have_posts() ) : $post_query->the_post(); 
					$title = the_title('<h3>','</h3>',false);
					?>
					<a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
					<?php
					the_excerpt();
				endwhile;
				?>
			</div>
			<?php else: endif; ?>


			<?php if($products_query->have_posts()): ?>
			<div class="home-posts">
				<?php
				while ( $products_query->have_posts() ) : $products_query->the_post(); 
					$title = the_title('<h3>','</h3>',false); 
				?>
					<a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
					<img src="<?php the_post_thumbnail_url(); ?>" />
		 			<?php the_content(); ?> 
				<?php 
				endwhile;
				?>
			</div>
			<?php else: endif; ?>
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php
endif; 
get_footer(); 
?>