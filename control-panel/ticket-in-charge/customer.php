<?php include '../session/session_tic.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title>VG Shipping Lines</title>

        <!-- Favicon -->
        <link rel="icon" href="../img/core-img/favicon.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="../style.css">
    </head> 
    <body>
        <!-- Preloader Start-->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- Preloader End-->
        
        <!-- T-I-C Dashboard Start -->
        <div id="viewport">
            <?php include 'inc/sidebar.php';?>
            <div id="content">
                <?php include 'inc/top-nav.php';?>
                <div class="_adm_content">
                    <div class="_loader">
                        <div class="_loader_gif text-center">
                            <img src="../img/core-img/loader.gif" alt="Loading..">
                        </div>
                    </div>
                    <?php include 'inc/approved-customer.php'; ?>
                </div>
            </div>
        </div>
        <!-- T-I-C Dashboard End -->

        <!-- jQuery 2.2.4 -->
        <script src="../js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="../js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="../js/roberto.bundle.js"></script>
        <!-- Active -->
        <script src="../js/default-assets/active.js"></script>
        <!-- T-I-C Menu -->
        <script src="../js/default-assets/ticket-in-charge.js"></script>
    </body>
</html>