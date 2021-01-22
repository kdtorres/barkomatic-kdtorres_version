<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>VG Shipping Lines - Sign Up</title>  
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <style>
        :root{--align-items:center;--display:flex;--flex-direction:row;--justify-content:space-between;}
        body{font-family:Arial, Helvetica, sans-serif;background-color:#f9f9f9;}
        .signup_wrapper{border-radius:2px;margin-top:0 auto;max-width:575px;display:var(--display);flex-direction:column;align-items:var(--align-items);margin:0 auto;box-shadow:0px 1px 2px 0px rgba(60,64,67,0.3), 0px 1px 3px 1px rgba(60,64,67,0.15);}
        .signup_banner_wrapper{width:550px;padding:12px;background-color:#f9f9f9;margin:0 auto;}
        .signup_banner{display:var(--display);flex-direction:var(--flex-direction);align-items:var(--align-items);justify-content:space-between;width:535px;padding:12px;margin:0 auto;}
        .signup_banner div img{width:7.875rem;}
        .signup_banner p{font-size:0.775rem;margin:0;}
        .signup_form_wrapper{width:550px;background-color:white;margin:0 auto;padding:12px;}
        .signup_form_wrapper form input[type='text'],.signup_form_wrapper form input[type='email'],.signup_form_wrapper form input[type='number'],.signup_form_wrapper form input[type='password'],select{box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing:border-box;border:1px solid#BEBEBE;padding:0.3rem;margin:0px;transition:all 0.30s ease-in-out;-webkit-transition:all 0.30s ease-in-out;-moz-transition:all 0.30s ease-in-out;-ms-transition:all 0.30s ease-in-out;-o-transition:all 0.30s ease-in-out;outline:none;}
        .signup_form_wrapper form input[type='number'],select{width:180px;}
        .signup_form_wrapper form input[type='submit']{border:none;padding:8px 15px 8px 15px;background:#FF8500;color:#fff;box-shadow:1px 1px 4px #DADADA;-moz-box-shadow:1px 1px 4px #DADADA;-webkit-box-shadow:1px 1px 4px #DADADA;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
        .signup_form_wrapper form input[type='submit']:hover{background:#EA7B00;color:#fff;cursor:pointer;}
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
    <?php include 'inc/function/signup_form_func.php'; ?>
    <div class="signup_wrapper">
        <div class="signup_banner_wrapper">
            <div class="signup_banner">
                <div><img src="img/core-img/logo new.png"/></div>
                <div>
                    <h2>REGISTRATION FORM</h2>
                    <p>Please provide all the required details to register your business with us.<p>
                </div>
            </div>
        </div>
        <div class="signup_form_wrapper">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                <div class="signup_form_one">
                    <div>
                        <div class="fname">Firstname <span class="astrsk">*</span></div>
                        <input type="text" id="fname" name="fname" value="<?php echo $fnamePostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $fnameErrMsg; ?></span>
                    </div>
                    <div>
                        <div class="lname">Lastname <span class="astrsk">*</span></div>
                        <input type="text" id="lname" name="lname" value="<?php echo $lnamePostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $lnameErrMsg?></span>
                    </div>
                    <div>
                        <div class="mname">Middlename <span class="astrsk">*</span></div>
                        <input type="text" id="mname" name="mname" value="<?php echo $mnamePostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $mnameErrMsg; ?></span>
                    </div>
                </div>
                <div class="signup_form_two">
                    <div>
                        <div class="age">Age <span class="astrsk">*</span></div>
                        <input type="number" id="age" name="age" value="<?php echo $agePostVal; ?>" class="form-control" min="1" max="100" />
                        <span class="text-danger"><?php echo $ageErrMsg; ?></span>
                    </div>
                    <div>
                        <div class="sex">Gender <span class="astrsk">*</span></div>
                        <select name="sex" class="border w-100 form-control-sm">
                            <option value="<?php echo $sexPostVal; ?>" style="display:none;"><?php echo $sexPostVal; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <span class="text-danger"><?php echo $sexErrMsg; ?></span>
                    </div>
                    <div>
                        <div class="email">Email <span class="astrsk">*</span></div>
                        <input type="text" id="email" name="email" value="<?php echo $emailPostVal; ?>" class="form-control" placeholder="ex: example@mail.com" />
                        <span class="text-danger"><?php echo $emailErrMsg; ?></span>
                    </div>
                </div>
                <div class="signup_form_three">
                    <div>
                        <div class="uname">Username <span class="astrsk">*</span></div>
                        <input type="text" id="uname" name="uname" value="<?php echo $unamePostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $unameErrMsg; ?></span>
                    </div>
                    <div>
                        <div class="password">Password <span class="astrsk">*</span></div>
                        <input type="password" id="password" name="password" value="<?php echo $psswdPostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $psswdErrMsg; ?></span>
                    </div>
                    <div>
                        <div class="confirm_password">Confirm password <span class="astrsk">*</span></div>
                        <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $confirm_psswdPostVal; ?>" class="form-control" />
                        <span class="text-danger"><?php echo $confirm_psswdErrMsg; ?></span>
                        <span class="text-danger"><?php echo $password_match; ?></span>
                    </div>
                </div>
                <div class="signup_form_four">
                    <div><input type="submit" value="SignUp"></div>
                    <div><a href="index.php" class="link">Back?</a></div>
                    <div><a href="signin.php" class="link">Already have an account?</a></div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>