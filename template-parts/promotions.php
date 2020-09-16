<?php
    $args_products = array('post_type' => 'product', 'posts_per_page' => 1, 'product_cat' => 'promotions', 'orderby' => 'rand');
    $loop = new WP_Query($args_products);
    while ($loop->have_posts()) : $loop->the_post();
        global $product; ?>
<div class="promo__content--item">
        <h2>Shoes</h2>
        <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
            <?php woocommerce_show_product_sale_flash($post, $product); ?>
            <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
            else echo '<img src="' . woocommerce_placeholder_img_src() . '/>'; ?>

<div class="promo__title">
                    <h4 class="heading-rubik heading-rubik--light"><?php the_title(); ?></h4>
                </div>
                <span class="price"><?php echo $product->get_price_html(); ?></span> 
            <!-- description du produit -->
            <p><?php the_excerpt(); ?> </p>
        </a>
    <?php woocommerce_template_loop_add_to_cart($loop->post, $product);?>
</div>
<?php>
    endwhile; ?>
    <?php wp_reset_query(); ?>

<!--/.products-->




<div class="promo__content--item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chaise-fauteuil-petit.jpg" alt="Fauteuil">
                <div class="promo__title">
                    <h4 class="heading-rubik heading-rubik--light">Lorem ipsum</h4>
                </div>
                <p class="p-light promo__price center"><span>499$ </span> <strong>459$</strong></p>
                <button class="btn">Voir le produit</button>
            </div>
