<?php 
/*
Plugin Name: Skyboot Portfolio Gallery for Elementor
Plugin URI:   https://skybootstrap.com/plugins/portfolio-gallery/
Description:  Create a clean portfolio photo gallery on your Elementor website to showcase your work with masonry layouts and filterable image galleries.
Version:      1.0.5
Author:       Skybootstrap
Author URI:   https://skybootstrap.com/
License:      GPLv3
License URI:  https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:  skyboot-pg
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Skyboot Portfolio Gallery Version
define( 'SKYBOOT_PORTFOLIO_GALLERY_VERSION', '1.0.5' );

// Plugins URL
define( 'SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


// Includes Directory 
define( 'SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY', dirname( __FILE__ ) ); 


// Include File
if ( file_exists( SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/file-list.php' ) ) {
    include_once SKYBOOT_PORTFOLIO_GALLERY_PLUGIN_DIRECTORY . '/inc/file-list.php';
}

