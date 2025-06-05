<?php

$id = post("class_id");

if ($data = form_control()) {

	$data['class_id'] = $id;

	$query = $db->update("classes")
	->where("class_id",intval($id))
	->set($data);

	if ($query) {
		$json["success"] = "Update Successful! You are being redirected...";
	}
	else{
		$json["error"] = "There is a problem. Try again!";
	}
}
else{
	$json["error"] = "Please fill in all fields.";
}