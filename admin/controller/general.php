<?php

$meta = [
	'title' => 'General'
];

$row = $db->from('settings')
->where('id', 1)
->first();



require admin_view('general');