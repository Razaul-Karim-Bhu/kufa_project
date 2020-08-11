<?php
require '../session.php';
require "../../db.php";
$id = $_GET['id'];

$delete = "DELETE FROM about WHERE id = $id";
$query = mysqli_query($db, $delete);
if ($query) {
    $_SESSION['delete'] = "About Deleted Successfully";
    header('location:about-show.php');
}
