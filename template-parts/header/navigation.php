<?php
/**
 * Template part for displaying the header navigation
 */
?>

<nav id="header-menu" class="main-menu-container" aria-label="Primary">
<?php
wp_nav_menu( array(
    'container' 		=> false,
    'theme_location' 	=> 'main-menu',
) );
?>
</nav>