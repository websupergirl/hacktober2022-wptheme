<?php

// add base styles and scripts

add_action( 'wp_enqueue_scripts', 'hacktober2022_styles' );
function hacktober2022_styles() { 
  wp_enqueue_style( 'hacktober2022-style', get_template_directory_uri() . '/style.css',
    array(),
    filemtime(get_template_directory() . '/style.css'),
    false
  ); 
}

// add options page

add_action( 'admin_menu', 'medusa_admin_menu' );
 
function medusa_admin_menu(){
 
	add_menu_page(
		'Store Admin',
		'Store',
		'manage_options',
		'medusa_admin',
		'medusa_admin_menu_callback',
		'dashicons-cart',
		4
	);
}
 
function medusa_admin_menu_callback(){
	echo 'What is up?';
}