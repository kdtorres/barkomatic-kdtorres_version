<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Barkomatic - Online Ticketing</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <?php 
        // require("resources/config.php");
        require (TEMPLATES_PATH . "/_distributable.php");
    ?>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>barkomatic2021@gmail.com</span></a>
                        </div>
                    </div>
                    <div class="col-6 pr-0">
                        <div class="top-header-content">
                            <a href="#" class="invisible"><i class="icon_mail"></i> <span>barkomatic2021@gmail.com</span></a>
                            <?php 
                                session_start();
                                if(isset($_SESSION['shipping_name']) && isset($_SESSION['profile_image']) && isset($_SESSION['username'])) { ?>
                                    <button type="button" class="btn btn-success ml-auto" id="btn-su">
                                        <a href="login.php" class="text-white" id="login-link">Go to Dashboard</a>
                                    </button>
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
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">
                        <!-- Logo -->
                        <a class="nav-brand mr-0" href="index.php">
                            <img src="./img/core-img/logo.png" alt="BarkoMatic">
                        </a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                            <span></span>
                            <span></span>
                            </span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">How to Book</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li>
                                                <a href="passenger.html">- Passenger</a>
                                            </li>
                                            <li>
                                                <a href="rollings-cargo.html">- Rollings Cargo</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact Us</a>
                                    </li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">About Us</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li>
                                                <a href="faq.html">- FAQ</a>
                                            </li>
                                            <li>
                                                <a href="about.html">- About Us</a>
                                            </li>
                                            <li>
                                                <a href="ticket-agent.html">- Ticket Agent</a>
                                            </li>
                                            <li>
                                                <a href="blog.html">- Blog</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- Book Now -->
                                <!-- <div class="book-now-btn">
                                    <a href="book.php">
                                        Book Now
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </a>
                                </div> -->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->