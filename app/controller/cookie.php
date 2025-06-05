<?php 


$meta = [
	'title' => 'Cookie',
];

$cookie = $db->from('cookie')->first();



require view('cookie');