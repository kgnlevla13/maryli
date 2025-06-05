<?php

header('Content-Type: application/json');

if ($data = form_control()) {
	
	// Status varsayılan olarak active yap
	$data['status'] = 'active';
	
	$query = $db->insert("aboutpage")
		->set($data);

	if ($query) {
		$newAboutId = $db->lastId();
		$json["success"] = "About post added successfully!";
		$json["id"] = $newAboutId;
		
		// Session'a yeni ID'yi kaydet (resim yükleme için)
		$_SESSION['newAboutId'] = $newAboutId;
	}
	else{
		$json["error"] = "There is a problem. Try again!";
	}
}
else{
	$json["error"] = "Please fill in all fields.";
}

echo json_encode($json);