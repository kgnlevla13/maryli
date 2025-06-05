<?php

error_log('aboutpageimage.php called');
error_log('FILES: ' . print_r($_FILES, true));
error_log('POST: ' . print_r($_POST, true));

if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $fileName = uniqid() . '_' . basename($_FILES["file"]["name"]);
    
    $lastIda = post('newAboutId');
    error_log('newAboutId: ' . $lastIda);

    // Insert/update the file name in the database
    $stmt = $db->prepare("UPDATE aboutpage SET aboutimage = :aboutimage WHERE id = :lastId");
    $stmt->bindParam(":aboutimage", $fileName);
    $stmt->bindParam(":lastId", $lastIda, PDO::PARAM_INT);
    $result = $stmt->execute();
    
    error_log('Database update result: ' . ($result ? 'success' : 'failed'));

    // Move the uploaded file to the destination directory
    $targetDir = PATH . "/admin/public/assets/images/";
    $targetFile = $targetDir . $fileName;
    $moveResult = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
    
    error_log('File move result: ' . ($moveResult ? 'success' : 'failed'));
    error_log('Target path: ' . $targetFile);

    echo "Addition successful. You are being redirected...";

} else {
    error_log('File upload error: ' . $_FILES["file"]["error"]);
    echo "Addition failed. Error: " . $_FILES["file"]["error"];
}
?>