<?php 
    $tags = wp_get_post_tags(get_the_ID());
    if($tags):
        $tag_ids = array();
        foreach($tags as $tag_tmp)
            $tag_ids[] = $tag_tmp->term_id;
        
        $post_args = array(
            'tag__in' => $tag_ids,
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 5
        );

        $wp_query = new WP_Query($post_args);
        if ($wp_query->have_posts()) : 
?>
<div id="related-posts" class="widget">		
    <h4>Related posts</h4>		
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