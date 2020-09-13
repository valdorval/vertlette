<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
     <title>V.Luxe</title>
     <?php wp_head(); ?>
</head>

<body>

     <header class="header">
          <div class="header__box flex">
               <div class="header__logo container-big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-v-luxe.svg" alt="Image du logo">
               </div>
               <?php get_search_form() ?>
          </div>
          <nav class="nav" id="main_nav">

               <?php wp_nav_menu([
                    'theme_location' => 'main_nav',
                    'container' => 'ul',
                    'menu_class' => 'nav__menu container-big flex center'
               ]); ?>
               <!-- <ul class="nav__menu container-big flex">
                    <li class="nav__menu--item"><a href="index.php" class="center">Accueil</a></li>
                    <li class="nav__menu--item"><a href="#" class="center">Boutique</a>
                         <ul class="nav__submenu">
                              <li class="nav__submenu--item"><a href="#" class="center">Boutique</a></li>
                              <li class="nav__submenu--item"><a href="#" class="center">Boutique corporative</a></li>
                         </ul>
                    </li>
                    <li class="nav__menu--item"><a href="news.php" class="center">Nouvelles</a></li>
                    <li class="nav__menu--item"><a href="abonnement.php" class="center">Abonnement</a></li>
                    <li class="nav__menu--item"><a href="reparation.php" class="center">Réparation & Récupération</a></li>
                    <li class="nav__menu--item"><a href="live.php" class="center">Live YouTube</a></li>
                    <li class="nav__menu--item"><a href="contact.php" class="center">Nous contacter</a></li>
                    <li class="nav__menu--item"><a href="about.php" class="center">À propos</a></li>
               </ul> -->
          </nav>
          <div class="header__message">
               <p class="center">Livraison gratuite à partir de 2 500$ d'achats</p>
          </div>
     </header>