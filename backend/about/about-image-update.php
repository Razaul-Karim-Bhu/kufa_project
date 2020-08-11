<?php
require '../session.php';
require '../../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    if (!empty($_FILES['thumbnail']['name'])) {
        $upload_file = $_FILES['thumbnail'];

        $explode = explode('.', $upload_file['name']);
        $ext = end($explode);
        $allow_ext = ['jpg', 'png', 'svg', 'gif', 'jpeg'];
        if (in_array($ext, $allow_ext)) {
            if ($upload_file['size'] <= 8158300000) {


                $select = "SELECT * FROM aboutimage WHERE id = $id";
                $query = mysqli_query($db, $select);
                $assoc = mysqli_fetch_assoc($query);
                $img_path = '../../uploads1/images1/' . $assoc['image_name'];
                if (file_exists($img_path)) {
                    unlink($img_path);
                }

                $file_name = $id . '.' . $ext;
                $new_location = '../../uploads1/images1/' . $file_name;

                move_uploaded_file($upload_file['tmp_name'], $new_location);

                $update = "UPDATE aboutimage SET  image_name = '$file_name' WHERE id = '$id'";
                $query_u = mysqli_query($db, $update);
                $_SESSION['projects'] = 'Project Updated Successfully';
                header('location:about-image-show.php');
            } else {
                echo "size not allow";
            }
        } else {
            echo "File formate not Allow";
        }
    } else {

        $_SESSION['projects'] = "Image can't be empty";
        header('location:about-image-show.php');
    }
};
