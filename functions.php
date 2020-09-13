<?php

function enqueue_styles_vluxe()
{
     wp_enqueue_style('style-vluxe', get_template_directory_uri() . '/style.css');
     wp_enqueue_style('style-principal', get_template_directory_uri() . '/css/main.css');
}

function vluxe_supports()
{
     add_theme_support('menus');
     register_nav_menu('main_nav', 'Navigation en-tête');
}

function vluxe_menu_class($classes)
{
     unset($classes);
     $classes[] = 'nav__menu--item';
     return $classes;
}

add_action('after_setup_theme', 'vluxe_supports');
add_action('wp_enqueue_scripts', 'enqueue_styles_vluxe');
add_filter('nav_menu_css_class', 'vluxe_menu_class', 10, 4);

//nav_menu_submenu_css_class