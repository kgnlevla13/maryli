<?php

$meta = [
	'title' => 'Add Blog Post'
];

$categories = $db->from('categories')
->all();


require admin_view('addblogpost');