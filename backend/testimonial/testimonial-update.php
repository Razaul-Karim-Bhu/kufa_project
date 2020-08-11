<?php
require "../session.php";
require "../db.php";
$id = $_POST['id'];
$message = $_POST['message'];
$name = $_POST['name'];
$title = $_POST['title'];
$uploaded_file = $_FILES['image'];
$explode = explode('.', $uploaded_file['name']);
$ext = end($explode);
$allow_ext = ['PNG', 'JPG', 'png', 'jpg'];
if (!empty($uploaded_file['image']['name'])) {
    if (in_array($ext, $allow_ext)) {
        if ($uploaded_file['size'] < 10000000000000000000000000) {
            $select = "SELECT * FROM testimonial WHERE id = $id";
            $query = mysqli_query($db, $select);
            $assoc = mysqli_fetch_assoc($query);
            $file_name = '_' . date('mjYHis') . '.' . $ext;
            $new_location = '../../uploads/logo/' . $file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update = "UPDATE testimonial SET img = '$file_name', message='$message',name='$name', title='$title' WHERE id=$id";
            $query_u = mysqli_query($db, $update);
            header('location:show-testimonial.php');
        }
    }
} else {
    $update = "UPDATE testimonial SET message='$message',name='$name', title='$title' WHERE id=$id";
    $query_u = mysqli_query($db, $update);
    header('location:show-testimonial.php');
}
