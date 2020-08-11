<?php
require "../db.php";
$id = $_POST['id'];
$icon = $_POST['icon'];
$number = $_POST['number'];
$title = $_POST['title'];
$update = "UPDATE feature SET icon='$icon',number = '$number',title = '$title' WHERE id = $id";
$query = mysqli_query($db, $update);
if ($query) {
    header('location:feature-show.php');
}
