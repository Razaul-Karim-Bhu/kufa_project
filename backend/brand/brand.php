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
                    <h4 class="header-title mb-4">Add About Image</h4>

                    <?php
                    if (isset($_SESSION['brand_imagee'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['brand_image'];
                            unset($_SESSION['brand_image']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>

                    <form role="form" action="brand-post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Thumbnail">Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control" id="Thumbnail" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="form-group">
                            <img id="blah" style="height: 80px; width:80px" src="../../uploads/images/<?php echo $assoc['thumbnail']; ?>">
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