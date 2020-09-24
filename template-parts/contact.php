<main>

     <section class="contact container-big u-margin-top-big">
          <header class="contact__header">
               <img src="<?php echo get_template_directory_uri(); ?>/img/photo-magasin.jpg" alt="Photo du magasin">
          </header>
          <div class="contact__content flex u-margin-bottom-big">
               <div class="contact__coordonne u-margin-top-big">
                    <div class="contact__details center">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.4209773974276!2d-71.85357258423423!3d45.42101454434476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb7b248528e0669%3A0xf2e252f931b28a0b!2s999%20Rue%20des%20Valets%2C%20Sherbrooke%2C%20QC!5e0!3m2!1sfr!2sca!4v1600286224055!5m2!1sfr!2sca" class="contact__map u-margin-top-normal" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                         <p class="center u-margin-top-normal">999, rue des Valets, Sherbrooke, QC. Canada J1E 3G1<br />
                              Téléphone: 999-999-9999
                         </p>
                         <p class="center u-margin-top-normal u-margin-bottom-xsmall"><strong>Heures d'ouverture</strong></p>
                         <div class="flex contact__details--hours center">
                              <p>Lundi au mercredi</p>
                              <p>9 h 00 à 17 h 00</p>
                         </div>
                         <div class="flex contact__details--hours center">
                              <p>Jeudi et vendredi</p>
                              <p>9 h 00 à 21 h 00</p>
                         </div>
                         <div class="flex contact__details--hours center">
                              <p>Samedi</p>
                              <p>9 h 00 à 17 h 00</p>
                         </div>
                         <div class="flex contact__details--hours center">
                              <p>Dimanche</p>
                              <p class="u-margin-bottom-big">10 h 00 à 17 h 00</p>
                         </div>
                    </div>

               </div>
               <div class="contact__form-section u-margin-top-big">
                    <?php if (is_active_sidebar('sidebar2')) : ?>
                         <div id="contact-sidebar" class="contact__widget" role="complementary">
                              <?php dynamic_sidebar('sidebar2'); ?>
                         </div><!-- #primary-sidebar -->
                    <?php endif; ?>
               </div>
          </div>
     </section>



</main>