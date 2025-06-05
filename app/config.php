<?php

$dirname = array_filter(explode('/', dirname($_SERVER['SCRIPT_NAME'])));
$dirname =  isset($dirname) ? '/' . current($dirname) : '/';

define('PATH', realpath('.'));
define('SUBFOLDER_NAME', $dirname);
define('URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http') . '://' . $_SERVER['SERVER_NAME'] . (SUBFOLDER_NAME == '/' ? null : SUBFOLDER_NAME));

return [
	'db' =>[
		'name' => 'maryli',
		'host' => 'localhost',
		'user' => 'root',
		'pass' => ''
	]
];

