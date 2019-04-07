<?php

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/vendor/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/vendor/setup.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/vendor/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/vendor/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/vendor/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/vendor/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/vendor/bootstrap-wp-navwalker.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/vendor/editor.php';
