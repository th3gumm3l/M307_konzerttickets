<?php
require 'core/bootstrap.php';

$routes = [
	'/' => 'formViewController@formViewMain',
	//...
];

$db = [
	'name'     => 'kurseictbz_30714',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');

?>