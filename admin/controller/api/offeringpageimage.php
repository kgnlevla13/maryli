<?php

if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
	$fileName = uniqid() . '_' . basename($_FILES["file"]["name"]);


    // Insert/update the file name in the database
	$stmt = $db->prepare("UPDATE offeringpage SET offering1image = :offering1image WHERE id = 1");
	$stmt->bindParam(":offering1image", $fileName);
	$stmt->execute();

    // Move the uploaded file to the destination directory
	$targetDir =  PATH . "/admin/public/assets/images/";
	$targetFile = $targetDir . $fileName;
	move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

	echo "offering 1 image image upload succesful";

} else {
	echo "offering 1 image image upload error";
}