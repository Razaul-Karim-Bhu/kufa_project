<?php
require "../db.php";
$id = $_GET['id'];
$delete = "DELETE FROM testimonial WHERE id = $id";
$query = mysqli_query($db, $delete);
header('location:show-testimonial.php');
