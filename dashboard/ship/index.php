<?php require "./resources/config.php";
    session_start(); 
    if(isset($_SESSION['ship_id']) && $_SESSION['ship_id'] != NULL) { ?>
        <!DOCTYPE html>
        <html lang="en" class="">
        <head>
            <?php require "./resources/templates/_dashboard-head.php"; ?>
        </head>
        <body class="pt-0">
            <div id="app">
                <?php require "./resources/templates/_dashboard-top-nav.php"; ?>
                <?php require "./resources/templates/_dashboard-aside-nav-left.php"; ?>
                <?php if($_GET['page'] == 'passenger-signup' || $_GET['page'] == 'passenger-booking') { ?>
                    <section class="section main-section p-0">
                <?php } else if($_GET['page'] == 'assign-employee' || $_GET['page'] == 'assign-staff' ||  $_GET['page'] == 'reservation') { ?>
                    <section class="section main-section pt-0">
                <?php } else { ?>
                    <section class="section main-section">
                <?php } ?>
                    <?php 
                        if($_GET['page'] == 'dashboard') {
                            require "./resources/templates/_dashboard_landing.php";
                        }
                        if($_GET['page'] == 'assign-staff') {
                            require "./resources/templates/_dashboard_assign_task.php";
                        }
                        if($_GET['page'] == 'reservation') {
                            require "./resources/templates/_dashboard_reservation.php";
                        }
                        if($_GET['page'] == 'profile') {
                            require "./resources/templates/_dashboard_profile.php";
                        }
                    ?>
                </section>
            </div>
        </body>
        </html>
<?php } else { ?>
    <span class="text-danger display-4">BAD GATEWAY!</span>
<?php } ?>
