<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package healthymother
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function healthymother_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'healthymother_jetpack_setup' );
