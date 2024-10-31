<?php
/*
Plugin Name: Pastebin
Plugin URI:  https://wordpress.org/plugins/pastebin-embed/
Description: Embed pastes from pastebin.com into your WordPress site.
Version:     1.5
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: pastebin-embed
*/



/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.2
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 *
 * @since 1.5
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/embed.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/shortcode.php' );
