<?php
// template pour l'affichage d'un article
?>
<h2> <?php echo the_title(); ?> </h2>
<p> <?php echo the_content(); ?></p>
<h6> <?php echo get_the_author(); ?></h6>
