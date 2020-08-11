<?php
require '../session.php';
require '../db.php'; ?>
<?php require '../inc/header.php';
$select = "SELECT * FROM about";
$query = mysqli_query($db, $select);
?>

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box text-center">
                    <h4 class="header-title pb-2">Skill</h4>
                    <?php
                    if (isset($_SESSION['delete'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['delete'];
                            unset($_SESSION['delete']);
                            ?>
                        </div>
                    <?php
                    };
                    ?>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Id</th>
                                    <th>year</th>
                                    <th>skill Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                foreach ($query as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $key + 1; ?></th>
                                        <td><?php echo $value['id']; ?></td>
                                        <td><?php echo $value['year']; ?></td>
                                        <td><?php echo $value['skill_title']; ?></td>
                                        <td>
                                            <a href="about-edit.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                                            <a href="about-delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>


                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>

<?php require '../inc/footer.php'; ?>