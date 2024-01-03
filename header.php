<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Amamantas_Shop
 * @since Amamantas Shop 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<title><?php wp_title('|', true, 'right'); ?></title>
	<?php get_template_part( 'templates/parts/layout/head' ); ?>
</head>

<body>
	<div id="page" class="site">

		<?php get_template_part( 'templates/parts/layout/header' ); ?>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">