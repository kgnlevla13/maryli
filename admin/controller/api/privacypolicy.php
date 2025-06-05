<?php


if ($data = form_control()) {

	$id = 1;

	$query = $db->update("privacypolicy")
	->where("id",intval($id))
	->set($data);

	if ($query) {
		$json["success"] = "Update Successful!";
	}
	else{
		$json["error"] = "There is a problem. Try again!";
	}
}
else{
	$json["error"] = "Please fill in all fields.";
}