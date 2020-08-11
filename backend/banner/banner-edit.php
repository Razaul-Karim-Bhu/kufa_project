<?php
require '../session.php';
require '../inc/header.php';
require '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM banner";
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

                    <form role="form" action="banner-edit-post.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="icon">Name</label>
                            <input type="text" name="name" value="<?php echo $assoc['name'] ?>" class="form-control" id="icon" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="description" class="form-control" id="number" placeholder="Description" value="<?php echo $assoc['description'] ?>">

                        </div>
                        <div class="form-group">
                            <label for="Thumbnail">Thumbnail</label>
                            <input type="file" name="img" class="form-control" id="Thumbnail" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="form-group">
                            <img id="blah" style="height: 80px; width:80px" src="../../uploads2/logo/<?php echo $assoc['img']; ?>">
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