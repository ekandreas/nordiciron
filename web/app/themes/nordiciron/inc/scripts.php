<?php
/**
 * Enqueue scripts and styles.
 */
function nordiciron_scripts() {
	wp_enqueue_style( 'nordiciron-style', get_template_directory_uri() . '/style.min.css' );

	wp_enqueue_script( 'nordiciron-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );

	wp_enqueue_style( 'nordiciron-questrial', '//fonts.googleapis.com/css?family=Questrial' );

	wp_enqueue_style( 'nordiciron-sanchez', '//fonts.googleapis.com/css?family=Sanchez:400italic,400' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nordiciron_scripts' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nordiciron_customize_preview_js() {
	wp_enqueue_script( 'nordiciron_customizer', get_template_directory_uri() . '/js/src/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'nordiciron_customize_preview_js' );