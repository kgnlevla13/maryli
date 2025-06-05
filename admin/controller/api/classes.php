<?php


if ($data = form_control()) {

	$query = $db->insert("classes")
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

