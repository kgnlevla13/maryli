<?php

$meta = [
	'title' => 'About List'
];

$totalRecord = $db->from("aboutpage")
	->select("count('id') as total")
	->total();

$pageLimit = 15;
$pageParam = "page";
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from("aboutpage")
	->orderby('id', 'DESC')
	->limit($pagination["start"], $pagination["limit"])
	->all();

require admin_view('aboutlist');
