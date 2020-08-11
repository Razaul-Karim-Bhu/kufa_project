<?php
  require '../../db.php';
  require '../inc/header.php';

  $id = $_GET['id'];
  $select = "SELECT * FROM registration WHERE id = $id";
  $query = mysqli_query($db,$select);
  $assoc = mysqli_fetch_assoc($query);
  $_SESSION['users_update'] = $id;

?>


                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-7 m-auto">
                                <div class="card-box">
                                    <h4 class="header-title pb-2 text-center">Edit Customers</h4>

                                    <form action="edit-users-update.php" method="post">
                                      <input type="hidden" name="users_update" value="<?php echo $id; ?>">
                                      <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" name="name" value="<?php echo $assoc['name']; ?>" class="form-control" id="Name" placeholder="Enter Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="Phone">Phone</label>
                                        <input type="text" name="phone" value="<?php echo $assoc['phone']; ?>" class="form-control" id="Phone" placeholder="Enter Phone">
                                      </div>
                                      <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" name="email" value="<?php echo $assoc['email']; ?>" class="form-control" id="Email" placeholder="Enter Email">
                                      </div>
                                      <div class="form-group">
                                        <label>Gender:</label>
                                        <input type="radio" <?php echo $assoc['gender'] == 'male'?'checked':''; ?> name="gender" class="gender" value="male"> Male
                                        <input type="radio" <?php echo $assoc['gender'] == 'female'?'checked':''; ?> name="gender" class="gender" value="female"> Female

                                        <span style="color:#007bff; font-size:14px; font-style:italic;">
                                          <?php
                                            if (isset($_SESSION['gender'])) {
                                          ?>
                                          <style media="screen">
                                            .gender{
                                              border:1px solid #007bff;
                                            }
                                          </style>
                                          <?php
                                              echo $_SESSION['gender'];
                                              unset($_SESSION['gender']);
                                            };
                                          ?>
                                        </span>

                                      </div>

                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- end container-fluid -->
                </div>

<?php require '../inc/footer.php'; ?>
