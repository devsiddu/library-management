<?php
include("../db_con/db_connection.php");

if (isset($_POST['add_student'])) {

    $query = "insert into students values('','$_POST[name]','$_POST[usn]','$_POST[email]','$_POST[class]','$_POST[mobile]','$_POST[address]','$_POST[pass]')";
    $query_run = mysqli_query($connection, $query);
}
?>
<script type="text/javascript">
    alert("Student Adedd successfull.");
    window.location.href = "dashboard.php";
</script>
