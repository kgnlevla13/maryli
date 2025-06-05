<?php 


$meta = [
	'title' => 'Terms Of Use',
];

$termofuse = $db->from('termsofuse')->first();



require view('termsofuse');