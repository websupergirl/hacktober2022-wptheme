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
		1
	);
}
 
function medusa_admin_menu_callback(){
	echo '<iframe src="' . get_option( 'admin_url' ) . '" title"MedusaJS Admin" style="padding:0; margin:0; width:100%; height:100vh;top:0px;left:0px;right:0px;bottom:0px;display:block;"></iframe>';
}

// add submenu for settings 

add_action( 'admin_menu', 'medusa_submenu' );

function medusa_submenu(){

	add_submenu_page(
		'medusa_admin',
		'Settings',
		'Settings',
		'manage_options',
		'medusa_settings',
		'medusa_admin_settings_callback',
		5
	);
}

function medusa_admin_settings_callback(){
	?>
		<div class="wrap">
			<form method="post" action="options.php">
				<?php
					settings_fields( 'medusa_store_settings' );
					do_settings_sections( 'medusa_settings' );
					submit_button();
				?>
			</form>
		</div>
	<?php
}

// register options

add_action( 'admin_init',  'medusa_settings_fields' );

function medusa_settings_fields(){

	$page_slug = 'medusa_settings';
	$option_group = 'medusa_store_settings';

	add_settings_section(
		'medusa_section_id',
		'MedusaJS Admin URL',
		'',
		$page_slug
	);

	register_setting( $option_group, 'admin_url', '' );

	// 3. add fields
	add_settings_field(
		'admin_url',
		'Admin URL',
		'medusa_input',
		$page_slug,
		'medusa_section_id'
	);

}

function medusa_input( $args ) {
	$value = get_option( 'admin_url' );
	?>
		<label>
      What is the url of your Medusa JS Admin?
    </label>
		<input type="text" name="admin_url" value="<?php echo $value; ?>" />
	<?php
}