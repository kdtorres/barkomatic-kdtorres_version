<!-- The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL. This function returns true if the variable exists and is not NULL, otherwise it returns false. -->
<!-- The mysqli_stmt_bind_param() function is used to bind variables to the parameter markers of a prepared statement. -->
<?php 
    include '../../../config/dbconnection.php';
    $ticket_no = '';
    $cus_name = '';
    $cus_age = '';
    $cus_sex = '';
    $cus_email = '';
    $cus_rdate = '';
    $cus_dtime = '';
    $cus_dist = '';
    $cus_acco = '';
    $cus_nvessel = '';
    // Check existence of customerid parameter before processing further
    if(isset($_GET['customerid'])) {
        // Prepare a select & join statement
        $sql = "SELECT t.TicketNo, cus.Name, cus.Age, cus.Sex, cus.Email,
        rd.ReservationDate, rd.DepartureTime, rd.Destination, rd.Accommodation, rd.NameOfVessel 
        FROM customer cus
        INNER JOIN ticket t ON cus.CustomerID = t.TicketID
        INNER JOIN reservation_details rd ON cus.CustomerID = rd.ReservationID
        WHERE cus.CustomerID = ?";
        if($stmt = mysqli_prepare($conn, $sql)) {
            // Set parameters
            $param_id = trim($_GET['customerid']);
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'i', $param_id);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)) {
                // Store result
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. 
                    Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $ticket_no = $row['TicketNo'];
                    $cus_name = $row['Name'];
                    $cus_age = $row['Age'];
                    $cus_sex = $row['Sex'];
                    $cus_email = $row['Email'];
                    $cus_rdate = $row['ReservationDate'];
                    $cus_dtime = $row['DepartureTime'];
                    $cus_dist = $row['Destination'];
                    $cus_acco = $row['Accommodation'];
                    $cus_nvessel = $row['NameOfVessel'];
                    customerApproved($conn, $param_id, $ticket_no, $cus_name,$cus_age, $cus_sex, $cus_email,$cus_rdate,$cus_dtime,$cus_dist,$cus_acco,$cus_nvessel);
                }else {
                    header('location: ../inc/customer-ticket.php');
                    exit();
                }
            }else {
                echo 'Oops! Something went wrong. Please try again later.';
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }else {
        // URL doesn't contain customerid parameter. Redirect to error page
        header('location: ../inc/customer-ticket.php');
        exit();
    }
    function customerApproved($conn, $param_id, $param_tnum, $param_name, $param_age, $param_sex, $param_email, $param_rdate, $param_dtime, $param_dist, $param_acco, $param_nvessel) {
        $sql_appr = "INSERT INTO approved_customer (TicketNo, Name, Age, Sex, Email, ReservationDate, DepartureTime, Destination, Accommodation, NameOfVessel) VALUES (?,?,?,?,?,?,?,?,?,?)";
        if($stmt = mysqli_prepare($conn, $sql_appr)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,'ssisssssss', $param_tnum, $param_name, $param_age, $param_sex, $param_email, $param_rdate, $param_dtime, $param_dist, $param_acco, $param_nvessel);
            if(mysqli_stmt_execute($stmt)) {
                echo '<p style="color:#28a745;font-family:Tahoma;font-weight:bold;">Approved successfuly.';
                removeCustomer($conn, $param_id);
                ticPushNotification($conn);
            }else {
                echo '<p style="color:#dc3545;font-family:Tahoma;font-weight:bold;">Oops! Something went wrong, please try again later.';
                echo '
                    <script type="text/javascript"> 
                        setTimeout(function() {
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/customer.php");
                        }, 700);
                    </script>
                ';
            }
        }else {
            echo 'Oops! Something went wrong. Please try again later.';
        }
        mysqli_stmt_close($stmt);
    }
    function removeCustomer($conn, $param_id) {
        $sql_delete = "DELETE t1, t2, t3 FROM customer t1
        INNER JOIN ticket t2 ON t1.CustomerID = t2.TicketID
        INNER JOIN reservation_details t3 ON t1.CustomerID = t3.ReservationID 
        WHERE t1.CustomerID = ?";
        if($stmt = mysqli_prepare($conn, $sql_delete)) {
            mysqli_stmt_bind_param($stmt, 'i', $param_id);
            mysqli_stmt_execute($stmt);
        }else {
            echo 'delete failed' . mysqli_error($sql_delete);
        }
        mysqli_stmt_close($stmt);
    }
    function ticPushNotification($conn) {
        $notif_status = 'Unread';
        $_sql_notif = "INSERT INTO tic_notification (`NotificationStatus`) VALUES ('$notif_status')";
        if($stmt = mysqli_prepare($conn, $_sql_notif)) {
            if(mysqli_stmt_execute($stmt)) {
                echo '<script type="text/javascript">console.log("Ticket in charge notification push successfully!");</script>';
                echo '
                    <script type="text/javascript"> 
                        setTimeout(function() {
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/customer.php");
                        }, 700);
                    </script>
                ';
            }else {
                echo '<script type="text/javascript">console.log("Ticket in charge notification push failed!");</script>';
            }
            mysqli_stmt_close($stmt);
        }
    }
?>
