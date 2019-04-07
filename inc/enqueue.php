<?php
/**
 * ff_base enqueue scripts
 *
 * @package ff_base
 */

if ( ! function_exists( 'ff_base_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function ff_base_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'ff_base-styles', get_stylesheet_directory_uri() . '/assets/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/assets/js/popper.min.js', array(), true);
		wp_enqueue_script( 'ff_base-scripts', get_template_directory_uri() . '/assets/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'ff_base-custom-scripts', get_template_directory_uri() . '/assets/js/custom.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'ff_base_scripts' ).

add_action( 'wp_enqueue_scripts', 'ff_base_scripts' );
