<?php
    if(isset($_GET['email']) && isset($_GET['token'])) {
        $email = $_GET['email'];
        $token = $_GET['token']; ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <?php require "resources/templates/_frgt-pwd-ctnt-head.php"; ?>
        </head>
        <body>
            <?php require "resources/templates/_frgt-pwd-ctnt-header.php"; ?>
            <div class="container">
                <div style="width:390px;" id="app" class="m-auto">
                    <div class="card login-form">
                        <div class="card-body">
                            <h3 class="card-title text-center">Reset Password</h3>
                            <div class="card-text">
                                <form id="pssngr_chng_pwd_frm">
                                    <div class="alert alert-success lead p-1 font-weight-normal text-center" role="alert" id="alert">
                                        <span id="res-icon-chng-pwd1"></span>
                                        <span id="res-message-chng-pwd2"></span>
                                    </div>
                                    <div class="form-group d-none">
                                        <input type="email" name="pssngr_em_url_prm" value="<?php echo $email; ?>" class="form-control form-control-sm" readonly/>
                                        <input type="text" name="pssngr_tkn_url_prm" value="<?php echo $token; ?>" class="form-control form-control-sm" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="pssngr_nw_pwd">Your new password</label>
                                        <input type="password" name="pssngr_nw_pwd" class="form-control form-control-sm" id="pssngr_nw_pwd" required>
                                        <label id="pssngr_nw_pwd" class="error text-danger" for="pssngr_nw_pwd"></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="pssngr_rpt_pwd">Repeat password</label>
                                        <input type="password" name="pssngr_rpt_pwd" class="form-control form-control-sm" id="pssngr_rpt_pwd" required>
                                        <label id="pssngr_rpt_pwd" class="error text-danger" for="pssngr_rpt_pwd"></label>
                                    </div>
                                    <input type="submit" id="pssngr_chng_pwd_btn" class="btn btn-primary btn-block submit-btn" value="Change Password">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- **** All JS Files ***** -->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/roberto.bundle.js"></script>
            <script src="js/main/active.js"></script>
            <script src="js/main/create-account/login/process.js?version=barkomatic"></script>
        </body>
        </html>
    <?php } else if(isset($_GET['email_shpownr']) && isset($_GET['token_shpownr'])) { 
        $email_shpownr = $_GET['email_shpownr'];
        $token_shpownr = $_GET['token_shpownr']; ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <?php require "resources/templates/_frgt-pwd-ctnt-head.php"; ?>
        </head>
        <body>
            <?php require "resources/templates/_frgt-pwd-ctnt-header.php"; ?>
            <div class="container">
                <div style="width:390px;" id="app" class="m-auto">
                    <div class="card login-form">
                        <div class="card-body">
                            <h3 class="card-title text-center">Reset Password</h3>
                            <div class="card-text">
                                <form id="shpownr_chng_pwd_frm">
                                    <div class="alert alert-success lead p-1 font-weight-normal text-center" role="alert" id="alert">
                                        <span id="res-icon-chng-pwd4"></span>
                                        <span id="res-message-chng-pwd4"></span>
                                    </div>
                                    <div class="form-group d-none">
                                        <input type="email" name="shpownr_em_url_prm" value="<?php echo $email_shpownr; ?>" class="form-control form-control-sm" readonly/>
                                        <input type="text" name="shpownr_tkn_url_prm" value="<?php echo $token_shpownr; ?>" class="form-control form-control-sm" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="shpownr_nw_pwd">Your new password</label>
                                        <input type="password" name="shpownr_nw_pwd" class="form-control form-control-sm" id="shpownr_nw_pwd" required>
                                        <label id="shpownr_nw_pwd" class="error text-danger" for="shpownr_nw_pwd"></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="shpownr_rpt_pwd">Repeat password</label>
                                        <input type="password" name="shpownr_rpt_pwd" class="form-control form-control-sm" id="shpownr_rpt_pwd" required>
                                        <label id="shpownr_rpt_pwd" class="error text-danger" for="shpownr_rpt_pwd"></label>
                                    </div>
                                    <input type="submit" id="shpownr_chng_pwd_btn" class="btn btn-primary btn-block submit-btn" value="Change Password">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- **** All JS Files ***** -->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/roberto.bundle.js"></script>
            <script src="js/main/active.js"></script>
            <script src="js/main/create-account/login/process.js?version=barkomatic"></script>
        </body>
        </html>
    <?php } else if(isset($_GET['email_stf']) && isset($_GET['token_stf'])) { 
        $email_stf = $_GET['email_stf'];
        $token_stf = $_GET['token_stf']; ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <?php require "resources/templates/_frgt-pwd-ctnt-head.php"; ?>
        </head>
        <body>
            <?php require "resources/templates/_frgt-pwd-ctnt-header.php"; ?>
            <div class="container">
                <div style="width:390px;" id="app" class="m-auto">
                    <div class="card login-form">
                        <div class="card-body">
                            <h3 class="card-title text-center">Reset Password</h3>
                            <div class="card-text">
                                <form id="stf_chng_pwd_frm">
                                    <div class="alert alert-success lead p-1 font-weight-normal text-center" role="alert" id="alert">
                                        <span id="res-icon-chng-pwd5"></span>
                                        <span id="res-message-chng-pwd5"></span>
                                    </div>
                                    <div class="form-group d-none">
                                        <input type="email" name="stf_em_url_prm" id="stf_em_url_prm" value="<?php echo $email_stf; ?>" class="form-control form-control-sm" readonly/>
                                        <input type="text" name="stf_tkn_url_prm" id="stf_tkn_url_prm" value="<?php echo $token_stf; ?>" class="form-control form-control-sm" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="stf_nw_pwd">Your new password</label>
                                        <input type="password" name="stf_nw_pwd" class="form-control form-control-sm" id="stf_nw_pwd" required>
                                        <label id="stf_nw_pwd" class="error text-danger" for="stf_nw_pwd"></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="stf_rpt_pwd">Repeat password</label>
                                        <input type="password" name="stf_rpt_pwd" class="form-control form-control-sm" id="stf_rpt_pwd" required>
                                        <label id="stf_rpt_pwd" class="error text-danger" for="stf_rpt_pwd"></label>
                                    </div>
                                    <input type="submit" id="stf_chng_pwd_btn" class="btn btn-primary btn-block submit-btn" value="Change Password">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- **** All JS Files ***** -->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/roberto.bundle.js"></script>
            <script src="js/main/active.js"></script>
            <script src="js/main/create-account/login/process.js"></script>
        </body>
        </html>
    <?php } else { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>404 Not Found</title>
            <?php require "resources/templates/_frgt-pwd-ctnt-head.php"; ?>
        </head>
        <body>
            <p class="display-5 text-danger ml-2">BAD GATEWAY!</p>
        </body>
        </html>
    <?php } ?>

    
   



