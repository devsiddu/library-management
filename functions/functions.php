<?php

function get_book_count()
{
    include("../db_con/db_connection.php");
    $book_count = 0;
    $query = "select count(*) as book_count from books";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $book_count = $row['book_count'];
    }
    return ($book_count);
}
function get_student_count()
{
    include("../db_con/db_connection.php");
    $student_count = 0;
    $query = "select count(*) as student_count from students";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        $student_count = $row['student_count'];
    }
    return ($student_count);
}
?>