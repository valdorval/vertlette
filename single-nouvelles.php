<?php

get_header();
?>

<section class="single-news container u-margin-bottom-big">
     <h1 class="heading-tertiary u-margin-top-big u-margin-bottom-normal"><?php the_title(); ?></h1>
     <?php the_content(); ?></p>
     <div class="u-margin-top-normal single-news__image">
          <?php the_post_thumbnail(); ?>
     </div>

     <h2 class="heading-quaternary heading-quaternary--primary u-margin-top-big u-margin-bottom-normal"><?php echo get_field('article-subtitle'); ?></h1>
          <p><?php echo get_field('article-p'); ?></p>
          <h2 class="heading-quaternary heading-quaternary--primary u-margin-bottom-normal"><?php echo get_field('second_article_subtitle'); ?></h2>
          <p><?php echo get_field('second-article-p'); ?></p>
</section>

<?php
get_footer();
?>