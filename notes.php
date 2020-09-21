<div class="promo__content--item">
    <img src="<?php echo get_template_directory_uri(); ?>/img/chaise-fauteuil-petit.jpg" alt="Fauteuil">
    <div class="promo__title">
        <h4 class="heading-rubik heading-rubik--light">Lorem ipsum</h4>
    </div>
    <p class="p-light promo__price center"><span>499$ </span> <strong>459$</strong></p>
    <button class="btn">Voir le produit</button>
</div>

<div class="promo__content--item">
    <img src="<?php echo get_template_directory_uri(); ?>/img/frigo-petit.jpg" alt="Frigo">
    <div class="promo__title">
        <h4 class="heading-rubik heading-rubik--light">Lorem ipsum</h4>
    </div>
    <p class="p-light promo__price center"><span>499$ </span> <strong>459$</strong></p>
    <button class="btn">Voir le produit</button>
</div>
<div class="promo__content--item">
    <img src="<?php echo get_template_directory_uri(); ?>/img/table-chaise-petit.jpg" alt="Table">
    <div class="promo__title">
        <h4 class="heading-rubik heading-rubik--light">Lorem ipsum</h4>
    </div>
    <p class="p-light promo__price center"><span>499$ </span> <strong>459$</strong></p>
    <button class="btn">Voir le produit</button>
</div>


<?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>
<p><?php the_excerpt(); ?> </p>



<?php
if (has_post_thumbnail($loop->post->ID))
    echo get_the_post_thumbnail($loop->post->ID);
else
?>


<?php echo '<img src="' . woocommerce_placeholder_img_src() . ' />';

the_post_thumbnail('portfolio', ['class' => 'custom-class', 'title' => 'Feature image'])
?>

// ---------------------
