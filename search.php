<?php get_header(); ?>

<div class="wrapper">
    <?php
    if ( have_posts() ) : ?>
    <div id="ajax">
        <?php
        while ( have_posts() ) : the_post();
            get_template_part('templates/post-list-card');
        endwhile; ?>
    </div>
    <?php
    else :
        echo "<h2 class='article__title'>Nothing Found</h2>";
    endif;
    ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>