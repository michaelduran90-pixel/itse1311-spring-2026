<?php

$file_name = $_FILE['file']['name'];
echo "the file is " . $file_name;

if (isset($_FILE['file'])) {

include_once('guid.php');

    $file_name = $_FILE['file']['name'];
    $file_size = $_FILE['file']['size'];
    $file_tmp = $_FILE['file']['tmp_name'];
    $file_type = $_FILE['file']['type'];

    $file_ext = strtolower(end(explode('.', $_FILE['file']['name'])));
    $extensions = array("pdf", "docx");

    if(in_array($file_ext, $extensions)===false){
        $errors[] = "Extensions not allowed, please choose a PDF or Word document";
    }

    if($file_size > 2097152) {
        $errors[] = "File size must be less than 50MB";
    }

    if (empty($errors)===TRUE) {
        move_uploaded_file($file_temp, "uploads/".$form_id.$file_name);
    }
    else{
        print_r($errors);
    }

} // is isset
else {
    echo "No file uploaded";
}