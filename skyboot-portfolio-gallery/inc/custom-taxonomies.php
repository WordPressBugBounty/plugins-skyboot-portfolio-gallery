<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Taxonomy for Portfolio Gallery
 */
if ( ! function_exists( 'skyboot_portfolio_post_type_taxonomy' ) ) {
    function skyboot_portfolio_post_type_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Categories', 'Taxonomy General Name', 'skyboot-pg' ),
            'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'skyboot-pg' ),
            'menu_name'                  => __( 'Categories', 'skyboot-pg' ),
            'all_items'                  => __( 'All Categories', 'skyboot-pg' ),
            'parent_item'                => __( 'Parent Category', 'skyboot-pg' ),
            'parent_item_colon'          => __( 'Parent Category:', 'skyboot-pg' ),
            'new_item_name'              => __( 'New Category Name', 'skyboot-pg' ),
            'add_new_item'               => __( 'Add New Category', 'skyboot-pg' ),
            'edit_item'                  => __( 'Edit Category', 'skyboot-pg' ),
            'update_item'                => __( 'Update Category', 'skyboot-pg' ),
            'view_item'                  => __( 'View Category', 'skyboot-pg' ),
            'separate_items_with_commas' => __( 'Separate categories with commas', 'skyboot-pg' ),
            'add_or_remove_items'        => __( 'Add or remove categories', 'skyboot-pg' ),
            'choose_from_most_used'      => __( 'Choose from the most used categories', 'skyboot-pg' ),
            'popular_items'              => __( 'Popular Categories', 'skyboot-pg' ),
            'search_items'               => __( 'Search Categories', 'skyboot-pg' ),
            'not_found'                  => __( 'No categories found', 'skyboot-pg' ),
            'no_terms'                   => __( 'No categories', 'skyboot-pg' ),
            'items_list'                 => __( 'Categories list', 'skyboot-pg' ),
            'items_list_navigation'      => __( 'Categories list navigation', 'skyboot-pg' ),
        );

        $args = array(
            'labels'            => $labels,
            'hierarchical'      => true,
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
        );

        register_taxonomy( 'skyboot_portfolio_cat', array( 'skyboot_portfolio' ), $args );
    }
    add_action( 'init', 'skyboot_portfolio_post_type_taxonomy', 0 );
}
