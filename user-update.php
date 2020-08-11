<?php
  require 'db.php';
  session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    // $select_1 = "SELECT * FROM registration WHERE id = $user_id";
    // $query_1 = mysqli_query($db,$select_1);
    // $assoc_1 = mysqli_fetch_assoc($query_1);
    //
    // if (password_verify($password, $assoc_1['password'])) {
    //   die('Matched');
    // }
    // else{
    //   echo 'Not Match';
    // };
    //
    // die();

    if (empty($name)) {
      $_SESSION['name'] = 'Name is Required';
      $_SESSION['common'] = 'Every Field Required';
      header('location:user-view.php');
    }
    else{
      $min_nw = str_word_count($name);
      if ($min_nw < 2) {
        $_SESSION['name'] = 'Full Name is Required';
        $_SESSION['common'] = 'Every Field Required';
        header('location:user-view.php');
      }
      else{
        $name = $_POST['name'];
      }
    };

    if (empty($email)) {
      $_SESSION['email'] = 'Email is Required';
      $_SESSION['common'] = 'Every Field Required';
      header('location:user-view.php');
    }
    else{
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email'] = 'Valid Email is Required';
        $_SESSION['common'] = 'Every Field Required';
        header('location:user-view.php');
      }
      else{
        $email = $_POST['email'];
      }
    };

    if (empty($password)) {
      $_SESSION['password'] = 'Password is Required';
      $_SESSION['common'] = 'Every Field Required';
      header('location:user-view.php');
    }
    else{
      $min_pw = strlen($password);
      if ($min_pw < 6) {
        $_SESSION['password'] = 'Minimum 6 Characters Required';
        $_SESSION['common'] = 'Every Field Required';
        header('location:user-view.php');
      }
      else{
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      }
    };

    if (empty($phone)) {
      $_SESSION['phone'] = 'Phone is Required';
      $_SESSION['common'] = 'Every Field Required';
      header('location:user-view.php');
    }
    else{
      $phone = $_POST['phone'];
    };

    if (empty($gender)) {
      $_SESSION['gender'] = 'Gender is Required';
      $_SESSION['common'] = 'Every Field Required';
      header('location:user-view.php');
    }
    else{
      $gender = $_POST['gender'];
    };


    $update = "UPDATE registration SET name='$name', email ='$email', password='$password', phone='$phone', gender='$gender' WHERE id = $user_id";
    $u_query = mysqli_query($db,$update);

    if ($u_query) {
      echo "updatedd";
    }
    else{
      echo "fail";
    }

  };

?>

<meta http-equiv="refresh" content="1;URL='user-view.php'" />

<div style="width:410px; margin:0 auto; padding:30px;">
  <h2 style="font-size:22px; font-weight:400; color:#007bff;">Your Data Has Been Submitted!</h2>
  <p style="font-size:16px; font-weight:300; color:#007bff;">This Page will Redirect within 5 Seconds</p>
</div>
