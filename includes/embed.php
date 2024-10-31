<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Pastebin embed
 * Register embed handler.
 *
 * @since 1.0
 */
function pastebin_embed_handler( $matches, $attr, $url, $rawattr ) {

	$scheme     = is_ssl() ? 'https' : 'http';
	$paste_id   = esc_attr( $matches[1] );
	$embed_code = '<script src="' . $scheme . '://pastebin.com/embed_js.php?i=' . $paste_id . '"></script>';

	return apply_filters( 'embed_pastebin', $embed_code, $matches, $attr, $url, $rawattr );

}
function pastebin_embed() {

	wp_embed_register_handler(
		'pastebin',
		'#http://pastebin.com/(.*)#i',
		'pastebin_embed_handler'
	);

}
add_action( 'init', 'pastebin_embed' );
