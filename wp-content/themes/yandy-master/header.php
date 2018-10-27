<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yandy-master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Favicon-->
	<link rel="shortcut icon" href="">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?php bloginfo('name'); ?></title>
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section class="header">
		<div class="container">
			<div class="logo-img">
				<?php the_custom_logo(); ?>
			</div>
			<div class="top-header-btn">
				<i></i>
			</div>
		</div>
		<div class="over">


		<div class="menu">
			<i class="fa fa-times" aria-hidden="true"></i>
			
				<?php 

				wp_nav_menu( array(
	'theme_location'  => 'menu-1',
	'menu'            => 'menu-1', 
	'container'       => 'ul', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'my-menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
						
		</div>
		</div>
	</section>
