<?php
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
    <title>Forgot Password | LMS</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Forget pass Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow ">

            <div class="right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Forgot Password</h2>
                        <p>Enter your email address.</p>
                    </div>
                    <form action="check_email.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email address" name="email">
                        </div>
                        
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" name="check-email">Check Email</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>