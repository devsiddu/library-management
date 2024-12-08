<?php
include("../db_con/db_connection.php");

session_start();
if(isset($_POST['check-mobile']))
{
    $check_mobile= $_POST['mobile'];
    $check_email= $_SESSION['email'];


    $query = "select * from admin where mobile = '$check_mobile' and email= '$check_email' ";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($query_run)) {
        $mobile = $row["mobile"];
    }
    if ($mobile ==$check_mobile ) {
        ?>
        <Script>
            alert("Mobile No Varified Succusfully..");
            window.location.href = "new_pass.php"
        </Script>
    <?php
    }else{
        ?>
        <script>
        alert("Incorect Mobile No..");
        window.location.href = "check_mobile_no.php"
    </script>
    <?php
    }
}
?>