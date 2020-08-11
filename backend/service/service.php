<?php
require '../session.php';
require '../db.php';
require '../inc/header.php';
?>


<div class="content">
  <!-- Start Content-->
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-10 offset-1">
        <div class="card-box">
          <h4 class="header-title mb-4">Add Service</h4>

          <?php
          if (isset($_SESSION['summary_info'])) {
          ?>
            <div class="alert alert-danger">
              <?php
              echo $_SESSION['summary_info'];
              unset($_SESSION['summary_info']);
              ?>
            </div>
          <?php
          };
          ?>

          <form role="form" action="service-post.php" method="post">
            <div class="form-group">
              <label for="Title">Title</label>
              <input type="text" name="title" class="form-control" id="Title" placeholder="text">
            </div>

            <div class="form-group">
              <label for="Summary">Summary</label>
              <input type="text" name="summary" class="form-control" id="Summary" placeholder="Ex: Graphics Design" maxlength="100">
            </div>

            <!-- <div class="form-group">
                <label for="Icon">Icon</label>
                <input type="text" name="icon" class="form-control" id="Icon" placeholder="fab fa-react">
              </div> -->

            <div class="form-group">
              <label for="Icon">Icon</label>
              <input type="text" name="icon" class="form-control" id="icon" placeholder="Enter A Fontawesome Icon class">
            </div> <button type="submit" class="btn btn-primary">Save Change</button>
          </form>
        </div>
      </div>
    </div>

    <!-- end row -->
  </div> <!-- end container-fluid -->
</div>

<?php require '../inc/footer.php'; ?>