<?php

$meta = [
	'title' => 'Cookie'
];

$row = $db->from('cookie')
->where('id', 1)
->first();



require admin_view('cookie');