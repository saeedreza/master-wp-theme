<?php
    $category_id = wp_get_post_categories(get_the_ID());  
   
    if(!empty($category_id)): 
        $post_args = array(
            'post_type' => 'products',  
            'meta_key'		=> 'post_category',
	        'meta_value'	=> $category_id, 
            'meta_compare' => 'IN', 
            'posts_per_page' => 5
        );

        $wp_query = new WP_Query($post_args);

        if ($wp_query->have_posts()) : 
?>
<div id="related-products" class="widget">		
    <h4>Related products</h4>		
    <ul>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li> 
    <?php endwhile; ?>
    </ul>
</div>
<?php
            
        endif;
    endif;
?>