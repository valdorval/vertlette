<?php

namespace App;

class Nouvelles
{
    public function __construct()
    {
        $this->create_post_type();
        $this->create_taxonomies();
    }

    /**
     * Creating post type
     */

    public function create_post_type()
    {
        $label = array(
            'name'               => __('Articles', 'vluxe'),
            'singular name'      => __('Article', 'vluxe'),
            'menu_name'          => _x('Articles', 'Admin menu name', 'vluxe'),
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
}
