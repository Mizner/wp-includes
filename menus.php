<?php

add_action( 'after_setup_theme', 'the_menu_setup' );
function the_menu_setup() {
	register_nav_menus( [
		'primary-menu'   => __( 'Primary Menu', PROJECT ),
		'secondary-menu' => __( 'Secondary Menu', PROJECT ),
		'footer-menu'    => __( 'Footer Menu', PROJECT ),
	] );
}