<?php
require '../session.php';
require '../db.php';
$id = $_GET['id'];
$delete = "DELETE FROM icon WHERE id = $id";
$query = mysqli_query($db, $delete);
header('location:show-icon.php');
