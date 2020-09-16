<?php
get_header();
?>
<main>
    <section class="presentation u-margin-top-big">
        <div class="presentation__content container">
            <div class="presentation__title">
                <h1 class="heading-quaternary">Lorem ipsum dolor sit amet</h1>
            </div>
            <button class="btn">Découvrir nos produits</button>
        </div>
    </section>

    <section class="promo u-margin-top-big">
        <h2 class="heading-primary u-margin-bottom-big container">Nos promotions</h2>
        <div class="promo__content flex container">


            <?php get_template_part('template-parts/articles'); ?>





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
        </div>
    </section>

    <section class="vogue u-margin-top-big">
        <h2 class="heading-primary u-margin-bottom-big container">En vogue</h2>
        <div class="vogue__main-product container u-margin-bottom-big">
            <div class="vogue__main-content center">
                <h4 class="heading-quaternary u-margin-bottom-normal u-margin-top-normal">Lorem Ipsum</h4>
                <p class="p-light u-margin-bottom-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at eros in ex dapibus congue. Ut vestibulum justo magna, vel tincidunt est vestibulum sed. Mauris.</p>
                <button class="btn u-margin-top-normal">Voir le produit</button>
            </div>
        </div>
        <div class="vogue__other-product flex container">
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
        </div>
    </section>

    <section class="index-corpo container u-margin-bottom-big u-margin-top-big">
        <h2 class="heading-primary">Devenir membre corporatif</h2>
        <div class="index-corpo__image u-margin-top-normal">
            <div class="index-corpo__content">
                <h3 class="heading-rubik u-margin-bottom-xsmall">Lorem ipsum dolor sit amet</h3>
                <p class="p-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet urna tellus. Nullam imperdiet.</p>
                <button class="btn u-margin-top-normal">En savoir plus</button>
            </div>
        </div>
    </section>

    <section class="newsletter u-margin-top-big">
        <div class="newsletter__box">
            <h2 class="heading-secondary">Newsletter</h2>
            <p class="p-light u-margin-top-xsmall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum venenatis enim.</p>
            <form action="" class="newsletter__form u-margin-top-normal">
                <input type="text" class="newsletter__form--input" placeholder="Entrez votre adresse courriel">
                <button class="btn" type="submit">S'inscrire</button>
            </form>
        </div>
    </section>
</main>

<?php
get_footer();
?>
