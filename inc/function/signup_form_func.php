<?php include 'config/dbconnection.php'; ?>
<?php 
    // global variable for error messages
    $fnameErrMsg = '';
    $lnameErrMsg = '';
    $mnameErrMsg = '';
    $ageErrMsg = '';
    $sexErrMsg = '';
    $emailErrMsg = '';
    $unameErrMsg = '';
    $psswdErrMsg = '';
    $confirm_psswdErrMsg = '';
    $password_match = '';
    // global variable for form value
    $fnamePostVal = '';
    $lnamePostVal = '';
    $mnamePostVal = '';
    $agePostVal = '';
    $sexPostVal = '';
    $emailPostVal = '';
    $unamePostVal = '';
    $psswdPostVal = '';
    $confirm_psswdPostVal = '';
    // global variable for removeSpecialChars function
    // $name = '';
    // $email = '';
    // $destination = '';
    // $nov = '';
    // global variable for tracing
    $a = false;
    $b = false;
    $c = false;
    $d = false;
    $x = false;
    $y = false;
    $z = false;
    $l = false;
    $h = false; 
    $t = false;
    $password = false;
    $a_t = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['fname'])) {
            $fnameErrMsg = 'Firstname is required!';
        }else{
            $a = true;
        }
        if(empty($_POST['lname'])) {
            $lnameErrMsg = 'Lastname is required!';
        }else{
            $b = true;
        }
        if(empty($_POST['mname'])) {
            $mnameErrMsg = 'Middlename is required!';
        }else{
            $c = true;
        }
        if(empty($_POST['age'])) {
            $ageErrMsg = 'Age is required!';
        }else{
            $d = true;
        }
        if(empty($_POST['sex'])) {
            $sexErrMsg = 'Gender is required!';
        }else{
            $x = true;
        }
        if(empty($_POST['email'])) {
            $emailErrMsg = 'Email is required!';
        }else{
            $y = true;
        }
        if(empty($_POST['uname'])) {
            $unameErrMsg = 'Username is required!';
        }else{
            $z = true;
        }
        if(empty($_POST['password'])) {
            $psswdErrMsg = 'Password is required!';
        }else{
            $l = true;
        }
        if(empty($_POST['confirm_password'])) {
            $confirm_psswdErrMsg = 'Confirm password is required!';
        }else{
            $h = true;
        }
        if($l == true && $h == true) {
            $p_val = trim($_POST['password']);
            $c_val = trim($_POST['confirm_password']);
            if($p_val == $c_val) {
                $password = true;
            }else {
                $password_match = 'Password does not match!';
            }
        }
        if($a == true && $b == true && $c == true && $d == true && $x == true && $y == true && $z == true && $password == true) {
            registerForm($conn);
        }else {
            $fnamePostVal = trim($_POST['fname']);
            $lnamePostVal = trim($_POST['lname']);
            $mnamePostVal = trim($_POST['mname']);
            $agePostVal = trim($_POST['age']);
            $sexPostVal = trim($_POST['sex']);
            $emailPostVal = trim($_POST['email']);
            $unamePostVal = trim($_POST['uname']);
            $psswdPostVal = trim($_POST['password']);
            $confirm_psswdPostVal = trim($_POST['confirm_password']);
        }
    }
    // function removeSpecialChars($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
    function registerForm($conn) {
        $fnamePostVal = trim($_POST['fname']);
        $lnamePostVal = trim($_POST['lname']);
        $mnamePostVal = trim($_POST['mname']);
        $agePostVal = trim($_POST['age']);
        $sexPostVal = trim($_POST['sex']);
        $emailPostVal = trim($_POST['email']);
        $unamePostVal = trim($_POST['uname']);
        $psswdPostVal = trim($_POST['password']);
        $sql_insert = "INSERT INTO Customer_accounts (Firstname, Lastname, Middlename, Age, Sex, Email, Username, Password) VALUES (?,?,?,?,?,?,?,?)";
        if($stmt = mysqli_prepare($conn, $sql_insert)) {
            mysqli_stmt_bind_param($stmt, 'ssssssss', $fnamePostVal, $lnamePostVal, $mnamePostVal, $agePostVal, $sexPostVal, $emailPostVal, $unamePostVal, $psswdPostVal);
            if(mysqli_stmt_execute($stmt)) {
                echo '
                    <script type="text/javascript"> 
                        alert("Registered successfully.");
                        setTimeout(function() {
                            window.location.replace("http://localhost/vg-shipping-lines/signin.php");
                        }, 700);
                    </script>
                ';
            }
        }else {
            echo 'Something went wrong!' . mysqli_error($sql_insert);
            $fnamePostVal = trim($_POST['fname']);
            $lnamePostVal = trim($_POST['lname']);
            $mnamePostVal = trim($_POST['mname']);
            $agePostVal = trim($_POST['age']);
            $sexPostVal = trim($_POST['sex']);
            $emailPostVal = trim($_POST['email']);
            $unamePostVal = trim($_POST['uname']);
            $psswdPostVal = trim($_POST['password']);
        }
    }
?>