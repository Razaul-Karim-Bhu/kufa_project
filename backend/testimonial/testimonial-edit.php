<?php
require '../session.php';
require '../db.php';
require '../inc/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM testimonial";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
?>


<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card-box">
                    <h4 class="header-title mb-4">Add Testimonial</h4>

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

                    <form role="form" action="testimonial-update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="Thumbnail">Image</label>
                            <input type="file" name="image" class="form-control" id="Thumbnail" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="form-group">
                            <img id="blah" style="height: 80px; width:80px" src="../../uploads/images/<?php echo $assoc['img']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="Summary">Message</label>
                            <input type="text" name="message" class="form-control" value="<?php echo $assoc['message'] ?>" id="Summary" placeholder="Enter Your Message" maxlength="100">
                        </div>

                        <div class="form-group">
                            <label for="Icon">Name</label>
                            <input type="text" value="<?php echo $assoc['name'] ?>" name="name" class="form-control" id="icon" placeholder="Enter Your Name">
                        </div>



                        <div class="form-group">
                            <label for="Icon">Title</label>
                            <input type="text" name="title" value="<?php echo $assoc['title'] ?>" class="form-control" id="icon" placeholder="Enter Your Title">
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