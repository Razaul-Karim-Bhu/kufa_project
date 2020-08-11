<?php require '../session.php'; ?>
<?php require '../../db.php'; ?>
<?php require '../inc/header.php'; ?>

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box text-center">
                    <h4 class="header-title pb-2">Registered Customers</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>


                                    <th>Title</th>
                                    <th>Icon</th>
                                    <th>Summary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $select = "SELECT * FROM services";
                                $query = mysqli_query($db, $select);

                                foreach ($query as $key => $value) {
                                ?>
                                    <tr>

                                        <td><?php echo $value['title']; ?></td>
                                        <td><?php echo $value['icon']; ?></td>
                                        <td><?php echo $value['summary']; ?></td>

                                        <td>
                                            <a href="service-edit.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                                            <a href="service-delete.php?id=<?php echo $value['id']; ?>" class="btn btn-warning" onclick="return confirm('Are you sure?')">Delete</a>
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