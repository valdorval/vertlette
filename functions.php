<?php

// function create_post_type()
// {
//     new App\Nouvelles();
// }

// custom post type pour live youtube
add_action('init', 'create_post_type_video', 10, 1);

function create_post_type_video()
{
    $label = array(
        'name'               => __('Live youtube', 'vluxe'),
        'singular name'      => __('Vidéo', 'vluxe'),
        'menu_name'          => _x('Vidéos', 'Admin menu name', 'vluxe'),
        'add_new'            => __('Ajouter une vidéo', 'vluxe'),
        'add_new_item'       => __('Ajouter une vidéo', 'vluxe'),
        'edit'               => __('Modifier le vidéo', 'vluxe'),
        'new_item'           => __('Nouveau vidéo', 'vluxe'),
        'view'               => __('Voir le vidéo', 'vluxe'),
        'view_item'          => __('Voir le vidéo', 'vluxe'),
        'search_items'       => __('Chercher une vidéo', 'vluxe'),
        'not_found'          => __('Aucune vidéo trouvée', 'vluxe'),
        'not_found_in_trash' => __('Aucune vidéo trouvée dans la corbeille', 'vluxe'),
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
    register_post_type('video', $args);
}

function new_excerpt_length($length)
{
    return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more)
{
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// custom post type pour la page nouvelles
add_action('init', 'create_post_type_nouvelles', 10, 1);
add_action('init', 'create_taxonomy_nouvelles', 10, 1);

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

function create_taxonomy_nouvelles()
{
    $labels = [
        'name'                  => _x('Nouvelle catégorie', 'taxonomy general name', 'vluxe'),
        'singular_name'         => _x('Nouvelle catégorie', 'taxonomy singular name', 'vluxe'),
        'search_items'          => __('Recherche de catégorie', 'vluxe'),
        'all_items'             => __('Toutes les catégories', 'vluxe'),
        'parent_item'           => __('Catégorie parent', 'vluxe'),
        'parent_item_colon'     => __('Catégorie parent', 'vluxe'),
        'edit_item'             => __('Éditer la catégorie', 'vluxe'),
        'update_item'           => __('Mettre à jour la catégorie', 'vluxe'),
        'add_new_item'          => __('Ajouter une nouvelle catégorie', 'vluxe'),
        'new_item_name'         => __('Nouvelle catégorie', 'vluxe'),
        'menu_name'             => __('Catégorie', 'vluxe')
    ];

    $args = [
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'categorie', 'with_front' => true),
    ];
    register_taxonomy('vluxe_nouvelles_categorie', array('nouvelles'), $args);
}

function enqueue_styles_vluxe()
{
    wp_enqueue_style('style-principal', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('style-vluxe', get_template_directory_uri() . '/style.css');
}

function enqueue_scripts_vluxe()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], false, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('js-file', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
}

function vluxe_supports()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('promotions', 600, 438);
    add_theme_support('menus');
    add_theme_support('woocommerce');
    register_nav_menu('main_nav', 'Navigation en-tête');
    register_nav_menu('magasin', 'Compte et panier');

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

// lorsqu'il y a une promotion, le prix regulier sera line-through (a tester, il faudra enlever le lin-through en css)
function bbloomer_change_cart_table_price_display($price, $values, $cart_item_key)
{
    $slashed_price = $values['data']->get_price_html();
    $is_on_sale = $values['data']->is_on_sale();
    if ($is_on_sale) {
        $price = $slashed_price;
    }
    return $price;
}

add_action('init', 'init_remove_support', 100);
function init_remove_support()
{
    $post_type = 'video';
    remove_post_type_support($post_type, 'video');
}

function vluxe_menu_class($classes)
{
    unset($classes);
    $classes[] = 'nav__menu--item';
    return $classes;
}

add_action('after_setup_theme', 'vluxe_supports');
add_action('wp_enqueue_scripts', 'enqueue_styles_vluxe');
add_action('wp_enqueue_scripts', 'enqueue_scripts_vluxe');
add_filter('nav_menu_css_class', 'vluxe_menu_class', 10, 4);
add_filter('woocommerce_cart_item_price', 'bbloomer_change_cart_table_price_display', 30, 3);

//nav_menu_submenu_css_class
