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
    <link rel="stylesheet" href="css/default-assets/main.css">
    <style>
        #information-bg {
            background-image: url("img/bg-img/inbg.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 260vh;
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
    <header class="header-area">

        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>
        <!-- Search Form End-->

        <!-- Main Header Start -->
        <div class="main-header-area" id="information-hd">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">

                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->

                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">HOME</a></li>
                                    <li><a href="./contact.html">CONTACT US</a></li>
                                    <li> <a href="./privacy-policy.html">PRIVACY POLICY</a></li>
                                    <li class="border border-white" style="border-radius: 30px;"><a href="#">PASSENGER GUIDLINES</a>
                                        <ul class="dropdown" style="background-color: #169bcf; border-radius: 10px;">
                                            <li><a href="#">- Shipping 1</a></li>
                                            <li><a href="#">- Shipping 2</a></li>
                                            <li><a href="#">- Shipping 3</a></li>
                                            <li><a href="#">- Shipping 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="border border-white" style="border-radius: 30px;"><a href="#">CARGO GUIDLINES</a>
                                        <ul class="dropdown" style="background-color: #169bcf; border-radius: 10px;">
                                            <li><a href="#">- Shipping 1</a></li>
                                            <li><a href="#">- Shipping 2</a></li>
                                            <li><a href="#">- Shipping 3</a></li>
                                            <li><a href="#">- Shipping 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        <!-- Menu End-->
                    </nav>
                    <!-- Classy Menu End -->
                </div>
            </div>
        </div>
        <!-- Main Header Area -->

        <!-- Second Header Area -->
        <div class="container border border-dark" style="background-color: #f1f7f8;">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    Cebu<i class="fa fa-exchange" style="margin-right: 15px;margin-left: 15px;"></i>Talibon<br>
                    <small style="padding-right: 35px;">Cebu</small><small style="padding-left: 35px;">Bohol</small>
                </div>
                <div class="col-sm-2 border text-center">
                    1<br><small>Passanger</small>
                </div>
                <div class="col-lg-2 border text-center">
                    Sat, 22 May 2021<br><small>Departure</small>
                </div>
                <div class="col-lg-2 border text-center">
                    Sat, 22 May 2021<br><small>Return</small>
                </div>
                <div class="col-md-3 ">
                    <li ><a class="fa fa-edit" href="./privacy-policy.html">MODITY ITENERARY</a ></li>
                </div>
            </div>
        </div>
        <!-- Second Header Area End-->
    </header>
    <!--Header Area End-->
    
    
    <section class="sec-main-area">
        <!-- First Section Start -->
        <div class="ftco-section" id="information-bg" style="padding-top: 0px !important;margin-top: 0px;">
            <div class="container">
                <div class="container pt-5 pd-5 mb-3">
                    <i class="fa fa-info-circle text-muted font-weight-bold" style="color: black;font-size: 35px; font-weight:bold;margin-left: 0px; margin-right: 0px;"></i> <span style="font-size: 35px;color: black;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Contact Information</span>
                </div>
                <div class="container bg-info pt-3 pb-2 border border-danger" style="border-radius: 10px;">
                    <h4 class="text-danger">IMPORTANT: </h4><h6 class="pl-4 pr-3"> Your e-ticket will be send to the email address you provide below any announcements or changes to your itinerary will also be send 
                    to this email as well as to the *mobile number provide below. (* Only Phillippine mobile number are supported for now.)</h6>
                </div>
                <div class="container bg-info mt-5 mb-4 pt-2 pb-2 pl-5 border border-white"style="border-radius:10px">
                    <i class="fa fa-info-circle text-muted font-weight-bold text-dark" style="font-size: 20px; font-weight:bold;margin-left: 0px;margin-right: 20px;"></i>Fields with red asterisk (<a class="text-danger fs-3 ">*</a>) are required
                </div>
                <div class="container bg-white border border-success pt-3 pb-5 mb-4" style="border-radius: 10px;">
                    <div id="cid_29" class="form-input-wide jf-required" data-layout="full">
                        <div data-wrapper-react="true" class="extended "> 
                            <div class="row mt-5 ml-2 align-items-center">
                                <div class="col-sm-6"> 
                                    <div class="form-line form-line-column form-col-1" data-type="control_email"      id="id_6">
                                        <label class="required-contact-label align-items-center"> Contact Person <span class="text-danger">*</span></label>
                                        <div id="cid_6" class="form-input-wide" data-layout="half">
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                                <input type="name" id="input_6" name="contact_name" class="form-textbox validate[name]" data-defaultvalue="" style="width:480px;height: 55px;" size="310" value="" data-component="email" aria-labelledby="label_6 sublabel_input_6" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6"> 
                                    <div class="form-line form-line-column form-col-1" data-type="control_email"       id="id_6">
                                        <label class="required-contact-label align-items-center"> Mobile Number <span class="text-danger"> *</span></label>
                                        <div id="cid_6" class="form-input-wide" data-layout="half">
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                                <input type="number" id="input_6" name="contact_number" class="form-textbox validate[number]" data-defaultvalue="" style="width:480px ;height: 55px;" size="310" value="" data-component="email" aria-labelledby="label_6 sublabel_input_6" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 ml-2 align-items-center">
                                <div class="col-sm-6"> 
                                    <div class="form-line form-line-column form-col-1" data-type="control_email"      id="id_6">
                                        <label class="required-contact-label align-items-center"> E-mail Address <span class="text-danger">*</span></label>
                                        <div id="cid_6" class="form-input-wide" data-layout="half">
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                                <input type="email" id="input_6" name="q6_studentEmail6" class="form-textbox validate[Email]" data-defaultvalue="" style="width:480px ;height: 55px;" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6"> 
                                    <div class="form-line form-line-column form-col-1" data-type="control_email"       id="id_6">
                                        <label class="required-contact-label align-items-center"> Confirm E-mail Address <span class="text-danger">*</span></label>
                                        <div id="cid_6" class="form-input-wide" data-layout="half">
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                                <input type="email" id="input_6" name="q6_studentEmail6" class="form-textbox validate[Email]" data-defaultvalue="" style="width:480px ;height: 55px;" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 ml-4">
                            <label class="form-check-label" style="margin: 0; font: 1.3em sans-serif;"><span class="text-danger">*</span> Indicate the following ;</label>
                            <p class="ml-4"style="margin: 0;font: 1.2em sans-serif;">  (1) destination/receiving municipality/city</p>
                            <p class="ml-4"style="margin: 0;font: 1.2em sans-serif;">  (2) if LSI, APOR, OFW</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked style="width: 20px;height: 20px;">
                                <label class="form-check-label ml-3" for="flexCheckChecked" style="padding-top: 3px;font: 1.2em sans-serif;">
                                    Would you like to receive notification about travel promos and advisories in the future?
                                </label>
                            </div>
                    </div>

                </div>
                
                <div class="container mt-5 pt-4 pd-5 mb-3">
                    <h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Passengers Details</h2>
                </div>
                <div class="container bg-info mt-4 mb-4 pt-3 pl-2 pb-3 border border-white"style="border-radius:10px">
                    <a class="text-danger fs-3">*</a>Senior/PWD/Student discount are not available online.
                </div>
                <div class="container bg-white border border-success mt-4 pb-5" style="border-radius: 10px;">
                    <!-- SectionInput Start -->
                    <div class="SectionInput"> 
                        <h2 class="pl-1 pt-5">Passanger 1</h2> 
                        <div class="form-line jf-required" data-type="control_fullname" id="id_29">
                            <label class="form-label form-label-top form-label-extended form-label-auto pl-4 pt-4 fs-5 text" id="label_29" for="first_29">
                                Full Name
                                <span class="form-required">
                                *
                                </span>
                            </label>
                            <div id="cid_29" class="form-input-wide jf-required" data-layout="full">
                                <div data-wrapper-react="true" class="extended "> 
                                <div class="row mt-4">
                                        <span class="form-sub-label-container ml-5" style="vertical-align:top;" data-input-type="first"> 
                                            <input type="text" id="first_29" name="q29_fullName[first]" class="form-textbox validate[required]" data-defaultvalue="" size="10" value="" data-component="first" aria-labelledby="label_29 sublabel_29_first" required="" style="width: 310px; height: 35px;"/><br>
                                            <label class="form-sub-label" for="first_29" id="sublabel_29_first" style="min-height:20px" aria-hidden="false"> First Name </label>
                                        </span>
                                        <span class="form-sub-label-container ml-3" style="vertical-align:top" data-input-type="middle">
                                            <input type="text" id="middle_29" name="q29_fullName[middle]" class="form-textbox" data-defaultvalue="" size="10" value="" data-component="middle" aria-labelledby="label_29 sublabel_29_middle" required="" style= "width: 310px; height: 35px;"/><br>
                                            <label class="form-sub-label" for="middle_29" id="sublabel_29_middle" style="min-height:20px" aria-hidden="false"> Middle Name </label>
                                        </span>
                                        <span class="form-sub-label-container ml-3" style="vertical-align:top" data-input-type="last">
                                            <input type="text" id="last_29" name="q29_fullName[last]" class="form-textbox validate[required]" data-defaultvalue="" size="15" value="" data-component="last" aria-labelledby="label_29 sublabel_29_last" required=""style= "width: 310px; height: 35px;" /><br>
                                            <label class="form-sub-label" for="last_29" id="sublabel_29_last" style="min-height:20px" aria-hidden="false"> Last Name </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-line jf-required pl-5 pt-1" data-type="control_dropdown" id="id_69">
                                <label class="form-label form-label-top form-label-auto pt-3" id="label_69" for="input_69" style="margin-bottom: 1px;">
                                Type
                                <span class="form-required">
                                *
                                </span>
                                </label>
                                <div id="cid_69" class="form-input-wide jf-required" data-layout="half">
                                    <select class="form-dropdown validate[required]" id="input_69" name="q69_gender" style="width:310px" data-component="dropdown" required="">
                                        <option value=""> Please Select </option>
                                        <option value="Female"> Adult </option>
                                        <option value="Male"> Minor </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-line jf-required pl-2 pt-3" data-type="control_datetime" id="id_55">
                                <label class="form-label form-label-top form-label-auto " id="label_55" for="lite_mode_55" style="margin-bottom: 3px;">
                                Date-of Birth
                                <span class="form-required">
                                *
                                </span>
                                </label>
                                <div id="cid_55" class="form-input-wide jf-required" data-layout="half" style="font-size: 20px;">
                                    <div data-wrapper-react="true"> 
                                        <div style="display:none">
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="month_55" name="q55_dateofBirth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_month" />
                                            <span class="date-separate" aria-hidden="true">
                                            </span>
                                            <label class="form-sub-label" for="month_55" id="sublabel_55_month" style="min-height:13px" aria-hidden="false"> Month </label>
                                            </span>
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="day_55" name="q55_dateofBirth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_day" />
                                            <span class="date-separate" aria-hidden="true">
                                            </span>
                                            <label class="form-sub-label" for="day_55" id="sublabel_55_day" style="min-height:13px" aria-hidden="false"> Day </label>
                                            </span>
                                            <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="year_55" name="q55_dateofBirth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_year" />
                                            <label class="form-sub-label" for="year_55" id="sublabel_55_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                            </span>
                                        </div>
                                        <span class="form-sub-label-container" style="vertical-align:top">
                                            <input type="date" name="" id="">
                                            <label class="form-sub-label is-empty" for="lite_mode_55"       id="sublabel_55_litemode" style="min-height:13px" aria-hidden="false">  
                                            </label>
                                        </span>
                                    </div>
                                </div>  
                            </div>
                            <div class="form-line jf-required pl-3" data-type="control_dropdown" id="id_67">
                                <label class="form-label form-label-top form-label-auto pt-3" id="label_67" for="input_67"style="margin-bottom: 1px;">
                                Status
                                <span class="form-required">
                                *
                                </span>
                                </label>
                                <div id="cid_67" class="form-input-wide jf-required" data-layout="half" style="border: 1px solid #333;">
                                    <select class="form-form-dropdown validate[required]" id="input_67" name="q67_status" style="width:410;" data-component="dropdown" required="">
                                        <option value=""> Please Select </option>
                                        <option value="Single"> Single </option>
                                        <option value="Married"> Married </option>
                                        <option value="Complicated"> Complicated </option>
                                        <option value="Widowed"> Widowed </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-line jf-required pl-3" data-type="control_dropdown" id="id_69">
                                <label class="form-label form-label-top form-label-auto pt-3" id="label_69" for="input_69" style="margin-bottom: 1px;">
                                Gender
                                <span class="form-required">
                                *
                                </span>
                                </label>
                                <div id="cid_69" class="form-input-wide jf-required" data-layout="half">
                                    <select class="form-dropdown validate[required]" id="input_69" name="q69_gender" style="width:310px ;height: 37px;" data-component="dropdown" required="">
                                        <option value=""> Please Select </option>
                                        <option value="Female"> Female </option>
                                        <option value="Male"> Male </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-line jf-required pl-3" data-type="control_textbox" id="id_72">
                                <label class="form-label form-label-top form-label-auto pt-3" id="label_72" for="input_72">
                                Nationality
                                <span class="form-required">
                                *
                                </span>
                                </label>
                                <div id="cid_72" class="form-input-wide jf-required" data-layout="half">
                                <input type="text" id="input_72" name="q72_nationality72" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:250px; height: 37px;" size="310" value="" data-component="textbox" aria-labelledby="label_72" required="">  
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col">
                                <button type="button" class="btn btn-primary btn-lg pushable mt-3">
                                    <span class="front">
                                    <i class="bi bi-book-half"></i>
                                        Back
                                    </span>
                                </button>
                            </div>
                            <div class="col align-items-center">
                                <button type="button" class="btn btn-primary btn-lg pushable mt-3">
                                    <span class="front">
                                        <i class="bi bi-book-half"></i>
                                        Submit
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- SectionInput End -->
                </div>
            </div>
        </div>
        <!-- First Section End -->
    </section>
    <!-- Header Area End -->

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
