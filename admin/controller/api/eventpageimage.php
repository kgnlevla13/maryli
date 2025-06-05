<?php

if (isset($_FILES["file"]["name"][0]) && is_array($_FILES["file"]["name"])) {
	$uploadedFiles = [];

	foreach ($_FILES["file"]["name"] as $key => $value) {
		if ($_FILES["file"]["error"][$key] == UPLOAD_ERR_OK) {
			$fileName = uniqid() . '_' . basename($value);

			$lastId = post('newEventId');
			$columnNumber = $key + 1;
			$columnName = "event_image_" . $columnNumber;

            // Insert/update the file name in the database
			$stmt = $db->prepare("UPDATE events SET $columnName = :eventimage WHERE event_id = :event_id");
			$stmt->bindParam(":eventimage", $fileName);
			$stmt->bindParam(":event_id", $lastId, PDO::PARAM_INT);
			$stmt->execute();

            // Move the uploaded file to the destination directory
			$targetDir = PATH . "/admin/public/assets/images/";
			$targetFile = $targetDir . $fileName;
			move_uploaded_file($_FILES["file"]["tmp_name"][$key], $targetFile);

			$uploadedFiles[] = $fileName;
		} else {
			echo "File upload failed for file " . $value . "<br>";
		}
	}

	if (!empty($uploadedFiles)) {
		echo "Addition successful You are being redirected...";
	} else {
		echo "Addition failed for all files.";
	}
} else {
	echo "No files were uploaded.";
}