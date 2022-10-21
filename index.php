<?php
if ( is_user_logged_in() ) {
	echo 'REST GOES HERE';
} else {
	wp_redirect( 'https://wordpress.org/plugins/wp-gatsby/' );
  exit;
}
?>