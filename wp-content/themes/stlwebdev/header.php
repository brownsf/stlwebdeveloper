<?php
/**
 * The Header for our theme
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-3.2.0/js/html5.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap-3.2.0/dist/css/bootstrap.css"">
	<?php wp_head(); ?>
</head>
<body>
<header class="navbar navbar-default bs-docs-nav" id="top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">St. Louis Web Developer</a>
		</div>
		<nav class="collapse navbar-collapse" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class'=>'nav navbar-nav','container'=>false ) ); ?>

			<ul class="nav navbar-nav navbar-right">

			</ul>
		</nav>
	</div>
</header>
<div class="bs-docs-header" id="content">
	<div class="container">
		<div class="page-header">
			<h1>Stl Web Developer <small>Freelance web development based in St. Louis, Mo</small></h1>
		</div>
	</div>
</div>

