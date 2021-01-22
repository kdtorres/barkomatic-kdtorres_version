
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title>Control Panel - Login</title>
        <!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
        <style>
            input::placeholder {font-size: 0.856rem; color: grey !important; font-weight: normal !important;}
        </style>
    </head>
    <body class="__lgn_page">
        <!-- Preloader Start-->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader End-->
        <!-- Login Section Start -->
        <?php include 'function/login_type_func.php'; ?>
        <div class="vg_login_content">
            <div class="col_frm">
                <form method="post">
                    <div class="logo_lgn text-center">
                        <img src="img/logo.png" alt="VG Shipping Lines">
                    </div>
                    <div class="form-group">
                        <input type='text' id="u_name" name="u_name" class="form-control form-control-lg" placeholder="<?php echo $pldr_uname; ?>" required/>
                        <small id="un_error" class="text-danger"><?php //echo $uname_err; ?></small>
                    </div>
                    <div class="form-group">
                        <input type='password' id="p_wd" name="p_wd" class="form-control form-control-lg" placeholder="<?php echo $pldr_psswd; ?>" required/>
                        <small id="pw_error" class="text-danger"><?php // echo $psswd_err; ?></small>
                    </div>
                    <div class="form-group mb-4">
                        <button type="submit" id="lgn_submit" name="submit" class="form-control form-control-lg btn btn-primary mt-3">Login</button>
                    </div>
                    <p style="font-size:0.775rem;" class="text-center"><?php echo $login_type; ?></p>
                </form>
            </div>
            <div class="col_img">
                <div class="logo_img">
                    <img src="img/16.jpg" alt="VG Shipping Lines">
                </div>
            </div>
        </div>
        <!-- Login Section End -->

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
        <!-- Login Identity -->
        <!-- <script src="js/default-assets/login.js"></script> -->
    </body>
</html>