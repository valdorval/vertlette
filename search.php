<?php
get_header();
?>

<section class="result container u-margin-top-big">
     <h1 class="heading-tertiary center">Résultats de la recherche</h1>


     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

               <div class="flex">
                    <?php if (has_post_thumbnail()) : ?>
                         <div class="result__thumbnail u-margin-bottom-big">
                              <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                         </div>
                    <?php endif; ?>
                    <div class="result__text">
                         <h4 class="heading-quaternary heading-quaternary--dark"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                         <?php echo the_content(); ?>
                    </div>
               </div>

          <?php endwhile;
     else : ?>

          <p class="p-dark u-margin-top-big u-margin-bottom-big u-padding-bottom-normal"><?php esc_html_e('Désolé, aucun résultat n\'a été trouvé pour votre recherche.'); ?></p>
     <?php endif; ?>

</section>
<?php
get_footer();
?>