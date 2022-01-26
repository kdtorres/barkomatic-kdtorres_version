
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Barkomatic - Login</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <link rel="stylesheet" href="css/default-assets/signup-custom.css?version=barkomatic">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body class="bg-light">
    <div class="container register rounded border shadow-lg mt-0 pt-0 pb-0">
        <div class="row">
            <div class="col-md-12 register-left mt-0">
                <a href="index.php">
                    <img src="img/core-img/logoq.png" alt="" width="200" class="mt-0 mb-0" style="width: 150px;">
                </a>
                <h3 class="mb-5">Welcome</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Passenger</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Shipping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="true">Staff</a>
                    </li>
                </ul>
                </ul>
                <div class="tab-content container" id="myTabContent">
                    <!-- Login as Passenger Start -->
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="alert alert-success lead ml-5 p-2" role="alert" id="alert">
                            <span id="res-icon"></span>
                            <span id="res-message"></span>
                        </div>
                        <div style="padding-bottom:60px;" class="row register-form pt-0">
                            <div class="col-9">
                                <h3 class="register-heading text-left mt-0 mb-0 display-6 pb-5"><i class="fa fa-lock"></i> Login as <sup class="font-weight-initial lead display-6">Passenger</sup></h3>
                                <div class="row">
                                    <div class="col-9">
                                        <form id="passenger-form">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-user small"></i></span></div>
                                                </div>
                                                <input type="text" name="username-passenger" id="username-passenger" class="form-control" placeholder="Username *" value="" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-asterisk small"></i></span></div>
                                                </div>
                                                <input type="password" name="password-passenger" id="password-passenger" class="form-control" placeholder="Password *" value="" required>
                                            </div>
                                            <input type="submit" name="passenger-btn" id="passenger-btn" class="btnRegister float-left mt-3 btn btn-sm text-white" value="Login">
                                            <input type="button" id="passenger-forgot" class="btnRegister float-left mt-3 btn btn-sm bg-transparent text-dark" value="Forgot Password?" data-toggle="modal" data-target="#modalPassenger">
                                        </form>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-9 text-center lead">
                                            <p class="text-left"><small class="lead">New to Barkomatic? <a href="signup.php">Create an account.</a></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login as Passenger End -->
                     <!-- Login as Shipping Owner Start -->
                     <div class="tab-pane fade-out active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="alert alert-success lead ml-5 p-2" role="alert" id="alert">
                            <span id="res-icon-showner"></span>
                            <span id="res-message-showner"></span>
                        </div>
                        <div style="padding-bottom:60px;" class="row register-form pt-0">
                            <div class="col-9">
                            <h3 class="register-heading text-left mt-0 mb-0 display-6 pb-5"><i class="fa fa-lock"></i> Login as <sup class="font-weight-initial lead display-6">Shipping Line Owner</sup></h3>
                                <div class="row">
                                    <div class="col-9">
                                        <form id="login_showner_form">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-user small"></i></span></div>
                                                </div>
                                                <input type="text" name="username_sh_owner" id="username_sh_owner" class="form-control" placeholder="Username *" value="" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-asterisk small"></i></span></div>
                                                </div>
                                                <input type="password" name="password_sh_owner" id="password_sh_owner" class="form-control" placeholder="Password *" value="" required>
                                            </div>
                                            <input type="submit" name="login-showner-btn" id="login-showner-btn" class="btnRegister float-left mt-3 btn btn-sm text-white" value="Login">
                                            <input type="button" id="forgot-pass-sh-owner" class="btnRegister float-left mt-3 btn btn-sm bg-transparent text-dark" value="Forgot password?" data-toggle="modal" data-target="#modalShpOwnr">
                                        </form>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-12">
                                            <p class="text-left"><small class="lead">New to Barkomatic? <a href="signup.php">Create an account.</a></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login as Shipping Owner End -->
                     <!-- Login as Staff Start -->
                     <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
                        <div class="pssngr_rrpwd_alrt alert alert-success lead ml-5 p-2" role="alert" id="alert">
                            <span id="res-icon-staff"><i class='fa fa-check-circle'></i></span>
                            <span id="res-message-staff"></span>
                        </div>
                        <div style="padding-bottom:60px;" class="row register-form pt-0">
                            <div class="col-9">
                                <h3 class="register-heading text-left mt-0 mb-0 display-6 pb-5"><i class="fa fa-lock"></i> Login as <sup class="font-weight-initial lead display-6">Shipping Line Staff</sup></h3>
                                <div class="row">
                                    <div class="col-9">
                                        <form id="staff_login_form">
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-user small"></i></span></div>
                                                </div>
                                                <input type="text" name="username_staff" id="username_staff" class="form-control" placeholder="Username *" value="" required>
                                            </div>
                                            <div class="form-group input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="icon is-small left"><i class="fa fa-asterisk small"></i></span></div>
                                                </div>
                                                <input type="password" name="psswd_staff" id="psswd_staff" class="form-control" placeholder="Password *" value="" required>
                                            </div>
                                            <input type="submit" name="btn_staff_login" id="btn_staff_login" class="btnRegister float-left mt-3 btn btn-sm text-white" value="Login">
                                            <input type="button" id="forgot-pass-stf" class="btnRegister float-left mt-3 btn btn-sm bg-transparent text-dark" value="Forgot password?" data-toggle="modal" data-target="#modalShpStf">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login as Staff End -->
                </div>
            </div>
        </div>
    </div>
    <!-- request reset - passenger -->
    <div class="modal fade" id="modalPassenger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="alert alert-success lead p-1 font-weight-normal" role="alert" id="alert">
                        <span id="res-icon-reset-request1"></span>
                        <span id="res-message-reset-request2"></span>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="passenger_reset_request_form">
                        <div class="form-group mb-0">
                            <label for="email_forgot" class="col-6-form-label text-left lead font-weight-italic text-center">To reset your password enter your email address associated with your account.</label>
                            <label id="passenger_email_forgot-error" class="text-right mb-0 error form-control border-0 text-danger" for="passenger_email_forgot"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="passenger_email_forgot" id="passenger_email_forgot" required><br>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" id="passenger_reset_submit" class="btn btn-primary text-center form-control" value="Reset Password">
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="close form-control" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><small class="lead">Done</small></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- request reset - ship owner -->
    <div class="modal fade" id="modalShpOwnr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="alert alert-success lead p-1 font-weight-normal" role="alert" id="alert">
                        <span id="res-icon-reset-request3"></span>
                        <span id="res-message-reset-request3"></span>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="sownr_reset_request_form">
                        <div class="form-group mb-0">
                            <label for="email_forgot" class="col-6-form-label text-left lead font-weight-italic text-center">To reset your password enter your email address associated with your account.</label>
                            <label id="sownr_email_forgot-error" class="text-right mb-0 error form-control border-0 text-danger" for="sownr_email_forgot"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="sownr_email_forgot" id="sownr_email_forgot" required><br>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" id="sownr_reset_submit" class="btn btn-primary text-center form-control" value="Reset Password">
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="close form-control" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><small class="lead">Done</small></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- request reset - staff -->
    <div class="modal fade" id="modalShpStf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="alert alert-success lead p-1 font-weight-normal" role="alert" id="alert">
                        <span id="res-icon-reset-request6"></span>
                        <span id="res-message-reset-request6"></span>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="stf_reset_request_form">
                        <div class="form-group mb-0">
                            <label for="stf_email_forgot" class="col-6-form-label text-left lead font-weight-italic text-center">To reset your password enter your email address associated with your account.</label>
                            <label id="stf_email_forgot-error" class="text-right mb-0 error form-control border-0 text-danger" for="stf_email_forgot"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="stf_email_forgot" id="stf_email_forgot" required><br>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="stf_reset_submit" id="stf_reset_submit" class="btn btn-primary text-center form-control" value="Reset Password">
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="close form-control" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><small class="lead">Done</small></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/main/pricing/jquery-1.10.2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main/create-account/login/process.js"></script>
</body>
</html>