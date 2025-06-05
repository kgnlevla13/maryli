<?php

$meta = [
	'title' => 'Add Event Post'
];

$categories = $db->from('categories')
->all();


require admin_view('addeventpost');