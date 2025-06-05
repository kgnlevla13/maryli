<?php


if ($data = form_control()) {

	$categoryExist = $db->from('categories')
	->where('category_name', $data['category_name'])
	->first();

	if ($categoryExist) {
		$json["error"] = "This name already exists in a category.";
	}
	else{
		$query = $db->insert("categories")
		->set($data);

		if ($query) {
			$json["success"] = "Addition successful.";
			$json["category_name"] = $data['category_name'];

		}
		else{
			$json["error"] = "There is a problem. Try again!";
		}
	}

	
}
else{
	$json["error"] = "Please fill in all fields.";
}

