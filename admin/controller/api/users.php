<?php

if ($data = form_control()) {

	$id = session('user_id');


	$check_name = $db->from('users')
	->where('user_name',$data['user_name'])
	->where('user_id', $id, '!=')
	->first();

	$check_mail = $db->from('users')
	->where('user_email',$data['user_email'])
	->where('user_id', $id, '!=')
	->first();

	if ($check_name) {
		$json['error'] = 'This username is being used by someone else!';
	}
	elseif ($check_mail) {
		$json['error'] = 'This email address is being used by someone else!';
	}
	else{
		
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
	
}
else{
	$json["error"] = "Please fill in all fields.";
}