<?php get_header(); ?>

<div class="wrapper">
    <?php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
        the_title();
        endwhile;
    else :
        echo "Nothing Found";
    endif;
    ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>