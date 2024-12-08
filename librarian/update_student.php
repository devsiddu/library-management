<?php
include("../db_con/db_connection.php");

session_start();

$query = $query = "UPDATE students SET usn = '$_POST[usn]', name = '$_POST[name]', email ='$_POST[email]' , class = '$_POST[class]', mobile = '$_POST[mobile]', address = '$_POST[address]' WHERE id = $_POST[id]";
$query_run = mysqli_query($connection, $query);




?>
<script>
    alert("Updated Successfully..");
    window.location.href = "dashboard.php"
</script>
