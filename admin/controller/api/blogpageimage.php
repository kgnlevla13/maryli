<?php

if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
	$fileName = uniqid() . '_' . basename($_FILES["file"]["name"]);

	
	$lastId = post('newClassId');

    // Insert/update the file name in the database
	$stmt = $db->prepare("UPDATE blog SET blogimage = :blogimage WHERE blog_id = :blog_id");
	$stmt->bindParam(":blogimage", $fileName);
	$stmt->bindParam(":blog_id", $lastId, PDO::PARAM_INT);
	$stmt->execute();

    // Move the uploaded file to the destination directory
	$targetDir =  PATH . "/admin/public/assets/images/";
	$targetFile = $targetDir . $fileName;
	move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

	echo "Addition successful. You are being redirected...";

} else {
	echo "Addition failed.";
}
?>
