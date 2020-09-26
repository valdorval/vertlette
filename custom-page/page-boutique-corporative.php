<?php

/**
 * Template Name: Boutique corporative
 *
 */
get_header();

$user = wp_get_current_user();
//The user has the "author" role
?>

<?php
if (in_array('membre_corporatif', (array) $user->roles) || in_array('administrator', (array) $user->roles)) {
?>
    <main>
        <header class="header-boutique u-margin-top-big">
            <div class="header-boutique--img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image-corporative.png" alt="Image du logo">
            </div>
        </header>

        <main class="boutique">

            <div class="filter-bar flex">
                <span></span>
            </div>

            <section class="flex">


                <?php
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
                        ?>
                    </ul>
                </div>
            </section>
        </main>
    <?php
    wp_reset_postdata();
} else {
    ?>
        <main class="u-margin-bottom-big">
            <section class="abonnement">
                <header class="abonnement__header container u-margin-top-big">
                    <div class="abonnement__header--flex flex">
                        <div class="abonnement__corpo center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/couronne.png" alt="Couronne">
                            <p class="p-member center u-margin-top-big">Devenez membre</p>
                        </div>
                        <div class="abonnement__details">
                            <p class="center u-margin-top-big abonnement__details--special">Accès illimité à la boutique corporative.</p>
                            <p class="center u-margin-top-xsmall abonnement__details--special">Un vaste choix pour tous les goûts.</p>
                            <p class="p-big center u-margin-top-normal">2000 $</p>
                            <p class="p-dark u-margin-top-normal abonnement__details--p">Valable pendant 12 mois</p>

                            <div class="abonnement__details--button">
                                <button class="btn u-margin-top-xsmall"><a href="<?php the_permalink('14'); ?>"></a>Je m'abonne</a></button>
                            </div>

                        </div>
                    </div>
                </header>
            </section>
        </main>

    <?php
}

get_footer();
