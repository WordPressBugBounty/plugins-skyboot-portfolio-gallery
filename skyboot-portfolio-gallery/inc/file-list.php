<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include custom post type registration
if ( file_exists( SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/custom-post-register.php' ) ) {
    include_once SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/custom-post-register.php';
}

// Include custom taxonomies

if ( file_exists( SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/custom-taxonomies.php' ) ) {
    include_once SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/custom-taxonomies.php';
}


// Plugin status
if ( file_exists( SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/plugin-status.php' ) ) {
    include_once SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/plugin-status.php';
}

// Assets enqueue
if ( file_exists( SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/assets-enqueue.php' ) ) {
    include_once SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/assets-enqueue.php';
}

// Elementor widgets
function skyboot_portfolio_gallery_elementor_widgets() {
    include_once SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/widget/elementor-widgets.php';
}
add_action( 'elementor/widgets/register', 'skyboot_portfolio_gallery_elementor_widgets' );