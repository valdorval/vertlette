<?php
get_header();

global $post;
$author_id = $post->post_author;
?>

<h2><?php echo the_title(); ?></h2>
<p> <?php echo the_content(); ?></p>
<h6> <?php the_author_meta('user_nicename', $author_id);; ?></h6>


<?php
get_footer();
?>
