<?php

$meta = [
	'title' => 'Privacy Policy'
];

$row = $db->from('privacypolicy')
->where('id', 1)
->first();



require admin_view('privacypolicy');

