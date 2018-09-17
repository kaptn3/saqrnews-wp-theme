<div class="sidebar__top-posts-item">
    <?php 
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    echo '<div class="sidebar__top-posts-card posts__card" style="background-image: url('. $url.')">';
    ?>    
        <span class="posts__card-category"><?php the_category(' '); ?></span>
    </div>
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
</div>