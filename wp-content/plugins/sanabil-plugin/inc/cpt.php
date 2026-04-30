<?php

// Register Custom Post Type
function register_Product_post_type() {
    $labels = array(
        'name'                  => _x('products', 'Post Type General Name', 'sanabil-plugin'),
        'singular_name'         => _x('product', 'Post Type Singular Name', 'sanabil-plugin'),
        'menu_name'            => __('Products', 'sanabil-plugin'),
        'all_items'            => __('All products', 'sanabil-plugin'),
        'add_new_item'         => __('Add New product', 'sanabil-plugin'),
        'add_new'              => __('Add New', 'sanabil-plugin'),
        'edit_item'            => __('Edit product', 'sanabil-plugin'),
        'update_item'          => __('Update product', 'sanabil-plugin'),
        'search_items'         => __('Search product', 'sanabil-plugin'),
    );

    $args = array(
        'label'                 => __('product', 'sanabil-plugin'),
        'labels'                => $labels,
        'supports'              => ["title","editor","thumbnail","excerpt","author","comments","custom-fields"],
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-admin-post',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('Product', $args);
}
add_action('init', 'register_Product_post_type', 0);