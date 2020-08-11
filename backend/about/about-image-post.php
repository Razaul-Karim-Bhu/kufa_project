<?php
require '../db.php';
require '../session.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $upload_file = $_FILES['thumbnail'];
    $explode = explode('.', $upload_file['name']);
    $ext = end($explode);
    $allow_ext = ['jpg', 'png', 'PNG', 'JPG', 'JPEG', 'jpeg', 'SVG', 'GIF'];

    if (in_array($ext, $allow_ext)) {
        if ($upload_file['size'] < 1000000000) {
            $insert = "INSERT INTO aboutimage () VALUES ()";
            $query = mysqli_query($db, $insert);
            $last_insert_id = mysqli_insert_id($db);
            $file_name = $last_insert_id . '.' . $ext;
            $new_location = '../../uploads1/images1/' . $file_name;
            move_uploaded_file($upload_file['tmp_name'], $new_location);
            $update = "UPDATE aboutimage SET image_name = '$file_name' WHERE id = $last_insert_id";
            $query2 = mysqli_query($db, $update);
            $_SESSION['projects'] = "About Image Added Successfully";
            header('location:about-image-show.php');
        } else {
        }
    } else {
    }
}
