<?php require '../session.php' ?>
<?php require '../db.php' ?>
<?php require '../inc/header.php'; ?>

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title pb-2">Inbox Message</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $select = "SELECT * FROM contacts ORDER BY id ASC";
                                $query = mysqli_query($db, $select);

                                foreach ($query as $key => $value) {

                                ?>
                                    <tr <?php
                                        if ($value['status'] == 1) {
                                        ?> style="color:000; font-weight:bolder" <?php } ?> class="">


                                        <th class="clr" scope="row"><?php echo $key + 1; ?></th>
                                        <td class="clr"><?php echo $value['name']; ?></td>
                                        <td class="clr"><?php echo $value['email']; ?></td>
                                        <td class="clr"><?php echo $value['message']; ?></td>
                                        <td>
                                            <a href="status.php?id=<?php echo $value['id']; ?>" class="btn btn-info"><?php
                                                                                                                        if ($value['status'] == 1) {
                                                                                                                            echo "Unread";
                                                                                                                        } else {
                                                                                                                            echo "Read";
                                                                                                                        }
                                                                                                                        ?>
                                            </a>
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