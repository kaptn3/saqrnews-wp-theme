<?php 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<article class="posts__card" style="background-image: url('. $url.')">';
?>
  <a href="<?php the_permalink() ?>" class="posts__card-link"></a>
  <span class="posts__card-category">
    <?php the_category(' '); ?>
  </span>
  <div class="posts__card-content">
    <div class="posts__card-title-n-date">
      <h3 class="posts__card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      <span class="posts__card-date"><?php the_time(get_option('date_format')) ?> <i class="fas fa-calendar"></i></span>
    </div>
  </div>
</article>