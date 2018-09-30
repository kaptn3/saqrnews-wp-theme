<article class="list-post">
    <div class="list-post__image-and-category">
        <?php 
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        echo '<a href="' . get_permalink() . '" class="posts__card list-post__image" style="background-image: url('. $url.')"></a>';
        ?>
        <span class="posts__card-category list-post__category"><?php the_category(' '); ?></span>
    </div>
    <div class="list-post__content">
        <h3 class="list-post__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <span class="list-post__date">
            <?php the_time(get_option('date_format')) ?> <i class="fas fa-calendar"></i>
        </span>
        <div class="list-post__excerpt">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">اقرأ أكثر</a>
        </div>
    </div>
</article>