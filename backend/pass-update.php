<?php
require 'db.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $confirmpass = $_POST['confirmppassword'];
    if ($password == $confirmpass) {
        $select = "SELECT password FROM registration WHERE email = '$email'";
        $query = mysqli_query($db, $select);
        $count = mysqli_num_rows($query);
        if ($count > 0) {

            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $update = "UPDATE registration SET password = '$password' WHERE email = '$email'";
            $query = mysqli_query($db, $update);
            \header('location:login.php');
        }
    }
}
