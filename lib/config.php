<?php

// ensure DataTables.php was included
// this file must not be included when installed using composer
if (!defined('DATATABLES')) {
	exit(1);
}

// Enable error reporting for debugging (remove for production)
error_reporting(\E_ALL);
ini_set('display_errors', '1');


include_once "../db_picktech.php";
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Database user / pass
 */
$sql_details = array(
	'type' => 'Mysql',     // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	'user' => $DB_USER,          // Database user name
	'pass' => $DB_PASSWORD,          // Database password
	'host' => $DB_HOST, // Database host
	'port' => $DB_PORT,          // Database connection port (can be left empty for default)
	'db' => $DB_NAME,          // Database name
	'dsn' => '',          // PHP DSN extra information. Set as `charset=utf8mb4` if you are using MySQL
	'pdoAttr' => array(),   // PHP PDO attributes array. See the PHP documentation for all options
);

// This is included for the development and deploy environment used on the DataTables
// server. You can delete this block - it just includes my own user/pass without making
// them public!
if (is_file($_SERVER['DOCUMENT_ROOT'] . '/datatables/pdo.php')) {
	include $_SERVER['DOCUMENT_ROOT'] . '/datatables/pdo.php';
}
// /End development include
