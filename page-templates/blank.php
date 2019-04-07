<?php
/**
 * Template Name: Blank Page Template
 *
 * Template for displaying a blank page.
 *
 * @package ff_base
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title"
		content="<?php bloginfo( 'name' );?> - <?php bloginfo( 'description' );?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>">
	<?php wp_head();?>
</head>
<body>
<?php ff_get_header( 'header' );

while ( have_posts() ): the_post();
    get_template_part( 'template-parts/loops/content', 'empty' );
endwhile;

ff_get_footer( 'footer' );?>
</body>
</html>
