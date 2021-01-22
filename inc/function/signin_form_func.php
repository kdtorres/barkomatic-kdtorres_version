<?php include 'config/dbconnection.php'; ?>
<?php
    // global variable for error messages
    $unameErrMsg = '';
    $psswdErrMsg = '';
    $psswdInvalidErrmsg = '';
    // global variable for form value
    $unamePostVal = '';
    $psswdPostVal = '';
    // Session global 
    $_SESSION['customer_firstname'] = '';
    $_SESSION['customer_lastname'] = '';
    $_SESSION['customer_age'] = '';
    $_SESSION['customer_sex'] = '';
    $_SESSION['customer_email'] = '';
    if(isset($_POST['SignIn'])) {
        if(empty($_POST['uname'])) {
            $unameErrMsg = 'Username is required!';
        }else{
            $x = true;
        }
        if(empty($_POST['password'])) {
            $psswdErrMsg = 'Password is required!';
        }else{
            $y = true;
        }
        if($x == true && $y == true) {
            signInAuth($conn,$unamePostVal,$psswdPostVal,$unameErrMsg,$psswdErrMsg);
        }else {
            $unamePostVal = trim($_POST['uname']);
            $psswdPostVal = trim($_POST['password']);
        }
    }
    function signInAuth($conn,$unamePostVal,$psswdPostVal,$unameErrMsg,$psswdErrMsg) {
        $unamePostVal = trim($_POST['uname']);
        $psswdPostVal = trim($_POST['password']);
        $sql_check = "SELECT Firstname, Lastname, Age, Sex, Email, Username, Password FROM Customer_accounts WHERE Username = ?";
        if($stmt = mysqli_prepare($conn, $sql_check)) {
            //Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 's', $unamePostVal);
            // Execute the prepared statement
            if(mysqli_stmt_execute($stmt)) {
                // Store the execution result
                mysqli_stmt_store_result($stmt);
                // Check if username exists, then verify password
                if(mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $fname, $lname, $age, $sex, $email, $username, $password);
                    if(mysqli_stmt_fetch($stmt)) {
                        if($psswdPostVal == $password) {
                            // Password is correct, start a new customer session
                            session_start();
                            // Store data in session variables
                            $_SESSION['signin_customer'] = 'customer';
                            $_SESSION['customer_firstname'] = $fname;
                            $_SESSION['customer_lastname'] = $lname;
                            $_SESSION['customer_age'] = $age;
                            $_SESSION['customer_sex'] = $sex;
                            $_SESSION['customer_email'] = $email;
                            // Redirect welcome page
                            header('location: index.php');
                        }else {
                            $psswdErrMsg = '
                                <script type="text/javascript">
                                    document.addEventListener("DOMContentLoaded", function(){ 
                                        document.getElementsByClassName("text-danger").innerHTML = "The password you entered was not valid!";
                                    }, false);
                                </script>
                            ';
                            echo $psswdErrMsg;
                        }
                    }
                }else {
                    $unameErrMsg = '
                        <script type="text/javascript">
                            document.addEventListener("DOMContentLoaded", function(){ 
                                document.getElementsByClassName("text-danger").innerHTML = "No account found with that username!";
                            }, false);
                        </script>
                    ';
                    echo $unameErrMsg;
                    echo '
                        <script type="text/javascript">
                            document.addEventListener("DOMContentLoaded", function(){ 
                                alert("No account register with that account, please register first!");
                            }, false);
                        </script>
                    ';
                }
                // Close statement
                mysqli_stmt_close($stmt);
            }else {
                echo '
                    <script type="text/javascript">
                        alert("Oops! Something went wrong. Please try again later.");
                    </script>
                ';
                exit;
            }
        }else {
            echo 'Something went wrong!' . mysqli_error('$sql_check');
        }
    }
?>