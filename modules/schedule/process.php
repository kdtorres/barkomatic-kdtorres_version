<?php
require "../../resources/config.php";
require "../library/PHPMailer/src/Exception.php";
require "../library/PHPMailer/src/PHPMailer.php";
require "../library/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['action']) && $_POST['action'] == 'search_sched_form') {
    search_available_schedule($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'srch_sched_ftr_form') {
    session_start();
    if(isset($_SESSION['first_name']) && $_SESSION['first_name'] != "") {
        go_schedule($con);
    } else {
        echo '<p class="text-center text-danger">Sorry, you need to create an account first and sign in as passenger.</p>';
    }
}

if(isset($_POST['action']) && $_POST['action'] == 'smmry_dptr_slctd_sched_form') {
    session_start();
    reservation($con);
}

//* search available schedule
function search_available_schedule($c) {
    $srch_ss = $_POST['srch_ship_sched'];
    $sslf = $_POST['srch_sched_loc_from'];
    $sslt = $_POST['srch_sched_loc_to'];
    $ssld = date('Y-m-d', strtotime($_POST['srch_sched_loc_depart']));
    $sql_slct = "SELECT 
                tbl_ship_sd.ship_name,
                tbl_ship_sd.ship_logo,
                tbl_ship_sched.depart_date,
                tbl_ship_sched.depart_time,
                tbl_ship_sched.location_from,
                tbl_ship_sched.port_from,
                tbl_ship_sched.location_to,
                tbl_ship_sched.port_to,
                tbl_ship_acctyp.accomodation_name,
                tbl_ship_acctyp.price
                FROM tbl_ship_detail tbl_ship_sd
                JOIN tbl_ship_schedule tbl_ship_sched ON tbl_ship_sd.id = tbl_ship_sched.id
                JOIN tbl_ship_has_accomodation_type tbl_ship_acctyp ON tbl_ship_sched.id = tbl_ship_acctyp.id
                WHERE tbl_ship_sd.ship_name=? AND tbl_ship_sched.depart_date=? AND tbl_ship_sched.location_from=? AND tbl_ship_sched.location_to=?";
    $stmt = $c->prepare($sql_slct);
    $stmt->bind_param("ssss", $srch_ss,$ssld,$sslf,$sslt);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
    if(!empty($row)) {
        $output = '
                <div class="row bg-light pl-4 border rounded-fill m-auto">
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <input type="text" name="srch_sched_time" value="'.$row["depart_time"].'" class="form-control border-top-0 rounded-0 text-center"  readonly>
                        </div>
                        <div class="form-group">
                            <select name="srch_sched_accomm_type" id="slct_accomm_type" class="form-control">
                                <option value="'.$row["accomodation_name"].'">'.$row["accomodation_name"].'</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="form-group pt-2 text-center">
                            <img src="data:image/jpeg;base64,'.base64_encode($row["ship_logo"]).'" alt="" width="70">
                            <input type="text" name="srch_sched_ship_nm" value="'.$row["ship_name"].'" class="bg-light border-0" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" name="srch_sched_price_display" value="₱ '.$row["price"].'" class="form-control border-0 p-0 bg-light text-center" readonly>
                            <input type="hidden" name="srch_sched_price" value="'.$row["price"].'" class="form-control border-0 p-0 bg-light text-center" readonly>
                            <small>Ticket Price</small>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" id="srch_sched_filter_btn" value="GO" class="btn btn-success">
                        </div>
                    </div>
                </div>';
        echo $output;
    } else {
        echo '<p class="text-danger text-center lead">No Available Schedules!</p>';
    }
    $stmt->close();
}

//* summary departure
function go_schedule($c) {
    $srch_st = $_POST['srch_sched_time'];
    $srch_sat = $_POST['srch_sched_accomm_type'];
    $srch_ssnm = $_POST['srch_sched_ship_nm'];
    //$srch_sp = $_POST['srch_sched_price'];
    $sql_srch_slct = "SELECT 
                    tbl_sd.ship_logo,
                    tbl_sd.ship_name,
                    tbl_sched.location_from,
                    tbl_sched.location_to,
                    tbl_sched.depart_date,
                    tbl_sched.depart_time,
                    tbl_acctyp.accomodation_name,
                    tbl_acctyp.seat_type,
                    tbl_acctyp.aircon,
                    tbl_sched.port_from,
                    tbl_sched.port_to,
                    tbl_acctyp.price
                    FROM tbl_ship_detail tbl_sd
                    JOIN tbl_ship_schedule tbl_sched ON tbl_sd.id = tbl_sched.id
                    JOIN tbl_ship_has_accomodation_type tbl_acctyp ON tbl_sched.id = tbl_acctyp.id
                    WHERE tbl_sched.depart_time=? AND tbl_acctyp.accomodation_name=? AND tbl_sd.ship_name=?";
    $stmt = $c->prepare($sql_srch_slct);
    $stmt->bind_param('sss', $srch_st,$srch_sat,$srch_ssnm);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
    $output = '
    <hr class="mb-0">
    <div class="section bg-light pl-5 pr-5 pb-5 pt-3">
        <div class="header_title text-center"><h3 class="">Summary</h3></div>
        <hr style="border: 1px dotted #eee;">
        <div id="smmry_dptr">
            <div class="form-group">
                <img src="data:image/jpeg;base64,'.base64_encode($row["ship_logo"]).'" alt="LOGO" width="70"> <span>'.$row["ship_name"].'</span>
                <input type="hidden" name="summry_dptr_shp_name" value="'.$row["ship_name"].'">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group text-center">
                        <p>
                            <span>LOCATION</span><br>
                            <span>'.$row["location_from"].'</span>
                            <span><i class="fa fa-long-arrow-right ml-2 mr-2"></i></span>
                            <span>'.$row["location_to"].'</span>
                        </p>
                        <input type="hidden" name="summry_dptr_loc_from" value="'.$row["location_from"].'">
                        <input type="hidden" name="summry_dptr_loc_to" value="'.$row["location_to"].'">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group text-center">
                        <p>DEPARTURE DATE<br><span>'.$row["depart_date"].'</span> <span>'.$row["depart_time"].'</span></p>
                        <input type="hidden" name="summry_dptr_date" value="'.$row["depart_date"].'">
                        <input type="hidden" name="summry_dptr_time" value="'.$row["depart_time"].'">
                    </div>
                </div>
            </div>
            <hr style="border: 1px dotted #eee;">
            <div class="row text-center">
                <div class="col-4">
                    <div class="form-group">
                        <p>ACCOMODATION<br><span>'.$row["accomodation_name"].'</span></p>
                        <input type="hidden" name="summry_dptr_accom_name" value="'.$row["accomodation_name"].'">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <p>SEAT TYPE<br><span>'.$row["seat_type"].'</span></p>
                        <input type="hidden" name="summry_dptr_sttyp" value="'.$row["seat_type"].'">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <p>AIRCON<br><span>'.$row["aircon"].'</span></p>
                        <input type="hidden" name="summry_dptr_arcn" value="'.$row["aircon"].'">
                    </div>
                </div>
            </div>
            <hr style="border: 1px dotted #eee;">
            <div class="form-group">
                <p>
                    PORT<br><span>'.$row["port_from"].'</span>
                    <span><i class="fa fa-long-arrow-right ml-2 mr-2"></i></span>
                    <span>'.$row["port_to"].'</span>
                </p>
                <input type="hidden" name="summry_dptr_port_from" value="'.$row["port_from"].'">
                <input type="hidden" name="summry_dptr_port_to" value="'.$row["port_to"].'">
            </div>
            <hr style="border: 1px dotted #eee;">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <p>
                            PRICE<br><span>₱ '.$row["price"].'</span>
                        </p>
                        <input type="hidden" name="summry_dptr_price" value="'.$row["price"].'">
                    </div>
                </div>
                <div class="col-6 text-right">
                    <div class="form-group">
                        <input type="submit" name="summry_dptr_btn" id="summry_dptr_btn" class="btn btn-success rounded-0" value="RESERVE">
                    </div>
                </div>
            </div>
            <hr style="border: 1px dotted #eee;" class="mt-0">
        </div>
    </div>';
    echo $output;
    $stmt->close();
}

//* reservation
function reservation($c) {
    $sdsn = $_POST['summry_dptr_shp_name'];
    $sdlf = $_POST['summry_dptr_loc_from'];
    $sdlt = $_POST['summry_dptr_loc_to'];
    $sdd = date('Y-m-d',strtotime($_POST['summry_dptr_date']));
    $sdt = $_POST['summry_dptr_time'];
    $sdan = $_POST['summry_dptr_accom_name'];
    $pssgr_name = $_SESSION['first_name']." ".$_SESSION['lastname']; 

    $success = 0;
    $rsrvtn_num = rand(1000000,9999999);
    $rsrvtn_date = date('Y-m-d');
    $exp = date('Y-m-d',strtotime($rsrvtn_date. '+2 days'));
    
    $sql_rsrtn = "INSERT INTO tbl_passenger_reservation (reservation_number,ship_name,passenger_name,location_from,location_to,depart_date,depart_time,accomodation,reservation_date,expiration)
                 VALUES (?,?,?,?,?,?,?,?,?,?)";

    $stmt = $c->prepare($sql_rsrtn);
    $stmt->bind_param('ssssssssss',$rsrvtn_num,$sdsn,$pssgr_name,$sdlf,$sdlt,$sdd,$sdt,$sdan,$rsrvtn_date,$exp);
    
    if($stmt->execute()) {
        $stmt->close();
        $success = 1;
    }
    if($success == 1) {
        reservation_confirmation($c,$sdsn);
    }
}

//* send email reservation confirmation
function reservation_confirmation($c,$sdsn) {
    $sql_rsrvtn = "SELECT * FROM tbl_passenger_reservation";
    $stmt = $c->prepare($sql_rsrvtn);
    $stmt->execute();
    $stmt->store_result();
    $stmt->fetch();
    $num = $stmt->num_rows();
    if($num > 0) {
        $stmt->close();
        $sql_em = "SELECT 
                    tbl_sd.email,
                    tbl_pr.ship_name,
                    tbl_pr.expiration
                    FROM tbl_ship_detail tbl_sd
                    JOIN tbl_passenger_reservation tbl_pr ON tbl_sd.id = tbl_pr.id
                    WHERE tbl_sd.ship_name=?";
        $s = $c->prepare($sql_em);
        $s->bind_param('s', $sdsn);
        $s->execute();
        $result = $s->get_result();
        $row = $result->fetch_array();

        if(!empty($row)) {
            $ship_name = $row['ship_name'];
            $ship_email = $row['email'];
            $exp = $row['expiration'];
            $pssngr_fname = $_SESSION['first_name'];

            $mail = new PHPMailer(true);
            try {
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->Host = 'smtp.gmail.com';
                $mail->Username = 'barkomatic2021@gmail.com';
                $mail->Password = 'kimZ_123';
                $mail->SMTPSecure = 'TLS';
                $mail->Port = 587;

                $mail->setFrom($ship_email, 'Reservation');
                $mail->addAddress($_SESSION['email']);

                $mail->isHTML(true);
                $mail->Subject = 'Reservation Confirmation';
                $mail->Body = "
                <!DOCTYPE html>
                <head>
                <style>
                    body {
                        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                        }
                </style>
                </head>
                <body>
                    <div class='container m-auto'>
                        <div class='row'>
                            <div class='col-sm-12'>
                                <h4>$ship_name</h4><br>
                                <p>Hello $pssngr_fname, Thank you for making your reservation in our shipping line. <br>Your <b>Payment</b> will be handled in the ticket office.</p>
                                <p>Your ticket reservation is valid until: <b>$exp</b></p>
                                <p>If you find it necessary to cancel or change plans, please inform us by email <span style='color:#007bff;font-weight:700;'>$ship_email<span></p>
                                <br><br>
                                <p>Again, thank you for choosing us. We look forward to having you as our guest.</p>
                                <p>Best regards,<br><span>Reservation Office</span></p>
                            </div>
                        </div>
                    </div>
                </body>
                </html>";
                $mail->send();
                echo "Your reservation is submitted, In a while you will recieve an email confirmation for your reservation.";
            }catch(Exception $e){
                //echo "Reset password link could not be sent. Mailer Error: {$mail->ErrorInfo}";
                echo 'Could not sent the reservation confirmation.';
            }
        } else {
            echo "row is empty! - 2";
        }
    } else {
        echo "row is empty! - 1";
    }
}