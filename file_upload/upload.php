<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_FILES["file_upload"])) {
    $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "File is already exist";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "File is not uploaded";
    } else {
        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES['file_upload']["name"])) . "has been uploaded";
        } else {
            echo "There are something wrong while uploading file";
        }
    }

}
