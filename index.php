<?php
require 'core/bootstrap.php';

$routes = [
	'/validateInputForm' => 'FormController@validateInputForm',
	'/list' => 'OrderlistController@orderlist',
	'/form' => 'FormController@form',
	'/editview' => 'EditController@insertOrder',
	'/edit' => 'EditController@edit',
];

$db = [
	'name'     => 'kurseictbz_30714',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');