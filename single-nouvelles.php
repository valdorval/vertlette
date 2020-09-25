<?php
get_header();

global $post;
$author_id = $post->post_author;

$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
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

          <div class="flex auteur u-margin-top-big u-margin-bottom-big">
               <span>Auteur:</span>
               <p> <?php the_author_meta('user_nicename', $author_id);; ?></p>
          </div>
</section>


<?php
get_footer();
?>