<?php
/**
 * Template part for displaying the branding
 */

// Do we have a custom logo?
if ( has_custom_logo() ) :
    $site_logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
?>
<a class="site-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <img class="site-logo" src="<?php echo esc_url( current( $site_logo ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
</a>
<?php
else:
?>
<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
<p class="site-description"><?php bloginfo( 'description' ); ?></p>
<?php
endif;
?>