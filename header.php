<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and the <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- No touch! -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#site-main"><?php esc_html_e( 'Skip to content', 'wcorl2019' ); ?></a>

    <header id="header" class="site-header" role="banner">
		<div class="wrapper">
			<?php get_template_part( 'template-parts/header/branding' ); ?>
			<?php get_template_part( 'template-parts/header/navigation' ); ?>
		</div>
	</header>