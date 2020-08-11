<?php
session_start();
$root = '//' . $_SERVER['SERVER_NAME'] . '/project_01/backend/login.php';
if (!isset($_SESSION['email'])) {
    header('location:' . $root);
}
