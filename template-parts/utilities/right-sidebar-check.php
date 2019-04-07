<?php
/**
 * Right sidebar check.
 *
 * @package ff_base
 */
?>

<?php $sidebar_pos = get_theme_mod( 'ff_base_sidebar_position' ); ?>

<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

  <?php ff_get_sidebar( 'right' ); ?>

<?php endif; ?>
