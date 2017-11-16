<?php
session_start();
require_once __DIR__ . '/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1176505742478583',
  'app_secret' => '7d2d00d7257f9dc8152b94f968d576a0',
  'default_graph_version' => 'v2.8',
]);
	// getting basic info about user	
	// sending notification to user
	$sendNotif = $fb->post('/1434753123237209/notifications', array('href' => '?true=43', 'template' => 'click here for more information!'), '1176505742478583|ql3peyeVxI678_-wXoOr_QwslCw');

  	// Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']

//1434753123237209/notifications?href=?message&template=click here
?>