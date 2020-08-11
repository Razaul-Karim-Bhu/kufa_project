<?php
require '../session.php';
require '../db.php';
require '../inc/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM services WHERE id= $id";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
?>


<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card-box">
                    <h4 class="header-title mb-4">Edit Service</h4>

                    <?php
                    if (isset($_SESSION['service'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['service'];
                            unset($_SESSION['service']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>

                    <form role="form" action="service-edit-post.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" value="<?php echo $assoc['title'] ?>" name="title" class="form-control" id="Title" placeholder="text">
                        </div>

                        <div class="form-group">
                            <label for="Summary">Summary</label>
                            <input type="text" name="summary" value="<?php echo $assoc['summary'] ?>" class="form-control" id="Summary" placeholder="Ex: Graphics Design" maxlength="100">
                        </div>

                        <!-- <div class="form-group">
                <label for="Icon">Icon</label>
                <input type="text" name="icon" class="form-control" id="Icon" placeholder="fab fa-react">
              </div> -->

                        <div class="form-group">
                            <label for="Icon">Icon</label>
                            <input type="text" name="icon" class="form-control" value="<?php echo $assoc['icon'] ?>" id="icon" placeholder="Enter A Fontawesome Icon class">

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