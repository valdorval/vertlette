<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
     <title>Vertlette</title>
     <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

     <header class="header">
          <div class="header__box">
               <div class="header__content container-big flex">
                    <div class="header__logo">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/logo-v-luxe.svg" alt="Image du logo">
                    </div>
                    <div class="header__items">
                         <nav class="header__items--nav flex">
                              <a href="<?php echo get_permalink('50'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/compte.svg" alt="Mon compte"></a>
                              <a href="<?php echo get_permalink('48'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/panier.svg" alt="Panier"></a>
                         </nav>
                    </div>
               </div>

          </div>

          <nav class="nav">
               <?php wp_nav_menu(
                    array(
                         'theme_location' => 'main_nav',
                         'container' => 'ul',
                         'menu_class' => 'nav__menu container-big flex center'
                    )
               ); ?>

          </nav>

          <div class="header__message">
               <p class="center">Livraison gratuite à partir de 2 500$ d'achats</p>
               <span class="header__message--close" id="messageClose">X</span>
          </div>
     </header>