<?php

/**
 * Template Name: Politique de confidentialité
 *
 */

get_header();
?>
<main>
     <section class="privacy u-margin-top-big gradient">
          <div class="container">
               <h1 class="heading-primary center u-margin-bottom-big"><?php echo get_field('privacy_title'); ?></h1>
               <p><?php echo get_field('privacy_p'); ?></p>
               <h2 class="heading-tertiary u-margin-bottom-normal"><?php echo get_field('second_privacy_title'); ?></h2>
               <p><?php echo get_field('second_privacy_p'); ?></p>
               <h2 class="heading-tertiary u-margin-bottom-normal"><?php echo get_field('third_privacy_title'); ?></h2>
               <p><?php echo get_field('third_privacy_p'); ?></p>
          </div>


     </section>
</main>


<?php
get_footer();
?>