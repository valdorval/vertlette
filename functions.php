<?php

// function create_post_type()
// {
//     new App\Nouvelles();
// }

// custom post type pour la page nouvelles
add_action('init', 'create_post_type_nouvelles', 10, 1);

function create_post_type_nouvelles()
{
    $label = array(
        'name'               => __('Articles', 'vluxe'),
        'singular name'      => __('Article', 'vluxe'),
        'menu_name'          => _x('Nouvelles', 'Admin menu name', 'vluxe'),
        'add_new'            => __('Ajouter un article', 'vluxe'),
        'add_new_item'       => __('Ajouter un article', 'vluxe'),
        'edit'               => __('Modifier l\'article', 'vluxe'),
        'new_item'           => __('Nouvel article', 'vluxe'),
        'view'               => __('Voir l\'article', 'vluxe'),
        'view_item'          => __('Voir l\'article', 'vluxe'),
        'search_items'       => __('Chercher un article', 'vluxe'),
        'not_found'          => __('Aucun article trouvé', 'vluxe'),
        'not_found_in_trash' => __('Aucun article trouvé dans la corbeille', 'vluxe'),
        'parent'             => __('Article parent', 'vluxe'),
    );

    $args = array(
        'labels'              => $label,
        'public'              => true,
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'supports'            => array('title', 'editor', 'author', 'thumbnail', 'page-attributes'),
        'rewrite'             => array('slug' => 'archivres/nouvelles', 'with_front' => true)
    );
    register_post_type('nouvelles', $args);
}

function enqueue_styles_vluxe()
{
    wp_enqueue_style('style-principal', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('style-vluxe', get_template_directory_uri() . '/style.css');
}

function vluxe_supports()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('portfolio', 600, 400, true);
    add_theme_support('menus');
    add_theme_support('woocommerce');
    register_nav_menu('main_nav', 'Navigation en-tête');
    register_nav_menu('footer_nav', 'Pied de page');

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

// function remove_img_attr($html)
// {
//     return preg_replace('/(width|height)="\d+"\s/', "", $html);
// }

// add_filter('post_thumbnail_html', 'remove_img_attr');


// function wpdocs_setup_theme()
// {
//     add_theme_support('post-thumbnails');
//     set_post_thumbnail_size(150, 150);
// }
// add_action('after_setup_theme', 'wpdocs_setup_theme');

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
