<?php
require '../inc/header.php';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/php/kufa/dbcon.php";
include_once($path);

$select = "SELECT * FROM logo";
$query = mysqli_query($link, $select);
$assoc = mysqli_fetch_assoc($query);
?>


<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card-box">
                    <h4 class="header-title mb-4">Add Logo</h4>

                    <?php
                    if (isset($_SESSION['logo'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['logo'];
                            unset($_SESSION['logo']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>

                    <form role="form" action="logo-post.php" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                          <div class="col-6">
                              <label for="Logo">Logo</label>
                              <input class="file" name="logo_upload" type="file"  id="fileToUpload" placeholder="Enter a Logo">
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-6">


                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

<?php require '../inc/footer.php'; ?>
