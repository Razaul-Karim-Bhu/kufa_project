<?php
require '../session.php';
require '../inc/header.php';
require '../db.php';
?>


<div class="content">
  <!-- Start Content-->
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-10 offset-1">
        <div class="card-box">
          <h4 class="header-title mb-4">Add Project</h4>

          <?php
          if (isset($_SESSION['projects'])) {
          ?>
            <div class="alert alert-danger">
              <?php
              echo $_SESSION['projects'];
              unset($_SESSION['projects']);
              ?>
            </div>
          <?php
          };
          ?>

          <form role="form" action="project-post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="Title">Title</label>
              <input type="text" name="title" class="form-control" id="Title" placeholder="title">
            </div>

            <div class="form-group">
              <label for="Description">Description</label>
              <textarea type="text" name="description" class="form-control" id="Description" placeholder="Description" rows="6"></textarea>
            </div>

            <!-- <div class="form-group">
                <label for="Icon">Icon</label>
                <input type="text" name="icon" class="form-control" id="Icon" placeholder="fab fa-react">
              </div> -->

            <div class="form-group">
              <label for="Thumbnail">Thumbnail</label>
              <input type="file" name="thumbnail" class="form-control" id="Thumbnail">
            </div>

            <button type="submit" class="btn btn-primary">Save Change</button>
          </form>
        </div>
      </div>
    </div>

    <!-- end row -->
  </div> <!-- end container-fluid -->
</div>

<?php require '../inc/footer.php'; ?>