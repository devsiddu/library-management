<?php
include("../db_con/db_connection.php");

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit();
}



?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ef153c5523.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <style>

    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Library Management</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <i class="fa-brands fa-slack pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-book-open pe-2"></i>
                            Books
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="add_book.php" class="sidebar-link">Add Books</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="view_books.php" class="sidebar-link">View Books</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="issue_book.php" class="sidebar-link">Issue Books</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="return_book.php" class="sidebar-link">Return Books</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="issued_books.php" class="sidebar-link">Issued Books</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="returned_books.php" class="sidebar-link">Returned Books</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-regular fa-user"></i>
                            Students
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="add_student.php" class="sidebar-link">Add Stutents</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="view_student.php" class="sidebar-link">View Stutents</a>
                            </li>

                        </ul>
                    </li>
                
                    <li class="sidebar-item" style="position: absolute; bottom: 50px;">
                        <a href="logout.php" class="sidebar-link">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="../images/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="view_profile.php" class="dropdown-item">Profile</a>
                                <a href="edit_pass.php" class="dropdown-item">Change Password</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <br>
            <div class="container">
                <?php
                $studname = "";
                $bookname = "";
                $book_no = "";
                $usn = "";
                $issue_date = "";
                $return_date = "";
                $fine = "";
                if (isset($_POST["stud_search"])) {
                    $book_no = $_POST["book_no"];
                    $usn = $_POST["usn"];

                    $query = "SELECT * FROM issued_books WHERE book_no=$book_no AND usn='$usn'  AND status='issued'";
                    $query_run = mysqli_query($connection, $query);
                    if ($row = mysqli_fetch_assoc($query_run)) {
                        $studname = $row["name"];
                        $bookname = $row["bookname"];
                        $issue_date = $row["issue_date"];
                        $return_date = $row["return_date"];

                    } else {
                        ?>
                        <script>
                            alert("Sorry,Details are not available");
                        </script>

                        <?php
                    }
                    $current_date= date("Y-m-d");
                    
                    if ($return_date < $current_date) {
                        $date1 = date_create($return_date);

                        $date2 = date_create($current_date);

                        $diff = date_diff($date2, $date1);
                        $date = (int) $diff->days;
                        $fine = $date * 10;

                    }

                }
                ?>

                <?php



                if (isset($_POST["return_book"])) {
                    $book_no = $_POST["book_no"];
                    $usn = $_POST["usn"];
                    $studname = $_POST["studname"];
                    $bookname = $_POST["bookname"];
                    $issudate = $_POST["issuedate"];
                    $returndate = $_POST["returndate"];
                    $status = "returned";


                    $query = "UPDATE `issued_books` SET `status` = '$status' WHERE book_no=$book_no AND usn='$usn'  AND status='issued'";
                    $query_run = mysqli_query($connection, $query);

                    $query2 = "update books set copies = copies+1 where bookname ='$bookname'";
                    $query_run = mysqli_query($connection, $query2);
                    ?>
                    <Script>
                        alert("Book returned successfully");
                        window.location.href='return_book.php';
                    </Script>

                    <?php
                }

                ?>


                <!-- Title section -->
                <div class="title">Return Book</div>
                <div class="content">
                    <!-- Registration form -->
                    <form action="" method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Book No</span>
                                <input type="text" name="book_no" placeholder="Enter book no"
                                    value="<?php echo "$book_no" ?>" required>
                            </div>
                            <div class='input-box'>
                                <span class='details'>Book Name</span>
                                <input type='text' name='bookname' value='<?php echo "$bookname" ?>' readonly required>
                            </div>
                            <div class="input-box">
                                <span class="details">Student USN</span>
                                <input type="text" name="usn" placeholder="Enter student USN"
                                    value="<?php echo "$usn" ?>" required>
                            </div>
                            <div class='input-box'>
                                <span class='details'>Student Name</span>
                                <input type='text' name='studname' value='<?php echo "$studname" ?>' readonly required>
                            </div>
                            <div class='input-box'>
                                <span class='details'>Issued Date</span>
                                <input type='text' name='issuedate' value='<?php echo "$issue_date" ?>' readonly
                                    required>
                            </div>
                            <div class='input-box'>
                                <span class='details'>Returning Date</span>
                                <input type='text' name='returndate' value='<?php echo "$return_date" ?>' readonly
                                    required>
                            </div>
                            <div class="input-box pt-4">
                                <button type="submit" name="stud_search" class="btn btn-primary">Search</button>
                            </div>
                            <div class="input-box pt-4">
                                <button type="submit" name="return_book" class="btn btn-primary">Return Book</button>
                            </div>
                            <div class="input-box pt-4">
                                <h6 class='details text-danger'>Fine is :<?php echo $fine ?></h6>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>