<?php

$meta = [
	'title' => 'Event List'
];


$totalRecord = $db->from("events")
->select("count('event_id') as total")
->total();

$pageLimit = 30;
$pageParam = "page";
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from("events")
->orderby('event_id', 'DESC')
->limit($pagination["start"], $pagination["limit"])
->all();


require admin_view('eventlist');