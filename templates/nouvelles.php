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
?>


<div>
    <?php
    $args_products = array('post_type' => 'product', 'posts_per_page' => 1, 'product_cat' => 'promotions', 'orderby' => 'rand');
    $loop = new WP_Query($args_products);
    while ($loop->have_posts()) : $loop->the_post();
        global $product; ?>

        <h2>Shoes</h2>
        <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
            <?php woocommerce_show_product_sale_flash($post, $product); ?>
            <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
            else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />'; ?>
            <h3><?php the_title(); ?></h3>
            <!-- description du produit -->
            <p><?php the_excerpt(); ?> </p>
        </a>
    <?php woocommerce_template_loop_add_to_cart($loop->post, $product);

    endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
<!--/.products-->

<?php
get_footer();
?>