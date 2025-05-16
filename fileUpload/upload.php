<?php
if (isset($_FILES['myfile'])) {
    $src = $_FILES['myfile']['tmp_name'];
    $ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
    $des = 'upload/' . 'abc.' . $ext;

    if (move_uploaded_file($src, $des)) {
        echo "Success";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "No file uploaded.";
}
?>
