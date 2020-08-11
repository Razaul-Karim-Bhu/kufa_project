<?php
require '../session.php';
require "../../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM aboutimage WHERE id = $id";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
$img_path = '../../uploads1/images1/' . $assoc['image_name'];
if (file_exists($img_path)) {
    unlink($img_path);
}
$delete = "DELETE FROM aboutimage WHERE id = $id";
$q = mysqli_query($db, $delete);
$_SESSION['about_image_deleted'] = "About Image Deleted";
header('location:about-image-show.php');
