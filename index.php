<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="shortcut icon" href="images/favicon.svg" />
  <meta charset="UTF-8">
  <title>Library Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Responsive bootstrap landing template" />
  <meta name="author" content="Coderthemes" />

  <!-- Animate -->
  <link href="./css/animate.css" rel="stylesheet" />

  <!-- css -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://kit.fontawesome.com/ef153c5523.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css" />
  <link href="css/style.min.css" rel="stylesheet" type="text/css" />

  <!-- Color css -->
  <link href="css/default.css" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="84">
  <!-- STRAT NAVBAR -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="navbar-sticky">
    <div class="container">
      <!-- LOGO -->
      <a class="navbar-brand logo" href="index.html">
        <img src="images/favicon.svg" alt="logo" width="32px" height="32px" />
        <span><b>Library</b></span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="zmdi zmdi-menu"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav navbar-center nav-custom-left" id="mySidenav">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#features" class="nav-link">Features</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>

        </ul>

        <ul class="nav navbar-nav navbar-right ms-auto">
          <li class="nav-item">
            <a href="students/index.php" class="nav-link">Student Login</a>
          </li>
          <li class="nav-item">
            <a href="librarian/index.php" class="nav-link">Librarian Login</a>
          </li>
          <li class="nav-item">
            <a href="admin/index.php" class="btn btn-outline-dark navbar-btn nav-link">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAVBAR -->

  <!-- HOME -->
  <section class="home" id="home">
    <!-- <div class="bg-overlay"></div> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="home-wrapper text-center">
            <h2 class="fadeInDown wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s">
              Your Digital Gateway to Smarter
              <span class="text-colored">Library Management.</span>
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <p class="fadeInDown wow text-muted animated" data-wow-delay=".2s"
                  style="visibility: visible; animation-delay: 0.2s">
                  Manage books, members, and records effortlessly—all in one
                  platform.
                </p>
              </div>
            </div>
            <div class="text-center subscribe-form">
              <form action="#">
                <input type="text" placeholder="Email" />
                <button type="submit">Connect </button>
              </form>
            </div>

            <div class="clearfix"></div>
          </div>
          <!-- home wrapper -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- END HOME -->

  <!-- FEATURES -->
  <section class="section" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="title-box">
            <p class="title-alt">Services</p>
            <h3 class="fadeIn wow animated animated" data-wow-delay=".1s"
              style="visibility: visible; animation-delay: 0.1s">
              Our Best Features
            </h3>
            <div class="border"></div>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row text-center">
        <div class="col-lg-4">
          <div class="service-item fadeInLeft wow animated" data-wow-delay=".1s"
            style="visibility: visible; animation-delay: 0.1s">
            <img src="images/book.png" width="90" alt="img" />
            <div class="service-detail">
              <h4 class="mb-3">Book Search and Borrowing</h4>
              <p>
                Users can quickly search for books by title, author, or genre
                and easily borrow them if available.
              </p>
            </div>
            <!-- /service-detail -->
          </div>
          <!-- /service-item -->
        </div>
        <!-- /col -->

        <div class="col-lg-4">
          <div class="service-item fadeInDown wow animated" data-wow-delay=".3s"
            style="visibility: visible; animation-delay: 0.3s">
            <img src="images/member.png" width="90" alt="img" />
            <div class="service-detail">
              <h4 class="mb-3">Member Management</h4>
              <p>
                Keeps track of all library members, their profiles, and
                borrowing history for efficient management.
              </p>
            </div>
            <!-- /service-detail -->
          </div>
          <!-- /service-item -->
        </div>
        <!-- /col -->

        <div class="col-lg-4">
          <div class="service-item fadeInRight wow animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s">
            <img src="images/fine.png" width="90" alt="img" />
            <div class="service-detail">
              <h4 class="mb-3">Fine Management</h4>
              <p>
                Automatically calculates and records fines for late book
                returns, making the process hassle-free.
              </p>
            </div>
            <!-- /service-detail -->
          </div>
          <!-- /service-item -->
        </div>
        <!-- /col -->
      </div>
      <!--end row -->

      <div class="row text-center">
        <div class="col-lg-4">
          <div class="service-item fadeInLeft wow animated" data-wow-delay=".1s"
            style="visibility: visible; animation-delay: 0.1s">
            <img src="images/realtime.png" width="90" alt="img" />
            <div class="service-detail">
              <h4 class="mb-3">Real-Time Availability Check</h4>
              <p>
                Shows whether a book is currently available or checked out,
                saving users time and effort.
              </p>
            </div>
            <!-- /service-detail -->
          </div>
          <!-- /service-item -->
        </div>
        <!-- /col -->

        <div class="col-lg-4">
          <div class="service-item fadeInDown wow animated" data-wow-delay=".3s"
            style="visibility: visible; animation-delay: 0.3s">
            <img src="images/report.png" width="90" alt="img" />
            <div class="service-detail">
              <h4 class="mb-3">Report Generation</h4>
              <p>
                Generates detailed reports on library activity, like borrowing
                trends or overdue books, to help with planning.
              </p>
            </div>
            <!-- /service-detail -->
          </div>
          <!-- /service-item -->
        </div>
        <!-- /col -->

        <div class="col-lg-4">
          <div class="service-item fadeInRight wow animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s">
            <img src="images/dashboard.png" width="90" alt="img" />
            <div class="service-detail">
              <h4 class="mb-3">Admin Dashboard</h4>
              <p>
                A centralized tool for librarians to manage books, members,
                and overall system settings easily.
              </p>
            </div>
            <!-- /service-detail -->
          </div>
          <!-- /service-item -->
        </div>
        <!-- /col -->
      </div>
      <!--end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- END FEATURES -->

  <!-- about -->
  <section class="home" id="about">
    <!-- <div class="bg-overlay"></div> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="home-wrapper text-center">
            <h2 class="fadeInDown wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s">
              About Us
            </h2>
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <p class="fadeInDown wow text-muted animated" data-wow-delay=".2s"
                  style="visibility: visible; animation-delay: 0.2s">
                  Welcome to our Library Management System (LMS)—your ultimate partner in managing library resources
                  efficiently. Our system is designed to simplify the complexities of library management, ensuring that
                  both librarians and users have a seamless experience.

                  In today’s fast-paced world, libraries play a crucial role in providing knowledge and fostering
                  learning. We aim to empower libraries with technology, making operations smoother and more accessible
                  for everyone involved.


                </p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- home wrapper -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>


  <section class="section bg-gray" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="feature-detail">
            <div class="title-box">
              <p class="title-alt">What We Offer</p>

              <div class="border"></div>
            </div>
            <p class="text-muted">
              Our Library Management System is a comprehensive solution that:
            </p>

            <ul class="zmdi-hc-ul">
              <li class="fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s">
                <i class="fa-solid fa-plus pe-2"></i>
                <span class="text-muted">Helps users easily search and borrow books.</span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Simplifies membership management.</span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Automates overdue fine
                  calculations.</span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Provides real-time updates on book
                  availability.</span>
              </li>
              <li class="fadeIn wow animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Generates detailed reports for better
                  decision-making.</span>
              </li>
              <li class="fadeIn wow animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Offers a centralized dashboard for library
                  administrators.</span>
              </li>
            </ul>

            <a href="" class="btn btn-primary btn-shadow rounded-pill w-lg fadeInDown wow animated" data-wow-delay=".4s"
              style="visibility: visible; animation-delay: 0.4s">More Info</a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="section bg-gray" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="feature-detail">
            <div class="title-box">
              <p class="title-alt">Our Mission</p>

              <div class="border"></div>
            </div>
            <p class="text-muted">
              We are committed to revolutionizing the way libraries operate by introducing innovative tools that save
              time, enhance efficiency, and improve access to knowledge.
            </p>
            <br><br>
            <div class="title-box">
              <p class="title-alt">Why Choose Us?</p>

              <div class="border"></div>
            </div>

            <ul class="zmdi-hc-ul">
              <li class="fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s">
                <i class="fa-solid fa-plus pe-2"></i>
                <span class="text-muted">User-Friendly Design: Intuitive interface for both users and administrators.
                </span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Advanced Features: From real-time book
                  tracking to automated reporting, we have it all.
                </span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted"> Customizable Solutions: Flexible features
                  to suit your library’s needs.
                </span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Reliable Support: Our team is here to help
                  whenever you need us.</span>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- END about -->


  <!-- FEATURES-ALT -->
  <section class="section bg-gray" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="feature-detail">
            <div class="title-box">
              <p class="title-alt">Benefits</p>
              <h3 class="fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s">
                Overview
              </h3>
              <div class="border"></div>
            </div>
            <p class="text-muted">
              The Library Management System (LMS) is a modern software
              solution designed to simplify library operations and improve the
              overall user experience. It provides tools for managing books,
              members, borrowing records, and fines in an efficient,
              hassle-free way. By automating routine tasks and providing
              real-time updates, the LMS saves time for both librarians and
              users, making it an essential tool for any library.
            </p>

            <ul class="zmdi-hc-ul">
              <li class="fadeIn wow animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s">
                <i class="fa-solid fa-plus pe-2"></i>
                <span class="text-muted">Improved User Experience</span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Centralized Management</span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Real-Time Updates</span>
              </li>

              <li class="fadeIn wow animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s">
                <i class="fa-solid fa-plus pe-2"></i><span class="text-muted">Accessible Anytime, Anywhere</span>
              </li>
            </ul>

            <a href="" class="btn btn-primary btn-shadow rounded-pill w-lg fadeInDown wow animated" data-wow-delay=".4s"
              style="visibility: visible; animation-delay: 0.4s">More Info</a>
          </div>
        </div>

        <div class="col-lg-6">
          <img src="images/library.png" class="img-fluid fadeIn wow animated" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s" />
        </div>
      </div>
    </div>
  </section>
  <!-- END FEATURES-ALT -->

  <!-- FOOTER -->
  <footer class="section bg-gray footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">

          <h5><img src="images/favicon.svg" alt="logo" width="15" srcset=""> Library</h5>
          <ul class="list-unstyled">
            <li><a href="#home">Home</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="">FAQ</a></li>
          </ul>
        </div>

        <div class="col-lg-3">
          <h5>Social</h5>
          <ul class="list-unstyled">
            <li><a href="">Twitter</a></li>
            <li><a href="">Instagram</a></li>
            <li><a href="">Facebook</a></li>
          </ul>
        </div>

        <div class="col-lg-3">
          <h5>Support</h5>
          <ul class="list-unstyled">
            <li><a href="">Help &amp; Support</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms &amp; Conditions</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5>Contact</h5>
          <ul class="list-unstyled">
            <li><i class="fa-solid fa-location-dot"></i>
              &nbsp;Jokanatti, Mudalagi<br />
              Belgavi, Karnatak</li>
            <li><i class="fa-solid fa-phone"></i> +91 8310305434</li>
            <li><i class="fa-solid fa-envelope"></i> &nbsp;siddu124123@gmail.com</li>
          </ul>
        </div>


      </div>

      <div class="d-flex justify-content-center py-4 my-4 border-top">

        <p> <img src="images/favicon.svg" alt="logo" srcset="" width="20"> &nbsp; © 2024 Library Management. All rights
          reserved.</p>

      </div>
    </div>
  </footer>

  <!-- END FOOTER -->

  <!-- Back to top -->
  <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top-btn btn btn-primary" style="display: none"><i
      class="zmdi zmdi-chevron-up"></i></a>

  <!-- javascript -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>