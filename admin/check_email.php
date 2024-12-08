<?php
include("../db_con/db_connection.php");

session_start();
if(isset($_POST['check-email']))
{
    $check_email= $_POST['email'];

    $query = "select * from admin where email = '$check_email'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($query_run)) {
        $email = $row["email"];
    }
    if ($email ==$check_email ) {
        $_SESSION['email'] = $email;
        ?>
        <Script>
            alert("Email Varified Succusfully..");
            window.location.href = "check_mobile_no.php"
        </Script>
    <?php
    }else{
        ?>
        <script>
        alert("Incorect Email..");
        window.location.href = "forget_pass.php"
    </script>
    <?php
    }
}
?>