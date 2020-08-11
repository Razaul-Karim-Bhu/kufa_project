<?php
require '../session.php';
require '../../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    if (!empty($_FILES['img']['name'])) {
        $upload_file = $_FILES['img'];

        $explode = explode('.', $upload_file['name']);
        $main_name = current($explode);
        $ext = end($explode);

        $allow_ext = ['jpg', 'png', 'svg', 'gif', 'jpeg'];
        if (in_array($ext, $allow_ext)) {
            if ($upload_file['size'] <= 8158300000) {
                $select = "SELECT * FROM banner WHERE id = $id";
                $query = mysqli_query($db, $select);
                $assoc = mysqli_fetch_assoc($query);
                $img_path = '../../uploads/logo/' . $assoc['img'];
                if (file_exists($img_path)) {
                    unlink($img_path);
                }

                $file_name = $main_name . date('mjYHis') . '.' . $ext;
                $new_location = '../../uploads/logo/' . $file_name;

                move_uploaded_file($upload_file['tmp_name'], $new_location);

                $update = "UPDATE banner SET name='$name', description = '$description', img = '$file_name' WHERE id = '$id'";
                $query_u = mysqli_query($db, $update);
                $_SESSION['projects'] = 'Banner Updated Successfully';
                header('location:show-banner.php');
            } else {
                echo "size not allow";
            }
        } else {
            echo "File formate not Allow";
        }
    } else {
        $update = "UPDATE banner SET name='$name', description = '$description' WHERE id = '$id'";
        $query_u = mysqli_query($db, $update);
        $_SESSION['projects'] = 'Project Updated Successfully';
        header('location:show-banner.php');
    }
};
