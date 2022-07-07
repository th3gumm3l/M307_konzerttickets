<?php
require 'core/bootstrap.php';

$routes = [
	'/' => 'FormController@formMain',
	'/form' => 'FormController@form',
	'/list' => 'OrderlistController@orderlist',
	'/list/test' => 'OrderlistController@test',
	//...
];

$db = [
	'name'     => 'kurseictbz_30714',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');