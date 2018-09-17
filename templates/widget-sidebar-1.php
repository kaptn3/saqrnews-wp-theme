<div class="sidebar__posts-card">
    <a class="sidebar__posts-tumb" href="<?php the_permalink() ?>">
        <?php the_post_thumbnail( $id, 'medium' ); ?>
    </a>
    <div class="sidebar__posts-text">
        <h3 class="sidebar__posts-title"><a href="<?php the_permalink() ?>" class="posts__card-link"><?php the_title(); ?></a></h3>
        <span class="sidebar__posts-date"><?php the_time(get_option('date_format')) ?> <i class="fas fa-calendar"></i></span>
    </div>
</div>