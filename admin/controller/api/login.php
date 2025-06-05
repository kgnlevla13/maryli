<?php

if ($data = form_control()){

	$row = $db->from('users')
	->where('user_url', permalink($data['user_name']))
	->first();

	if (!$row){
		$json['error'] = 'The information you entered is incorrect, please check it.';
	} else {

		$password_verify = password_verify($data['user_password'], $row['user_password']);
		if ($password_verify){
			if ($row['user_rank'] == 3){
				$json['error'] = 'You are not authorized to enter this section!';
			}elseif ($row['user_status'] == 2) {
				$json['error'] = 'This account is not active!';
			} else {
				
				User::Login($row);

				$json['success'] = 'Login successful. You are being directed...';

			}
		} else {
			$json['error'] = 'The password you entered is incorrect, please check it.';
		}
	}

} else {
	$json['error'] = 'Please enter your information.';
}