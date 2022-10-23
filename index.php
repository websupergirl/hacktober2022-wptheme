<?php
if ( is_user_logged_in() ) {

  $rest_url = "/wp/v2/";
  $url = "posts/"; // it is a nice fallback

  // set up our url
  if ( is_single() ) {
    $url = $rest_url . "posts/" . get_the_ID();
  } elseif ( is_page() ) {
    $url = $rest_url . "pages/" . get_the_ID();
  } elseif ( is_category() ){
    $url = $rest_url . "categories/" . get_queried_object_id();
  } elseif ( is_tag() ) {
    $url = $rest_url . "tags/" . get_queried_object_id();
  }

  // do a rest request and dump the api data on to the screen
  $request = new WP_REST_Request( 'GET', $url );
  $response = rest_do_request( $request );
  $server = rest_get_server();
  $data = $server->response_to_data( $response, false );
  print "<pre>";
  print_r( $data );
  print "</pre>";

} else { // if you're not logged in, you get redirected to the actual front end
	$frontend_url = get_option( 'frontend_url' ) ?: 'https://medusajs.com/';
  wp_redirect( $frontend_url );
  exit;
}
?>