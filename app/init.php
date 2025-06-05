<?php

error_reporting(E_ALL);
session_start();
ob_start();
date_default_timezone_set('Europe/Istanbul');

function loadClasses($className)
{
	if (file_exists( __DIR__ . '/classes/' . strtolower($className) . '.php')) {
		require __DIR__ . '/classes/' . strtolower($className) . '.php';
	}
}

spl_autoload_register('loadClasses');

$config = require __DIR__ . '/config.php';

require_once __DIR__ . '/classes/phpmailer/vendor/autoload.php';

try {

	$db = new BasicDB($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);
	
} catch (PDOException $e) {

	die($e->getMessage());
}

foreach (glob(__DIR__ . '/helper/*.php') as $helperFile) {
	require $helperFile;
}