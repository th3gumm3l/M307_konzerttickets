<?php
require 'core/bootstrap.php';

$routes = [
	'/' => 'FormController@form',
	'/validateInputForm' => 'FormController@validateInputForm',
	'/list' => 'OrderlistController@orderlist',
	'/form' => 'FormController@form',
	'/editview' => 'EditController@insertOrder',
	'/edit' => 'EditController@edit',
];

$db = [
	'name'     => 'kurseictbz_30714',
	'username' => 'kurseictbz_30714',
	'password' => 'db_307_pw_14',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');