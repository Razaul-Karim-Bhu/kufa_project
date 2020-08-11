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
                    if (isset($_SESSION['alert'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>

                    <form role="form" action="icon-post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Description">Icon</label>
                            <input type="text" name="icon" class="form-control" id="title" placeholder="Icon">
                        </div>
                        <div class="form-group">
                            <label for="Description">Icon</label>
                            <input type="text" name="link" class="form-control" id="title" placeholder="Link">
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