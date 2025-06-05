<?php

$meta = [
	'title' => 'Edit Event Post'
];

$id = get('id');

if (!$id) {
	header("Location:" . admin_url("eventlist"));
	exit();
}

$row = $db->from("events")
->where("event_id",$id)
->first();

if (!$row) {
	header("Location:" . admin_url("eventlist"));
	exit();
}

require admin_view('editeventpost');