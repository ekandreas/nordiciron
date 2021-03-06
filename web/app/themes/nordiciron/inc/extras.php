<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package nordiciron
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function nordiciron_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'nordiciron_body_classes' );

/**
 * Custom Read More Button
 */

function modify_read_more_link() {
	return '<br/><a class="more-link" href="' . get_permalink() . '">'. __( 'Läs mer <span>&rsaquo;</span>', 'nordiciron' ). '</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function custom_excerpt_more( $more ) {
	return '[.....]';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
