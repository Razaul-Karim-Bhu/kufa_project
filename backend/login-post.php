<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $oldPassword = "SELECT COUNT(*) as total, name, email, password, user_role FROM registration WHERE email='$email'";
    $query = mysqli_query($db, $oldPassword);
    $afterassoc = mysqli_fetch_assoc($query);
    $hash = $afterassoc['password'];

    if (empty($email)) {
        $_SESSION['email'] = "Email Can't be Empty";
        header('location:login.php');
    } else {
        if ($afterassoc['total'] > 0) {
            if (password_verify($password, $hash)) {
                if ($afterassoc['user_role'] == 1) {
                    $_SESSION['name'] = $afterassoc['name'];
                    $_SESSION['email'] = $afterassoc['email'];
                    $_SESSION['user_role'] = $afterassoc['user_role'];
                    header('location:dashboard.php');
                } else {
                    $_SESSION['name'] = $afterassoc['name'];
                    $_SESSION['email'] = $afterassoc['email'];
                    $_SESSION['user_role'] = $afterassoc['user_role'];
                    header('location:dashboard.php');
                }
            } else {
                $_SESSION['password'] = "Password Not Matched";
                header('location:login.php');
            }
        } else {
            $_SESSION['email'] = "Email not found in our system";
            header('location:login.php');
        }
    }
}
