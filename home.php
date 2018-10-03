<?php get_header(); ?>

<div class="wrapper">
  <section class="posts">
    <?php 
    $args = array(
      'posts_per_page' => 4
    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        get_template_part('templates/post-card');
      }
    }
    wp_reset_postdata(); ?>
  </section>

  <?php 
  $category = 'حياة-اجتماعية';
  $args = array(
    'category_name' => $category,
    'posts_per_page' => 11,
  );
  $query = new WP_Query( $args );

  if ( $query->have_posts() ) : ?>
    <section class="category-block">
      <header class="posts-list-title">
        <h2><?php echo get_category_by_slug($category)->cat_name; ?></h2>
      </header>
      <div class="category-posts">  
        <?php
        while ( $query->have_posts() ) :
          $query->the_post();
          if ( ($query->current_post === 6) || ($query->current_post === 0) || ($query->current_post === 1) ) {
            get_template_part('templates/post-card'); # большие карточки в позициях 0, 1, 6 выводятся с количеством комментариев
          } else {
            get_template_part('templates/post-card-no-comments'); # без количетсва комментариев
          }
        endwhile; ?>
      </div>
    </section>
    <?php    
    endif;
    wp_reset_postdata(); ?>

    <section class="last-news">
        <header class="posts-list-title">
          <h2>آخر الأخبار</h2>
        </header>
        <?php
        if ( have_posts() ) : ?>
          <div id="ajax">
          <?php 
          while ( have_posts() ) : the_post();
            get_template_part('templates/post-list-card');
          endwhile; ?>
        </div>
        <?php
        endif;
        load_more_button();
        ?>
    </section>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>