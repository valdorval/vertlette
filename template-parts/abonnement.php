<main>
     <section class="abonnement">
          <header class="abonnement__header container u-margin-top-big">
               <div class="flex">
                    <div class="abonnement__corpo center">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/couronne.png" alt="Couronne">
                         <p class="p-member center u-margin-top-big">Devenez membre</p>
                    </div>
                    <div class="abonnement__details">
                         <p class="center u-margin-top-big abonnement__details--special">Accès illimité à la boutique corporative.</p>
                         <p class="center u-margin-top-xsmall abonnement__details--special">Un vaste choix pour tous les goûts.</p>
                         <p class="p-big center u-margin-top-normal">2000 $</p>
                         <p class="p-dark u-margin-top-normal abonnement__details--p">Valable pendant 12 mois</p>
                         <button class="btn u-margin-top-xsmall"><a href="<?php the_permalink('144'); ?>"></a>Je m'abonne</a></button>
                    </div>
               </div>
          </header>

          <article class="gradient u-margin-top-big">
               <div class="container abonnement__article">
                    <h1 class="heading-tertiary u-margin-bottom-normal"><?php echo get_field('abonnement_title'); ?></h1>
                    <?php echo get_field('abonnement_p'); ?>
                    <h2 class="heading-tertiary u-margin-bottom-normal"><?php echo get_field('second_abonnement_title'); ?></h2>
                    <?php echo get_field('second_abonnement_p'); ?>
                    <h2 class="heading-tertiary u-margin-bottom-normal"><?php echo get_field('third_abonnement_title'); ?></h2>
                    <?php echo get_field('third_abonnement_p'); ?>
               </div>
          </article>
     </section>

</main>
