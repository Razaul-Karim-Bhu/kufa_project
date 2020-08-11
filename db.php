<?php
  define('HOST','localhost');
  define('USER','root');
  define('PASSWORD','');
  define('DATABASE','project_01');

  $db = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

  if (mysqli_connect_errno()) {
    echo 'Database Connection Error';
  };
