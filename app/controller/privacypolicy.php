<?php 


$meta = [
	'title' => 'Privacy Policy',
];

$privacypolicy = $db->from('privacypolicy')->first();



require view('privacypolicy');