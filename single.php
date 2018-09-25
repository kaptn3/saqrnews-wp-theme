<?php get_header(); ?>

<div class="wrapper">
    <?php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            if ( get_the_post_thumbnail() ) : 
            ?>
                <div class="article__image">
                    <?php the_post_thumbnail( $id, 'full' ); ?>
                    <div class="article__image-alt">
                        <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
                    </div>
                </div>
            <?php endif; ?>
            <h2 class="article__title"><?php the_title(); ?></h2>
            <div class="article__content">
                <?php the_content(); ?>
            </div>
        <?php
        endwhile;
    else :
        echo "<h2 class='article__title'>Nothing Found</h2>";
    endif;
    ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>