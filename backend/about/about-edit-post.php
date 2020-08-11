<?php
require '../session.php';
require '../../db.php';
$id = $_POST['id'];
$year = $_POST['year'];
$skill_title = $_POST['skill-title'];
$skill_bar = $_POST['skill-bar'];

$update = "UPDATE about SET year='$year', skill_title ='$skill_title', skill_bar='$skill_bar' WHERE id = $id";
$query = mysqli_query($db, $update);
if ($query) {
    header('location:about-show.php');
} else {
    echo "Not Updated";
}
