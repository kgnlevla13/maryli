<?php

$meta = [
	'title' => 'Edit Profile'
];



$row = $db->from("users")
->where('user_id', session('user_id'))
->first();

header('Location:' . admin_url());


require admin_view('edit-profile');