<?php
require '../session.php';
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $icon = $_POST['icon'];
    $link = $_POST['link'];
    $insert = "INSERT INTO icon (icon,link) VALUES ('$icon','$link')";
    $query = mysqli_query($db, $insert);
    header('location:show-icon.php');
}
