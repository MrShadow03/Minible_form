<?php include_once "./app/connection.php"; ?>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password) || !isset($_POST['checkbox'])) {
        if (empty($name) || empty($email) || empty($password)) {
            $msg = "Any fields cannot be blank";
        } elseif (!isset($_POST['checkbox'])) {
            $msg = "Please check the checkbox";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Basic Elements | Minible - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="layout-wrapper">
        <div class="row d-flex justify-content-center">
            <div class="card col-xl-4 col-lg-6 col-md-8 mt-4">
                <div class="card-body">
                    <div class="card-title mb-3">Account Registration</div>
                    <form action="#" method="POST">

                        <?php if (isset($msg)) { ?>
                            <div class="mb-3 alert alert-danger alert-dismissible fade show" role="alert">

                                <?php echo $msg; ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>

                        <div class="mb-3">
                            <label class="form-label" for="formrow-firstname-input">First name</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" name="name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-email-input">Email</label>
                                    <input type="email" class="form-control" id="formrow-email-input" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-password-input">Password</label>
                                    <input type="password" class="form-control" id="formrow-password-input" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formrow-password-input">Upload Photo</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formrow-customCheck" name="checkbox">
                            <label class="form-check-label" for="formrow-customCheck">Agree with our policies</label>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md" name="submit">Submit</button>
                            <a href="data_table.php" type="submit" class="btn btn-secondary w-md">Admin</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>






    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/minible/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 13:01:50 GMT -->

</html>