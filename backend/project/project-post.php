<?php
require '../session.php';
require '../../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $title = $_POST['title'];
  $description = $_POST['description'];
  $upload_file = $_FILES['thumbnail'];
  $explode = explode('.', $upload_file['name']);
  $ext = end($explode);
  $allow_ext = ['jpg', 'png', 'svg', 'gif', 'jpeg'];

  if (in_array($ext, $allow_ext)) {
    if ($upload_file['size'] <= 10000000000000000000000000000000) {
      $insert = "INSERT INTO projects (title, description) VALUES ('$title','$description')";
      $query = mysqli_query($db, $insert);

      $last_insert_id = mysqli_insert_id($db);
      $file_name = $last_insert_id . '.' . $ext;
      $new_location = '../../uploads3/images3/' . $file_name;
      move_uploaded_file($upload_file['tmp_name'], $new_location);

      $update = "UPDATE projects SET thumbnail = '$file_name' WHERE id = '$last_insert_id'";
      $query_u = mysqli_query($db, $update);
      $_SESSION['projects'] = 'Project has been Added';
      header('location:project.php');
    } else {
      echo "size not allow";
    }
  } else {
    echo "File formate not Allow";
  }

  // $insert = "INSERT INTO services (title, summary, icon) VALUES ('$title','$summary','$icon')";
  // $query = mysqli_query($db,$insert);
  //
  // if ($query) {
  //   header('location:service.php');
  //   $_SESSION['summary_info'] = "Service has been Added";
  // }
  // else {
  //   header('location:service.php');
  //   $_SESSION['summary_info'] = "Something missing";
  // };

};
