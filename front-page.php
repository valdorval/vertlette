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


    <?php get_template_part('template-parts/promotions'); ?>

    <?php get_template_part('template-parts/vogue'); ?>

    <!-- <section class="vogue u-margin-top-big">
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

    </section> -->

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
