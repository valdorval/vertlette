<!-- <div class="vogue__other-product flex container">
    <div class="vogue__second-item center">
        <div class="vogue__second-item--text">
            <h4 class="heading-quaternary heading-quaternary--dark">Lorem Ipsum</h4>
            <p class="p-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
    </div>
    <div class="vogue__third-item center">
        <div class="vogue__third-item--text">
            <h4 class="heading-quaternary heading-quaternary--dark">Lorem Ipsum</h4>
            <p class="p-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
    </div>
</div> -->


<!-- premier produit en vogue afficher plus gros -->
<section class="vogue u-margin-top-big">
    <h2 class="heading-primary u-margin-bottom-big container">En vogue</h2>
    <?php
    $args_products = array(
        'post_type' => 'product',
        'posts_per_page' => 1,
        'product_cat' => 'vogue',
        'orderby' => 'rand'
    );

    $loop = new WP_Query($args_products);

    while ($loop->have_posts()) : $loop->the_post();
        global $product; ?>
        <div class="vogue__main-product container u-margin-bottom-big" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);">

            <div class="vogue__main-content center">
                <h4 class="heading-quaternary u-margin-bottom-normal u-margin-top-normal"><?php the_title(); ?></h4>

                <p class='p-light u-margin-bottom-normal'>
                    <?php echo get_the_excerpt() ?> </p>
                <button class="btn"><a href="<?php echo get_permalink() ?>">Voir le produit</a></button>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_query(); ?>
    <!--/.products-->










</section>
