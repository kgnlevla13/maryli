<?php

$id = post("id");

if ($data = form_control()) {

	$data['id'] = $id;

	$query = $db->update("aboutpage")
	->where("id",intval($id))
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