<?php 
require "../resources/config.php";
require "../resources/library/PHPMailer/src/Exception.php";
require "../resources/library/PHPMailer/src/PHPMailer.php";
require "../resources/library/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["action"]) && $_POST["action"] == "rl_create_acc_form") {
    create_account_assign_role($con);
}
if(isset($_POST["action"]) && $_POST["action"] == "total_number_of_staff") {
    session_start();
    total_number_of_staff($con);
}
if(isset($_POST["action"]) && $_POST["action"] == "summ_staff_data") {
    session_start();
    summ_staff_data($con);
}
if(isset($_POST["action"]) && $_POST["action"] == "all_staff_data") {
    session_start();
    all_staff_data($con);
}
if(isset($_POST["action"]) && $_POST["action"] == "active_reservation_data") {
    session_start();
    active_reservation($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'fetch_reservation_list') {
    session_start();
    reservation_data($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'fetch_summ_reservation') {
    session_start();
    summ_reservation_data($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'update_reservation_status') {
    session_start();
    update_reservation_status($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'mail_reservation_status') {
    session_start();
    mail_reservation_status($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'edit_assigned_role') {
    session_start();
    edit_assigned_role($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'assgn_edit_id_form') {
    assign_edit_id();
}
if(isset($_POST['action']) && $_POST['action'] == 'delete_assigned_role') {
    session_start();
    delete_assigned_role($con);
}

//* update reservation status
function update_reservation_status($c) {
    $curr_date = date('Y-m-d');
    $stmt = $c->prepare("SELECT * FROM tbl_passenger_reservation WHERE ship_name=?");
    $stmt->bind_param('s', $_SESSION['ship_name']);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) { 
        $exp_date = date('Y-m-d', strtotime($row['expiration']));
        if($curr_date >= $exp_date) {
            $upt = $c->prepare("UPDATE tbl_passenger_reservation SET status='Expired'");
            $upt->execute();
            $upt->close();
            echo "UPDATED!";
        }
    }
    $stmt->close();
}

//* send mail reservation status
function mail_reservation_status($c) {
    $ship_name = $_SESSION['ship_name'];
    $sql_slct = "SELECT
                tbl_pd.email,
                tbl_pr.passenger_name,
                tbl_pr.expiration
                FROM tbl_passenger_detail tbl_pd
                INNER JOIN tbl_passenger_reservation tbl_pr ON tbl_pd.id = tbl_pr.id
                WHERE tbl_pr.ship_name=? AND status='Expired'";
    $stmt = $c->prepare($sql_slct);
    $stmt->bind_param('s', $ship_name);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $exp = $row['expiration'];
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

                $mail->setFrom('barkomatic2021@gmail.com', 'Barkomatic Support');
                $mail->addAddress($row['email']);

                $mail->isHTML(true);
                $mail->Subject = 'Reservation Expired ';
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
                        <div class='row m-auto'>
                            <div class='col-sm-12'>
                                <p>Good Day Kim,</p>
                                <p>This is to inform you that your Ticket Reservation in <b>$ship_name</b> has been expired <b>$exp</b>.</p>
                            </div>
                        </div>
                    </div>
                </body>
                </html>";
                $mail->send();
                echo "Mail reservation expired status sent!";
            }catch(Exception $e){
                //echo "Reset password link could not be sent. Mailer Error: {$mail->ErrorInfo}";
                echo 'Could not mail reservation expired status!';
            }
    }
    $stmt->close();
}

//* reservation details
function reservation_data($c) {
    $stmt = $c->prepare("SELECT * FROM tbl_passenger_reservation WHERE ship_name=?");
    $stmt->bind_param('s', $_SESSION['ship_name']);
    $stmt->execute();
    $result = $stmt->get_result();
    $output = '
        <table class="table table-bordered table-sm mb-0">
            <thead>
                <tr>
                    <th>Reservation No.</th>
                    <th>Passenger Name</th>
                    <th>Route</th>
                    <th>Date/Time</th>
                    <th>Accomodation</th>
                    <th>Reservation Date</th>
                    <th>Expiration</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="port-location-data-content">';
    while ($row = $result->fetch_assoc()) {
        $output .= '
            <tr>
                <td>'.$row["reservation_number"].'</td>
                <td>'.$row["passenger_name"].'</td>
                <td>'.$row["location_from"].' to '.$row["location_to"].'</td>
                <td>'.$row["depart_date"].' '.$row["depart_time"].'</td>
                <td>'.$row["accomodation"].'</td>
                <td>'.$row["reservation_date"].'</td>
                <td>'.$row["expiration"].'</td>
                <td>'.$row["status"].'</td>
            </tr>';
    }
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
}

//* summary reservation list in dashboard landing page
function summ_reservation_data($c) {
    $stmt = $c->prepare("SELECT * FROM tbl_passenger_reservation WHERE ship_name=?");
    $stmt->bind_param('s', $_SESSION['ship_name']);
    $stmt->execute();
    $result = $stmt->get_result();
    $output = '
        <table class="table table-bordered table-sm mb-0">
            <thead>
                <tr>
                    <th>Reservation No.</th>
                    <th>Passenger Name</th>
                    <th>Route</th>
                    <th>Date/Time</th>
                    <th>Accomodation</th>
                    <th>Reservation Date</th>
                    <th>Expiration</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="port-location-data-content">';
    while ($row = $result->fetch_assoc()) {
        $output .= '
            <tr>
                <td>'.$row["reservation_number"].'</td>
                <td>'.$row["passenger_name"].'</td>
                <td>'.$row["location_from"].' to '.$row["location_to"].'</td>
                <td>'.$row["depart_date"].' '.$row["depart_time"].'</td>
                <td>'.$row["accomodation"].'</td>
                <td>'.$row["reservation_date"].'</td>
                <td>'.$row["expiration"].'</td>
                <td>'.$row["status"].'</td>
            </tr>';
    }
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
}

//* all staff fetch data
function all_staff_data($c) {
    $sql_slct = "SELECT 
                tbl_stfd.id,
                tbl_stfd.name,
                tbl_stfd.email,
                tbl_stfa.username,
                tbl_stfa.password
                FROM tbl_staff_detail tbl_stfd
                INNER JOIN tbl_staff_account tbl_stfa 
                ON tbl_stfd.id = tbl_stfa.id WHERE tbl_stfd.ship_reside=?";
     $stmt = $c->prepare($sql_slct);
     $stmt->bind_param('s',$_SESSION['ship_name']);
     $stmt->execute();
     $result = $stmt->get_result();
    $output = '
    <table class="table table-bordered m-0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="port-location-data-content">';
    while($row = $result->fetch_assoc()) {
        $output .= '
        <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['password'].'</td>
            <td class="text-center">
                <button type="button" name="edit_role_btn" class="button small green update_role_btn" id="'.$row["id"].'" data-toggle="modal" data-target="#exampleModal">
                    <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button type="button" name="rl_btn_delete" class="button small red delete_role_btn" id="'.$row["id"].'">
                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
            </td>
        <tr>';
    } 
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
    $stmt->close();
}

//*edit assigned id
function assign_edit_id() {
    if(session_start()) {
        $edit_id = $_POST['edit_role_id'];
        $_SESSION['edit_role_id'] = $edit_id;
        echo "Assigned id for edit! " . $edit_id;
    }else{
        echo "session for edit id was not set!";
    }
}
//*delete assigned id
function delete_assigned_role($c) {
    $delete_id = $_POST['delete_role_id'];
    $ship_name = $_SESSION['ship_name'];
    
    $sql_dlt = "DELETE tbl_staff_account,tbl_staff_detail FROM tbl_staff_detail 
                INNER JOIN tbl_staff_account ON tbl_staff_detail.id = tbl_staff_account.id
                WHERE tbl_staff_detail.id=? AND tbl_staff_detail.ship_reside=?";

    $stmt = $c->prepare($sql_dlt);
    $stmt->bind_param('is',$delete_id,$ship_name);
    $stmt->execute();
    $stmt->close();
    echo "Deleted Successfully!";
}
//* edit assigned role 
function edit_assigned_role($c) {
    if(isset($_SESSION['edit_role_id']) && $_SESSION['edit_role_id'] != '') {
        $ship_name = $_SESSION['ship_name'];
        $edit_role_id = $_SESSION['edit_role_id']; 
        $edit_role_name = check_input($_POST['edit_role_name']);
        $edit_role_email = check_input($_POST['edit_role_email']);
        $edit_role_uname = check_input($_POST['edit_role_uname']);
        $edit_role_psswd = sha1($_POST['edit_role_psswd']);

        $stmt_slct = $c->prepare("SELECT * FROM tbl_staff_detail WHERE email=?");
        $stmt_slct->bind_param('s', $edit_role_email);
        $stmt_slct->execute();
        $result = $stmt_slct->fetch();
        $stmt_slct->close();

        if($result != NULL) {
            echo 'The email is already exist.';
        }else{
            $sql_updt = "UPDATE tbl_staff_detail tbl_sd 
                    INNER JOIN tbl_staff_account tbl_sa ON tbl_sd.id=tbl_sa.id
                    SET tbl_sd.name=?,tbl_sd.email=?,tbl_sa.username=?,tbl_sa.password=?
                    WHERE tbl_sd.id=? AND tbl_sd.ship_reside=?";

            $stmt = $c->prepare($sql_updt);
            $stmt->bind_param('ssssis',$edit_role_name,$edit_role_email,$edit_role_uname,$edit_role_psswd,$edit_role_id,$ship_name);
            $stmt->execute();
            $stmt->close();
            unset($_SESSION['edit_role_id']);
            echo "Updated successfully!";
        }
    }else{
        echo "session edit id is empty!";
    }
}

//* summary staff fetch data
function summ_staff_data($c) {
    $sql_slct = "SELECT 
                tbl_stfd.id,
                tbl_stfd.name,
                tbl_stfd.email,
                tbl_stfa.username,
                tbl_stfa.password
                FROM tbl_staff_detail tbl_stfd
                JOIN tbl_staff_account tbl_stfa 
                ON tbl_stfd.id = tbl_stfa.id WHERE tbl_stfd.ship_reside=? LIMIT 3";
     $stmt = $c->prepare($sql_slct);
     $stmt->bind_param('s',$_SESSION['ship_name']);
     $stmt->execute();
     $result = $stmt->get_result();
    $output = '
    <table class="table table-bordered m-0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody id="port-location-data-content">';
    while($row = $result->fetch_assoc()) {
        $output .= '
        <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['password'].'</td>
        <tr>';
    } 
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
    $stmt->close();
}

//* staff number fetch data 
function total_number_of_staff($c) {
    $counter = 0;
    $sql_slct = "SELECT 
                * FROM tbl_staff_account tbl_sa
                INNER JOIN tbl_staff_detail tbl_sd ON tbl_sa.id = tbl_sd.id
                WHERE tbl_sd.ship_reside=?";
    $stmt = $c->prepare($sql_slct);
    $stmt->bind_param('s', $_SESSION['ship_name']);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $counter++;
    }
    $output = '
    <div class="flex items-center justify-between">
        <div class="widget-label ">
            <h3>Staff</h3>
            <h1>'.$counter.'</h1>
            </div>
            <span class="icon widget-icon text-red-500 "><i class="mdi mdi-account-check mdi-48px "></i></span>
        </div>
    </div>';
    echo $output;
    $stmt->close();
}

// total num of active reservation fetch
function active_reservation($c) {
    $counter = 0;
    $sql_slct = "SELECT * FROM tbl_passenger_reservation WHERE ship_name=?";
    $stmt = $c->prepare($sql_slct);
    $stmt->bind_param('s', $_SESSION['ship_name']);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $counter++;
    }
    $output = '
    <div class="flex items-center justify-between">
        <div class="widget-label">
            <h3>Active Reservation</h3>
            <h1>'.$counter.'</h1>
        </div>
        <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
    </div>';
    echo $output;
    $stmt->close();
}

//* create account - assign role
function create_account_assign_role($con) {
    $ship_comp = check_input($_POST['ship_comp']);
    $name = check_input($_POST['rl_name']);
    $email = check_input($_POST['rl_email']);
    $uname = check_input($_POST['rl_username']);
    $pass = check_input(sha1($_POST['rl_password']));
    $timestamp = date("Y-m-d H:i:s");
    
    $stmt_slct = $con->prepare("SELECT * FROM tbl_staff_detail WHERE email=?");
    $stmt_slct->bind_param('s', $email);
    $stmt_slct->execute();
    $result = $stmt_slct->fetch();
    $stmt_slct->close();

    if($result != NULL){
        echo 'The email is already registered!';
    } else {
        $stmt_insrt_sd = $con->prepare("INSERT INTO tbl_staff_detail (name,email,ship_reside) VALUES (?,?,?)");
        $stmt_insrt_sd->bind_param('sss', $name,$email,$ship_comp);
        $stmt_insrt_sd->execute();
        $stmt_insrt_sd->close();

        $stmt_insrt_sa = $con->prepare("INSERT INTO tbl_staff_account (username,password) VALUES (?,?)");
        $stmt_insrt_sa->bind_param('ss', $uname,$pass);
        $stmt_insrt_sa->execute();
        $stmt_insrt_sa->close();

        $stmt_insrt_rp = $con->prepare("INSERT INTO tbl_staff_reset_password (token_expire) VALUES (?)");
        $stmt_insrt_rp->bind_param('s', $timestamp);
        $stmt_insrt_rp->execute();
        $stmt_insrt_rp->close();
        echo 'Successfully created an account.';
    }
}

//* sanitize data before saving to database
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
