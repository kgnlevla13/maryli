<?php

$meta = [
	'title' => 'Offering Page'
];

$row = $db->from('offeringpage')
->where('id', 1)
->first();



require admin_view('offeringpage');

