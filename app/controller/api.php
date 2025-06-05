<?php

$json = [];
$type = route(1);
if (!$type){
	exit;
}

if (file_exists(controller('api/' . $type))){
	require controller('api/' . $type);
}

if (file_exists(controller('api/' . $type)) && count($json) > 0 ) {
	echo json_encode($json);
}