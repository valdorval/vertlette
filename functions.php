<?php

function enqueue_styles_vluxe() {
     wp_enqueue_style('style-vluxe', get_template_directory_uri().'/style.css');
     wp_enqueue_style('style-principal', get_template_directory_uri().'/css/main.css');
}

<<<<<<< HEAD
function vluxe_supports()
{
     add_theme_support('automatic-feed-links');
     add_theme_support('title-tag');
     add_theme_support('post-thumbnails');
     add_theme_support('menus');
     add_theme_support('woocommerce');
     register_nav_menus(array(
          'primary' => __('Navigation en-tête', 'vluxe')
     ));
     add_theme_support(
          'html5',
          [
               'search-form',
               'comment-form',
               'comment-list',
               'gallery',
               'caption',
               'style',
               'script'
          ]
     );
}

function vluxe_menu_class($classes)
{
     unset($classes);
     $classes[] = 'nav__menu--item';
     return $classes;
}

add_action('after_setup_theme', 'vluxe_supports');
=======
>>>>>>> parent of 25ffc23... Merge branch 'master' of https://github.com/valdorval/vertlette
add_action('wp_enqueue_scripts', 'enqueue_styles_vluxe');

// print(get_template_directory_uri().'/css/main.css/');