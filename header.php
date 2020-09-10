<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
     <title>Vertlette</title>
     <?php wp_head(); ?>
</head>

<body>

     <header class="header">
          <div class="header__box">
               <div class="header__logo container-big">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-v-luxe.svg" alt="Image du logo">
               </div>
          </div>
          <nav class="nav">
               <ul class="nav__menu container-big flex">
                    <li class="nav__menu--item"><a href="#" class="center">Accueil</a></li>
                    <li class="nav__menu--item"><a href="#" class="center">Boutique</a>
                         <ul class="nav__submenu">
                              <li class="nav__submenu--item"><a href="#" class="center">Boutique</a></li>
                              <li class="nav__submenu--item"><a href="#" class="center">Boutique corporative</a></li>
                         </ul>
                    </li>
                    <li class="nav__menu--item"><a href="#" class="center">Nouvelles</a></li>
                    <li class="nav__menu--item"><a href="#" class="center">Abonnement</a></li>
                    <li class="nav__menu--item"><a href="#" class="center">Réparation & Récupération</a></li>
                    <li class="nav__menu--item"><a href="#" class="center">Live YouTube</a></li>
                    <li class="nav__menu--item"><a href="#" class="center">Nous contacter</a></li>
                    <li class="nav__menu--item"><a href="#" class="center">À propos</a></li>
               </ul>
          </nav>
          <div class="header__message">
               <p class="center">Livraison gratuite à partir de 2 500$ d'achats</p>
          </div>
     </header>
     <h1>Test</h1>
     <h2>Oups</h2>