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
                    if (isset($_SESSION['proceeed'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['proceeed'];
                            unset($_SESSION['proceeed']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>
                    <form role="form" action="banner-post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="icon">Name</label>
                            <input type="text" name="name" class="form-control" id="icon" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="description" class="form-control" id="number" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="Description">Image</label>
                            <input type="file" name="img" class="form-control" id="title" placeholder="Image">
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