<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Barkomatic - scheduling</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/default-assets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>
        /* Style the buttons */
        
        body {
            background-color: #f2f2f5!important;
        }
        
        .slider {
            width: 100%;
            height: 4rem;
        }
        
        .slick-next:before,
        .slick-prev:before {
            color: black;
        }
        
        .date {
            height: 4rem;
            border: .1rem solid rgb(230, 199, 199);
            width: 60%;
            background-color: whitesmoke;
            cursor: pointer;
            opacity: .8;
        }
        
        .slider .date h6 {
            margin-top: 1px;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        
        .slider p {
            font-size: 10px;
            display: flex;
            justify-content: center;
            opacity: .5;
            color: black;
        }
        
        .currentdate {
            background-color: bisque;
        }
        
        .active,
        .date:hover {
            transition: 0.4s;
            background-color: gray;
            color: black;
            opacity: 1;
        }
        
        .btn {
            border: none;
            outline: none;
            padding: 10px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            font-size: 18px;
        }
        /* Style the active class, and buttons on mouse-over */
        
        .btn:hover {
            background-color: red;
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
            .receipt-border-col {}
        }
        
        @media only screen and (max-width: 600px) {
            .receipt-border-col {
                display: none;
            }
        }
        
        @media only screen and (max-width: 1025px) {
            .tips-title {
                background-color: aqua;
                left: -3%;
            }
        }
        
        @media only screen and (max-width: 1025px) {
            .tips-title {
                background-color: aqua;
                left: 1%;
            }
        }
        
        @media only screen and ( max-width: 1025px) {
            .tips-title {
                line-height: 119%;
            }
        }
        
        @media only screen and ( max-width: 768px) {
            .summary {
                position: relative;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        
        .payment:active {
            background-color: black;
            border-width: 100px;
        }
        
        .your-almost-there-col,
        .Important,
        .receipt-border-col,
        .asd {
            box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06), 0 22.3px 17.9px rgba(0, 0, 0, 0.072), 0 41.8px 33.4px rgba(0, 0, 0, 0.086), 0 100px 80px rgba(0, 0, 0, 0.12);
            border-radius: 5px;
        }
        
        .tips-title,
        .bot {
            background-color: #fff9c4;
            color: #424242;
            font-style: italic;
            border-radius: 2px;
            -khtml-align-items: baseline;
            -moz-align-items: baseline;
            -ms-align-items: baseline;
            -o-align-items: baseline;
            align-items: baseline;
            padding: 0;
        }
        
        #myDIV {
            display: none;
        }
        
        .calendar {
            width: 100%;
            height: 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 .2rem;
            text-align: center;
        }
        
        .calendar i {
            font-size: 2rem;
            background-color: beige;
        }
        
        .days {
            width: 100%;
            height: 3rem;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 .1rem;
        }
        
        .days div {
            border-style: solid;
            border-width: 1px;
            font-size: 1.5rem;
            width: 100%;
            padding: .1rem .7rem .7rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .button {
            cursor: pointer;
        }
        
        .days .num {
            opacity: .5;
            transition: background-color .9s;
        }
        
        .num:hover {
            cursor: pointer;
            background-color: gray;
        }
        
        a.btn.btn-primary,
        button.btn.btn-primary {
            background: #388192!important;
            border: 1px solid #388192!important;
            border-radius: 2px!important;
            padding: 10px 20px!important;
            color: #fff!important;
        }
        
        .title {
            font-size: 20px;
            color: #657179;
        }
        
        .panel-text-title {
            background-color: #388192;
        }
        
        .select_shippingline {}
        
        .headline {
            height: 4rem;
            display: flex;
            justify-content: space-evenly;
            background-color: rgb(230, 225, 225);
        }
        
        .booking-time-container {
            height: 3rem;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            text-align: center;
            color: white;
            background-color: #388192;
        }
        
        .itinerary-vessel {
            display: flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            -khtml-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            -o-align-items: center;
            align-items: center;
            width: 100%;
            color: #388192;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .shipping-line-name {
            padding: 1px 30px 1px 30px;
            border: 1px solid;
            border-radius: 20px;
        }
        
        .selectpicker {
            margin-top: 50px;
            width: 100%;
            margin-right: 2000px;
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
                                        <li class=""><a href="./index.html">Home</a></li>
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
    <div class="container mt-0">
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
            <div class="row " style="margin-top: 20px;">
                <div class="col-sm-9     ">
                    <div class="progressbar-row row ">
                        <div class="col-sm-2"> </div>
                        <div class="progressbar col-sm-8" style="font-size: 12px;margin-top: 50px; font-weight: bolder; color: #388192;">
                            <div class="container text-center">
                                <div class="progressbar-text row ">
                                    <div class="col-sm-3 text-center ">
                                        SCHEDULE
                                    </div>
                                    <div class="col-sm-3 text-center " style="opacity: 0.6;">
                                        PASSENGER INFO
                                    </div>
                                    <div class="col-sm-3 text-center " style="opacity: 0.6;">
                                        PAYMENT
                                    </div>
                                    <div class="col-sm-3 text-center " style="opacity: 0.6;">
                                        COMPLETE
                                    </div>
                                </div>
                                <div class="row  " style="margin-top: 10px">
                                    <div class="col-md-1 "></div>
                                    <div class="col-md-10 ">
                                        <div class="progress" style="opacity: 0.8; width: 100%;height:10px; ">
                                            <div class="one " style="background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;"></div>
                                            <div class="two " style="opacity: 0.6 ; background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px; left: 34%;"></div>
                                            <div class="three " style="opacity: 0.6; background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;left: 68%;"></div>
                                            <div class="four " style="opacity: 0.6; background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;left: 93%;"></div>

                                            <div class="progress-bar" style="width: 0%; "></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" alert-tips-row row" style="margin-top: 50px;">
                        <div class="container">
                            <div class="row ">
                                <div class=" alert-tips col-sm-2 row " style="bottom: 0%; height: 10%; ">
                                    <div class="bot">
                                        <button onclick="myFunction()" style="font-size:12px;border: none; background-color: #fff9c4; "><span class="fa fa-eye" style="margin:0;"></span><span  id="tips" s > Show tips:</span></button>
                                    </div>
                                </div>
                                <div class="tips-title col-sm-10  " style="bottom: 0%; height: 10%; right: 5%; ">
                                    <div id="myDIV" style="background-color: #fff9c4; ">
                                        <i class="fa fa-lightbulb-o " style="font-size:12px;"> TIPS:</i><span class="" style=" font-size:11px; text-align:left;">After payment confirmation, we will send you a copy of your e-ticket through email. <strong>Make sure to print the e-ticket!</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="departure-place-to col-sm-12 " style="margin-top: 5%;">

                        <div class="container ">
                            <div class="row " style="height: 1%;">
                                <p style="font-size: 200%;">Cebu</p>
                                <p class="" style=" position: relative;bottom: -15px; margin: 0% 2% 0% 2%;"><i class="fas fa-long-arrow-alt-right"></i></p>
                                <p style="font-size: 200%;">Bohol</p>
                            </div>
                        </div>
                        <div class="container " style="margin-top: 10px;">

                            <div class=" slider" id="sliders">

                                <div class=" date   currentdate">
                                    <h6 class="n1"></h6>
                                    <p class="month-week"> <span class="week"></span><span class="month">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n2"></h6>
                                    <p class="month-week"> <span class="week1"></span><span class="month1">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n3"></h6>
                                    <p class="month-week"> <span class="week2"></span><span class="month2">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n4"></h6>
                                    <p class="month-week"> <span class="week3"></span><span class="month3">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n5"></h6>
                                    <p class="month-week"> <span class="week4"></span><span class="month4"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n6"></h6>
                                    <p class="month-week"> <span class="week5"></span><span class="month5">  </span> </p>
                                    <p class="week"> </p>
                                </div>
                                <div class=" date  ">
                                    <h6 class="n7"></h6>
                                    <p class="month-week"> <span class="week6"></span><span class="month6"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n8"></h6>
                                    <p class="month-week"> <span class="week7"></span><span class="month7">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n9"></h6>
                                    <p class="month-week"> <span class="week8"></span><span class="month8">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n10"></h6>
                                    <p class="month-week"> <span class="week9"></span><span class="month9">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n11"></h6>
                                    <p class="month-week"> <span class="week10"></span><span class="month10"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n12"></h6>
                                    <p class="month-week"> <span class="week11"></span><span class="month11"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n13"></h6>
                                    <p class="month-week"> <span class="week12"></span><span class="month12">  </span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n14"></h6>
                                    <p class="month-week"> <span class="week13"></span><span class="month13"></span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n15"></h6>
                                    <p class="month-week"> <span class="week14"></span><span class="month14"></span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n16"></h6>
                                    <p class="month-week"> <span class="week15"></span><span class="month15">  </span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n17"></h6>
                                    <p class="month-week"> <span class="week16"></span><span class="month16"></span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n18"></h6>
                                    <p class="month-week"> <span class="week17"></span><span class="month17"> </span> </p>
                                </div>
                            </div>
                            <div class=" select_shippingline mt-3 mb-2 border">
                                <div class="container">
                                    <div class="row">
                                        <div class=" col-sm-12   headline border">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <div class=" col-sm-8 border  booking-time-container">
                                                            <div class="departure-time" style="font-size: 20px;">10:00 PM</div>
                                                            <div class="travel-time" style="font-size: 10px;"> 4 hours</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <div class="      itinerary-vessel">
                                                            <div class="booking-media-left itinerary-shipping-logo">
                                                                <img src="https://storage.googleapis.com/barkota-reseller-assets/companies/mark-lite-shipping-corporation.png" style="border: 1px solid; border-radius: 20px;" alt="">
                                                            </div>
                                                            ---
                                                            <div class="shipping-line-name" style="font-size: small;">
                                                                Shipping Corporation
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 mb-2    ">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-5 ">
                                                        <div class="col-sm-9     ">
                                                            <select class="selectpicker ">
                                                                <option>Standard A      </option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 mt-4 ">
                                                        <p class="ticket-price"><span>&#8369;</span>1000</p>
                                                        <p>ticket price</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="button " class="mt-5 " style="width:100%; height: 2rem; left:0; background-color: rgb(167, 164, 164); display: flex; justify-content: center;">Select</button>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="return-place-to col-sm-12 " style="margin-top: 5%;">

                        <div class="container ">
                            <div class="row " style="height: 1%;">
                                <p style="font-size: 200%;">Bohol</p>
                                <p class="" style=" position: relative;bottom: -15px; margin: 0% 2% 0% 2%;"><i class="fas fa-long-arrow-alt-right"></i></p>
                                <p style="font-size: 200%;">Cebu</p>
                            </div>
                        </div>
                        <div class="container " style="margin-top: 10px;">

                            <div class=" slider" id="sliders">


                                <div class=" date   ">
                                    <h6 class="n21"></h6>
                                    <p class="month-week"> <span class="week110"></span><span class="month110">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n31"></h6>
                                    <p class="month-week"> <span class="week21"></span><span class="month21">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n41"></h6>
                                    <p class="month-week"> <span class="week31"></span><span class="month31">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n51"></h6>
                                    <p class="month-week"> <span class="week41"></span><span class="month41"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n61"></h6>
                                    <p class="month-week"> <span class="week51"></span><span class="month51">  </span> </p>
                                    <p class="week"> </p>
                                </div>
                                <div class=" date  ">
                                    <h6 class="n71"></h6>
                                    <p class="month-week"> <span class="week61"></span><span class="month61"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n81"></h6>
                                    <p class="month-week"> <span class="week71"></span><span class="month71">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n91"></h6>
                                    <p class="month-week"> <span class="week81"></span><span class="month81">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n101"></h6>
                                    <p class="month-week"> <span class="week91"></span><span class="month91">  </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n111"></h6>
                                    <p class="month-week"> <span class="week101"></span><span class="month101"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n121"></h6>
                                    <p class="month-week"> <span class="week111"></span><span class="month111"> </span> </p>

                                </div>
                                <div class=" date  ">
                                    <h6 class="n131"></h6>
                                    <p class="month-week"> <span class="week121"></span><span class="month121">  </span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n141"></h6>
                                    <p class="month-week"> <span class="week131"></span><span class="month131"></span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n151"></h6>
                                    <p class="month-week"> <span class="week141"></span><span class="month141"></span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n161"></h6>
                                    <p class="month-week"> <span class="week151"></span><span class="month151">  </span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n171"></h6>
                                    <p class="month-week"> <span class="week161"></span><span class="month161"></span> </p>

                                </div>
                                <div class=" date ">
                                    <h6 class="n181"></h6>
                                    <p class="month-week"> <span class="week171"></span><span class="month171"> </span> </p>
                                </div>
                            </div>
                            <div class=" select_shippingline mt-3 mb-2 border">
                                <div class="container">
                                    <div class="row">
                                        <div class=" col-sm-12   headline border">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <div class=" col-sm-8 border  booking-time-container">
                                                            <div class="departure-time" style="font-size: 20px;">10:00 PM</div>
                                                            <div class="travel-time" style="font-size: 10px;"> 4 hours</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <div class="      itinerary-vessel">
                                                            <div class="booking-media-left itinerary-shipping-logo">
                                                                <img src="https://storage.googleapis.com/barkota-reseller-assets/companies/mark-lite-shipping-corporation.png" style="border: 1px solid; border-radius: 20px;" alt="">
                                                            </div>
                                                            ---
                                                            <div class="shipping-line-name" style="font-size: small;">
                                                                Shipping Corporation
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 mb-2    ">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-5 ">
                                                        <div class="col-sm-9     ">
                                                            <select class="selectpicker ">
                                                                <option>Standard A      </option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 mt-4 ">
                                                        <p class="ticket-price"><span>&#8369;</span>1000</p>
                                                        <p>ticket price</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="button " class="mt-5 " style="width:100%; height: 2rem; left:0; background-color: rgb(167, 164, 164); display: flex; justify-content: center;">Select</button>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <div class=" col-sm-3 ">
                    <div class="summary-container">
                        <div class="heading">
                            <h3 class="title">Summaryss</h3>
                        </div>

                        <div class="border" style=" background-color: aliceblue; border-radius:5px;">
                            <div class="   departure2 " style=" background-color: #388190;  border-radius:5px;">
                                <p class="" style=" margin: 4px 10px 4px 10px; color: whitesmoke;">DEPARTURE <button><i class="fa fa-arrow-circle-down" style="margin-top: -4%; position: absolute; right: 10%;"></i></button></p>

                            </div>
                            <div class="col-sm-12  " style=" background-color: aliceblue; border-radius:5px;">

                                No departure voyage selected yet.

                            </div>
                        </div>
                        <div class="border" style="margin-top: 20%; background-color: aliceblue; border-radius:5px;">
                            <div class="   departure2 " style=" background-color: #388190;  border-radius:5px;">
                                <p class="" style=" margin: 4px 10px 4px 10px; color: whitesmoke;">RETURN <button><i class="fa fa-arrow-circle-down" style="margin-top: -4%; position: absolute; right: 10%;"></i></button></p>

                            </div>
                            <div class="col-sm-12  " style=" background-color: aliceblue; border-radius:5px;">

                                No return voyage selected yet.

                            </div>
                        </div>
                        <div class="continue" style="margin-top: 20%;  border-radius:5px;">
                            <div class="but ton-contnue">
                                <div class=" container " style="padding:1px; ">
                                    <button class="btn btn-primary btn-block btn-lg"> <a href="payment.php" class="text-white">Continue</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        // Add active class to the current button (highlight it)
        var header = document.getElementById("sliders");
        var btns = header.getElementsByClassName("date");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active";
            });
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            var y = document.getElementById("tips");
            if (x.style.display == "none") {
                x.style.display = "block";
                y.innerHTML = "Hide tips: ";

            } else {
                x.style.display = "none";
                y.innerHTML = "Show Tips: ";
            }
        }
        $('.slider').slick({
            dots: false,
            infinite: false,
            speed: 100,
            slidesToShow: 10,
            slidesToScroll: 3,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        const dates = new Date();

const months = [
    "Jan",
    "Feb",
    "March",
    "April",
    "May",
    "June",
    "July",
    "Aug",
    "Sept",
    "Oct",
    "Nov",
    "Dec",
];
const week = [
    "Sun,",
    "Mon,",
    "Tue,",
    "Wed,",
    "Thu,",
    "Fri,",
    "Sat,"

];
const day = dates.getDate();


const month = dates.getMonth();
const weeks = dates.getDay();
let zzzz = dates.getFullYear();
let zzz = day;
let zz = month;
let z = weeks;

if (z < 7) {
    document.querySelector(".week").innerHTML = week[z];

    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zzz);
            console.log(zzz);
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        } else {
            console.log(zzz);
            console.log(zzz);
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                console.log(zzz);
                console.log(zzz);
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            } else {
                console.log(zzz);
                console.log(zzz);
                zzz = 1;
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                console.log(zz);
                console.log(zzz);
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            } else {
                console.log(zzz);
                console.log(zzz);
                zzz = 1;
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    document.querySelector(".week").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n1 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n1 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month").innerHTML = months[zz]
    // first date box end
if (z < 7) {
    document.querySelector(".week1").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n2 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n2 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n2 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n2 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    document.querySelector(".week1").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n2 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n2 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n2 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n2").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n2 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month1").innerHTML = months[zz];

// second box date end
if (z < 7) {
    document.querySelector(".week2").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n3 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n3 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n3").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n3 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    document.querySelector(".week2").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n3 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .3 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n3").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n3 ").innerHTML = zzz;
            zzz++;
        }
    }

}
document.querySelector(".date .month2").innerHTML = months[zz];

// third date box end
if (z < 7) {
    document.querySelector(".week3").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n4 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n4 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n4 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .4 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n4 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n4 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n4").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n4 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    document.querySelector(".week3").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n4 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n4 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n4 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n4 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n4 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n4 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n4").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n4 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month3").innerHTML = months[zz];

// fourth date box end
if (z < 7) {
    document.querySelector(".week4").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n5 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n5 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n5").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n5 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    document.querySelector(".week4").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n5 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n5 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n5 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n5").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            zz = zz + 1;
            document.querySelector(" .date .n5 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month5").innerHTML = months[zz];

// fifth date box end
if (z < 7) {
    document.querySelector(".week5").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n6 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n6 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n6").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n6 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n6 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n6 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n6 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n6").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n6 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".week5").innerHTML = week[z];

// sixth date box end
if (z < 7) {
    document.querySelector(".week6").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n7 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n7 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n7").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n7 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week6").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n7 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n7 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n7 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n7").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n7 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month6").innerHTML = months[zz];

//seventh date box end
if (z < 7) {
    document.querySelector(".week7").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n8 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n8").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n8").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n8 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week7").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n8 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n8").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n8 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n8").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n8 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month7").innerHTML = months[zz];

//8th date box end
if (z < 7) {
    document.querySelector(".week8").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n9 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n9").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n9").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n9 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week8").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n9 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n9").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n9 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n9").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n9 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month8").innerHTML = months[zz];

//9th date box end
if (z < 7) {
    document.querySelector(".week9").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n10 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n10").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n10").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n10 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week9").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n10 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n10").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n10 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n10").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n10 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month9").innerHTML = months[zz];

//10th date box end
if (z < 7) {
    document.querySelector(".week10").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n11 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n11").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n11").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n11 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week10").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n11 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n11").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n11 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n11").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n11 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month11").innerHTML = months[zz];

if (z < 7) {
    document.querySelector(".week11").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n12 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n12").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n12").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n12 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week11").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n12 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n12").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n12 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n12").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n12 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month11").innerHTML = months[zz];

//11th date box end
if (z < 7) {
    document.querySelector(".week12").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n13 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n13").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n13").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n13 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week12").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n13 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n13").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n13 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n13").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n13 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month12").innerHTML = months[zz];

//12th datebox end
if (z < 7) {
    document.querySelector(".week13").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n14 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n14").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n14").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n14 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week13").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n14 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n14").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n14 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n14").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n14 ").innerHTML = zzz;
            zzz++;
        }
    }

}
document.querySelector(".date .month13").innerHTML = months[zz];

//13th date box end
if (z < 7) {
    document.querySelector(".week14").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n15 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n15").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n15").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n15 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week14").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n15 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n15").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n15 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n15").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n15 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month14").innerHTML = months[zz];

//14th date box end
if (z < 7) {
    document.querySelector(".week15").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n16 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n16").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n16").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n16 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week15").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n16 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n16").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                document.querySelector(" .date .n16 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n16").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n16 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month15").innerHTML = months[zz];

//15th date box end
if (z < 7) {
    document.querySelector(".week16").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n17 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n17").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n17").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n17 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week16").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n17 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n17").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n17 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n17").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n17 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month16").innerHTML = months[zz];

//16th date box end
if (z < 7) {
    document.querySelector(".week17").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n18 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n18").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n18").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n18 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week17").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n18 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n18").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n18 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n18").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n18 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month17").innerHTML = months[zz];

//17t dte box end


// departure calendar js












//return date

zzz = day + 1;
zz = month;
z = weeks + 1;

// first date box end
if (z < 7) {
    document.querySelector(".week110").innerHTML = week[z];
    z++;
    console.log(z);
    console.log(week[z]);
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {

            document.querySelector(" .date .n21 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n21 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {

            document.querySelector(" .date .n21").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n21 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    document.querySelector(".week11").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n21 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n21 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n21 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n21").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n21 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month110").innerHTML = months[zz];

// second box date end
if (z < 7) {
    document.querySelector(".week21").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n31 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n31 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n31 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n3 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n31 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n31 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n31").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n31 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    document.querySelector(".week21").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n31 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .31 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n31 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n31 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n31 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n31 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n31").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n31 ").innerHTML = zzz;
            zzz++;
        }
    }

}
document.querySelector(".date .month21").innerHTML = months[zz];

// second date box end
if (z < 7) {
    document.querySelector(".week31").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n41 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n41 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n41 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .41 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n41 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n41 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n41").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n41 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    document.querySelector(".week31").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n41 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n41 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n41 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n41 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n41 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n41 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n41").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n41 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month31").innerHTML = months[zz];

// fourth date box end
if (z < 7) {
    document.querySelector(".week41").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n51 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n51 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n51").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n51 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    document.querySelector(".week41").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n51 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n51 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n51 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n51").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n51 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month41").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week51").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n61 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n61 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n61").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n61 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    document.querySelector(".week51").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n61 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n61 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n61 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n61").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n61 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month51").innerHTML = months[zz];

//  date box end
if (z < 7) {
    document.querySelector(".week61").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n71 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n71 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n71").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n71 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week61").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n71 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n71 ").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n71 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n71").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n71 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month61").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week71").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n81 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n81").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n81 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n81 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n81 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n81 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n81").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n81 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week71").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n81 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n81").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n81").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n81 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n81 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n81 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n81").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n81 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month71").innerHTML = months[zz];

//date box end
if (z < 7) {
    document.querySelector(".week81").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n91 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n91").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n91").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n91 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n91 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n91 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n91").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n91 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week81").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n91 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n91").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n91 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n91 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n91 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n91 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n91").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n91 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month81").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week91").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n101 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n101").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n101").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n101 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week91").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n101 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n1011").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n101 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n101").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n101 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month91").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week101").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n111 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n111").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n111").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n111 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week101").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n111 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n111").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n111 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n111").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n111 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month101").innerHTML = months[zz];
//date box end 
if (z < 7) {
    document.querySelector(".week111").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n121 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n121").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n121").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n121 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week111").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n121 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n121").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n121 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n121").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n121 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month111").innerHTML = months[zz];

//h date box end
if (z < 7) {
    document.querySelector(".week121").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n131 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n131").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n131").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n131 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week121").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n131 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n131").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n131 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n131").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n131 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month121").innerHTML = months[zz];

// datebox end
if (z < 7) {
    document.querySelector(".week131").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n141 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n141").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n141 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n141 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n141 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n141 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n141").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n141 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week131").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n141 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n141").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n1411 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n141 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n141 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n141 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n141").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n141 ").innerHTML = zzz;
            zzz++;
        }
    }

}
document.querySelector(".date .month131").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week141").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n151 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n151").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n151").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n151 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week141").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n151 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n151").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n151 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n151").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n151 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month141").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week151").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n161 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n161").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n161").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n161 ").innerHTML = zzz;
            zzz++;
        }
    }

} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week151").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n161 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n161").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n161 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n161").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n161 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month151").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week161").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n171 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n171").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n171").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n171 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week161").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n171 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n171").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n171 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n171").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n171 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month161").innerHTML = months[zz];

// date box end
if (z < 7) {
    document.querySelector(".week171").innerHTML = week[z];
    console.log(z);
    console.log(week[z]);
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n181 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n181").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 1) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n181").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n181 ").innerHTML = zzz;
            zzz++;
        }
    }
} else {
    z = 0;
    console.log(z);
    console.log(week[z]);
    document.querySelector(".week171").innerHTML = week[z];
    z++;
    if (zz == 0 || zz == 2 || zz == 4 || zz == 6 || zz == 8 || zz == 10) {
        if (zzz <= 31) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n181 ").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n181").innerHTML = zzz;
            zzz++;
        }
    } else if (zz == 2) {
        if (zzzz / 4 == 0) {
            if (zzz <= 29) {
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            }
        } else {
            if (zzz <= 28) {
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            } else {
                zzz = 1;
                zz = zz + 1;
                document.querySelector(" .date .n181 ").innerHTML = zzz;
                zzz++;
            }
        }

    } else {
        if (zzz <= 30) {
            console.log(zz);
            console.log(zzz);
            document.querySelector(" .date .n181").innerHTML = zzz;
            zzz++;
        } else {
            zzz = 1;
            zz = zz + 1;
            document.querySelector(" .date .n181 ").innerHTML = zzz;
            zzz++;
        }
    }
}
document.querySelector(".date .month171").innerHTML = months[zz];

// dte box end


// departure calendar js
</script>



</body>

</html>