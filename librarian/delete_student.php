<?php
include("../db_con/db_connection.php");


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $query = "DELETE FROM students WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Student record deleted successfully";
    } else {
        echo "Error deleting student record";
    }

}
?>
<script type="text/javascript">
    alert("Student Deleted successfull.");
    window.location.href = "view_student.php";
</script>
