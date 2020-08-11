<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  if (empty($name)) {
    $_SESSION['name'] = 'Name is Required';
    $_SESSION['common'] = 'Every Field Required';
    header('location:registration.php');
  } else {
    $min_nw = str_word_count($name);
    if ($min_nw < 2) {
      $_SESSION['name'] = 'Full Name is Required';
      $_SESSION['common'] = 'Every Field Required';
      header('location:registration.php');
    } else {
      $name = htmlentities($_POST['name'], ENT_QUOTES);
    }
  };

  if (empty($email)) {
    $_SESSION['email'] = 'Email is Required';
    $_SESSION['common'] = 'Every Field Required';
    header('location:registration.php');
  } else {
    $tm_select = "SELECT COUNT(*) as total FROM registration WHERE email = '$email'";
    $tm_query = mysqli_query($db, $tm_select);
    $tm_assoc = mysqli_fetch_assoc($tm_query);

    if ($tm_assoc['total'] > 0) {
      $_SESSION['email'] = 'Email already Registered';
      $_SESSION['emailValue'] = $email;
      header('location:registration.php');
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email'] = 'Valid Email is Required';
        $_SESSION['common'] = 'Every Field Required';
        header('location:registration.php');
      } else {
        $email = $_POST['email'];
      }
    };
  };

  if (empty($password)) {
    $_SESSION['password'] = 'Password is Required';
    $_SESSION['common'] = 'Every Field Required';
    header('location:registration.php');
  } else {
    $min_pw = strlen($password);
    if ($min_pw < 6) {
      $_SESSION['password'] = 'Minimum 6 Characters Required';
      $_SESSION['common'] = 'Every Field Required';
      header('location:registration.php');
    } else {
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    }
  };

  if ($_SESSION['name'] || $_SESSION['email'] || $_SESSION['password']) {
    die();
  } else {
    $insert = "INSERT INTO registration (name,email,password) VALUES ('$name','$email','$password')";
    $query = mysqli_query($db, $insert);

    if ($query) {
      header('location:registration.php');
      $_SESSION['register'] = "User Registerd Successfully";
    } else {
      header('location:registration.php');
    }
  }
}
