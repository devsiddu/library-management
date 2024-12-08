<?php
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
    <title>Add Student</title>
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
                <!-- Title section -->
                <div class="title">Add Student</div>
                <div class="content">
                    <!-- Registration form -->
                    <form action="register_student.php" method="post">
                        <div class="user-details">
                            <!-- Input for stud Name -->
                            <div class="input-box">
                                <span class="details">Student Name</span>
                                <input type="text" name="name" placeholder="Enter name" required>
                            </div>
                            <!-- Input for usn -->
                            <div class="input-box">
                                <span class="details">Usn</span>
                                <input type="text" name="usn" placeholder="Enter usn " required>
                            </div>
                            <!-- Input for email -->
                            <div class=" input-box">
                                <span class="details">Email</span>
                                <input type="email" name="email" placeholder="Enter email id" required>
                            </div>
                            <!-- Input for class -->
                            <div class="input-box">
                                <label for="class">Class:</label>
                                <select class="form-control" name="class">
                                    <option selected>Select Class</option>
                                    <option value="1st Sem">1st Sem</option>
                                    <option value="2st Sem">2st Sem</option>
                                    <option value="3st Sem">3st Sem</option>
                                    <option value="4st Sem">4st Sem</option>
                                    <option value="5st Sem">5st Sem</option>
                                    <option value="6st Sem">6st Sem</option>
                                </select>
                            </div>
                            <!-- Input for mobile -->
                            <div class="input-box">
                                <span class="details">Mobile No</span>
                                <input type="number" name="mobile" placeholder="Enter mobile no" required>
                            </div>
                            <!-- Input for address -->
                            <div class="input-box">
                                <span class="details">Address</span>
                                <input type="text" name="address" placeholder="Enter address" required>
                            </div>
                            <!-- Input for pass -->
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="text" name="pass" value="Welcome@123" required>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <div class="button">
                            <input type="submit" name="add_student" value="Add">
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