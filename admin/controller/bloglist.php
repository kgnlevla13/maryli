<?php

$meta = [
	'title' => 'Blog List'
];


$totalRecord = $db->from("blog")
->select("count('blog_id') as total")
->total();

$pageLimit = 30;
$pageParam = "page";
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from("blog")
->orderby('blog_id', 'DESC')
->limit($pagination["start"], $pagination["limit"])
->all();


require admin_view('bloglist');