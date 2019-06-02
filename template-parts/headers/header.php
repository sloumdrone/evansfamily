<?php
/**
 * The header for our theme.
 *
 * @package ff_base
 */

if ( ! is_user_logged_in() ) {
    $url = get_site_url( null, '/wp-login.php' );
    header("Location: $url");
    die("Redirect failed after unauthorized user tried to access private content.");
}

$container = get_theme_mod( 'ff_base_container_type' );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Evans Family Web Album">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="shell mainheader">
        <nav class="container">
            <ul class="menu row">
                <li class="col-md-2 col-12 text-md-left text-center order-2 order-md-1 mt-3 mt-md-0"><a href="<?= get_site_url(); ?>" class="navlink">HOME</a></li>
                <li class="col-md-2 col-12 text-center order-3 order-md-2"><a href="<?= get_site_url( null, '/?page_id=12' ); ?>" class="navlink">BLOG</a></li>
                <li class="col-md-4 col-12 font-weight-bold text-center order-1 order-md-3 title"><a href="<?= get_site_url(); ?>" class="navlink">E V A N S</a><button class="arrow d-md-none" aria-label="Toggle menu"></button> </li>
                <li class="col-md-2 col-12 text-center text-md-left order-4"><a href="<?= get_site_url( null, '/?p=38' ); ?>" class="navlink">GALLERY</a></li>
                <li class="col-md-2 col-12 text-center text-md-right order-5"><a href="<?= get_site_url( null, '/wp-login.php?action=logout' ); ?>" class="navlink">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
