<?php
require '../session.php';
require '../db.php';
require '../inc/header.php';
?>

<div class="content">
  <!-- Start Content-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box text-center">
          <h4 class="header-title pb-2">All Projects</h4>

          <?php
          if (isset($_SESSION['delete'])) {
          ?>
            <div class="alert alert-danger">
              <?php
              echo $_SESSION['delete'];
              unset($_SESSION['delete']);
              ?>
            </div>
          <?php
          };
          ?>

          <div class="table-responsive">
            <table class="table table-bordered mb-0">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $select = "SELECT * FROM projects";
                $query = mysqli_query($db, $select);

                foreach ($query as $key => $value) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $key + 1; ?></th>
                    <td><?php echo $value['title']; ?></td>
                    <td><?php echo $value['description']; ?></td>
                    <td><img style="width:50px;height:50px;" src="../../uploads3/images3/<?php echo $value['thumbnail']; ?>"></td>
                    <td>
                      <a href="project-edit.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                      <a href="project-delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

    <!-- end row -->
  </div> <!-- end container-fluid -->
</div>

<?php require '../inc/footer.php'; ?>