<?php 
include('perintah.php');
include('pengaturan.php');
include('route.php');

$uri;
if (isset($_GET['uri'])) {
	$uri = $_GET['uri'];
} else {
	$uri = '/';
}

$route->pergi($uri);
// $route->test_uri();
include($route->pergi_ke());
?>