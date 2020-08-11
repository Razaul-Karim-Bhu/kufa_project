<?php
require '../session.php';
require '../db.php';
require '../inc/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM about";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);
?>


<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card-box">
                    <h4 class="header-title mb-4">Edit About</h4>

                    <?php
                    if (isset($_SESSION['about'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['about'];
                            unset($_SESSION['about']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>

                    <form role="form" action="about-edit-post.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" name="year" class="form-control" id="year" placeholder="Year" maxlength="100" value="<?php echo $assoc['year'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="Summary">Skill Title</label>
                            <input type="text" name="skill-title" class="form-control" id="Summary" placeholder="Skill Title" maxlength="100" value="<?php echo $assoc['skill_title'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="skill-bar">Skill Bar</label>
                            <input type="text" name="skill-bar" class="form-control" id="skill-bar" placeholder="Skill Bar" maxlength="100" value="<?php echo $assoc['skill_bar'] ?>">
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