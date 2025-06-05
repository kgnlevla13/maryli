<?php

if ($data = form_control()) {

	$id = session('user_id');


	$row = $db->from('users')
	->where('user_id', $id)
	->first();

	$password_verify = password_verify($data['user_old_password'], $row['user_password']);

	if ($password_verify) {

		if ($data['user_password'] != $data['user_password_again']) {
			$json['error'] = 'The entered passwords do not match each other!';
		}
		else{

			$query = $db->update("users")
			->where("user_id",intval($id))
			->set([
				'user_password' => password_hash($data['user_password'], PASSWORD_DEFAULT),
			]);

			if ($query) {
				$json["success"] = "Update Successful!";
			}
			else{
				$json["error"] = "There is a problem. Try again!";
			}

		}
		
	}
	else{
		$json['error'] = 'You did not enter your old password correctly.';
	}

	
	
}
else{
	$json["error"] = "Please fill in all fields.";
}