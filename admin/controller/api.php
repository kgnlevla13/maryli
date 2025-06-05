<?php

$json = [];
$type = route(2);
if (!$type){
	exit;
}

if (file_exists(admin_controller('api/' . $type))){
	require admin_controller('api/' . $type);
}

if (file_exists(admin_controller('api/' . $type)) && count($json) > 0 ) {
	echo json_encode($json);
}