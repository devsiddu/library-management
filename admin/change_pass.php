<?php
include("../db_con/db_connection.php");

session_start();
$email = $_SESSION['email'];
$new_pass= $_POST['new_pass'];
$conform_pass= $_POST['conform_pass'];


if ($new_pass == $conform_pass) {
    $query = "update admin set password = '$new_pass' where email = '$email'";
    $query_run = mysqli_query($connection, $query);

?>
<script>
    alert("Password Updated Successfully..You may login now!");
    window.location.href = "index.php"
</script>
<?php
session_abort();
session_destroy();
exit();
}else{
    ?>
    <script>
    alert("Password does not match..");
    window.location.href = "new_pass.php"
</script>
<?php
}
?>