<?php

/**
 * Template Name: Conditions de vente
 *
 */
get_header();
?>

<main>
     <section class="condition u-margin-top-big gradient">
          <div class="container">
               <h1 class="heading-primary center u-margin-bottom-big"><?php echo get_field('condition_title'); ?></h1>
               <p><?php echo get_field('condition_p'); ?></p>
               <h4 class="heading-quaternary heading-quaternary--dark u-margin-bottom-normal"><?php echo get_field('second_condition_title'); ?></h4>
               <p><?php echo get_field('second_condition_p'); ?></p>
               <h4 class="heading-quaternary heading-quaternary--dark u-margin-bottom-normal"><?php echo get_field('third_condition_title'); ?></h4>
               <p><?php echo get_field('third_condition_p'); ?></p>
               <h4 class="heading-quaternary heading-quaternary--dark u-margin-bottom-normal"><?php echo get_field('fourth_condition_title'); ?></h4>
               <p><?php echo get_field('fourth_condition_p'); ?></p>
          </div>


     </section>
</main>



<?php
get_footer();
?>