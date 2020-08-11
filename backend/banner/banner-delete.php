<?php
require '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM banner WHERE id = $id";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
$img_path = '../../uploads/logo/' . $assoc['img'];
if (file_exists($img_path)) {
    unlink($img_path);
}



$delete = "DELETE FROM banner WHERE id = $id";
$query = mysqli_query($db, $delete);
header('location:show-banner.php');
