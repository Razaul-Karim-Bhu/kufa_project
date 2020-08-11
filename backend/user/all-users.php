<?php require '../db.php'; ?>
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
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>ID</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                              <?php
                                                $select = "SELECT * FROM registration WHERE status = 1 ORDER BY id ASC";
                                                $query = mysqli_query($db,$select);

                                                foreach ($query as $key => $value) {
                                                  ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $key + 1; ?></th>
                                                        <td><?php echo $value['name']; ?></td>
                                                        <td><?php echo $value['email']; ?></td>
                                                        <td><?php echo $value['phone']; ?></td>
                                                        <td><?php echo $value['gender'] == 'male' ? 'Male':'Female'; ?></td>
                                                        <td><?php echo $value['id']; ?></td>
                                                        <td><?php echo $value['user_role'] == 1 ? 'User':'Admin'; ?></td>
                                                        <td>
                                                          <a href="edit-users.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                                                          <a data-id="<?php echo $value['id']; ?>" class="btn btn-warning reject">Reject</a>
                                                          <!-- href="user-inactive.php?id=<?php //echo $value['id']; ?>" -->
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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box text-center">
                                    <h4 class="header-title pb-2">Rejected Customers</h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>ID</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                              <?php
                                                $select = "SELECT * FROM registration WHERE status = 2 ORDER BY id ASC";
                                                $query = mysqli_query($db,$select);

                                                foreach ($query as $key => $value) {
                                                  ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $key + 1; ?></th>
                                                        <td><?php echo $value['name']; ?></td>
                                                        <td><?php echo $value['email']; ?></td>
                                                        <td><?php echo $value['phone']; ?></td>
                                                        <td><?php echo $value['gender'] == 'male' ? 'Male':'Female'; ?></td>
                                                        <td><?php echo $value['id']; ?></td>
                                                        <td><?php echo $value['user_role'] == 1 ? 'User':'Admin'; ?></td>
                                                        <td>
                                                          <a href="user-reactive.php?id=<?php echo $value['id']; ?>" class="btn btn-success">Active</a>
                                                          <a href="#" class="btn btn-danger">Delete</a>
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
