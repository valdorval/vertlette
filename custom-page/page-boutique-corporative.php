<?php

/**
 * Template Name: Boutique corporative
 *
 */
get_header();

$user = wp_get_current_user();
//The user has the "author" role
?>

<header class="header-boutique u-margin-top-big">
    <div class="header-boutique--img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/image-boutique.png" alt="Image du logo">
    </div>
</header>

<main class="boutique">

    <div class="filter-bar flex">
        <span>Filtrer par:</span>
    </div>

    <section class="flex">
        <?php
        if (in_array('membre_corporatif', (array) $user->roles) || in_array('administrator', (array) $user->roles)) {
            get_template_part('sidebar');
        ?>
            <div class="boutique__corporative">
                <ul class="products columns-4">
                <?php

                $args = array(
                    'product_cat' => 'corporatif',
                    'order'           => 'ASC',
                    'post_type'       => 'product',
                );

                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();
                        wc_get_template_part('content', 'product');
                    endwhile;
                }
                wp_reset_postdata();
            } else {
                echo 'you dont have access';
            }
                ?>
                </ul>
            </div>
    </section>
</main>
<?php
get_footer();
