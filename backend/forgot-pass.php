<?php
session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="account-pages">

    <!-- Begin page -->
    <div class="accountbg" style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box p-5">
                        <h2 class="text-uppercase text-center pb-4">
                            <a href="index.html" class="text-success">
                                <span><img src="assets/images/logo.png" alt="" height="26"></span>
                            </a>
                        </h2>

                        <form method="post" action="pass-update.php">

                            <div class="form-group m-b-20 row">
                                <div class="col-12">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress" placeholder="Enter your email">

                                    <span class="text-danger">
                                        <?php
                                        if (isset($_SESSION['email'])) {
                                            echo  $_SESSION['email'];
                                            unset($_SESSION['email']);
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group m-b-20 row">
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">

                                    <span class="text-danger">
                                        <?php
                                        if (isset($_SESSION['email'])) {
                                            echo  $_SESSION['email'];
                                            unset($_SESSION['email']);
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group m-b-20 row">
                                <div class="col-12">
                                    <label for="password">Confirm Password</label>
                                    <input class="form-control" type="password" name="confirmppassword" id="password" placeholder="Confirm Password">

                                    <span class="text-danger">
                                        <?php
                                        if (isset($_SESSION['email'])) {
                                            echo  $_SESSION['email'];
                                            unset($_SESSION['email']);
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="submit">SEND</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
        </div>

    </div>



    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>