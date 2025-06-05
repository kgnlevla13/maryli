<?php

$meta = [
	'title' => 'Term of Use'
];

$row = $db->from('termsofuse')
->where('id', 1)
->first();



require admin_view('termsofuse');