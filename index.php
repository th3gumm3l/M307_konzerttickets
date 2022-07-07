<?php
require 'core/bootstrap.php';

$routes = [
	'/' => 'FormViewController@formViewMain',
	'/validateInputForm' => 'FormViewController@validateInputForm',
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