<?php
/**
 * Template Name: Gallery
 *
 * Template for displaying gallery archive
 *
 * @package ff_base
 */

ff_get_header( 'header' );

$query = new WP_Query( array(
'posts_per_page' => -1,
'no_found_rows'  => true,
'tag'            => 'gallery'
) );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'template-parts/utilities/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'template-parts/utilities/left-sidebar-check' ); ?>

			  <main class="site-main" id="main">

				    <?php if ( $query->have_posts() ) : ?>

					      <?php /* Start the Loop */ ?>

					      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

						        <?php

						        /*
						         * Include the Post-Format-specific template for the content.
						         * If you want to override this in a child theme, then include a file
						         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						         */
						        get_template_part( 'template-parts/loops/content', get_post_format() );
						        ?>

					      <?php endwhile; ?> wp_reset_postdata();

				<?php else : ?>

					<?php get_template_part( 'template-parts/loops/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php ff_base_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'template-parts/utilities/right-sidebar-check' ); ?>
		

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php ff_get_footer( 'footer' ); ?>
