<?php
/**
 * Check and setup theme's default settings
 *
 * @package ff_base
 *
 */

if ( ! function_exists( 'ff_base_setup_theme_default_settings' ) ) :
	function ff_base_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$ff_base_posts_index_style = get_theme_mod( 'ff_base_posts_index_style' );
		if ( '' == $ff_base_posts_index_style ) {
			set_theme_mod( 'ff_base_posts_index_style', 'default' );
		}

		// Sidebar position.
		$ff_base_sidebar_position = get_theme_mod( 'ff_base_sidebar_position' );
		if ( '' == $ff_base_sidebar_position ) {
			set_theme_mod( 'ff_base_sidebar_position', 'right' );
		}

		// Container width.
		$ff_base_container_type = get_theme_mod( 'ff_base_container_type' );
		if ( '' == $ff_base_container_type ) {
			set_theme_mod( 'ff_base_container_type', 'container' );
		}
	}
endif;
