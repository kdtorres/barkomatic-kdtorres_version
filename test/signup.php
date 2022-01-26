
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Barkomatic - Signup</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/default-assets/signup-custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .alert{display: none;}
    </style>
</head>
<body class="register mt-3 p-0">
    <div class="alert alert-success" role="alert">
        <i class="fa fa-check-circle"></i>
        Registered Successfully!
    </div>
    <div class="container-fluid rounded">
        <div class="row">
            <div class="col-md-3 register-left">
                <a href="index.php">
                    <img src="img/core-img/logoq.png" alt="" width="600">
                </a>
                <h3>Welcome</h3>
                <a href="login.php"> <input type="submit" name="" value="Login"></a>
                <br>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Passenger</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Shipping</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Apply as a Passenger Start -->
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form id="register-form" method="post" action="passenger_action.php">
                            <h3 class="register-heading display-6">Apply as Passenger.</h3>
                            <div class="row register-form">
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="cpass" id="cpass" class="form-control" placeholder="Confirm Password *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" id="male" value="male" checked="" required>
                                                <span> Male </span> 
                                            </label>
                                                <label class="radio inline"> 
                                                <input type="radio" name="gender" id="female" value="female" required>
                                                <span>Female </span> 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="tel" id="tel" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" required>
                                            <option class="hidden" selected="" disabled="">Please select your Sequrity Question</option>
                                            <option>What is your Birthdate?</option>
                                            <option>What is Your old Phone Number</option>
                                            <option>What is your Pet Name?</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="answer" id="answer" class="form-control" placeholder="Enter Your Answer *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="uname" id="uname" class="form-control" placeholder="Username *" value="" required>
                                    </div>
                                    <a href="index.php"><input type="button" class="btnRegister text-center float-left mt-auto bg-light text-dark border border-dark" value="Back"></a>
                                    <input type="submit" name="submit" class="btnRegister mt-auto" value="Register" id="register">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Apply as a Passenger End -->

                    <!-- Apply as a Company Start -->
                    <div class="tab-pane fade-out active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form id="signup-form">
                            <h3 class="register-heading display-6">Apply as Shipping Line Owner.</h3>
                            <div class="row register-form">
                                <div class="alert alert-success font-weight-light invisible" role="alert">
                                    <i class="fa fa-check-circle"></i>
                                    Signup Successfully!
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="scn" id="scn" class="form-control" placeholder="Shipping Company Name *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email *" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="tel" id="tel" maxlength="10" minlength="10" class="form-control" placeholder="Phone * +63" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="uname" id="uname" class="form-control" placeholder="Username *" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <input type="password" name="pass" id="pass" class="form-control " placeholder="Password *" required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="password" name="cpass" id="cpass" class="form-control " placeholder="Confirm Password *" required>
                                    </div>
                                    <div class="form-group ">
                                        <select class="form-control" required>
                                            <option class="hidden " selected=" " disabled=" ">Please select your Sequrity Question</option>
                                            <option>What is your Birthdate?</option>
                                            <option>What is Your old Phone Number</option>
                                            <option>What is your Pet Name?</option>
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" name="answer" id="answer" class="form-control " placeholder="Answer *" required>
                                    </div>
                                    <a href="index.php"><input type="button" class="btnRegister text-center float-left mt-auto bg-light text-dark border border-dark" value="Back"></a>

                                    <input type="submit" class="btnRegister text-center mt-auto" id="signup" value="Signup">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Apply as a Company End -->
            </div>
        </div>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <!-- <script src="js/default-assets/apply/shipping.js"></script>
    <script src="js/default-assets/apply/passenger.js"></script> -->
</body>

</html>