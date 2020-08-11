<?php
require '../session.php';
require '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM projects WHERE id = $id";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
$img_path = '../../uploads/images/' . $assoc['thumbnail'];
if (file_exists($img_path)) {
  unlink($img_path);
}
$delete = "DELETE FROM projects WHERE id = $id";
$q = mysqli_query($db, $delete);
$_SESSION['delete'] = "Project deleted successfully";
header('location:view-project.php');


// $delete = "DELETE FROM projects WHERE id = $id";
// $query = mysqli_query($db, $delete);

// if ($query) {
//   $_SESSION['delete'] = "Project has been Deleted";
//   header('location:view-project.php');
// } else {
//   echo 'Faild';
// };
