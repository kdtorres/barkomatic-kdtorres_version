 <style>
    .btn-su-si {display:flex;font-size:0.245rem !important;border:none;background:#FF8500;border-radius:1px;vertical-align:middle !important;}
    .btn-su-si .one {border-right:1px solid #fff;padding:3px;font-weight:normal !important;}
    .btn-su-si .two {padding:3px;font-weight:normal !important;background-color:#4B99AD !important;}
    .sign_up:hover {background:#EA7B00;color:#fff;}
 </style>
 <!-- Header Area Start -->
 <header class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span>(132) 238 7635</span></a>
                        <a href="#"><i class="icon_mail"></i> <span>vgshippinglines@gmail.com</span></a>
                    </div>
                </div>
                <div class="col-6" style="padding-top:3px;">
                    <div class="top-header-content">
                        <div class="ml-auto mt-2 btn-su-si">
                            <?php
                                // Initialize the session
                                session_start();
                                // Check if the customer is logged in
                                if(!isset($_SESSION['signin_customer']) || $_SESSION['signin_customer'] !== 'customer'){ ?>
                                    <div class="one">
                                        <a class="btn-sm text-white" href="signup.php">Sign Up</a>
                                    </div>
                                    <div class="two">
                                        <a class="btn-sm text-white" href="signin.php">Sign In</a>
                                    </div>
                            <?php 
                                }else { ?>
                                    <div class="two" style="display:none !important;">
                                        <a class="btn-sm text-white" href="signin.php">Sign In</a>
                                    </div>
                                    <div class="one">
                                        <a class="btn-sm text-white" href="signout.php">Signout</a>
                                    </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <nav class="classy-navbar justify-content-between" id="robertoNav">
                    <div class="nav-brand-img">
                    <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt="VG Shipping Lines"></a>
                    </div>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                            <div class="book-now-btn ml-3 ml-lg-5">
                                <a href="reservation-ticket.php">
                                    Reserve Ticket<i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->