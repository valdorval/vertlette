<?php
get_header();
?>
<main>
     <section class="index-corpo container u-margin-top-big">
          <h2 class="heading-primary">Devenir membre corporatif</h2>
          <div class="index-corpo__image u-margin-top-normal">
               <img src="<?php echo get_template_directory_uri(); ?>/img/abonnement-corpo.jpg" alt="">
          </div>
          <div class="index-corpo__content">
               <h3 class="heading-tertiary">Lorem ipsum dolor sit amet</h3>
               <p class="p-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet urna tellus. Nullam imperdiet.</p>
               <button class="btn">En savoir plus</button>
          </div>
     </section>

     <section class="newsletter u-margin-top-big">
          <div class="newsletter__box">
               <h2 class="heading-secondary">Newsletter</h2>
               <p class="p-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum venenatis enim.</p>
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