<?php
include("../db_con/db_connection.php");

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Login | LMS</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="../images/1.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be
                    Verified</p>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on
                    this platform.</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 ps-5 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello, Librarian</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email address" name="email">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password" name="password">
                        </div>
                        <br>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck" name="terms">
                                <label for="formCheck" class="form-check-label text-secondary"><small>I agree to the
                                        terms and conditions</small></label>
                            </div>

                            <div class="forgot">
                                <small><a href="forget_pass.php">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" name="login">Login</button>
                        </div>
                    </form>
                    <div class="row">
                        <small>Login as</small>
                    </div>
                    <div class="input-group mb-3">
                    <input type="button" value="Admin" class="btn btn-lg btn-light w-100 fs-6" id="btnHome"
                    onClick="document.location.href='../admin/index.php'" />
                    </div>

                    <div class="input-group mb-3">
                    <input type="button" value="Student" class="btn btn-lg btn-light w-100 fs-6" id="btnHome"
                    onClick="document.location.href='../students/index.php'" />
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="button" value="Back To Home" class="btn btn-lg btn-light w-100 fs-6" id="btnHome"
                            onClick="document.location.href='../index.php'" />
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!------------------------ database validation start--------------------- -->
    <?php
    if (isset($_POST['login'])) {
        if (isset($_POST['terms'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "select * from librarian where email = '$_POST[email]'";
            $query_run = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($query_run)) {
                if ($row['email'] == $email) {
                    if ($row['password'] == $password) {
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        ?>
                        <script>
                            window.location.href = "dashboard.php";
                        </script>
                        <?php
                        exit();
                    } else {
                        ?>
                        <br><br>
                        <script>
                            alert("Invalid Password or email");
                        </script>
                        <?php
                    }
                }
            }
        } else {
            ?>
            <script>
                alert("Please agree to the terms and conditions");
            </script>
            <?php
        }
    }
    ?>
    <!------------------------ database validation end--------------------- -->

</body>

</html>
