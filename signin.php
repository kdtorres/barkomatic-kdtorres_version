<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>VG Shipping Lines - Sign In</title>  
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <style>
        :root{--align-items:center;--display:flex;--flex-direction:row;--justify-content:space-between;}
        body{font-family:Arial, Helvetica, sans-serif;background-color:#f9f9f9;}
        .signup_wrapper{border-radius:2px;margin-top:0 auto;max-width:469px;display:var(--display);flex-direction:column;align-items:var(--align-items);margin:0 auto;box-shadow:0px 1px 2px 0px rgba(60,64,67,0.3), 0px 1px 3px 1px rgba(60,64,67,0.15);}
        .signup_banner_wrapper{padding:12px;background-color:#f9f9f9;margin:0 auto;}
        .signup_banner{display:var(--display);flex-direction:var(--flex-direction);align-items:var(--align-items);justify-content:space-between;width:420px;padding:12px;margin:0 auto;}
        .signup_banner div img{width:7.875rem;}
        .signup_banner p{font-size:0.775rem;margin:0;}
        .signup_form_wrapper{width:443px;background-color:white;margin:0 auto;padding:12px;}
        .signup_form_wrapper form input[type='text'],.signup_form_wrapper form input[type='email'],.signup_form_wrapper form input[type='number'],.signup_form_wrapper form input[type='password'],select{box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing:border-box;border:1px solid#BEBEBE;padding:0.3rem;margin:0px;transition:all 0.30s ease-in-out;-webkit-transition:all 0.30s ease-in-out;-moz-transition:all 0.30s ease-in-out;-ms-transition:all 0.30s ease-in-out;-o-transition:all 0.30s ease-in-out;outline:none;}
        .signup_form_wrapper form input[type='number'],select{width:180px;}
        .signup_form_wrapper form input[type='submit']{border:none;padding:8px 15px 8px 15px;background:#4B99AD;color:#fff;box-shadow:1px 1px 4px #DADADA;-moz-box-shadow:1px 1px 4px #DADADA;-webkit-box-shadow:1px 1px 4px #DADADA;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
        .signup_form_wrapper form input[type='submit']:hover{color:#fff;cursor:pointer;}
        .signup_form_one{display:var(--display);flex-direction:var(--flex-direction);justify-content:var(--justify-content);align-items:var(--align-items);margin-top:5px;}
        .signup_form_two{display:var(--display);flex-direction:var(--flex-direction);justify-content:var(--justify-content);align-items:var(--align-items);margin-top:30px;}
        .signup_form_three{display:var(--display);flex-direction:var(--flex-direction);justify-content:var(--justify-content);align-items:var(--align-items);margin-top:30px;}
        .signup_form_four{display:var(--display);flex-direction:var(--flex-direction);justify-content:var(--justify-content);align-items:var(--align-items);margin-top:40px;margin-bottom:20px;}
        .fname,.lname,.mname,.age,.sex,.email,.uname,.password,.confirm_password,.submit,.link{font-size:0.875rem;padding-bottom:1.176rem;text-decoration:none;}
        .link{color:#007bff;font-size: 0.795rem;}
        .astrsk{color:red;font-weight:bold;font-size:0.875rem;color:#dc3545;}
        .text-danger{font-size:0.775rem;color:#dc3545;position:absolute;margin-left:-180px;margin-top:30px;}
    </style>
</head>
<body>
    <?php include 'inc/function/signin_form_func.php'; ?>
    <div class="signup_wrapper">
        <div class="signup_banner_wrapper">
            <div class="signup_banner">
                <div><img src="img/core-img/logo new.png"/></div>
                <div>
                    <h2>LOGIN FORM</h2>
                    <p>Please provide all the required details to proceed.<p>
                </div>
            </div>
        </div>
        <div class="signup_form_wrapper">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                <div class="signup_form_one">
                    <div>
                        <div class="uname">Username <span class="astrsk">*</span></div>
                        <input type="text" id="uname" name="uname" value="<?php echo $unamePostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $unameErrMsg; ?></span>
                    </div>
                    <div>
                        <div class="password">Password <span class="astrsk">*</span></div>
                        <input type="password" id="password" name="password" value="<?php echo $psswdPostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $psswdErrMsg?></span>
                    </div>
                </div>
                <div class="signup_form_four">
                    <div><input type="submit" value="SignIn" name="SignIn"></div>
                    <div><a href="index.php" class="link">Back?</a></div>
                    <div><a href="forgot-password.php" class="link">Forgot password?</a></div>
                    <div><a href="signup.php" class="link">Do not have an account yet?</a></div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>