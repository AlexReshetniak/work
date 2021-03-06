<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Allies
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<header class='header'>
		<div class='header__head'>
			<a href="http://solaredge.loc"><img src="<?= get_field('header_logo') ?>" alt="<?= get_field('header_logo') ?>"></a>
			<div class='account'>
				<h5>Jimmy Oliver</h5>
				<img src="<?= get_field('header_foto') ?>" alt="<?= get_field('header_foto') ?>">
				<a href=""><img src="<?= get_field('header_logout_img') ?>" alt="<?= get_field('header_logout_img') ?>"></a>
			</div>
		</div>
		<div class='header__menu'>
			<ul>
				<li><a href="">HOME</a></li>
				<li><a href="">HE & WELFARE</a></li>
				<li><a href="">POLICIES & FORMS</a></li>
				<li><a href="">DEPARTMENT</a></li>
			</ul>
		</div>
		<div class='header__background'>
			<img src="<?= get_field('header__background') ?>" alt="<?= get_field('header__background') ?>">
		</div>
	</header>

