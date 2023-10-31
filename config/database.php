<?php

return [
	// [required]
	'type' => 'mysql',
	'host' => get__env('HOST'),
	'database' => get__env('DB_NAME'),
	'username' => get__env('USER_DB'),
	'password' => get__env('PASS_DB'),
 
	// [optional]
	'charset' => 'utf8',
	'collation' => 'utf8_general_ci',
	'port' => 3306,
 
	// [optional] Table prefix, all table names will be prefixed as PREFIX_table.
	//'prefix' => 'PREFIX_',
 
	// [optional] Enable logging, it is disabled by default for better performance.
	'logging' => true,
 
	// [optional]
	// Error mode
	// Error handling strategies when error is occurred.
	// PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
	// Read more from https://www.php.net/manual/en/pdo.error-handling.php.
	'error' => PDO::ERRMODE_SILENT,
 
	// [optional]
	// The driver_option for connection.
	// Read more from http://www.php.net/manual/en/pdo.setattribute.php.
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	],
 
	// [optional] Medoo will execute those commands after connected to the database.
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	]
];
