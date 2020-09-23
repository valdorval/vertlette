<?php

/**
 * Template Name: Récupération
 *
 */

get_header();
?>

<main>
     <h1 class="heading-tertiary u-margin-bottom-big u-margin-top-big center">Les services que nous offrons</h1>
     <section class="reparation u-margin-top-big container-big">
          <h2 class="u-margin-bottom-normal">Réparation</h2>
          <div class="flex reparation__content u-margin-bottom-normal">
               <div class="reparation__text">
                    <p><?php echo get_field('reparation'); ?></p>
               </div>
               <div class="reparation__img center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/renovation.jpg" alt="Renovation">
               </div>
          </div>
          <button class="btn btn__dark u-margin-top-small"><a href="<?php echo get_permalink('35'); ?>">Nous contacter</a></button>
     </section>
     <section class="recup u-margin-top-big container-big">
          <h2 class="u-margin-bottom-normal">Récupération</h2>
          <div class="flex recup__content u-margin-bottom-normal">
               <div class="recup__img center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/chaise-ancienne.jpg" alt="Chaise">
               </div>
               <div class="recup__text">
                    <p><?php echo get_field('recuperation'); ?></p>
               </div>
          </div>
          <div class="recup__button-right">
               <button class="btn btn__dark u-margin-top-small u-margin-bottom-big"><a href="<?php echo get_permalink('35'); ?>">Nous contacter</a></button>
          </div>
     </section>

</main>

<?php
get_footer();

?>
