<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $upload_file = $_FILES['img'];
    $name = $upload_file['name'];
    $new_location = '../../upload/';
    foreach ($name as $key => $img) {
        move_uploaded_file($upload_file['tmp_name'][$key], $new_location . rand(1, 20000000) . $img);
    }
}
