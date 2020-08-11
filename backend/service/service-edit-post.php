<?php
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$title = $_POST['title'];
$icon = $_POST['icon'];

$summary = $_POST['summary'];


$update = "UPDATE services SET icon = '$icon', title = '$title', summary = '$summary' WHERE id = $id";
$query = mysqli_query($db, $update);
if ($query) {
    header('location:all-service.php');
    $_SESSION['service'] = "Service Edited Successfully";
} else {
    echo "Not Updated";
}
