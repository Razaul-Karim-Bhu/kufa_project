<?php
require '../session.php';
require '../db.php';
$num = "SELECT COUNT(*) as total FROM logo";
$que = mysqli_query($db, $num);
$limAssoc = mysqli_fetch_assoc($que);
if ($limAssoc['total'] > 0) {
  $_SESSION['logo'] = "Can't Proceed";
  header('location:add-logo.php');
} else {

  if (isset($_POST['submit'])) {
    $logo_upload = $_FILES['logo_upload']['name'];
    // Get text
    //$image_text = mysqli_real_escape_string($link, $_POST['image_text']);

    // image file directory
    $target = "../../uploads/logo/" . basename($logo_upload);

    $sql = "INSERT INTO logo (logo) VALUES ('$logo_upload')";
    // execute query
    mysqli_query($db, $sql);

    $img_path = '../../uploads/logo/' . $assoc['logo_upload'];
    $select = "SELECT * FROM logo WHERE id= '$id'";
    $query = mysqli_query($db, $select);
    $assoc = mysqli_fetch_assoc($query);

    if (file_exists($target)) {
      unlink($target);
    }


    if (move_uploaded_file($_FILES['logo_upload']['tmp_name'], $target)) {
      $_SESSION['logo'] = "Image uploaded successfully";
      header('location:add-logo.php');
    } else {
      $_SESSION['logo'] = "Failed to upload image";
      header('location:add-logo.php');
    }
  }
  $result = mysqli_query($db, "SELECT * FROM logo");
}
