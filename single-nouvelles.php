<?php
get_header();

global $post;
$author_id = $post->post_author;

$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
<main>
    <article class="article">
        <h1 class="u-margin-top-big"><?php echo the_title(); ?></h1>
        <p class="article--description"><?php the_field('description_de_larticle') ?></p>

        <div class="article__header">
            <img src="<?php echo $image; ?>" alt="Image de l'article">
        </div>

        <p class="article__content"> <?php echo the_content(); ?></p>
        <div class="flex auteur u-margin-top-big u-margin-bottom-big">
            <span>Auteur:</span>
            <p> <?php the_author_meta('user_nicename', $author_id);; ?></p>
        </div>
    </article>
</main>

<?php
get_footer();
?>
