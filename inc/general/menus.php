<?php

/**
 * Registers our menus
 */
function wcorl2019_menus() {
    register_nav_menu( 'main-menu', __( 'Main Menu', 'wcorl2019' ) );
}
add_action( 'after_setup_theme', 'wcorl2019_menus', 20 );