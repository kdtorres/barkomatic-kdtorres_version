<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Barkomatic - Payment</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/default-assets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
        /* Input Fields */
        
        .wrapper {
            background-color: white;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .wrapper h1 {
            background-color: blue;
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            padding: 14px 0 10px 49px;
            letter-spacing: 1px;
            margin-top: 20px;
            margin-left: -52px;
            width: 330px;
        }
        
        .wrapper form {
            font-family: 'Work Sans', sans-serif;
        }
        
        .wrapper form .group {
            display: block;
            width: 90%;
            float: right;
            position: relative;
            margin-bottom: 25px;
        }
        
        .wrapper form .group label {
            font-size: 12px;
            float: cen;
            width: 100%;
            display: block;
            margin-bottom: 5px;
        }
        
        .wrapper form .card-number input {
            float: left;
            width: 25%;
            height: 28px;
            font-size: 18px;
            font-family: 'Work Sans', sans-serif;
            border: 0;
            color: black;
            border-bottom: 1px solid grey;
            outline: none;
            text-align: center;
            opacity: .5;
        }
        
        .wrapper form .card-name input {
            float: left;
            width: 100%;
            height: 28px;
            font-size: 18px;
            font-family: 'Work Sans', sans-serif;
            border: 0;
            color: black;
            border-bottom: 1px solid grey;
            opacity: .5;
            text-align: center;
            outline: none;
        }
        
        .wrapper form .card-expiry input {
            float: left;
            width: 40%;
            height: 28px;
            font-size: 18px;
            font-family: 'Work Sans', sans-serif;
            border: 0;
            color: black;
            border-bottom: 1px solid grey;
            outline: none;
            margin-right: 3px;
            opacity: .5;
            text-align: center;
        }
        
        .wrapper form .csv input {
            float: left;
            width: 80%;
            height: 28px;
            font-size: 18px;
            font-family: 'Work Sans', sans-serif;
            border: 0;
            color: black;
            border-bottom: 1px solid grey;
            text-align: center;
            opacity: .5;
            outline: none;
        }
        
        input::placeholder {
            font-size: 12px;
        }
        
        .wrapper .container form .group input {
            font-size: 12px;
            font-family: 'Work Sans', sans-serif;
        }
        
        .card-inforamation {
            display: none;
        }
        
        .fa-check-circle {
            display: none;
            margin-top: 100px;
            font-size: 18px;
        }
        /* PAYMNET */
        
        .images {
            width: 100%;
            background-color: antiquewhite;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            margin: 10px 0px 0px 0px;
            font-size: 50px;
            box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06), 0 22.3px 17.9px rgba(0, 0, 0, 0.072), 0 41.8px 33.4px rgba(0, 0, 0, 0.086), 0 100px 80px rgba(0, 0, 0, 0.12);
        }
        
        .imgs {
            margin-top: 20px;
            height: 8rem;
        }
        
        /* .arrow {}
         */
        .images p {
            font-size: 20%;
        }
        
        .arrow .fa {
            justify-content: space-between;
            align-items: center;
            text-align: center;
            margin: 10px 0px 0px 0px;
            font-size: 40px;
        }
        
        body {
            background-image: url("./img/bg-img/1.5.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        
        @media only screen and (max-width: 1199px) {
            .be-there {
                margin-top: 20px;
            }
        }
        
        @media only screen and (max-width:575px) {
            .arrow {
                right: 1%;
            }
            .fa-chevron-right {
                display: none;
            }
            img {
                width: auto;
                height: auto;
            }
            .arrow {
                margin-top: -10px;
            }
            .imagess {
                margin-top: -10px;
            }
        }
        
        @media only screen and (min-width: 576px) {
            .be-there {
                margin-top: 20px;
            }
            .fa-chevron-down {
                display: none;
            }
        }
        
        @media only screen and (max-width: 475px) {
            .colasdd {
                display: none;
            }
        }
        
        @media only screen and (min-width:475px) {
            .colasd {
                display: none;
            }
        }
        
        @media only screen and (max-width: 600px) {
            .receipt-border-col {
                display: none;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .progressbar {
                display: none;
            }
            /* .receipt-border-col {} */
        }
        
        @media only screen and (max-width: 600px) {
            .receipt-border-col {
                display: none;
            }
        }
        
        @media only screen and ( width: 1024px) {}
        
        .your-almost-there-col,
        .Important,
        .receipt-border-col,
        .asd {
            box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06), 0 22.3px 17.9px rgba(0, 0, 0, 0.072), 0 41.8px 33.4px rgba(0, 0, 0, 0.086), 0 100px 80px rgba(0, 0, 0, 0.12);
            border-radius: 5px;
        }
        
        .pay:hover {
            background-color: azure;
        }
        
        .pay:active {
            background-color: gray;
        }
    </style>

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    <!-- Header Area Start -->
    <header class="header-area" style="position: fixed;">

        <!-- Top Header Area End -->
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar" id="robertoNav">
                        <!-- Logo -->
                        <a class="nav-brand" href="index.php">
                            <img src="./img/core-img/logo.png" alt="BarkoMatic">
                        </a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                    <span></span>
                            <span></span>
                            <span></span>
                            </span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <div class="classynav">
                                    <ul id="nav">
                                        <li class="active"><a href="./index.html">Home</a></li>
                                        <li><a href="./contact.html">Contact Us</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                        <li class="border" style="border-radius: 30px;"><a href="#">PASSENGER GIUDE LINES</a>
                                            <ul class="dropdown" style="background-color: #09527F;">
                                                <li>
                                                    <a href=""></a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="border" style="border-radius: 30px;"><a href="#">CARGO GUIDELINES</a>
                                            <ul class="dropdown" style="background-color: #09527F;">
                                                <li>
                                                    <a href=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header><br><br><br>


    <div>
        <div class=" col-sm-12" style="background-color: white; margin-top:41px;">
            <div class="container ">
                <div class=" row" style="padding: 1px; font-size: 10px;">
                    <div class="col-sm-3 text-center  border">
                        Cebu<i class='fa fa-exchange'></i> Talibon
                    </div>
                    <div class="col-sm-2 text-center  border" style>
                        </br>
                        </br>passenger
                    </div>
                    <div class="col-sm-2 text-center  border">
                        </br>
                        </br>departure
                    </div>
                    <div class="col-sm-2 text-center  border">
                        </br>
                        </br>return
                    </div>
                    <div class="col-sm-3 text-center  border">
                        </br><i class="fa fa-edit"></i>
                        <a href="#"> MODIFY ITINERARY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="progressbar" style="font-size: 12px;margin-top: 50px; font-weight: bolder; color: aliceblue;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center ">
                    SCHEDULE
                </div>
                <div class="col-sm-2 text-center ">
                    PASSENGER INFO
                </div>
                <div class="col-sm-2 text-center ">
                    PAYMENT
                </div>
                <div class="col-sm-2 text-center ">
                    COMPLETE
                </div>
            </div>
            <div class="row " style="margin-top: 10px">
                <div class="progress" style="width: 56%;margin-left: 11%; margin-right: 10; height:10px;">
                    <div class="one " style="background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;"></div>
                    <div class="two " style="background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px; left: 36%;"></div>
                    <div class="three " style="background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;left: 50%;"></div>
                    <div class="four " style="background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;left: 63%;"></div>

                    <div class="progress-bar" style="width: 70%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="container" style="margin-top: 5%;">
            <div class="row ">
                <div class="col-sm-9 ">
                    <div class="your-almost-there-col  text-center" style=" padding:10px 20px 0px 20px; background-color: white;">
                        <p> <img src="./img/core-img/logoq.png" alt="" style="max-width: 60px;  height: auto;  ">You're Almost There</p>
                    </div>
                </div>

                <div class=" receipt-border-col  col-sm-3 border" style="margin-top: -5%; position: fixed; right: 2%; color: black; background-color: rgb(18, 68, 63); font-size: 60%;">
                    <div class="row">
                        <p class="col-sm-6" style=" margin-left: 10%; font-size: 200%;">Passenger </p>
                                            <p class="col-sm-6" style="margin-left: 10%; font-size: 200%;"> 2</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-6" style=" margin-left: 10%; font-size: 200%; ">Service Charge</p>
                                          <p class="col-sm-6" style="margin-left: 10%; font-size: 200%;"> 200</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-6" style=" margin-left: 10%; font-size: 200%; ">Terminal fee</p>
                                            <p class="col-sm-6" style="margin-left: 10%; font-size: 200%;"> 200</p>
                    </div>
                    <div class="row" style="margin-top:5%; border-top:0">
                        <p class="col-sm-6" style=" margin-left: 10%; font-size: 200%; ">Total</p>
                                            <p class="col-sm-6" style="margin-left: 10%; font-size: 200%;"> 400</p>
                    </div>
                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <div class="container " style="margin-top: 8%;">
        <div class="row">
            <H4 style="color: black;">Payment Options *</H4>
        </div>
    </div>
    <div class="container" style="  padding-bottom:10%;">
        <div class="row">

            <div class=" col-sm-9 ">
                <div class="Important border" style=" padding:10px 20px 0px 20px; background-color: blanchedalmond;">
                    <p class="" style="font-size: 12px"> <span class="" style="color: red">Important: </span>Non-credit card payments will be posted on the next day banking </p>
                </div>
            </div>
        </div>
    </div>
    <!-- payment Option cards paypal -->
    <Div class="SELECT-PAYMENT">
        <div class="container">
            <div class="payment1 col-sm-9" style="background-color: white; padding:0;  margin-top: -9%;">
                <div class="container ">
                    <div class="asd row" style="padding: 1px; font-size: 10px;">
                        <div class="pay col-sm-3 text-center  border">
                            <span class="card-inforamation box fa fa-check-circle "></span>
                            <img src="./img/core-img/6.png" alt="">
                            <div class="radio-input" value="credit">
                                <label><input type="radio" name="payment" value="card-inforamation"> credit card</label>


                            </div>

                        </div>
                        <div class="pay col-sm-3 text-center  border" style>
                            <span class=" paypal box  fa fa-check-circle "></span>
                            <img src="./img/core-img/7.png" alt="">
                            <div class="radio-input">
                                <input id="card" type="radio" name="payment" value="paypal"> paypal
                            </div>
                        </div>
                        <div class="pay col-sm-3 text-center  border">
                            <span class="e-cash box fa fa-check-circle "></span>
                            <img src="./img/core-img/8.png" alt="">
                            <div class="radio-input">
                                <input id="card" type="radio" name="payment" value="e-cash"> e-cash
                            </div>

                        </div>
                        <div class=" pay col-sm-3 text-center  border">
                            <span class="counters box fa fa-check-circle "></span>
                            <img src="./img/core-img/8.png " alt="">
                            <div class="radio-input">
                                <input id="card" type="radio" name="payment" value="counters"> over the counter
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </Div>
    <div class="">
        <div class="payment">
            <div class="container  text-center">
                <div class="payment1 col-sm-9" style="background-color: white; padding:0;">
                    <div>
                        <div class=" row">
                            <div class="container " style="margin:0;">
                                <div class="pay col-sm-12 text-center  border">

                                    <img src="./img/core-img/8.png " class="border" style="height:10rem;" alt="">
                                    <div class="radio-input">
                                        <input id="card" type="radio" name="payment"> over the counter
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><br>

                </div>
            </div>
        </div>
    </div>
    <div class="card-inforamation box container ">
        <div class="col-sm-9">
            <div class="row ">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 mt-3">
                    <div class="row">
                        <div class="col  ">
                            <div class="wrapper">
                                <div class="container">
                                    <article class="part card-details">
                                        <h1>
                                            Credit Card Details
                                        </h1>
                                        <form action="" if="cc-form" autocomplete="off">
                                            <div class="group card-number">
                                                <label for="first">Card Number</label>
                                                <input type="text" id="first" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                                                <input type="text" id="second" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                                                <input type="text" id="third" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                                                <input type="text" id="fourth" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
                                            </div>
                                            <div class="group card-name">
                                                <label for="name">Name On Card</label>
                                                <input type="text" id="name" class="" type="text" maxlength="20" placeholder="Name Surname">
                                            </div>
                                            <div class="group card-expiry">
                                                <div class="input-item expiry">
                                                    <label for="expiry">Expiry Date</label>
                                                    <input type="text" class="month" id="expiry" placeholder="02">
                                                    <input type="text" class="year" id="" placeholder="2017">
                                                </div>
                                            </div>
                                            <div class="group csv">
                                                <div class="input-item csv">
                                                    <label for="csv">CSV No.</label>
                                                    <a href="#what"></a>
                                                    <input type="text" class="csv">
                                                </div>
                                            </div>
                                            <div class="grup submit-group" style="display: none;">
                                                <span class="arrow"></span>
                                                <input type="submit" class="submit" value="Continue to payment">
                                            </div>
                                        </form>
                                    </article>
                                    <div class="part bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- payment Option cards paypal -->
    <!--Passenger Guidelines -->
    <div class="PassengerGuidelines-intro">
        <div class="  container ">
            <div class=" images col-sm-9 row ">
                <div class="imagess col-sm-3 ">
                    <img class="imgs" src="./img/core-img/9.png " alt="">
                    <p>print ticket</p>
                </div>
                <div class="arrow col-sm-1 ">
                    <i class="fa fa-chevron-right "></i>
                    <i class="fa fa-chevron-down "></i>
                </div>
                <div class="imagess col-sm-3 ">
                    <img class="imgs" src="./img/core-img/10.png" alt="">
                    <p>Bring ID</p>
                </div>
                <div class="arrow col-sm-1 ">
                    <i class="fa fa-chevron-right "></i>
                    <i class="fa fa-chevron-down "></i>
                </div>
                <div class="imagess be-there col-sm-3 ">
                    <img class="imgs" src="./img/core-img/logoq.png">
                    <p>Be There 30 Minutes Before The Departure</p>
                </div>
            </div>
        </div>

    </div>
    <!-- end Passenger Guidelines -->
    <!-- trip summary -->
    <div class="tripsummary" style="margin-top: 12%">
        <div class="container">
            <div class=" col-sm-9 border" style="background-color: white ;border-top: 50px; margin-top: -6%;">
                <div class=" " style="background-color: white ; margin-top: -6%;">
                    <div class="container" style="margin-top: 8%;">
                        <div class="col-sm- 6">
                            <div>
                                <fieldset class="scheduler-border" style="border-style: dashed; border-color: black;border-width: 2px;">
                                    <legend class="scheduler-border" style=" padding: 3px; font-size: 15px;">Return
                                    </legend>
                                    <p class="text-center" style="font-size: 150%; color: black;"> Bohol <span class="" style="margin: 10px 10px 10px -8px;"><i class="fa fa-arrow-right"></i></span> </i>Cebu</p>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="  row ">
                        <div class="depature_portal_accomadation col-sm-4 text-center">
                            <h5 class=" text-center" style="margin-top: 20px">Departure Date</h5>
                            <p class="">December 10, 2021</p>
                        </div>
                        <div class="depature_portal_accomadation col-sm-4 text-center">
                            <h5 class=" text-center" style="margin-top: 20px">Departure Time</h5>
                            <p class="departure_time">1:00 pm</p>
                        </div>
                        <div class="depature_portal_accomadation col-sm-4 text-center">
                            <h5 class=" text-center" style="margin-top: 20px">shippingline</h5>
                            <p class=""></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="depature_portal_accomadation col-sm-4 text-center">
                            <h5 class=" text-center" style="margin-top: 20px">Accomodation</h5>
                            <p class="">Economy A</p>
                        </div>
                        <div class="depature_portal_accomadation col-sm-4 text-center">
                            <h5 class="seat-type text-center" style="margin-top: 20px">Seat Type</h5>
                            <p class="">Bunk</p>
                        </div>
                        <div class="depature_portal_accomadation col-sm-4 text-center">
                            <h5 class="Aircon text-center" style="margin-top: 20px">Aircon </h5>
                            <p class="">No</p>
                        </div>
                        <div class="depature_portal_accomadation col-sm-4 text-center">
                            <h5 class=" text-center" style="margin-top: 20px">Port</h5>
                            <p class="">Port of Cebu Passenger Terminal 2</p>
                            <p><span>Pier 3</span><i class="fa fa-long-arrow-right" style="margin-left: 1px;"></i><span>Port of Bato</span></p>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- **** tripsummary-text=end ***** -->

    <div class="container CONTACT-INFO">
        <div class=" col-sm-9 border" style="background-color: white ;border-top: 50px;  margin-top: -10%;">
            <div>
                <div class="contactInfo">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Contact Information</h5>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <br>
                        <p class="Name" style="font-size: 15px;"><span>Name</span></p>
                        <p class="" style=" font-size: 13px;">Joshua Desoyo</p><br>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3 text-center">
                        <br>
                        <p class="Email" style="font-size: 15px;"><span>Email Adddress</span></p>
                        <p class="" style="font-size: 13px;">joshuadesoyo12@gmail.com</p><br>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3 text-center">
                        <br>
                        <p class="Phone#" style="font-size: 15px;"><span>Phone Number</span></p>
                        <p class="" style=" font-size: 13px;">092113456431</p><br>
                    </div>

                    <div class="col-sm-1"></div>
                    <div class="col-sm-3 text-center">
                        <br>
                        <p class="" style="font-size: 15px;"><span>Address</span></p>
                        <p class="" style="margin: -15px 0px 0px 10px; font-size: 13px;">Manlagtang Tabogon Cebu</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container PASSENGER_INFO">
        <div class=" col-sm-9 border" style="background-color: white ;border-top: 50px; margin-top: -6%; margin-top: 10%;">
            <div>
                <div class="contactInfo">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Passenger's Information</h5>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <p class="Name" style="font-size: 15px;"><span>Name</span></p>
                        <p class="" style=" font-size: 13px;">Joshua</p><br>
                    </div>
                    <div class="col-sm-3 text-center">
                        <p class="LName" style="font-size: 15px;"><span>last Name</span></p>
                        <p class="" style=" font-size: 13px;">Joshua</p><br>
                    </div>
                    <div class="col-sm-3 text-center">
                        <p class="MName" style="font-size: 15px;"><span>Middle Name</span></p>
                        <p class="" style=" font-size: 13px;"></p><br>
                    </div>
                    <div class="col-sm-3 text-center">
                        <p class="Gender" style="font-size: 15px;"><span>Gender</span></p>
                        <p class="" style=" font-size: 13px;">Male</p><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <p class="Bdate" style="font-size: 15px;"><span>Birthdate</span></p>
                        <p class="" style=" font-size: 13px;">June 23, 3000</p><br>
                    </div>
                    <div class="col-sm-3 text-center">
                        <p class="LName" style="font-size: 15px;"><span>Nationality</span></p>
                        <p class="" style=" font-size: 13px;">Filipino</p><br>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="container" style="margin-top: 2%;">
        <div class="col-sm-9">
            <div class="row">
                <div class="" style=" position: absolute; left: 1px;">
                    <button type="button" class="btn btn-light" style="padding-left: -1%;  border-radius: 0px; position: static;">BACK</button>
                </div>
                <div class="" style=" position: absolute; right: 1px;">
                    <button type="button" class="btn btn-light" style="  border-radius: 0px; ">CONTINUE AND CONFIRM</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:20px;">
        <div class="row col-sm-9">


        </div>

    </div>







    <!-- **** All JS Files ***** -->
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
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.get

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script>
        function myFunction() {
            document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
        }
    </script>
    <SCript>
        $(document).ready(function() {

            // Radio box border
            $('.method').on('click', function() {
                $('.method').removeClass('blue-border');
                $(this).addClass('blue-border');
            });

            // Validation
            var $cardInput = $('.input-fields input');

            $('.next-btn').on('click', function(e) {

                $cardInput.removeClass('warning');

                $cardInput.each(function() {
                    var $this = $(this);

                    if (!$this.val()) {
                        $this.addClass('warning');
                    }
                });

            });

        });
    </SCript>
    <!--BlueSnap Hosted Payment Fields JavaScript file-->
    <script type="text/javascript" src="https://sandbox.bluesnap.com/services/hosted-payment-fields/v1.0/bluesnap.hpf.mini.js"></script>
    <script>
    </script>
    <!-- creditcard payment -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>

</body>

</html>