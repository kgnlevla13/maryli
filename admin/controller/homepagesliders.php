<?php

$meta = [
	'title' => 'Home Page Sliders'
];

$row = $db->from('homepagesliders')
->where('id', 1)
->first();



require admin_view('homepagesliders');

