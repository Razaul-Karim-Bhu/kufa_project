<?php
session_start();
require '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $icon = $_POST['icon'];
    $number = $_POST['number'];
    $title = $_POST['title'];



    $limit = "SELECT COUNT(*) as total FROM feature";
    $limitQ = mysqli_query($db, $limit);
    $limitAssoc = mysqli_fetch_assoc($limitQ);
    if ($limitAssoc['total'] > 5) {
        $_SESSION['alert'] = 'Feature Already Exists';
        header('location:add-feature.php');
        die();
    } else {
        $insert = "INSERT INTO feature (icon,number,title) VALUES ('$icon','$number','$title')";
        $query = mysqli_query($db, $insert);

        $_SESSION['alert'] = 'Feature Successfully Added';
        header('location:add-feature.php');
    }
}
