<?php
include("../db_con/db_connection.php");

session_start();

$query = $query = "UPDATE books SET bookname = '$_POST[bookname]', author ='$_POST[author]' , book_no = '$_POST[book_no]', price = '$_POST[price]', copies = '$_POST[copies]' WHERE id = $_POST[id]";
$query_run = mysqli_query($connection, $query);




?>
<script>
    alert("Updated Successfully..");
    window.location.href = "dashboard.php"
</script>
