<?php
session_start();
require 'db.php';
$id = $_GET['id'];

$delete = "DELETE FROM registration WHERE id = $id";
$query = mysqli_query($db, $delete);

if ($query) {
  $_SESSION['delete'] = 'Successfully Deleted';
} else {
  echo 'Faild';
};

?>

<meta http-equiv="refresh" content="1;URL='user-view.php'" />

<div style="width:410px; margin:0 auto; padding:30px;">
  <h2 style="font-size:22px; font-weight:400; color:#007bff;">Your Data Has Been Deleted!</h2>
  <p style="font-size:16px; font-weight:300; color:#007bff;">This Page will Redirect within 5 Seconds</p>
</div>