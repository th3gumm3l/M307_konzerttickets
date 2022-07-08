<?php
require 'core/bootstrap.php';

$routes = [
//	'/' => 'FormController@formMain',
	'/' => 'FormController@form',
	'/validateInputForm' => 'FormController@validateInputForm',
	'/list' => 'OrderlistController@orderlist',
	'/form' => 'FormController@form',
	'/edit' => 'OrderlistController@edit',
	//...
];

$db = [
	'name'     => 'kurseictbz_30714',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');