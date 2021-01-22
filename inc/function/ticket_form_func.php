<!-- The trim() function removes whitespace and other predefined characters from both sides of a string.  -->

<!-- The stripslashes() function removes backslashes. 
This function can be used to clean up data retrieved from a database or from an HTML form.  -->

<!-- The htmlspecialchars() function is used to converts special characters
( e.g. & (ampersand), " (double quote), ' (single quote), < (less than), > (greater than)) to HTML entities
( i.e. & (ampersand) becomes &amp, ' (single quote) becomes &#039, < (less than) becomes &lt; (greater than) becomes &gt; )
so that users cannot insert harmful HTML codes into a site. -->

<!-- preg_match() in PHP – this function is used to perform pattern matching in PHP on a string.
It returns true if a match is found and false if a match is not found.  -->

<!-- mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query,
taking into account the current character set of the connection.
This function is used to create a legal SQL string that can be used in an SQL statement. -->

<?php include 'config/dbconnection.php'; ?>
<?php include './inc/function/signin_form_func.php'; ?>
<?php 
    session_start();
    // global variable for error messages
    $dateErrMsg = '';
    $nameErrMsg = '';
    $ageErrMsg = '';
    $sexErrMsg = '';
    $emailErrMsg = '';
    $departureErrMsg = '';
    $destinationErrMsg = '';
    $ticketErrMsg = '';
    $accommodationErrMsg = ''; 
    $novErrMsg = '';
    // global variable for form value
    $datePostVal = '';
    $namePostVal = '';
    $agePostVal = '';
    $sexPostVal = '';
    $emailPostVal = '';
    $departPostVal = '';
    $desPostVal = '';
    $accPostVal = '';
    $novPostVal = '';
    if(isset($_SESSION['signin_customer']) == 'customer' && $_SESSION['signin_customer'] == 'customer') {
        $namePostVal = $_SESSION['customer_firstname'] . ' ' . $_SESSION['customer_lastname'];
        $agePostVal = $_SESSION['customer_age'];
        $sexPostVal = $_SESSION['customer_sex'];
        $emailPostVal = $_SESSION['customer_email'];
    }
    // global variable for removeSpecialChars function
    $name = '';
    $email = '';
    $destination = '';
    $nov = '';
    // global variable for tracing
    $a = false;
    $b = false;
    $c = false;
    $d = false;
    $xi = false;
    $y = false;
    $z = false;
    $l = false;
    $h = false; 
    $t = false;
    $s_t = false;
    $a_t = false;
    // save customer ticket
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['date'])) {
            $dateErrMsg = 'Date is required!';
        }else {
            $a = true;
        }
        if(empty($_POST['name'])) {
            $nameErrMsg = 'Name is required!';
        }else {
            // $name = removeSpecialChars($_POST['name']);
            // check if only contains letters and whitespace
            // if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            //     $nameErrMsg = 'Only letters and white space allowed!';
            // }else {
                
            // }
            $b = true;
        }
        if(empty($_POST['age'])) {
            $ageErrMsg = 'Age is required!';
        }else if(!is_numeric($_POST['age'])){
            $ageErrMsg = 'Provide number only!';
        }else {
            $c = true;
        }
        if(empty($_POST['sex'])) {
            $sexErrMsg = 'Required!';
        }else{
            $s_t = true;
        }
        if(empty($_POST['email'])) {
            $emailErrMsg = 'Email is required!';
        }else {
            // $email = removeSpecialChars($_POST['email']);
            // check if e-mail address is well-formed
            // if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //     $emailErrMsg = 'Invalid email format!';
            // }else {
              
            // }
            $d = true;
        }
        if(empty($_POST['time'])) {
            $departureErrMsg = 'Departure time is required!';
        }else {
            $xi = true;
        }
        if(empty($_POST['destination'])) {
            $destinationErrMsg = 'Destination is required!';
        }else {
            // $destination = removeSpecialChars($_POST['destination']);
            // check if only contains letters and whitespace
            // if(!preg_match("/^[a-zA-Z-' ]*$/", $destination)) {
            //     $destinationErrMsg = 'Only letters and white space allowed!';
            // }else {
               
            // }
            $y = true;
        }
        if(empty($_POST['accommodation'])) {
            $accommodationErrMsg = 'Required!';
        }else{
            $a_t = true;
        }
        if(empty($_POST['name_of_vessel'])) {
            $novErrMsg = 'Name of vessel is required!';
        }else {
            // $nov = removeSpecialChars($_POST['name_of_vessel']);
            // check if only contains letters and whitespace
            // if(!preg_match("/^[a-zA-Z-' ]*$/", $nov)) {
            //     $novErrMsg = 'Only letters and white space allowed!';
            // }else {
               
            // }
            $z = true;
        }
        $sql_tic_count = "SELECT * FROM ticket WHERE Status = 'Open for reservation'";
        $result_tic_count = mysqli_query($conn, $sql_tic_count);
        if(mysqli_num_rows($result_tic_count) > 0) {
            if($a==true && $b==true  && $c==true && $s_t==true && $d==true  && $xi==true  && $y==true && $a_t==true && $z==true) {
                // escape special chararacter user inputs for security
                $dt =  mysqli_real_escape_string($conn, $_POST['date']);
                if(isset($_SESSION['signin_customer']) == 'customer' && $_SESSION['signin_customer'] == 'customer') {
                    $nm = mysqli_real_escape_string($conn, $_SESSION['customer_firstname'] . ' ' . $_SESSION['customer_lastname']);
                    $ag = mysqli_real_escape_string($conn, $_SESSION['customer_age']); 
                    $sx =  mysqli_real_escape_string($conn, $_SESSION['customer_sex']);
                    $em =  mysqli_real_escape_string($conn, $_SESSION['customer_email']);
                }
                $dep =  mysqli_real_escape_string($conn, date('g:i: A', strtotime($_POST['time'])));
                $des =  mysqli_real_escape_string($conn, $_POST['destination']);
                $acc =  mysqli_real_escape_string($conn, $_POST['accommodation']);
                $nv =  mysqli_real_escape_string($conn, $_POST['name_of_vessel']);
                // insert query execution
                $sql_cus = "INSERT INTO customer (Name, Age, Sex, Email) VALUES ('$nm', '$ag', '$sx', '$em')";
                $sql_rd = "INSERT INTO reservation_details (ReservationDate, DepartureTime, Destination, Accommodation, NameOfVessel) VALUES ('$dt', '$dep ', '$des', '$acc', '$nv')";
                if(mysqli_query($conn, $sql_cus) && mysqli_query($conn, $sql_rd)) {
                    echo '<div class="alert alert-success text-center rounded-0 border-top-success" style="width:100%;position:fixed"><i class="fa fa-check-circle"></i> Submitted successfully!</div>';
                    $h = true;
                }else {
                    echo "<div class='alert alert-danger role='alert'> Error: " . $sql_cus . " " . $sql_rd . " " . mysqli_error($conn) . "</div>";
                    $datePostVal = $_POST['date'];
                    if(isset($_SESSION['signin_customer']) == 'customer' && $_SESSION['signin_customer'] == 'customer') {
                        $namePostVal = $_SESSION['customer_firstname'] . ' ' . $_SESSION['customer_lastname'];
                        $agePostVal = $_SESSION['customer_age'];
                        $sexPostVal = $_SESSION['customer_sex'];
                        $emailPostVal = $_SESSION['customer_email'];
                    }
                    $departPostVal = $_POST['time'];
                    $desPostVal = $_POST['destination'];
                    $accPostVal = $_POST['accommodation'];
                    $novPostVal = $_POST['name_of_vessel'];
                }
            }else {
                $datePostVal = $_POST['date'];
                if(isset($_SESSION['signin_customer']) == 'customer' && $_SESSION['signin_customer'] == 'customer') {
                    $namePostVal = $_SESSION['customer_firstname'] . ' ' . $_SESSION['customer_lastname'];
                    $agePostVal = $_SESSION['customer_age'];
                    $sexPostVal = $_SESSION['customer_sex'];
                    $emailPostVal = $_SESSION['customer_email'];
                }
                $departPostVal = $_POST['time'];
                $desPostVal = $_POST['destination'];
                $accPostVal = $_POST['accommodation'];
                $novPostVal = $_POST['name_of_vessel'];
            }
        }else {
            echo '<div class="alert alert-danger text-center rounded-0 border-top-success" style="width:100%;position:fixed"><i class="fa fa-times-circle"></i> Failed to submit!</div>';
            $ticketErrMsg = '</br> Out of ticket stock!';
            $datePostVal = $_POST['date'];
            if(isset($_SESSION['signin_customer']) == 'customer' && $_SESSION['signin_customer'] == 'customer') {
                $namePostVal = $_SESSION['customer_firstname'] . ' ' . $_SESSION['customer_lastname'];
                $agePostVal = $_SESSION['customer_age'];
                $sexPostVal = $_SESSION['customer_sex'];
                $emailPostVal = $_SESSION['customer_email'];
            }
            $departPostVal = $_POST['time'];
            $desPostVal = $_POST['destination'];
            $accPostVal = $_POST['accommodation'];
            $novPostVal = $_POST['name_of_vessel'];
        }
    }
    // update ticket status
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($h == true) {
            // update query execution 
            $sql = "UPDATE ticket SET Status='Closed for reservation' WHERE TicketID = (SELECT MIN(TicketID) FROM ticket WHERE Status='Open for reservation')";
            if(mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">console.log("Updated ticket status successfully!");</script>';
            }else {
                echo "<div class='alert alert-danger role='alert'> Error: " . $sql . " " . mysqli_error($conn) . "</div>";
                echo '<script type="text/javascript">console.log("Update failed!");</script>';
            }
            // push admin notification
            adminPushNotification($conn);
        }
    }
    // function removeSpecialChars($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
    function adminPushNotification($conn) {
        $notif_status = 'Unread';
        $_sql_notif = "INSERT INTO admin_notification (`NotificationStatus`) VALUES ('$notif_status')";
        if(mysqli_query($conn, $_sql_notif)) {
            echo '<script>console.log("Inserted");</script>';
        }else {
            echo "<div class='' role='alert'> Error: " . $_sql_notif . " " . mysqli_error($conn) . "</div>";
        }
    }
 ?>
