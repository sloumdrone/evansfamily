<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ff_base
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'ff_base_container_type' );
?>

<?php ff_get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
							
						<?php
							$footer_format = "&copy; %s FormulaFolios";
							printf($footer_format, date( 'Y' ) );
						?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php get_template_part('template-parts/utilities/tracking-pixel-footer'); ?>

<?php wp_footer(); ?>

</body>

</html>

