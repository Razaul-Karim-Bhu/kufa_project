<?php
  require '../session.php';
  require '../db.php';
  $id = $_GET['id'];

  $inactive = "UPDATE registration SET status = 2 WHERE id = $id";
  $query = mysqli_query($db,$inactive);

  if ($query) {
    header('location:all-users.php');
    $_SESSION['inactive'] = 'Successfully Inactive';
  }
  else{
    echo 'Faild';
  };
