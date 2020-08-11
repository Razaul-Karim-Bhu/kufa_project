<?php
echo $root = $_SERVER['DOCUMENT_ROOT'] . '/' . 'PROJECT_01/';
if (!file_exists($root . 'backend/about/about.php') && !file_exists($root . 'backend/about/about-edit.php') && !file_exists($root . 'backend/about/about-show.php')) {
    echo "PAGE NOT FOUND";
    header('location:' . $root . 'backend/' . 'not-found.php');
}
