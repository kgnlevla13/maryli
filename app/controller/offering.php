<?php 


$meta = [
	'title' => 'Offering',
];

$offering = $db->from('offeringpage')->first();



require view('offering');