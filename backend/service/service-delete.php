<?php
require '../db.php';
$id = $_GET['id'];
$delete = "DELETE FROM services WHERE id = $id";
$query = mysqli_query($db, $delete);
if ($query) {
    header('location:all-service.php');
}
