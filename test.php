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
                                <div class="form-group">
                                    <a href="http://localhost/barkomatic-main/reset-password.php?email=aoirres@gmail.com&token=loremunoisuhbfggtvb">text</a>
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