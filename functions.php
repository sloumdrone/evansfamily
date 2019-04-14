<?php
/**
 * ff_base functions and definitions
 *
 * @package ff_base
 */

/**
 * Load Vendor files
 */
require get_template_directory() . '/inc/vendor-includes.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Remove Comments. Comments are off by default.
 */
// require get_template_directory() . '/inc/remove-comments.php';

/**
 * Load Theme Utilities.
 */
require get_template_directory() . '/inc/theme-utils.php';
