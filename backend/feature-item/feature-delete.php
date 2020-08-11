<?php
require "../db.php";
$id = $_GET['id'];
$delete = "DELETE FROM feature WHERE id = $id";
$query = mysqli_query($db, $delete);
if ($query) {
    header("location:feature-show.php");
}
