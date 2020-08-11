<?php
require '../session.php';
require '../../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $about = $_POST['about'];
    $year = $_POST['year'];
    $skill_title = $_POST['skill-title'];
    $skill_bar = $_POST['skill-bar'];
    $insert = "INSERT INTO about (about,year,skill_title,skill_bar) VALUES ('$about','$year','$skill_title','$skill_bar') ";
    $query = mysqli_query($db, $insert);
    if ($query) {
        $_SESSION['about'] = "About Added Successfully";
        header('location:about.php');
    }
}
