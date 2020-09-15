<?php
function enqueue_styles_vluxe()
{
    wp_enqueue_style('style-principal', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('style-vluxe', get_template_directory_uri() . '/style.css');
}

function vluxe_supports()
{

    //     add_theme_support('automatic-feed-links');
    //     add_theme_support('title-tag');
    //     add_theme_support('post-thumbnails');
    //     add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Navigation en-tête', 'vluxe'),
    ));
    //     add_theme_support('html5', array(
    //         'comment-list',
    //         'comment-form',
    //         'search-form',
    //         'gallery',
    //         'caption',
    //         'style',
    //         'script'
    //     ));
}

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

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
