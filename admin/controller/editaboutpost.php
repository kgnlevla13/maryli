<?php

$meta = [
	'title' => 'Edit About Post'
];

$id = get('id');

if (!$id) {
	header("Location:" . admin_url("aboutlist"));
	exit();
}

$row = $db->from("aboutpage")
->where("id",$id)
->first();

if (!$row) {
	header("Location:" . admin_url("aboutlist"));
	exit();
}


require admin_view('editaboutpost');