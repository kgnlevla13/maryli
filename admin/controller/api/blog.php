<?php


if ($data = form_control('yt_link')) {

	$query = $db->insert("blog")
	->set($data);

	if ($query) {
		$newClassId = $db->lastId();
		$json["classId"] = $newClassId;

	}
	else{
		$json["error"] = "There is a problem. Try again!";
	}
}
else{
	$json["error"] = "Please fill in all fields.";
}

