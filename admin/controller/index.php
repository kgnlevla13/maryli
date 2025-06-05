<?php

$meta = [
	'title' => 'Home'
];


$bloggers = $db->from("blog")
->all();

$classes = $db->from("classes")
->all();

require admin_view('index');