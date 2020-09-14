<?php

function enqueue_styles_vluxe() {
     wp_enqueue_style('style-vluxe', get_template_directory_uri().'/style.css');
     wp_enqueue_style('style-principal', get_template_directory_uri().'/css/main.css');
}

<<<<<<< HEAD
<<<<<<< HEAD
=======
function vluxe_supports()
{
     add_theme_support('menus');
     add_theme_support('woocommerce');
     register_nav_menus(array(
          'primary' => __('Navigation en-tête', 'vluxe'),
     ));
}

function vluxe_menu_class($classes)
{
     unset($classes);
     $classes[] = 'nav__menu--item';
     return $classes;
}

add_action('after_setup_theme', 'vluxe_supports');
>>>>>>> parent of fe20a0f... ajustement fichier fonction
=======
>>>>>>> parent of 25ffc23... Merge branch 'master' of https://github.com/valdorval/vertlette
add_action('wp_enqueue_scripts', 'enqueue_styles_vluxe');

// print(get_template_directory_uri().'/css/main.css/');