<?php
require '../session.php';
require '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $upload_file = $_FILES['image'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $explode = explode('.', $upload_file['name']);
    $ext = end($explode);
    $allow_ext = ['jpg', 'png', 'JPEG', 'PNG'];
    if (in_array($ext, $allow_ext)) {
        if ($upload_file['size'] < 10000000000000000000000) {
            $insert = "INSERT INTO testimonial(message,name,title) VALUES ('$message','$name','$title')";
            $query = mysqli_query($db, $insert);
            $last_insert_id = mysqli_insert_id($db);
            $file_name  = '_' . date('mjYHis') . '.' . $ext;
            $new_location = '../../uploads/logo/' . $file_name;
            move_uploaded_file($upload_file['tmp_name'], $new_location);
            $update = "UPDATE testimonial SET img = '$file_name' WHERE id='$last_insert_id'";
            $query_u = mysqli_query($db, $update);
            $_SESSION['proceeed'] = "Testimonial Added Successfully";
            header('location:add-testimonial.php');
        } else {
            $_SESSION['proceeed'] = "File Size Not Allowed";
        }
    } else {
        $_SESSION['proceeed'] = "File Format Not Allowed";
    }
}
