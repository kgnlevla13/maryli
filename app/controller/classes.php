<?php 


$meta = [
	'title' => 'Classes',
];


$totalRecord = $db->from("classes")
->select("count('class_id') as total")
->total();

$pageLimit = 15;
$pageParam = "page";
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from("classes")
->orderby('class_id', 'DESC')
->limit($pagination["start"], $pagination["limit"])
->all();



require view('classes');