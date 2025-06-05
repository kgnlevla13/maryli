<?php

$id = post("blog_id");

if ($data = form_control('yt_link')) {

	$data['blog_id'] = $id;

	if (isset($data['yt_link'])) {
		$data['blogimage'] = null;
	}

	$query = $db->update("blog")
	->where("blog_id",intval($id))
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