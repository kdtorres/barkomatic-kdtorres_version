<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title>Barkomatic - Online Ticketing</title>
        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="./css/default-assets/main.css?version=kyle">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <style>
        
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
  .wrapper{
    width: 100%;
  }
  .carousel{
    width: 520px;
    margin: auto;
    padding: 0 30px;
  }
  .carousel .card{
    color: #fff;
    text-align: center;
    margin: 20px 0;
    line-height: 250px;
    font-size: 90px;
    font-weight: 600;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
    height: 100px;
  }
  .card:hover{
      background-color: rgb(240, 205, 8);
  }
  .carousel .card-1{
    background-image: url(img/ferrys-logo/1.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .carousel .card-2{
    background-image: url(img/ferrys-logo/2.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .carousel .card-3{
    background-image: url(img/ferrys-logo/3.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .carousel .card-4{
    background-image: url(img/ferrys-logo/4.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .carousel .card-5{
    background-image: url(img/ferrys-logo/5.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .carousel .card-6{
    background-image: url(img/ferrys-logo/6.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .carousel .card-7{
    background-image: url(img/ferrys-logo/7.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .carousel .card-8{
    background-image: url(img/ferrys-logo/8.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }
  .owl-dots{
    text-align: center;
    margin-top: 0px;
  }
  .owl-dot{
    height: 10px;
    width: 25px;
    margin: 0 5px;
    outline: none;
    border-radius: 14px;
    border: 2px solid #0072bc!important;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
  }
  .owl-dot.active,
  .owl-dot:hover{
    background: #0072bc!important;
  }
</style>

    </head>
    
    <body class="bodyBookship">

        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->
        <!-- Header Area Start -->
        <header class="header-area"style="position: fixed;top: 0;">
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
                                                    <li ><a href=""></a></li>
                                                </ul>
                                            </li>
                                            <li class="border" style="border-radius: 30px;"><a href="#">CARGO GUIDELINES</a>
                                                <ul class="dropdown" style="background-color: #09527F;">
                                                    <li ><a href=""></a></li>
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
        </header>
        <!-- Header Area End -->

        <!-- BookShip Section Start -->
        <section class="sectionBookship">
            <h2 class="BookshipHeaderlabel ">Book Ship Tickets </h2>
            <!-- TabPanel List Start -->
            <div class="tabcontainer">
                <div class="row ml-1"style="width:fit-content;">
                    <ul class="tabheading"style="padding-left:0px;width:fit-content;">
                        <li class="active" rel="tab1"><a href="javascript:return false;"><i class="fa fa-user font-weight-normal"></i>
                            Passenger</a> </li>
                        <li rel="tab2"><a href="javascript:return false;"><i class="fa fa-car ml-0"></i>
                            Vehicle</a> </li>
                    </ul>
                </div>
                <!-- Passenger TabPanel Start -->
                <div class="tabbody active" id="tab1" style="display: block;">
                    <!-- Preferred Shipping Lines Section Start -->
                    <div class="mt-2">
                        <input type="checkbox" style="width: 25px;height: 20px;border: 2px solid #f5b917;" id="myCheck" onclick="myFunction()">
                        <span style="color: cyan;">Has Preffered Shipping Lines</span>
                        <div class="row">
                            <div class=""id="text" style="display:none">
                                <div class="col-md-10">
                                    <div class="wrapper">
                                        <div class="carousel owl-carousel">  
                                        <div class="card card-1">                              
                                           
                                        </div>
                                        <div class="card card-2">
                                            
                                        </div>
                                        <div class="card card-3">
                                            
                                        </div>
                                        <div class="card card-4">
                                            
                                        </div>
                                        <div class="card card-5">
                                            
                                        </div>
                                        <div class="card card-6">
                                            
                                        </div>
                                        <div class="card card-7">
                                            
                                        </div>
                                        <div class="card card-8">
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Preferred Shipping Lines Section End -->
                    <!-- RoundTrip/OneWay Button Section Start -->
                    <div class="row ml-1 mt-3">
                        <input type="radio" name="tab" value="igotnone" onclick="show1();"checked style="width:25px;height: 20px;"/>
                        <span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 18px;font-weight: bold;color: #0ceafa;"> Round Trip </span>
                        <input type="radio" name="tab" value="igottwo" onclick="show2();" style="width:25px;height: 20px; "/>
                        <span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 18px;font-weight: bold;color: #0ceafa;"> One Way </span>
                    </div>
                    <!-- RoundTrip/OneWay Button Section End -->
                    
                    <!-- FirSt Select Form Section StaRt -->
                    <div class="row ml-1 mt-4">
                        <!-- Select FROM Start -->
                        <div class="input-group-prepend" >
                            <label class="input-group-text" for="inputGroupSelect01" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 28px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;">From</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" style="text-align: center;">
                            <option selected>Cebu</option>
                            <option value="1">Bacolod</option>
                            <option value="2">BayBay,Leyte</option>
                            <option value="3">Batangas</option>
                            <option value="4">Bogo,Cebu</option>
                            <option value="5">Bato,Leyte</option>
                            <option value="6">Butuan</option>
                            <option value="7">Cagayan de Oro</option>
                            <option value="8">Calapan</option>
                            <option value="9">Poro,Camotes</option>
                            <option value="10">Catiklan</option>
                            <option value="11">Cebu</option>
                            <option value="12">Consuelo,Camotes</option>
                            <option value="13">Danao</option>
                            <option value="14">Dapitan</option>
                            <option value="15">Dapdap</option>
                            <option value="16">Dumaguete</option>
                            <option value="17">Dipolog</option>
                            <option value="18">Dapa,Siargao</option>
                            <option value="19">Estacia</option>
                            <option value="20">Hagnaya</option>
                            <option value="21">Iligan</option>
                            <option value="22">Iloilo</option>
                            <option value="23">Medellin,Cebu</option>
                            <option value="24">Liloan,Southern Leyte</option>
                            <option value="25">Lipata,Siargao</option>
                            <option value="26">Lipata,Culasi</option>
                            <option value="27">Cataingan,Masbate</option>
                            <option value="28">Masbate</option>
                            <option value="29">Manila</option>
                            <option value="30">Ormoc</option>
                            <option value="31">Osamiz</option>
                            <option value="32">Palompon</option>
                            <option value="33">Puerto,Princesa Palawan</option>
                            <option value="34">Puerto Galera</option>
                            <option value="35">Roxas City,Capiz</option>
                            <option value="36">San Carlos,Negros</option>
                            <option value="37">Sibuyan,Romblon</option>
                            <option value="38">Santa Fe, Bantayan Island</option>
                            <option value="39">Surigao</option>
                            <option value="40">Matnog</option>
                            <option value="41">Tagbilaran,Bohol </option>
                            <option value="42">Toledo</option>
                            <option value="43">Tubigon</option>
                            <option value="44">Zamboanga</option>
                            <option value="45">Talibon.Bohol</option>
                        </select>
                        <!-- Select FROM End -->
                    </div>
                    <!-- FirSt Select Form Section End --> 
                    <!-- Second Select Form Section Start -->
                    <div class="row ml-1 mt-1">
                        <!-- Select TO Start -->
                        <div class="input-group-prepend" >
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 95px;height: 50px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 28px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;text-align:center;justify-content:center;">To</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="45">Cebu</option>f
                            <option value="1">Bacolod</option>
                            <option value="2" >BayBay,Leyte</option>
                            <option value="3">Batangas</option>
                            <option value="4">Bogo,Cebu</option>
                            <option value="5">Bato,Leyte</option>
                            <option value="6">Butuan</option>
                            <option value="7">Cagayan de Oro</option>
                            <option value="8">Calapan</option>
                            <option value="9">Poro,Camotes</option>
                            <option value="10">Catiklan</option>
                            <option value="11">Cebu</option>
                            <option value="12">Consuelo,Camotes</option>
                            <option value="13">Danao</option>
                            <option value="14">Dapitan</option>
                            <option value="15">Dapdap</option>
                            <option value="16">Dumaguete</option>
                            <option value="17">Dipolog</option>
                            <option value="18">Dapa,Siargao</option>
                            <option value="19">Estacia</option>
                            <option value="20">Hagnaya</option>
                            <option value="21">Iligan</option>
                            <option value="22">Iloilo</option>
                            <option value="23">Medellin,Cebu</option>
                            <option value="24">Liloan,Southern Leyte</option>
                            <option value="25">Lipata,Siargao</option>
                            <option value="26">Lipata,Culasi</option>
                            <option value="27">Cataingan,Masbate</option>
                            <option value="28">Masbate</option>
                            <option value="29">Manila</option>
                            <option value="30">Ormoc</option>
                            <option value="31">Osamiz</option>
                            <option value="32">Palompon</option>
                            <option value="33">Puerto,Princesa Palawan</option>
                            <option value="34">Puerto Galera</option>
                            <option value="35">Roxas City,Capiz</option>
                            <option value="36">San Carlos,Negros</option>
                            <option value="37">Sibuyan,Romblon</option>
                            <option value="38">Santa Fe, Bantayan Island</option>
                            <option value="39">Surigao</option>
                            <option value="40">Matnog</option>
                            <option value="41">Tagbilaran,Bohol </option>
                            <option value="42">Toledo</option>
                            <option value="43">Tubigon</option>
                            <option value="44">Zamboanga</option>
                            <option selected>Talibon.Bohol</option>
                        </select>
                        <!-- Select TO End -->
                    </div>
                    <!-- Second Select Form Section End -->
                    <!-- Third Select Form Section Start -->
                    <div class="row ml-1">
                        <!-- Select Depart Start -->
                        <div class="input-group-prepend" >
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 85px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 15px;text-align: center;">Depart</label>
                        </div>
                        <div class="form-line jf-required" data-type="control_datetime" id="id_55">
                            <div id="cid_55" class="form-input-wide jf-required" data-layout="half"style="font-size: 28px;color: #131414f8;">
                                <div data-wrapper-react="true"> 
                                    <div style="display:none;">
                                        <span class="form-sub-label-container" style="vertical-align:top;">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="month_55" name="q55_dateofBirth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_month" />
                                            <span class="date-separate" aria-hidden="true"></span>
                                            <label class="form-sub-label" for="month_55" id="sublabel_55_month" style="min-height:13px;" aria-hidden="false">Month </label>
                                        </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="day_55" name="q55_dateofBirth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_day" />
                                            <span class="date-separate" aria-hidden="true"></span>
                                            <label class="form-sub-label" for="day_55" id="sublabel_55_day" style="min-height:13px" aria-hidden="false">Day </label>
                                        </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="year_55" name="q55_dateofBirth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_year" />
                                            <label class="form-sub-label" for="year_55" id="sublabel_55_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                        </span>
                                    </div>
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <input type="date" name="" id="">
                                        <label class="form-sub-label is-empty" for="lite_mode_55"id="sublabel_55_litemode" style="min-height:13px" aria-hidden="false"></label>
                                    </span>
                                </div>
                            </div>
                            <!-- Select Depart End -->
                        </div> 
                        <!-- Input Pasenger Form Start -->
                        <div class="input-group-prepend " >
                            <label class="input-group-text"style="width: 110px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;">Passenger</label>
                        </div>
                        <input type="text" id="first_29" name="q29_fullName[first]" class="form-textbox validate[required] ml-2" data-defaultvalue="" size="10" value="" data-component="first" aria-labelledby="label_29 sublabel_29_first" required="" style="width: 90px; height: 55px;border: 2px solid #f5b917;border-radius: 10px;color: black;text-align: center;font-size: 23px;"/>
                        <!-- Input Passenger Form End -->
                    </div>
                    <!-- Third Select Form Section End -->
                    <!-- Fourth Select Form Section Start -->
                    <div class="row ml-3">
                        <!-- Select Return Start --> 
                        <div class="div1"id="div1">
                            <div class="row">
                                <div class="input-group-prepend" >
                                    <label class="input-group-text" for="inputGroupSelect01" style="width: 85px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 15px;text-align: center;">Return</label>
                                </div>
                                <div class="form-line jf-required" data-type="control_datetime" id="id_55">
                                    <div id="cid_55" class="form-input-wide jf-required" data-layout="half"style="font-size: 28px;color: #131414f8;">
                                        <div data-wrapper-react="true"> 
                                            <div style="display:none;">
                                                <span class="form-sub-label-container" style="vertical-align:top;">
                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="month_55" name="q55_dateofBirth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_month" />
                                                    <span class="date-separate" aria-hidden="true"></span>
                                                    <label class="form-sub-label" for="month_55" id="sublabel_55_month" style="min-height:13px;" aria-hidden="false">Month </label>
                                                </span>
                                                <span class="form-sub-label-container" style="vertical-align:top">
                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="day_55" name="q55_dateofBirth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_day" />
                                                    <span class="date-separate" aria-hidden="true"></span>
                                                    <label class="form-sub-label" for="day_55" id="sublabel_55_day" style="min-height:13px" aria-hidden="false">Day </label>
                                                </span>
                                                <span class="form-sub-label-container" style="vertical-align:top">
                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="year_55" name="q55_dateofBirth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_year" />
                                                    <label class="form-sub-label" for="year_55" id="sublabel_55_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                                </span>
                                            </div>
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                                <input type="date" name="" id="">
                                                <label class="form-sub-label is-empty" for="lite_mode_55"id="sublabel_55_litemode" style="min-height:13px" aria-hidden="false"></label>
                                            </span>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                        </div> 
                        <!-- Select Return End -->

                        <!-- Search Trips Button Start -->
                        <div class="input-group-prepend">
                            <a href="index.html">
                            <span class="btn btn-info btn-lg"id="btnsearch"style="text-align:center;justify-content:center; width: 200px;height: 55px;
                            font-family: Georgia, 'Times New Roman', Times, serif; font-size: 23px;font: bolder;background-color: #0b9afaf8;border: 2px solid #8b08f7f8;border-radius: 10px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i class="fa fa-search"style="margin-left: 0px;"></i>
                                Search Trips
                            </span>
                            </a>
                        </div>
                        <!-- Search Trips Button Start -->
                    </div>
                    <!-- Fourth Select Form Section End -->
                </div>     
                </div>
                <!-- Passenger TabPanel END -->
                <!-- Vehicle TabPanel Start -->
                <div class="tabbody" id="tab2" style="display: none;">
                    <!-- Preferred Shipping Lines Section Start -->
                    <div class="mt-2">
                        <input type="checkbox" style="width: 25px;height: 20px;border: 2px solid #f5b917;" id="myCheck" onclick="myFunction()">
                        <span style="color: cyan;">Has Preffered Shipping Lines</span>
                        <div class="row">
                            <div class=""id="text" style="display:none">
                                <div class="col-md-10">
                                    <div class="wrapper">
                                        <div class="carousel owl-carousel">  
                                        <div class="card card-1">                              
                                           
                                        </div>
                                        <div class="card card-2">
                                            
                                        </div>
                                        <div class="card card-3">
                                            
                                        </div>
                                        <div class="card card-4">
                                            
                                        </div>
                                        <div class="card card-5">
                                            
                                        </div>
                                        <div class="card card-6">
                                            
                                        </div>
                                        <div class="card card-7">
                                            
                                        </div>
                                        <div class="card card-8">
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Preferred Shipping Lines Section End -->
                    <!-- RoundTrip/OneWay Button Section Start -->
                    <div class="row ml-1 mt-3">
                        <input type="radio" name="tab" value="igotnone" onclick="show1();"checked style="width:25px;height: 20px;"/>
                        <span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 18px;font-weight: bold;color: #0ceafa;"> Round Trip </span>
                        <input type="radio" name="tab" value="igottwo" onclick="show2();" style="width:25px;height: 20px; "/>
                        <span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 18px;font-weight: bold;color: #0ceafa;"> One Way </span>
                    </div>
                    <!-- RoundTrip/OneWay Button Section End -->
                    
                    <!-- FirSt Select Form Section StaRt -->
                    <div class="row ml-1 mt-4">
                        <!-- Select FROM Start -->
                        <div class="input-group-prepend" >
                            <label class="input-group-text" for="inputGroupSelect01" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 28px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;">From</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" style="text-align: center;">
                            <option selected>Cebu</option>
                            <option value="1">Bacolod</option>
                            <option value="2">BayBay,Leyte</option>
                            <option value="3">Batangas</option>
                            <option value="4">Bogo,Cebu</option>
                            <option value="5">Bato,Leyte</option>
                            <option value="6">Butuan</option>
                            <option value="7">Cagayan de Oro</option>
                            <option value="8">Calapan</option>
                            <option value="9">Poro,Camotes</option>
                            <option value="10">Catiklan</option>
                            <option value="11">Cebu</option>
                            <option value="12">Consuelo,Camotes</option>
                            <option value="13">Danao</option>
                            <option value="14">Dapitan</option>
                            <option value="15">Dapdap</option>
                            <option value="16">Dumaguete</option>
                            <option value="17">Dipolog</option>
                            <option value="18">Dapa,Siargao</option>
                            <option value="19">Estacia</option>
                            <option value="20">Hagnaya</option>
                            <option value="21">Iligan</option>
                            <option value="22">Iloilo</option>
                            <option value="23">Medellin,Cebu</option>
                            <option value="24">Liloan,Southern Leyte</option>
                            <option value="25">Lipata,Siargao</option>
                            <option value="26">Lipata,Culasi</option>
                            <option value="27">Cataingan,Masbate</option>
                            <option value="28">Masbate</option>
                            <option value="29">Manila</option>
                            <option value="30">Ormoc</option>
                            <option value="31">Osamiz</option>
                            <option value="32">Palompon</option>
                            <option value="33">Puerto,Princesa Palawan</option>
                            <option value="34">Puerto Galera</option>
                            <option value="35">Roxas City,Capiz</option>
                            <option value="36">San Carlos,Negros</option>
                            <option value="37">Sibuyan,Romblon</option>
                            <option value="38">Santa Fe, Bantayan Island</option>
                            <option value="39">Surigao</option>
                            <option value="40">Matnog</option>
                            <option value="41">Tagbilaran,Bohol </option>
                            <option value="42">Toledo</option>
                            <option value="43">Tubigon</option>
                            <option value="44">Zamboanga</option>
                            <option value="45">Talibon.Bohol</option>
                        </select>
                        <!-- Select FROM End -->
                    </div>
                    <!-- FirSt Select Form Section End --> 
                    <!-- Second Select Form Section Start -->
                    <div class="row ml-1 mt-1">
                        <!-- Select TO Start -->
                        <div class="input-group-prepend" >
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 95px;height: 50px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 28px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;text-align:center;justify-content:center;">To</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="45">Cebu</option>f
                            <option value="1">Bacolod</option>
                            <option value="2" >BayBay,Leyte</option>
                            <option value="3">Batangas</option>
                            <option value="4">Bogo,Cebu</option>
                            <option value="5">Bato,Leyte</option>
                            <option value="6">Butuan</option>
                            <option value="7">Cagayan de Oro</option>
                            <option value="8">Calapan</option>
                            <option value="9">Poro,Camotes</option>
                            <option value="10">Catiklan</option>
                            <option value="11">Cebu</option>
                            <option value="12">Consuelo,Camotes</option>
                            <option value="13">Danao</option>
                            <option value="14">Dapitan</option>
                            <option value="15">Dapdap</option>
                            <option value="16">Dumaguete</option>
                            <option value="17">Dipolog</option>
                            <option value="18">Dapa,Siargao</option>
                            <option value="19">Estacia</option>
                            <option value="20">Hagnaya</option>
                            <option value="21">Iligan</option>
                            <option value="22">Iloilo</option>
                            <option value="23">Medellin,Cebu</option>
                            <option value="24">Liloan,Southern Leyte</option>
                            <option value="25">Lipata,Siargao</option>
                            <option value="26">Lipata,Culasi</option>
                            <option value="27">Cataingan,Masbate</option>
                            <option value="28">Masbate</option>
                            <option value="29">Manila</option>
                            <option value="30">Ormoc</option>
                            <option value="31">Osamiz</option>
                            <option value="32">Palompon</option>
                            <option value="33">Puerto,Princesa Palawan</option>
                            <option value="34">Puerto Galera</option>
                            <option value="35">Roxas City,Capiz</option>
                            <option value="36">San Carlos,Negros</option>
                            <option value="37">Sibuyan,Romblon</option>
                            <option value="38">Santa Fe, Bantayan Island</option>
                            <option value="39">Surigao</option>
                            <option value="40">Matnog</option>
                            <option value="41">Tagbilaran,Bohol </option>
                            <option value="42">Toledo</option>
                            <option value="43">Tubigon</option>
                            <option value="44">Zamboanga</option>
                            <option selected>Talibon.Bohol</option>
                        </select>
                        <!-- Select TO End -->
                    </div>
                    <!-- Second Select Form Section End -->
                    <!-- Third Select Form Section Start -->
                    <div class="row ml-1">
                        <!-- Select Depart Start -->
                        <div class="input-group-prepend" >
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 85px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 15px;text-align: center;">Depart</label>
                        </div>
                        <div class="form-line jf-required" data-type="control_datetime" id="id_55">
                            <div id="cid_55" class="form-input-wide jf-required" data-layout="half"style="font-size: 28px;color: #131414f8;">
                                <div data-wrapper-react="true"> 
                                    <div style="display:none;">
                                        <span class="form-sub-label-container" style="vertical-align:top;">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="month_55" name="q55_dateofBirth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_month" />
                                            <span class="date-separate" aria-hidden="true"></span>
                                            <label class="form-sub-label" for="month_55" id="sublabel_55_month" style="min-height:13px;" aria-hidden="false">Month </label>
                                        </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="day_55" name="q55_dateofBirth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_day" />
                                            <span class="date-separate" aria-hidden="true"></span>
                                            <label class="form-sub-label" for="day_55" id="sublabel_55_day" style="min-height:13px" aria-hidden="false">Day </label>
                                        </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="year_55" name="q55_dateofBirth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_year" />
                                            <label class="form-sub-label" for="year_55" id="sublabel_55_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                        </span>
                                    </div>
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <input type="date" name="" id="">
                                        <label class="form-sub-label is-empty" for="lite_mode_55"id="sublabel_55_litemode" style="min-height:13px" aria-hidden="false"></label>
                                    </span>
                                </div>
                            </div>
                            <!-- Select Depart End -->
                        </div> 
                        <!-- Input Pasenger Form Start -->
                        <div class="input-group-prepend " >
                            <label class="input-group-text"style="width: 110px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;">Passenger</label>
                        </div>
                        <input type="text" id="first_29" name="q29_fullName[first]" class="form-textbox validate[required] ml-2" data-defaultvalue="" size="10" value="" data-component="first" aria-labelledby="label_29 sublabel_29_first" required="" style="width: 90px; height: 55px;border: 2px solid #f5b917;border-radius: 10px;color: black;text-align: center;font-size: 23px;"/>
                        <!-- Input Passenger Form End -->
                    </div>
                    <!-- Third Select Form Section End -->
                    <!-- Fourth Select Form Section Start -->
                    <div class="row ml-3">
                        <!-- Select Return Start --> 
                        <div class="div1"id="div1">
                            <div class="row">
                                <div class="input-group-prepend" >
                                    <label class="input-group-text" for="inputGroupSelect01" style="width: 85px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 15px;text-align: center;">Return</label>
                                </div>
                                <div class="form-line jf-required" data-type="control_datetime" id="id_55">
                                    <div id="cid_55" class="form-input-wide jf-required" data-layout="half"style="font-size: 28px;color: #131414f8;">
                                        <div data-wrapper-react="true"> 
                                            <div style="display:none;">
                                                <span class="form-sub-label-container" style="vertical-align:top;">
                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="month_55" name="q55_dateofBirth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_month" />
                                                    <span class="date-separate" aria-hidden="true"></span>
                                                    <label class="form-sub-label" for="month_55" id="sublabel_55_month" style="min-height:13px;" aria-hidden="false">Month </label>
                                                </span>
                                                <span class="form-sub-label-container" style="vertical-align:top">
                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="day_55" name="q55_dateofBirth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_day" />
                                                    <span class="date-separate" aria-hidden="true"></span>
                                                    <label class="form-sub-label" for="day_55" id="sublabel_55_day" style="min-height:13px" aria-hidden="false">Day </label>
                                                </span>
                                                <span class="form-sub-label-container" style="vertical-align:top">
                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="year_55" name="q55_dateofBirth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_year" />
                                                    <label class="form-sub-label" for="year_55" id="sublabel_55_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                                </span>
                                            </div>
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                                <input type="date" name="" id="">
                                                <label class="form-sub-label is-empty" for="lite_mode_55"id="sublabel_55_litemode" style="min-height:13px" aria-hidden="false"></label>
                                            </span>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                        </div> 
                        <!-- Select Return End -->

                        <!-- Search Trips Button Start -->
                        <div class="input-group-prepend">
                            <a href="index.html">
                            <span class="btn btn-info btn-lg"id="btnsearch"style="text-align:center;justify-content:center; width: 200px;height: 55px;
                            font-family: Georgia, 'Times New Roman', Times, serif; font-size: 23px;font: bolder;background-color: #0b9afaf8;border: 2px solid #8b08f7f8;border-radius: 10px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i class="fa fa-search"style="margin-left: 0px;"></i>
                                Search Trips
                            </span>
                            </a>
                        </div>
                        <!-- Search Trips Button Start -->
                    </div>
                    <!-- Fourth Select Form Section End -->
                </div>
                <!-- Vehicle TabPanel END -->
            </div>
            <!-- TabPanel List End -->
        </section>    
        <!-- BookShip Section End -->
        
        <!-- scripT for Check & Radio Button <Prefferred Shipping LINES> & <Round/OneWay Trip> START -->
        <script>
            function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
            }
            function show1()
            {
                document.getElementById('div1').style.display ='block';
            }
            function show2(){
                document.getElementById('div1').style.display = 'none';
            }
        </script>
        <script>
            $('.tabheading li').click(function () {
                   var tabid = $(this).attr("rel");
                   $(this).parents('.tabcontainer').find('.active').removeClass('active');
                   $('.tabbody').hide();
                   $('#' + tabid).show();
                   $(this).addClass('active');
           
                   return false;
             });
        </script>
        <script>
            $(".carousel").owlCarousel({
            margin: 20,
            loop: true,
            autoplay: false,
            autoplayTimeout: 2000,
            autoplayHoverPause: false,
            responsive: {
                0:{
                items:1,
                nav: false
                },
                600:{
                items:2,
                nav: false
                },
                1000:{
                items:3,
                nav: false
                }
            }
            });
        </script>
        <!-- scripT for Check & Radio Button <Prefferred Shipping LINES> & <Round/OneWay Trip> End -->

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

    </body>
</html>