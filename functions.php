<?php

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

add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_length($length)
{
    return 15;
}

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more)
{
    return '';
}

// custom post type pour la page nouvelles
add_action('init', 'create_post_type_nouvelles', 10, 1);
function create_post_type_nouvelles()
{
    $label = array(
        'name'               => __('Nouvelle', 'vluxe'),
        'singular name'      => __('Nouvelle', 'vluxe'),
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


add_action('init', 'create_taxonomy_nouvelles', 10, 1);
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

add_action('wp_enqueue_scripts', 'enqueue_styles_vluxe');
function enqueue_styles_vluxe()
{
    wp_enqueue_style('style-principal', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('style-vluxe', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_vluxe');
function enqueue_scripts_vluxe()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js', array(), '3.1.1', true);
    wp_enqueue_script('js-file', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}

add_action('after_setup_theme', 'vluxe_supports');
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
            'script',
            'navigation-widgets'
        ]
    );
}

//nav_menu_submenu_css_class
add_filter('nav_menu_css_class', 'vluxe_menu_class', 10, 4);
function vluxe_menu_class($classes)
{
    unset($classes);
    $classes[] = 'nav__menu--item';
    return $classes;
}

add_action('widgets_init', 'my_widget_init');
function my_widget_init()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar1',
    ));
}

add_action('widgets_init', 'contact_widget_init');
function contact_widget_init()
{
    register_sidebar(array(
        'name' => 'Sidebar2',
        'id' => 'sidebar2',
    ));
}

// changer le role de sunscriber pour membre corporatif
// lorsque le produit est acheté
add_action('woocommerce_order_status_processing', 'change_role_on_purchase');
function change_role_on_purchase($order_id)
{

    $order = new WC_Order($order_id);
    $items = $order->get_items();

    foreach ($items as $item) {
        $product_name = $item['name'];
        $product_id = $item['product_id'];
        $product_variation_id = $item['variation_id'];

        if ($order->user_id > 0 && $product_id == '257') {
            update_user_meta($order->user_id, 'paying_customer', 1);
            $user = new WP_User($order->user_id);

            // Remove role
            $user->remove_role('subscriber');

            // Add role
            $user->add_role('membre_corporatif');
        }
    }
}

// N'affiche pas les produits corporatif dans la boutique
add_action('woocommerce_product_query', 'ts_custom_pre_get_posts_query');
function ts_custom_pre_get_posts_query($q)
{
    if (is_shop()) {
        $tax_query = (array) $q->get('tax_query');
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => array('corporatif'),
            'operator' => 'NOT IN'
        );
        $q->set('tax_query', $tax_query);
    }
}

// N'affiche pas les catégories non-classe et corporatif dans la sidebar
// de la boutique
add_filter('get_terms', 'ts_get_subcategory_terms', 10, 3);
function ts_get_subcategory_terms($terms, $taxonomies, $args)
{
    $new_terms = array();
    // if it is a product category and on the shop page
    if (in_array('product_cat', $taxonomies) && is_shop()) {
        foreach ($terms as $key => $term) {
            if (!in_array($term->slug, array('non-classe', 'corporatif', 'vogue', 'promotions'))) { //pass the slug name here
                $new_terms[] = $term;
            }
        }
        $terms = $new_terms;
    }
    return $terms;
}

// pour les catégorie de la boutique normal
// N'affiche pas les catégories non-classe et corporatif dans la sidebar
// lorsqu'on entre dans une catégorie spécifique
add_filter('get_terms', 'corpo_sidebar_category_terms', 10, 3);
function corpo_sidebar_category_terms($terms, $taxonomies, $args)
{
    $new_terms = array();
    // if it is a product category and on the shop page
    if (in_array('product_cat', $taxonomies) && is_tax('product_cat')) {
        foreach ($terms as $key => $term) {
            if (!in_array($term->slug, array('non-classe', 'vogue', 'promotions', ('corporatif')))) { //pass the slug name here
                $new_terms[] = $term;
            }
        }
        $terms = $new_terms;
    }
    return $terms;
}
