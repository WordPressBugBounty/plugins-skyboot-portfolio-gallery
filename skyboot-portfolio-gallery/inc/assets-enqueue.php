<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Enqueue styles and scripts
function skyboot_portfolio_gallery_enqueue() {

    // Styles
    wp_enqueue_style( 'skb-framework-css', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/css/skb-framework.css', array(), '1.0.0' );
    wp_enqueue_style( 'skb-venobox', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/css/venobox.css', array(), SKYBOOT_PORTFOLIO_GALLERY_VERSION );
    wp_enqueue_style( 'skyboot-portfolio-style', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/css/skyboot-portfolio-style.css', array(), SKYBOOT_PORTFOLIO_GALLERY_VERSION );
    wp_enqueue_style( 'skb-portfolio-responsive', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/css/responsive.css', array(), SKYBOOT_PORTFOLIO_GALLERY_VERSION );

    // Scripts
    wp_enqueue_script( 'skb-modernizr', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/js/modernizr-2.8.3.min.js', array( 'jquery' ), '2.8.3', false );
    wp_enqueue_script( 'imagesloaded' );
    wp_enqueue_script( 'skb-isotope', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/js/isotope.pkgd.min.js', array( 'jquery', 'imagesloaded' ), SKYBOOT_PORTFOLIO_GALLERY_VERSION, true );
    wp_enqueue_script( 'skb-hoverdir', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/js/jquery.hoverdir.js', array( 'jquery' ), SKYBOOT_PORTFOLIO_GALLERY_VERSION, true );
    wp_enqueue_script( 'skb-venobox', SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL . 'assets/js/venobox.js', array( 'jquery' ), SKYBOOT_PORTFOLIO_GALLERY_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'skyboot_portfolio_gallery_enqueue' );
