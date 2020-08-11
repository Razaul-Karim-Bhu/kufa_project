<?php
require '../session.php';
require '../../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $title = $_POST['title'];
  $summary = $_POST['summary'];
  $icon = $_POST['icon'];

  $insert = "INSERT INTO services (title, summary, icon) VALUES ('$title','$summary','$icon') LIMIT 9";
  $query = mysqli_query($db, $insert);

  if ($query) {
    $_SESSION['summary_info'] = "Service has been Added";
    header("location:service.php");
  } else {
    $_SESSION['summary_info'] = "Something missing";
    header("location:service.php");
  };
};
