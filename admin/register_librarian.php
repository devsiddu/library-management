<?php
include("../db_con/db_connection.php");

if (isset($_POST['add_librarian'])) {

    $query = "insert into librarian values('','$_POST[name]','$_POST[email]','$_POST[pass]','$_POST[mobile]','$_POST[address]')";
    $query_run = mysqli_query($connection, $query);
}
?>
<script type="text/javascript">
    alert("Librarian Adedd successfull.");
    window.location.href = "dashboard.php";
</script>
