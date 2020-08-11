<?php
require '../session.php';
require '../db.php';
$id = $_GET['id'];
$delete = "DELETE FROM logo WHERE id =  $id";
$query = mysqli_query($db, $delete);
$_SESSION['delete'] = "Logo Deleted Successfully";
header('location:logo-view.php');
