<?php


if ($data = form_control()) {

	$subexist = $db->from('subscribes')
	->where('email', $data['email'])
	->first();

	if ($subexist) {
		$json["info"] = "You are already subscribed.";
	}
	else{
		$query = $db->insert("subscribes")
		->set($data);

		if ($query) {
			$json["success"] = 'Subscribed successfully.';

		}
		else{
			$json["error"] = "There is a problem. Try again!";
		}
	}

	
}
else{
	$json["error"] = "Please fill in all fields.";
}

