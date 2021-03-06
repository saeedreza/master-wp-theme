<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'masterwp' );  ?></p>
	</div>

	<?php endif; ?>

	<?php if(is_single()) : ?>

		<?php get_template_part( 'parts/widget', 'related-posts' ); ?> 
		<?php get_template_part( 'parts/widget', 'related-products' ); ?> 
 
	<?php else: ?>

	<?php endif; ?>

</div>