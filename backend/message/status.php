<?php
session_start();
require "../inc/header.php";
require "../db.php";
$id = $_GET['id'];
$select = "SELECT * FROM contacts WHERE id = $id";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);

if ($assoc['status'] == 1) {
    $update = "UPDATE contacts SET status = 2 WHERE id = $id";
    $query = mysqli_query($db, $update);
} else {
    $update = "UPDATE contacts SET status = 1 WHERE id = $id";
    $query = mysqli_query($db, $update);
}
?>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="clr"><?php echo $assoc['name']; ?></td>
                                    <td class="clr"><?php echo $assoc['email']; ?></td>
                                    <td class="clr"><?php echo $assoc['message']; ?></td>
                                    <td>
                                        <a href="message.php" class="btn btn-info">Back</a>
                                    </td>
                                </tr>


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