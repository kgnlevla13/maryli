<?php

$meta = [
	'title' => 'Edit Blog Post'
];

$id = get('id');

if (!$id) {
	header("Location:" . admin_url("bloglist"));
	exit();
}

$row = $db->from("blog")
->where("blog_id",$id)
->first();

if (!$row) {
	header("Location:" . admin_url("bloglist"));
	exit();
}


$categories = $db->from('categories')
->all();


require admin_view('editblogpost');