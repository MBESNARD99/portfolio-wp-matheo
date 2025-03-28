<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function create_portfolio_cpt() {
    $labels = array(
        'name'               => _x('Portfolios', 'post type general name', 'textdomain'),
        'singular_name'      => _x('Portfolio', 'post type singular name', 'textdomain'),
        'menu_name'          => _x('Portfolio', 'admin menu', 'textdomain'),
        'name_admin_bar'     => _x('Portfolio', 'add new on admin bar', 'textdomain'),
        'add_new'            => _x('Ajouter Nouveau', 'portfolio', 'textdomain'),
        'add_new_item'       => __('Ajouter Nouveau Portfolio', 'textdomain'),
        'new_item'           => __('Nouveau Portfolio', 'textdomain'),
        'edit_item'          => __('Modifier Portfolio', 'textdomain'),
        'view_item'          => __('Voir Portfolio', 'textdomain'),
        'all_items'          => __('Tous les Portfolios', 'textdomain'),
        'search_items'       => __('Rechercher dans les Portfolios', 'textdomain'),
        'parent_item_colon'  => __('Portfolios Parental:', 'textdomain'),
        'not_found'          => __('Aucun Portfolio trouvé.', 'textdomain'),
        'not_found_in_trash' => __('Aucun Portfolio trouvé dans la corbeille.', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'show_in_admin_bar'  => true,
        'show_ui'            => true,
        'supports'           => array('title', 'editor', 'thumbnail'), // Titre, éditeur, image mise en avant
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'portfolio'), // Permalien personnalisé
        'menu_icon'          => 'dashicons-format-gallery', // Icône du menu
        'capability_type'    => 'post',
        'taxonomies'         => array('category'), // Catégories
    );

    register_post_type('portfolio', $args);
}

add_action('init', 'create_portfolio_cpt');