<?php wp_footer(); ?>
<footer class="footer">
     <div class="footer__content container flex">
          <div class="footer__category center">
               <p class="u-margin-bottom-xsmall">L'entreprise</p>
               <p><a href="<?php echo get_permalink('12'); ?>">À propos de nous</a></p>
               <p><a href="<?php echo get_permalink('63'); ?>">Nous contacter</a></p>
               <p><a href="<?php echo get_permalink('65'); ?>">Nouvelles</a></p>
          </div>
          <div class="footer__category center">
               <p class="u-margin-bottom-xsmall">Nos services</p>
               <p><a href="<?php echo get_permalink('71'); ?>">Réparations et récupérations</a></p>
          </div>
          <div class="footer__category center">
               <p class="u-margin-bottom-xsmall">Politiques & Conditions</p>
               <p><a href="<?php echo get_permalink('68'); ?>">Politique de confidentialité</a></p>
               <p><a href="<?php echo get_permalink('68'); ?>">Politique des conditions de ventes</a></p>
          </div>
          <div class="footer__category center">
               <p class="u-margin-bottom-xsmall">Réseaux sociaux</p>
               <div class="footer__category--social flex">
                    <a href="https://twitter.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="Twitter"></a>
                    <a href="https://www.facebook.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram"></a>
               </div>
          </div>
     </div>
     <p class="center footer__allrights">Tous droits réservés @2020 VLuxe</p>
</footer>
</body>

</html>
