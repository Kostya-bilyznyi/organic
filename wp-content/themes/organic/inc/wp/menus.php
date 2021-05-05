<?php
function theme_register_nav_menu() {
	register_nav_menu( 'main_menu', 'Main Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );