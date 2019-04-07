<?php
/**
 * Hero setup.
 *
 * @package ff_base
 */

?>

<?php if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) ) : ?>

	<div class="wrapper" id="wrapper-hero">
	
		<?php ff_get_sidebar( 'hero' ); ?>
		
		<?php ff_get_sidebar( 'static-hero' ); ?>

	</div>

<?php endif; ?>
