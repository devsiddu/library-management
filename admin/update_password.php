<?php
include("../db_con/db_connection.php");

session_start();

$password = "";

$query = "select * from admin where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_array($query_run)) {
    $password = $row["password"];
}
if ($password == $_POST['old_pass']) {
    $query = "update admin set password = '$_POST[new_pass]' where email = '$_SESSION[email]'";
    $query_run = mysqli_query($connection, $query);


?>
<script>
    alert("Password Updated Successfully..");
    window.location.href = "dashboard.php"
</script>
<?php
}else{
    ?>
    <script>
    alert("Incorect Password..");
    window.location.href = "edit_pass.php"
</script>
<?php
}
?>