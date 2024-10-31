<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.5
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Pastebin shortcode
 * Register shortcode handler.
 *
 * usage: [pastebin id=""]
 *
 * @since 1.5
 */
function pastebin_shortcode( $atts ) {

	// Set default attributes
	$atts = shortcode_atts(
		array(
			'id' => '',
		), $atts
	);

	// Embed code
	$embed_code = '<script src="//pastebin.com/embed_js/' . $atts['id'] . '"></script>';

	// Return embed code
	return $embed_code;

}
add_shortcode( 'pastebin', 'pastebin_shortcode' );
