<?php

if ($data = form_control()) {

	$id = session('user_id');

	
	$query = $db->update("users")
	->where("user_id",intval($id))
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