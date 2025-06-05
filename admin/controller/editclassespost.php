<?php

$meta = [
	'title' => 'Edit Classes Post'
];

$id = get('id');

if (!$id) {
	header("Location:" . admin_url("classeslist"));
	exit();
}

$row = $db->from("classes")
->where("class_id",$id)
->first();

if (!$row) {
	header("Location:" . admin_url("classeslist"));
	exit();
}


require admin_view('editclassespost');