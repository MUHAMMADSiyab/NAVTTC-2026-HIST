<?php

if (isset($_FILES['file'])) {
    $name = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];
    $size = $_FILES['file']['size'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];



    if ($error === UPLOAD_ERR_OK) {

        // checkFileType($type);

        checkFileSize($size);


        $upload_dir = "./uploads";
        $file_name = uniqid() . "_" . $name;

        if (move_uploaded_file($tmp_name, $upload_dir . "/" . $file_name)) {
            echo "File uploaded successfully";
        } else {
            echo "File upload failed";
        }
    }
}

function checkFileType($type)
{
    // Check file type/extension
    $allow_list = ['image/jpg', 'image/png', 'image/jpeg'];

    if (!in_array($type, $allow_list)) {
        echo "Only images are allowed";
        http_response_code(422); // validation error
        exit;
    }
}
function checkFileSize($size)
{
    // check file size
    $allowed_size = 80 * 1024 * 1024; // 80MB

    if ($size > $allowed_size) {
        echo "File exceeds the limit of 80MB";
        http_response_code(413); // file size error
        exit;
    }
}
