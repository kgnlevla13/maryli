<?php

if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
	$fileName = uniqid() . '_' . basename($_FILES["file"]["name"]);

	
	$lastIda = post('newClassId');

    // Insert/update the file name in the database
	$stmt = $db->prepare("UPDATE blog SET blogimage = :blogimage WHERE blog_id = :lastId");
	$stmt->bindParam(":blogimage", $fileName);
	$stmt->bindParam(":lastId", $lastIda, PDO::PARAM_INT);
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
