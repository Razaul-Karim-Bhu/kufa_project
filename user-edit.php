<?php
  require 'db.php';
  session_start();

  $id = $_GET['id'];
  $select = "SELECT * FROM registration WHERE id = $id";
  $query = mysqli_query($db,$select);
  $assoc = mysqli_fetch_assoc($query);
  $_SESSION['user_id'] = $id;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Edit User</title>
</head>

<body>
  <div class="col-md-4 m-auto pt-4">
    <h5 class="text-center" style="font-size:22px; font-weight:400; color:#007bff;">Edit User</h5>
    <h6 class="text-center" style="font-size:16px; font-weight:300; color:#007bff;">
      <?php
        date_default_timezone_set('Asia/Dhaka');
        echo date('s:i:ha d.m.Y') .'<br>'.'<br>';

        if (isset($_SESSION['common'])) {
          echo $_SESSION['common'];
          unset($_SESSION['common']);
        };
      ?>
    </h6>

    <form action="user-update.php" method="POST">
      <input type="hidden" name="user_id" value="<?php echo $id ?>">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $assoc['name']; ?>" class="form-control name" id="name" placeholder="Enter Name">

        <span style="color:#007bff; font-size:14px; font-style:italic;">
          <?php
            if (isset($_SESSION['name'])) {
          ?>
          <style media="screen">
            .name{
              border:1px solid #007bff;
            }
          </style>
          <?php
              echo $_SESSION['name'];
              unset($_SESSION['name']);
            };
          ?>
        </span>

      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $assoc['email']; ?>" class="form-control email" id="email" aria-describedby="emailHelp" placeholder="Enter Email">

        <span style="color:#007bff; font-size:14px; font-style:italic;">
          <?php
            if (isset($_SESSION['email'])) {
          ?>
          <style media="screen">
            .email{
              border:1px solid #007bff;
            }
          </style>
          <?php
              echo $_SESSION['email'];
              unset($_SESSION['email']);
            };
          ?>
        </span>

      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control password" id="password" placeholder="**********">

        <span style="color:#007bff; font-size:14px; font-style:italic;">
          <?php
            if (isset($_SESSION['password'])) {
          ?>
          <style media="screen">
            .password{
              border:1px solid #007bff;
            }
          </style>
          <?php
              echo $_SESSION['password'];
              unset($_SESSION['password']);
            };
          ?>
        </span>

      </div>

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo $assoc['phone']; ?>" class="form-control phone" id="phone" placeholder="+1">

        <span style="color:#007bff; font-size:14px; font-style:italic;">
          <?php
            if (isset($_SESSION['phone'])) {
          ?>
          <style media="screen">
            .phone{
              border:1px solid #007bff;
            }
          </style>
          <?php
              echo $_SESSION['phone'];
              unset($_SESSION['phone']);
            };
          ?>
        </span>

      </div>

      <div class="form-group">
        <label>Gender:</label>
        <input type="radio" <?php echo $assoc['gender'] == 'male'?'checked':''; ?> name="gender" class="gender" value="male"> Male
        <input type="radio" <?php echo $assoc['gender'] == 'female'?'checked':''; ?> name="gender" class="gender" value="female"> Female

        <span style="color:#007bff; font-size:14px; font-style:italic;">
          <?php
            if (isset($_SESSION['gender'])) {
          ?>
          <style media="screen">
            .gender{
              border:1px solid #007bff;
            }
          </style>
          <?php
              echo $_SESSION['gender'];
              unset($_SESSION['gender']);
            };
          ?>
        </span>

      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-outline-primary" value="submit" style="padding:.375rem 1.75rem;">Update</button>
      </div>
    </form>
  </div>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
