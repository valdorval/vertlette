<?php

/**
 * Template Name: Video
 */

get_header();
?>


<div>
    <p> ---------recent post-------</p>
    <?php
    // Affiche le dernier post publié
    $the_query = new WP_Query(array(
        'post_type' => 'video',
        'posts_per_page' => 1,
    ));

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>

            <h2> <?php echo the_title(); ?> </h2>


            <div class="embed-container">
                <?php get_field('lien'); ?>
            </div>

            <style>
                .embed-container {
                    position: relative;
                    padding-bottom: 56.25%;
                    overflow: hidden;
                    max-width: 100%;
                    height: auto;
                }

                .embed-container iframe,
                .embed-container object,
                .embed-container embed {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
            </style>


            <?php the_field('description') ?>
    <?php endwhile;
    endif;
    ?>
    <p> ---------recent post-------</p>
</div>




<?php
// affiche tout les post exepté le dernier publié avec offset
$args = new WP_Query(array(
    'post_type'             => 'video',
    'post_per_page'         =>  10,
    'ignore_sticky_posts'   => 1,
    'paged'                 => $paged,
    'offset'                => 1,
));

if ($args->have_posts()) :
    while ($args->have_posts()) : $args->the_post();
?>
        <h2> <?php echo the_title(); ?> </h2>

        <?php the_field('lien') ?>
        <br>
        <?php the_field('description') ?>
<?php
    endwhile;
endif;

get_footer();
?>
