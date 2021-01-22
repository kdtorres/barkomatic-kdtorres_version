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
        <link rel="icon" href="./img/core-img/favicon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <style>
            /* width */ ::-webkit-scrollbar {width:10px;}
            /* Track */ ::-webkit-scrollbar-track {background:#f1f1f1;}
            /* Handle */ ::-webkit-scrollbar-thumb {background:#888;border-radius:5px;}
            /* Handle on hover */ ::-webkit-scrollbar-thumb:hover {background:#555;}
            #signup{border:none;padding:8px 15px 8px 15px;background:#FF8500 !important;color:#fff;box-shadow:1px 1px 4px #DADADA;-moz-box-shadow:1px 1px 4px #DADADA;-webkit-box-shadow:1px 1px 4px #DADADA;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
            #signup:hover{background:#EA7B00;color:#fff;cursor:pointer;}
        </style>
    </head>
    <body>
        <!-- Preloader Start-->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- Preloader End-->
        <!-- Ticket Area Form Start-->
        <?php include './inc/function/ticket_form_func.php'; ?>
        <section class="bg-white" style="padding-right: 0 !important;"> 
            <div class="booking-area" role="document">
                <div class="booking-content">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="_row_1">
                            <div class="_col_1_6">
                                <img src="./img/core-img/favicon.png" class="_fav" alt="VG Shipping Line Logo">
                            </div>
                            <div class="_col_1_6">
                                <h1>Shipping Lines</h1>
                                <p>VG Shipping Lines Bldg., V. Sotto St., Pier 3, Tinago, Cebu City<br>
                                Prop. - Filadelfo A. Garcia</p>
                            </div>
                        </div>
                        <div class="_row_2">
                            <div class="_col_2_6" style="visibility: hidden;">
                                <label class="label">No</label>
                                <input type='text' value="" disabled/>
                            </div>
                            <div class="_col_2_6">
                                <?php include './inc/function/ticket_num_func.php'; ?>
                            </div>
                        </div>
                        <div class="_row_3">
                            <div class="col_3_6">
                                <h3>Passenger's Ticket</h3>
                            </div>
                        </div>
                        <div class="_row_4">
                            <div class="_col_4_6" style="visibility: hidden;">
                                <label class="label">No</label>
                                <input type='text' value="12344" disabled/>
                            </div>
                            <div class="_col_4_6">
                                <label class="label">Date <span class="astrsk">*</span></label>
                                <input type='date' name="date" value="<?php echo $datePostVal; ?>" />
                                <span class="text-danger"><?php echo $dateErrMsg; ?></span>
                            </div>
                        </div>
                        <div class="form-row mt-5">
                            <div class="form-group col-sm-3">
                                <div class="name">Name <span class="astrsk">*</span></div>
                                <input type="text" id="name" name="name" value="<?php echo $namePostVal; ?>" class="form-control"  />
                                <span class="text-danger"><?php echo $nameErrMsg; ?></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="age">Age <span class="astrsk">*</span></div>
                                <input type="number" id="age" name="age" value="<?php echo $agePostVal; ?>" class="form-control" min="1" max="100"  />
                                <span class="text-danger"><?php echo $ageErrMsg; ?></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="sex">Gender <span class="astrsk">*</span></div>
                                <select name="sex" class="border w-100 form-control-sm">
                                    <option value="<?php echo $sexPostVal; ?>" style="display:none;"><?php echo $sexPostVal; ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="text-danger"><?php echo $sexErrMsg; ?></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="email">Email <span class="astrsk">*</span></div>
                                <input type="email" id="email" name="email" value="<?php echo $emailPostVal; ?>" class="form-control" title="fffff"  />
                                <div id="_email_info">
                                    <span class="text-info text-center">This email is use for you to recieved a confirmation message. To claim your ticket
                                        make sure you provide a <b>valid email address.</b>
                                    </span>
                                </div>
                                <span class="text-danger"><?php echo $emailErrMsg; ?></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-3">
                                <div class="time">Departure Time <span class="astrsk">*</span></div>
                                <input type="time" id="time" name="time" value="<?php echo $departPostVal; ?>" class="form-control" />
                                <span class="text-danger"><?php echo $departureErrMsg; ?></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="destination">Destination <span class="astrsk">*</span></div>
                                <select name="destination" class="border w-100 form-control-sm">
                                    <?php 
                                        $sql = "SELECT ID, Destination FROM Destination_List";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0) { 
                                            while($row = mysqli_fetch_assoc($result)) { ?>
                                                <option value="<?php echo $row['Destination']?>"><?php echo $row['Destination']?></option>
                                    <?php }
                                     } ?>
                                </select>
                                <span class="text-danger"><?php echo $destinationErrMsg; ?></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="accommodation">Accommodation <span class="astrsk">*</span></div>
                                <select id="accommodation" name="accommodation" class="border w-100 form-control-sm">
                                    <?php 
                                        $sql = "SELECT ID, Accommodation FROM Accommodation_List";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0) { 
                                            while($row = mysqli_fetch_assoc($result)) { ?>
                                                <option value="<?php echo $row['Accommodation']?>"><?php echo $row['Accommodation']?></option>
                                    <?php }
                                     } ?>
                                </select>
                                <span class="text-danger"><?php echo $accommodationErrMsg; ?></span>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="name_of_vessel">Name of Vessel <span class="astrsk">*</span></div>
                                <select id="name_of_vessel" name="name_of_vessel" class="border w-100 form-control-sm">
                                    <?php 
                                        $sql = "SELECT ID, Vessel FROM Vessel_List";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0) { 
                                            while($row = mysqli_fetch_assoc($result)) { ?>
                                                <option value="<?php echo $row['Vessel']?>"><?php echo $row['Vessel']?></option>
                                    <?php }
                                     } ?>
                                </select>
                                <span class="text-danger"><?php echo $novErrMsg; ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php 
                                if(!isset($_SESSION['signin_customer']) || $_SESSION['signin_customer'] != 'customer') { ?>
                                    <a href="signup.php" class="form-control text-center text-white" id="signup">Sign Up</a>
                            <?php 
                                } else { ?>
                                    <input type="submit" value="Submit" id="submit" class="form-control btn btn-primary">
                                <?php } ?> 
                                <a href="index.php" style="margin-top:3px;color:#007bff;" class="text-center form-control">Back-></a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Ticket Area Form End-->
        
        <!-- jQuery 2.2.4 -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/roberto.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>
        <!-- Reserve Ticket-->
        <script src="js/default-assets/click.js"></script>
        <script src="js/default-assets/admin.js"></script>
    </body>
</html>