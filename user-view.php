<?php
  require 'db.php';
  require 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users View Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="col-md-10 m-auto pt-4 pb-4">
    <div class="card text-center">
      <div class="card-header">
        Active Users

        <div style="padding-top:1rem;">
          <a class="btn btn-primary" style="padding:.375rem 1.75rem;" href="registration.php">Add User</a>
          <a class="btn btn-danger" style="padding:.375rem 1.75rem;" href="session-end.php">Sign Out</a>
        </div>
      </div>

      <span style="color:#007bff; padding-top:10px; color:red;">
        <?php
          if (isset($_SESSION['inactive'])) {
            echo $_SESSION['inactive'];
            unset($_SESSION['inactive']);
          };
        ?>
      </span>

      <div class="card-body">
          <table class="table table-hover" id="myTable">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Gender</th>
              <th scope="col">ID</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $select = "SELECT * FROM registration WHERE status = 1 ORDER BY id ASC";
              $query = mysqli_query($db,$select);

              foreach ($query as $key => $users) {
            ?>
            <tr>
              <th scope="row"><?php echo $key + 1 ?></th>
              <td><?php echo $users['name'] ?? 'N/A' ?></td>
              <td><?php echo $users['email']; ?></td>
              <td><?= $users['phone']; ?></td>
              <td><?php echo $users['gender'] == 'male' ? 'Male':'Female'; ?></td>
              <td><?php echo $users['id'] ?></td>
              <td><?php echo $users['status'] == '1' ? 'Active':'Inactive' ?></td>
              <td>
                <a href="user-edit.php?id=<?php echo $users['id']; ?>" class="btn btn-outline-info">Edit</a>
                <a href="user-inactive.php?id=<?php echo $users['id']; ?>" class="btn btn-outline-warning" onclick="return confirm('Are you Sure to Inactive ?')">Inactive</a>
              </td>
            </tr>
            <?php

              };
            ?>
          </tbody>
        </table>
      </div>
      <div class="card-footer text-muted">
        Copyright © 2020 Corporation
      </div>
    </div>
  </div>

 <!-- Archive User Table Start -->
  <div class="col-md-10 m-auto pt-4 pb-4">
    <div class="card text-center">
      <div class="card-header bg-warning">
        Inactive Users
      </div>

      <span style="padding-top:10px; color:green;">
        <?php
          if (isset($_SESSION['reactive'])) {
            echo $_SESSION['reactive'];
            unset($_SESSION['reactive']);
          };
        ?>
      </span>

      <span style="padding-top:10px; color:red;">
        <?php
          if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
          };
        ?>
      </span>

      <div class="card-body">
          <table class="table table-hover" id="myTable1">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Gender</th>
              <th scope="col">ID</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $select = "SELECT * FROM registration WHERE status = 2 ORDER BY id ASC";
              $query = mysqli_query($db,$select);

              foreach ($query as $key => $users) {
            ?>
            <tr>
              <th scope="row"><?php echo $key + 1 ?></th>
              <td><?php echo $users['name'] ?? 'N/A' ?></td>
              <td><?php echo $users['email']; ?></td>
              <td><?= $users['phone']; ?></td>
              <td><?php echo $users['gender'] == 'male' ? 'Male':'Female'; ?></td>
              <td><?php echo $users['id'] ?></td>
              <td><?php echo $users['status'] == '1' ? 'Active':'Inactive' ?></td>
              <td>
                <a href="user-reactive.php?id=<?php echo $users['id']; ?>" class="btn btn-outline-success">Reactive</a>
                <a href="user-delete.php?id=<?php echo $users['id']; ?>" class="btn btn-outline-danger" onclick="return confirm('Are you Sure to Delete ?')">Delete</a>
              </td>
            </tr>
            <?php

              };
            ?>
          </tbody>
        </table>
      </div>
      <div class="card-footer text-muted">
        Copyright © 2020 Corporation
      </div>
    </div>
  </div>
 <!-- Archive User Table End -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script type="text/javascript">
      $(document).ready( function () {
      $('#myTable, #myTable1').DataTable();
    } );
  </script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
