<?php session_start();
    if(isset($_SESSION['stff_id']) && $_SESSION['stff_id'] != '') { ?>
        <!DOCTYPE html>
        <html lang="en" class="">
        <head>
            <?php require "./resources/templates/_dashboard-head.php";?>
        </head>
        <body style="font-family:'Roboto', sans-serif !important;" class="pt-0">
            <div id="app">
                <?php require "./resources/templates/_dashboard-top-nav.php"; ?>
                <?php require "./resources/templates/_dashboard-aside-nav.php"; ?>
                <?php if($_GET['page'] == 'add-schedules' || $_GET['page'] == 'ship-depart-details' || $_GET['page'] == 'accomodation-type' || $_GET['page'] == 'reservation-list') { ?>
                    <section class="section main-section pt-0">
                <?php } else { ?>
                    <section class="section main-section">
                <?php } ?>
                    <?php 
                        if($_GET['page'] == 'dashboard') {
                            require "./resources/templates/_dashboard-landing.php";
                        }else if ($_GET['page'] == 'ports') {
                            require "./resources/templates/_dashboard-port.php";
                        }else if($_GET['page'] == 'accomodation-type') {
                            require "./resources/templates/_dashboard-accomodation-type.php";
                        }else if($_GET['page'] == 'add-schedules') {
                            require "./resources/templates/_dashboard-add-schedule.php";
                        }else if($_GET['page'] == 'ship-depart-details') {
                            require "./resources/templates/_dashboard-ship-depart.php";
                        }else if($_GET['page'] == 'reservation-list') {
                            require "./resources/templates/_dashboard-reservation-list.php";
                        }
                    ?>
                </section>
            </div>
            <?php  require "./resources/templates/_dashboard-bottom-cdn.php"; ?>
        </body>
        </html>
<?php }else{
    echo '<p class="text-danger font-weight-bold lead">BAD GATEWAY</p>';
} ?>
