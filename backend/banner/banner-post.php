<?php
require '../session.php';
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $upload_file = $_FILES['img'];
    $file_name = $upload_file['name'];
    $explode = explode('.', $upload_file['name']);
    $main_name = current($explode);
    $ext = end($explode);
    $allow_ext =  ['jpg', 'png', 'svg', 'gif', 'jpeg'];
    $select = "SELECT COUNT(*) as total FROM banner";
    $query_a = mysqli_query($db, $select);
    $assoc_a = mysqli_fetch_assoc($query_a);


    if (!$assoc_a['total'] > 0) {
        if (in_array($ext, $allow_ext)) {
            if ($upload_file['size'] < 10000000000000000000000000000000) {
                $insert = "INSERT INTO banner (name, description) VALUES ('$name','$description')";
                $query = mysqli_query($db, $insert);

                $file_name =  $main_name . '_' . date('mjYHis') . '.' . $ext;
                $new_location = '../../uploads/logo/' . $file_name;
                move_uploaded_file($upload_file['tmp_name'], $new_location);
                $last_insert_id = mysqli_insert_id($db);
                $update = "UPDATE banner SET img = '$file_name' WHERE id='$last_insert_id'";
                $query_u = mysqli_query($db, $update);
                $_SESSION['proceeed'] = "Banner Added Successfully";
                header('location:banner.php');
            }
        }
    } else {
        $_SESSION['proceeed'] = "Can't Proceed";
        header('location:banner.php');
    }
}
