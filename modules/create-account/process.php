<?php
require "../../resources/config.php";

//* post passenger & ship owner form
if(isset($_POST['action']) && $_POST['action'] == 'passenger_form') {
    passenger_register($con);
} 
if(isset($_POST['action']) && $_POST['action'] == 'shipping_form') {
    ship_register($con);
}

//* passenger register
function passenger_register($con) {
    $fname = check_input($_POST['fname']);
    $lname = check_input($_POST['lname']);
    $gender = $_POST['gender'];
    $dob = date('Y-m-d',strtotime($_POST['dob']));
    $email = check_input($_POST['email']);
    $uname = check_input($_POST['uname']);
    $pass = sha1($_POST['password']);
    $cpass = sha1($_POST['confirm_password']);
    $timestamp = date("Y-m-d H:i:s");
    if($pass != $cpass){
        echo 'Password did not match!';
        exit();
    }else{
        $q1 = $con->prepare("SELECT email FROM tbl_passenger_detail WHERE email=?");
        $q1->bind_param('s', $email);
        $q1->execute();
        $result = $q1->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if($row['email'] == $email){
            echo 'The email is already exist! Please try another.';
        }else{
            $q2 = $con->prepare("INSERT INTO tbl_passenger_detail (first_name,lastname,gender,dob,email) VALUES (?,?,?,?,?)");
            $q2->bind_param('sssss', $fname,$lname,$gender,$dob,$email);
            $q2->execute();

            $q3 = $con->prepare("INSERT INTO tbl_passenger_account (username,password) VALUES (?,?)");
            $q3->bind_param('ss', $uname,$pass);
            $q3->execute();

            $q4 = $con->prepare("INSERT INTO tbl_passenger_reset_password (token_expire) VALUES (?)");
            $q4->bind_param('s', $timestamp);
            $q4->execute();
            echo 'Registered Successfully.';
            $q1->close();
            $q2->close();
            $q3->close();
            $q4->close();
        }
    }
}
//* ship owner register
function ship_register($con) {
    $scn = check_input($_POST['scn']);
    $email = check_input($_POST['email-shipping']);
    $uname = check_input($_POST['uname-shipping']);
    $pass = check_input(sha1($_POST['pass']));
    $cpass = check_input(sha1($_POST['cpass']));
    $timestamp = date("Y-m-d H:i:s");

    if($pass != $cpass){
        echo 'Password did not match!';
        exit();
    }else{
        $q1 = $con->prepare("SELECT email FROM tbl_ship_detail WHERE email=?");
        $q1->bind_param('s',$email);
        $q1->execute();
        $res = $q1->get_result();
        $r = $res->fetch_array(MYSQLI_ASSOC);

        if($r['email'] == $scn){
            echo 'The email is already exist! Please try another.';
        } else {
            $q2 = $con->prepare("INSERT INTO tbl_ship_detail (ship_name,email) VALUES (?,?)");
            $q2->bind_param('ss', $scn,$email);
            $q2->execute();

            $q3 = $con->prepare("INSERT INTO tbl_ship_account (username,password) VALUES (?,?)");
            $q3->bind_param('ss', $uname,$pass);
            $q3->execute();

            $q4 = $con->prepare("INSERT INTO tbl_ship_reset_password (token_expire) VALUES (?)");
            $q4->bind_param('s', $timestamp);
            $q4->execute();
            
            echo 'Registered Successfully.';
            $q1->close();
            $q2->close();
            $q3->close();
            $q4->close();
        }
    }
}

//* sanitize inputted
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}