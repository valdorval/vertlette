<?php

/**
 * Template Name: Nouvelles
 */

get_header();


// Il faudra ajouté ici l'article de présentation ( dernier article publié )


$args = new WP_Query(array(
    'post_type'             => 'nouvelles',
    'post_per_page'         =>  10,
    'ignore_sticky_posts'   => 1,
    'paged'                 => $paged
));

if ($args->have_posts()) :
    while ($args->have_posts()) : $args->the_post();
        get_template_part('template-parts/articles');
    endwhile;
endif;

get_footer();
