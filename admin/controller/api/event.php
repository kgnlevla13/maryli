<?php
if ($data = form_control('yt_link')) {
	$query = $db->insert("events")
	->set($data);
	if ($query) {
		$newEventId = $db->lastId();
		$json["eventId"] = $newEventId;
	}
	else{
		$json["error"] = "There is a problem. Try again!";
	}
}
else{
	$json["error"] = "Please fill in all fields.";
}