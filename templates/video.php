<?php

/**
 * Template Name: Nouvelles
 */

get_header();
?>

<?php
$args_products = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'product_cat' => 'promotions',
    'orderby' => 'rand'
);

$loop = new WP_Query($args_products);

while ($loop->have_posts()) : $loop->the_post();
    global $product; ?>


    <a href="<?php echo get_permalink(); ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" class="custom-class" height="438" />

        <div class=" promo__title">
            <h4 class="heading-rubik heading-rubik--light"><?php the_title(); ?></h4>
        </div>
        <span class="p-light promo__price center"><?php echo $product->get_price_html(); ?></span>
    </a>
    <button class="btn"><a href="<?php echo get_permalink() ?>">Voir le produit</a></button>
    </div>
<?php
endwhile;
wp_reset_query(); ?>
<!--/.products-->
</div>
</section>
