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
  $admin_url = get_option( 'admin_url' );
  if ($admin_url) {
    echo '<iframe src="' . $admin_url . '" title"MedusaJS Admin" style="padding:0; margin:0; width:100%; height:100vh;top:0px;left:0px;right:0px;bottom:0px;display:block;"></iframe>';
  } else {
    echo '<h2>Please set your admin URL in the settings.</h2>';
  }
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

	register_setting( $option_group, 'admin_url', 'sanitize_url' );
  register_setting( $option_group, 'frontend_url', 'sanitize_url' );

	add_settings_field(
		'admin_url',
		'Admin URL',
		'medusa_admin_input',
		$page_slug,
		'medusa_section_id'
	);

  add_settings_field(
		'frontend_url',
		'Frontend URL',
		'medusa_frontend_input',
		$page_slug,
		'medusa_section_id'
	);

}

function medusa_admin_input( $args ) {
	$admin_value = get_option( 'admin_url' );
	?>
		<label>
      What is the url of your Medusa JS Admin?
    </label>
		<input type="text" name="admin_url" value="<?php echo $admin_value; ?>" />
	<?php
}

function medusa_frontend_input( $args ) {
	$frontend_value = get_option( 'frontend_url' );
	?>
		<label>
      What is the url of your Store Frontend?
    </label>
		<input type="text" name="frontend_url" value="<?php echo $frontend_value; ?>" />
	<?php
}