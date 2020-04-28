<?php
/**
 * Functions which enhance the theme by hooking into WordPress.
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 2.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets the post excerpt length to 20 words.
 *
 * Function tied to the excerpt_length filter hook.
 *
 * @param int $length The excerpt length.
 *
 * @return int The filtered excerpt length.
 * @uses filter excerpt_length
 */
function colormag_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'colormag_excerpt_length' );


/**
 * Returns a "Continue Reading" link for excerpts.
 */
function colormag_continue_reading() {
	return '';
}

add_filter( 'excerpt_more', 'colormag_continue_reading' );


/**
 * Removing the default style of WordPress gallery.
 */
add_filter( 'use_default_gallery_style', '__return_false' );

/**
 * Filtering the size to be full from thumbnail to be used in WordPress gallery as a default size.
 *
 * @param array $out   The output array of shortcode attributes.
 * @param array $pairs The supported attributes and their defaults.
 * @param array $atts  The user defined shortcode attributes.
 *
 * @return mixed
 */
function colormag_gallery_atts( $out, $pairs, $atts ) {
	$atts = shortcode_atts(
		array(
			'size' => 'colormag-featured-image',
		),
		$atts
	);

	$out['size'] = $atts['size'];

	return $out;
}

add_filter( 'shortcode_atts_gallery', 'colormag_gallery_atts', 10, 3 );


/**
 * Removing the more link jumping to middle of content.
 *
 * @param string $link Read More link element.
 *
 * @return string|string[]
 */
function colormag_remove_more_jump_link( $link ) {
	$offset = strpos( $link, '#more-' );

	if ( $offset ) {
		$end = strpos( $link, '"', $offset );
	}

	if ( $end ) {
		$link = substr_replace( $link, '', $offset, $end - $offset );
	}

	return $link;
}

add_filter( 'the_content_more_link', 'colormag_remove_more_jump_link' );