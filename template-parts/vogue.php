<!-- affiche le premier produit en vogue -->
<section class="vogue u-margin-top-big">
    <h2 class="heading-primary u-margin-bottom-big container">En vogue</h2>
    <?php
    $args_products = array(
        'post_type'         => 'product',
        'posts_per_page'    => 1,
        'product_cat'       => 'vogue',
    );

    $loop = new WP_Query($args_products);

    while ($loop->have_posts()) : $loop->the_post();
        global $product; ?>
        <div class="vogue__main-product container u-margin-bottom-big" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);">
            <div class="vogue__main-content center">
                <h4 class="heading-quaternary u-margin-bottom-normal u-margin-top-normal"><?php the_title(); ?></h4>
                <p class='p-light u-margin-bottom-normal'> <?php echo get_the_excerpt() ?> </p>
                <button class="btn u-margin-bottom-normal"><a href="<?php echo get_permalink() ?>">Voir le produit</a></button>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata()
    ?>

    <!-- affiche le deuxième produit en vogue -->
    <div class="vogue__other-product flex container">
        <?php
        $product_deux = array(
            'post_type'         => 'product',
            'posts_per_page'    => 1,
            'offset'            => 1,
            'product_cat'       => 'vogue',
        );

        $loop_deux = new WP_Query($product_deux);

        while ($loop_deux->have_posts()) : $loop_deux->the_post();
            global $product; ?>
            <div class="vogue__second-item center" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);">
                <div class="vogue__second-item--text">
                    <h4 class="heading-quaternary heading-quaternary--dark"><?php the_title(); ?></h4>
                    <p class="p-dark"> <?php echo get_the_excerpt() ?> </p>
                </div>
                <button class="btn u-margin-bottom-normal"><a href="<?php echo get_permalink() ?>">Voir le produit</a></button>
            </div>
        <?php endwhile;
        wp_reset_postdata() ?>


        <!-- affiche le troisième produit en vogue -->
        <?php
        $product_trois = array(
            'post_type'         => 'product',
            'posts_per_page'    => 1,
            'offset'            => 2,
            'product_cat'       => 'vogue',
        );

        $loop_trois = new WP_Query($product_trois);

        while ($loop_trois->have_posts()) : $loop_trois->the_post();
            global $product; ?>
            <div class="vogue__third-item center" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);">
                <div class="vogue__third-item--text">
                    <h4 class="heading-quaternary heading-quaternary--dark"><?php the_title(); ?></h4>
                    <p class="p-dark"> <?php echo get_the_excerpt() ?> </p>
                </div>
                <button class="btn u-margin-bottom-normal"><a href="<?php echo get_permalink() ?>">Voir le produit</a></button>
            </div>
        <?php endwhile;
        wp_reset_postdata() ?>
    </div>
</section>
