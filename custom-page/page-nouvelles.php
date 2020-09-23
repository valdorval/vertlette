<?php

/**
 * Template Name: Nouvelles
 */

get_header();
?>

<main>
    <section class="main-blog">
        <div class="flex container-big main-blog__article u-margin-top-big">
            <div class="main-blog__article--text center">
                <div class="main-blog__center">
                    <?php
                    // Affiche le dernier post publié
                    $the_query = new WP_Query(array(
                        'post_type' => 'nouvelles',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                            'taxonomy' => 'vluxe_nouvelles_categorie',
                            'fields' => 'slug',
                            'terms' => 'all'
                        )
                    ));

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();

                            $term = get_the_terms($the_query->ID, 'vluxe_nouvelles_categorie');
                    ?>
                            <p class="p-primary-light center u-margin-bottom-big"><?php echo $term[0]->name; ?></p>
                            <h2 class="heading-tertiary heading-tertiary--light u-margin-bottom-normal"><?php echo the_title(); ?></h2>
                            <p class="main-blog__article--description center u-margin-bottom-normal"><?php echo get_the_excerpt(); ?></p>
                            <button class="btn btn--light u-margin-top-normal"><a href="<?php echo get_the_permalink(); ?>">Lire l'article</a></button>

                            <!-- <?php var_dump(get_the_terms($the_query->ID, 'vluxe_nouvelles_categorie')); ?> -->
                </div>

            </div>
            <div class="main-blog__image" style="background-image:url(<?php echo get_the_post_thumbnail_url($the_query->ID); ?>);background-position:center;background-size:cover;background-repeat:no-repeat;">

            </div>
    <?php endwhile;
                        wp_reset_postdata();
                    else :
                    endif;
    ?>
        </div>
    </section>

    <section class=" blog-articles u-margin-bottom-normal u-margin-top-big">
        <div class="container-big flex blog-articles__content">
            <?php
            // affiche tout les post exepté le dernier publié avec offset
            $args = new WP_Query(array(
                'post_type'             => 'nouvelles',
                'post_per_page'         =>  6,
                'ignore_sticky_posts'   => 1,
                'paged'                 => $paged,
                'offset'                => 1,
            ));

            if ($args->have_posts()) :
                while ($args->have_posts()) : $args->the_post();
            ?>
                    <div class="blog-articles__item u-margin-top-big" style="background-image:url(<?php echo get_the_post_thumbnail_url($the_query->ID); ?>);background-position:top;background-size:cover;background-repeat:no-repeat;">
                        <div class="blog-articles__text">
                            <h3 class="heading-quaternary"><a href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                            <p class="p-light"><?php echo get_the_excerpt(); ?></p>

                        </div>
                    </div>
            <?php
                endwhile;
            endif; ?>
        </div>
    </section>

    <section class="archives">
        <h4 class="container-big heading-secondary heading-secondary--dark u-margin-bottom-normal">Archives</h4>
        <div class="archives__content u-padding-bottom-normal">
            <div class="archives__content--box container-big flex">
                <div class="archives__content--menu">
                    <h5 class="heading-rubik--black u-margin-bottom-small">Récents</h5>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                </div>
                <div class="archives__content--menu">
                    <h5 class="heading-rubik--black u-margin-bottom-small">Catégories</h5>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                </div>
                <div class="archives__content--menu">
                    <h5 class="heading-rubik--black u-margin-bottom-small">Tags</h5>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                </div>
                <div class="archives__content--menu">
                    <h5 class="heading-rubik--black u-margin-bottom-small">Mois</h5>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                </div>
                <div class="archives__content--menu">
                    <h5 class="heading-rubik--black u-margin-bottom-small">Année</h5>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                    <p class="u-margin-bottom-xsmall"><a href="#">Lorem ipsum dolor sit amet</a></p>
                </div>
            </div>
        </div>
    </section>
</main>


<?php

get_footer();
?>