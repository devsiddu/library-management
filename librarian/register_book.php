<?php
include("../db_con/db_connection.php");

if (isset($_POST['add_book'])) {

    $query = "insert into books values('','$_POST[bookname]','$_POST[author]',$_POST[book_no],$_POST[price],$_POST[copies])";
    $query_run = mysqli_query($connection, $query);
}
?>
<script type="text/javascript">
    alert("Book Adedd successfull.");
    window.location.href = "dashboard.php";
</script>
