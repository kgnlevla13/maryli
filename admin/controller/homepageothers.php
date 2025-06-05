<?php

$meta = [
	'title' => 'Home Page Others'
];

$row = $db->from('homepageothers')
->where('id', 1)
->first();



require admin_view('homepageothers');

