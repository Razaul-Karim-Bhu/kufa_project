<?php
require '../session.php';
require "../../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM brand_image WHERE id = $id";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
$img_path = '../../uploads2/images2/' . $assoc['brand'];
if (file_exists($img_path)) {
    unlink($img_path);
}
$delete = "DELETE FROM brand_image WHERE id = $id";
$q = mysqli_query($db, $delete);
$_SESSION['about_image_deleted'] = "Brand Image Deleted";
header('location:brand-show.php');
