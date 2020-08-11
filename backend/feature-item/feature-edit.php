<?php
require '../session.php';
require '../inc/header.php';
require '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM feature";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
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

                    <form role="form" action="feature-edit-post.php" method="post">
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" name="icon" class="form-control" id="icon" value="<?php echo $assoc['icon'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="Description">Number</label>
                            <input type="text" name="number" class="form-control" id="number" value="<?php echo $assoc['number'] ?>">

                        </div>
                        <div class=" form-group">
                            <label for="Description">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?php echo $assoc['title'] ?>">

                        </div>

                        <button type=" submit" class="btn btn-primary">Save Change</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

<?php require '../inc/footer.php'; ?>