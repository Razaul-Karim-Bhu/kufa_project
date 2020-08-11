<?php
  session_start();
  require 'db.php';
  $id = $_GET['id'];

  $re_active = "UPDATE registration SET status = 1 WHERE id = $id";
  $query = mysqli_query($db,$re_active);

  if ($query) {
    $_SESSION['reactive'] = 'Successfully Re-Active';
  }
  else{
    echo 'Faild';
  };

?>

<meta http-equiv="refresh" content="1;URL='user-view.php'" />

<div style="width:410px; margin:0 auto; padding:30px;">
  <h2 style="font-size:22px; font-weight:400; color:#007bff;">Your Data Has Been Re-Active!</h2>
  <p style="font-size:16px; font-weight:300; color:#007bff;">This Page will Redirect within 5 Seconds</p>
</div>
