<?php


$theme = session('user_status');

if ($theme == 4) {
	
	$_SESSION['user_status'] = 3;
}
else{
	$_SESSION['user_status'] = 4;
}