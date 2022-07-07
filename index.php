<?php
require 'core/bootstrap.php';

$routes = [
	'/' => 'ExampleController@example',
	//...
];

$db = [
	'name'     => 'tasklist',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');

?>