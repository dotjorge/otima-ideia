<?php
/**
 * The header for our theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

		<header>
			<div class="logo">Logo</div>
			<div class="menu">
				<ul>
					<li>Projects</li>
					<li>Partners</li>
					<li>FAQ</li>
					<li>Masters</li>
					<li>Classes</li>
					<li>Course Experience</li>
					<li>About us</li>
				</ul>
			</div>
			<a href="#" class="register-btn">Botao</a>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
