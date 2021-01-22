<?php include '../session/session_admin.php'; ?>
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
        <link rel="icon" href="../img/favicon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../style.css">
        <style>
            /* width */ ::-webkit-scrollbar {width:10px;}
            /* Track */ ::-webkit-scrollbar-track {background:#f1f1f1;}
            /* Handle */ ::-webkit-scrollbar-thumb {background:#888;border-radius:5px;}
            /* Handle on hover */ ::-webkit-scrollbar-thumb:hover {background:#555;}
        </style>
    </head> 
    <body>
        <!-- Preloader Start-->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- Admin Dashboard Start-->
        <div id="viewport">
            <?php include 'inc/sidebar.php'; ?>
            <div id="content">
               <?php include 'inc/top-nav.php';?>
                <div class="_adm_content">
                    <div class="_loader">
                        <div class="_loader_gif text-center">
                            <img src="../img/loader.gif" alt="Loading..">
                        </div>
                    </div>
                    <div class="container"style="padding-top:60px;">
                       <?php include 'inc/add-destination.php'; ?>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Admin Dashboard End -->

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
        <!-- Admin -->
        <script src="../js/default-assets/admin.js"></script>
    </body>
</html>