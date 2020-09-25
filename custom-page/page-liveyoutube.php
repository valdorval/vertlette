<?php

/**
 * Template Name: Video
 */

get_header();
?>
<section class="live">
    <h1 class="heading-tertiary center u-margin-top-big">Présentement en direct</h1>
    <?php
    $the_query = new WP_Query(array(
        'post_type' => 'video',
        'posts_per_page' => 1,
    ));

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
            <div class="live__recent-embed center u-margin-top-normal">
                <?php the_field('lien'); ?>
                <br>
                <div class="live__recent-embed--description">
                    <?php the_field('description_du_video'); ?>
                </div>
                <div class="live__recent-embed--button">
                    <button class="btn btn__dark u-margin-top-normal"><a href="https://www.youtube.com/user/blbboistv" target="_blank">S'abonner</a></button>
                </div>
            </div>



    <?php endwhile;
    endif;
    ?>
</section>
<section class="old-live u-margin-top-big">
    <div class="old-live__banner u-margin-bottom-big">
        <h2 class="heading-tertiary">Capsules récentes</h2>
    </div>
    <div class="container-big flex old-live__content u-margin-bottom-big">
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
                <div class="old-live__content--item center u-margin-top-big u-margin-bottom-big">
                    <h2 class="heading-secondary heading-secondary--small u-margin-bottom-normal"><?php echo the_title(); ?></h2>
                    <div class="old-live__old-embed">
                        <?php the_field('lien'); ?>
                    </div>
                    <div class="old-live__content--date">
                        <p class="description"><?php echo the_field('description_du_video'); ?></p>
                        <p class="center u-margin-top-xsmall p-dark"> Date de publication: <?php echo get_the_date(); ?></p>
                    </div>
                </div>

        <?php
            endwhile;
        endif;
        ?>
    </div>

</section>
<?php
get_footer();
?>
