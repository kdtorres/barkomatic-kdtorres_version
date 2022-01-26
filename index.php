<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Barkomatic - Online Ticketing</title>
    <link rel="icon" href="./img/core-img/favicon.png">
    <link rel="stylesheet" href="css/default-assets/main.css?version=barkomatic">
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <header class="header-area">
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_mail"></i> <span>barkomatic2021@gmail.com</span></a>
                        </div>
                    </div>
                    <div class="col-6 pr-0">
                        <div class="top-header-content">
                            <a href="#" class="invisible"><i class="icon_mail"></i> <span>barkomatic2021@gmail.com</span></a>
                            <?php 
                                session_start();
                                if(isset($_SESSION['ship_name'])) { ?>
                                    <form id="signout_frm">
                                        <button class="btn btn-success ml-auto" type="button" id="btn-su" title="Click to Signout">
                                            <a href="#" id="session_name" class="text-white lead" title="Click to Signout"><?php echo "Welcome, ".$_SESSION['ship_name']; ?></a>
                                        </button>
                                    </form>
                              <?php } else if (isset($_SESSION['first_name']) && isset($_SESSION['lastname'])) { ?>
                                    <form id="signout_frm">
                                        <button class="btn btn-success ml-auto" type="button" id="btn-su" title="Click to Signout">
                                            <a href="#" id="session_name" class="text-white lead" title="Click to Signout"><?php echo "Welcome, ".$_SESSION['first_name']." ".$_SESSION['lastname']."!"; ?></a>
                                        </button>
                                    </form>
                              <?php } else if(isset($_SESSION['stff_name'])) { ?>
                                    <form id="signout_frm">
                                        <button class="btn btn-success ml-auto" type="button" id="btn-su" title="Click to Signout">
                                            <a href="#" id="session_name" class="text-white lead" title="Click to Signout"><?php echo "Welcome, ".$_SESSION['stff_name']."!"; ?></a>
                                        </button>
                                    </form>
                              <?php } else { ?>
                                <button type="button" class="btn btn-success ml-auto" id="btn-su">
                                    <a href="login.php" class="text-white" id="login-link">Login</a>&nbsp; <span>|</span> &nbsp;<a href="signup.php" class="text-white" id="signup-link">Signup</a>
                                </button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="robertoNav">
                        <a class="nav-brand mr-0" href="index.php">
                            <img src="./img/core-img/logo.png" alt="BarkoMatic">
                        </a>
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">How to Book</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li><a href="passenger.html">- Passenger</a></li>
                                            <li><a href="rollings-cargo.html">- Rollings Cargo</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">About Us</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li><a href="faq.html">- FAQ</a></li>
                                            <li><a href="about.html">- About Us</a></li>
                                            <li><a href="ticket-agent.html">- Ticket Agent</a></li>
                                            <li><a href="blog.html">- Blog</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="welcome-section">
        <div class="banner-content">
            <div class="intro text-center container">
                <h1 class="text-white display-3">Welcome to Barkomatic!</h1>
                <p class="subtext-header lead text-white pt-3 pb-5">
                    Online Ticketing Reservation are now made easier with Barkomatic multiple shipping lines in one site! Check ferry schedules today!
                </p>
                <?php if(isset($_SESSION['ship_id'])) { ?>
                    <button type="button" class="btn btn-primary btn-lg pushable mt-3">
                        <a href="http://localhost/barkomatic-main/dashboard/ship/"><span class="front">Go to Dashboard</span></a>
                    </button>
                <?php }else if(isset($_SESSION['stff_id'])) { ?>
                    <button type="button" class="btn btn-primary btn-lg pushable mt-3">
                        <a href="http://localhost/barkomatic-main/dashboard/staff/"><span class="front">Go to Dashboard</span></a>
                    </button>
                <?php }else { ?>
                    <button type="button" class="btn btn-primary btn-lg pushable mt-3">
                        <a href="search-trip.php"><span class="front">RESERVE TICKET NOW!</span></a>
                    </button>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="destinations-two">
        <div class="container">
            <div class="block-title text-center"><h3>Top Destinations</h3></div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="img/bacolod.jpg" alt="">
                        <h3><a href="destinations-details.html">Bacolod</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/bohol.jfif" alt="">
                        <h3><a href="destinations-details.html">Bohol</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/cagayandeoro.jfif" alt="">
                        <h3><a href="destinations-details.html">Cagayan de ero</a></h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="destinations-two__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <img src="img/cebu.jpg" alt="">
                        <h3><a href="destinations-details.html">Cebu</a></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="img/coron.jpg" alt="">
                        <h3><a href="destinations-details.html">Coron</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/dumaguete.jpg" alt="">
                        <h3><a href="destinations-details.html">Dumaguete</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/dipolog.jpg" alt="">
                        <h3><a href="destinations-details.html">Dipolog</a></h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="destinations-two__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <img src="img/elnido.jpeg" alt="">
                        <h3><a href="destinations-details.html">El Nido</a></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <img src="img/iligan.jpg" alt="">
                        <h3><a href="destinations-details.html">Iligan</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/iloilo.jpg" alt="">
                        <h3><a href="destinations-details.html">Ilo-Ilo</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                        <img src="img/leyte.jpg" alt="">
                        <h3><a href="destinations-details.html">Leyte</a></h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="destinations-two__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <img src="img/siargao.jfif" alt="">
                        <h3><a href="destinations-details.html">Surigao</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="barkomatic-question-area section-padding-100-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Are you a shipping company?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <center><img src="img/Online Booking System.png" alt="onlinebookingsystempic"></center>
                        <p class="post-title">Online Reservation System</p>
                        <p class="post-parg">We provide you all the resources essential to have a painless online reservation experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <footer class="footer-area section-padding-80-0">
            <div class="main-footer-area">
                <div class="container">
                    <div class="row align-items-baseline ">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-80">
                                <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>
                                <p>Email Us</p>
                                <h4>barkomatic2021@gmail.com<h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copywrite-content">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8">
                            <div class="copywrite-text">
                                <p>Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> 
                                    All rights reserved | Barkomatic</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/roberto.bundle.js"></script>
        <script src="js/main/active.js"></script>
        <script src="js/main/create-account/login/process.js"></script>
</body>
</html>

