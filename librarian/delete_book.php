<?php
include("../db_con/db_connection.php");

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $query = "DELETE FROM books WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Books record deleted successfully";
    } else {
        echo "Error deleting book record";
    }

}
?>
<script type="text/javascript">
    alert("Book Deleted successfull.");
    window.location.href = "view_books.php";
</script>
