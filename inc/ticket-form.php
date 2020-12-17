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

<?php 

    // global variable for error messages
    $dateErrMsg = "";
    $nameErrMsg = "";
    $ageErrMsg = "";
    $sexErrMsg = "";
    $emailErrMsg = "";
    $departureErrMsg = "";
    $destinationErrMsg = "";
    $ticketErrMsg = "";
    $accommodationErrMsg = ""; 
    $novErrMsg = "";

    // global variable for form value
    $datePostVal = "";
    $namePostVal = "";
    $agePostVal = "";
    $sexPostVal = "";
    $emailPostVal = "";
    $departPostVal = "";
    $desPostVal = "";
    $accPostVal = "";
    $novPostVal = "";
    
    // global variable for removeSpecialChars function
    $name = "";
    $email = "";
    $destination = "";
    $nov = "";

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
    $s_t = false;
    $a_t = false;

    // save customer ticket
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["date"])) {
            $dateErrMsg = "Date is required!";
        }else {
            $a = true;
        }

        if(empty($_POST["name"])) {
            $nameErrMsg = "Name is required!";
        }else {
            $name = removeSpecialChars($_POST["name"]);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErrMsg = "Only letters and white space allowed!";
            }else {
                $b = true;
            }
        }

        if(empty($_POST["age"])) {
            $ageErrMsg = "Age is required!";
        }else if(!is_numeric($_POST["age"])){
            $ageErrMsg = "Provide number only!";
        }else {
            $c = true;
        }

        if(empty($_POST["sex"])) {
            $sexErrMsg = "Required!";
        }else{
            $s_t = true;
        }

        if(empty($_POST["email"])) {
            $emailErrMsg = "Email is required!";
        }else {
            $email = removeSpecialChars($_POST["email"]);
            // check if e-mail address is well-formed
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErrMsg = "Invalid email format!";
            }else {
                $d = true;
            }
        }

        if(empty($_POST["time"])) {
            $departureErrMsg = "Departure time is required!";
        }else {
            $x = true;
        }

        if(empty($_POST["destination"])) {
            $destinationErrMsg = "Destination is required!";
        }else {
            $destination = removeSpecialChars($_POST["destination"]);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $destination)) {
                $destinationErrMsg = "Only letters and white space allowed!";
            }else {
                $y = true;
            }
        }

        if(empty($_POST["accommodation"])) {
            $accommodationErrMsg = "Required!";
        }else{
            $a_t = true;
        }

        if(empty($_POST["name_of_vessel"])) {
            $novErrMsg = "Name of vessel is required!";
        }else {
            $nov = removeSpecialChars($_POST["name_of_vessel"]);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $nov)) {
                $novErrMsg = "Only letters and white space allowed!";
            }else {
                $z = true;
            }
        }
        
        $sql_tic_count = "SELECT * FROM ticket WHERE Status = 'Open for reservation'";
        $result_tic_count = mysqli_query($conn, $sql_tic_count);
        if(mysqli_num_rows($result_tic_count) > 0) {
            if($a==true && $b==true  && $c==true && $s_t==true && $d==true  && $x==true  && $y==true && $a_t==true && $z==true) {
                // escape special chararacter user inputs for security
                $dt =  mysqli_real_escape_string($conn, $_POST['date']);
                $nm = mysqli_real_escape_string($conn, $_POST['name']);
                $ag = mysqli_real_escape_string($conn, $_POST['age']); 
                $sx =  mysqli_real_escape_string($conn, $_POST['sex']);
                $em =  mysqli_real_escape_string($conn, $_POST['email']);
                $dep =  mysqli_real_escape_string($conn, date('g:i: A', strtotime($_POST['time'])));
                $des =  mysqli_real_escape_string($conn, $_POST['destination']);
                $acc =  mysqli_real_escape_string($conn, $_POST['accommodation']);
                $nv =  mysqli_real_escape_string($conn, $_POST['name_of_vessel']);
                
                // insert query execution
                $sql_cus = "INSERT INTO customer (Name, Age, Sex, Email) VALUES ('$nm', '$ag', '$sx', '$em')";
                $sql_rd = "INSERT INTO reservation_details (ReservationDate, DepartureTime, Destination, Accommodation, NameOfVessel) VALUES ('$dt', '$dep ', '$des', '$acc', '$nv')";
                
                if(mysqli_query($conn, $sql_cus) && mysqli_query($conn, $sql_rd)) {
                    echo "<div class='alert alert-success text-center rounded-0 border-top-success' style='width:100%;position:fixed'><i class='fa fa-check-circle'></i> Submitted successfully!</div>";
                    $h = true;
                }else {
                    echo "<div class='alert alert-danger role='alert'> Error: " . $sql_cus . " " . $sql_rd . " " . mysqli_error($conn) . "</div>";
                    $datePostVal = $_POST["date"];
                    $namePostVal = $_POST["name"];
                    $agePostVal = $_POST["age"];
                    $sexPostVal = $_POST["sex"];
                    $emailPostVal = $_POST["email"];
                    $departPostVal = $_POST["time"];
                    $desPostVal = $_POST["destination"];
                    $accPostVal = $_POST["accommodation"];
                    $novPostVal = $_POST["name_of_vessel"];
                }
            }else {
                $datePostVal = $_POST["date"];
                $namePostVal = $_POST["name"];
                $agePostVal = $_POST["age"];
                $sexPostVal = $_POST["sex"];
                $emailPostVal = $_POST["email"];
                $departPostVal = $_POST["time"];
                $desPostVal = $_POST["destination"];
                $accPostVal = $_POST["accommodation"];
                $novPostVal = $_POST["name_of_vessel"];
            }
        }else {
            echo "<div class='alert alert-danger text-center rounded-0 border-top-success' style='width:100%;position:fixed'><i class='fa fa-times-circle'></i> Failed to submit!</div>";
            $ticketErrMsg = "</br> Out of ticket stock!";
            $datePostVal = $_POST["date"];
            $namePostVal = $_POST["name"];
            $agePostVal = $_POST["age"];
            $sexPostVal = $_POST["sex"];
            $emailPostVal = $_POST["email"];
            $departPostVal = $_POST["time"];
            $desPostVal = $_POST["destination"];
            $accPostVal = $_POST["accommodation"];
            $novPostVal = $_POST["name_of_vessel"];
        }
    }

    // update ticket status
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($h == true) {
            // update query execution 
            $sql = "UPDATE ticket SET Status='Closed for reservation' WHERE TicketID = (SELECT MIN(TicketID) FROM ticket WHERE Status='Open for reservation')";
            if(mysqli_query($conn, $sql)) {
                echo "<script type='text/javascript'>console.log('Updated ticket status successfully!');</script>";
            }else {
                echo "<div class='alert alert-danger role='alert'> Error: " . $sql . " " . mysqli_error($conn) . "</div>";
                echo "<script type='text/javascript'>console.log('Update failed!');</script>";
            }

            // push admin notification
            $notif_num = "Unread";
            $_sql_notif = "INSERT INTO admin_notification (`NotificationStatus`) VALUES ('$notif_num')";
            if(mysqli_query($conn, $_sql_notif)) {
                echo "<script>console.log('Inserted');</script>";
            }else {
                echo "<div class='' role='alert'> Error: " . $_sql_notif . " " . mysqli_error($conn) . "</div>";
            }
        }
    }

    function removeSpecialChars($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

 ?>

<!-- Ticket Area Start-->
<section class="bg-white" style="padding-right: 0 !important;"> 
    <div class="booking-area" role="document">
        <div class="booking-content">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="_row_1">
                    <div class="_col_1_6">
                        <img src="./img/core-img/favicon.png" class="_fav" alt="VG Shipping Line Logo">
                    </div>
                    <div class="_col_1_6">
                        <h1>Shipping Lines</h1>
                        <p>VG Shipping Lines Bldg., V. Sotto St., Pier 3, Tinago, Cebu City<br>
                        Prop. - Filadelfo A. Garcia</p>
                    </div>
                </div>
                <div class="_row_2">
                    <div class="_col_2_6" style="visibility: hidden;">
                        <label class="label">No</label>
                        <input type='text' value="" disabled/>
                    </div>
                    <div class="_col_2_6">
                        <?php 
                            $___t = "";
                            $sql = "SELECT TicketNo, MIN(TicketID) FROM ticket WHERE Status = 'Open for reservation'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) { ?>
                                    <label class="label">No. </label>
                                    <input type='text' value="<?php echo  $row["TicketNo"]?>" disabled/>
                                    <span class="text-danger"><?php echo $ticketErrMsg; ?></span>
                        <?php }
                            } 
                            $count = 0;
                            $__sql = "SELECT * FROM ticket WHERE Status = 'Open for reservation'";
                            $result = mysqli_query($conn, $__sql);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    $count++;
                                }
                            }else {
                                echo "</br><span class='text-danger'>Out of ticket stock!</span>";
                            }
                        ?>
                    </div>
                </div>
                <div class="_row_3">
                    <div class="col_3_6">
                        <h3>Passenger's Ticket</h3>
                    </div>
                </div>
                <div class="_row_4">
                    <div class="_col_4_6" style="visibility: hidden;">
                        <label class="label">No</label>
                        <input type='text' value="12344" disabled/>
                    </div>
                    <div class="_col_4_6">
                        <label class="label">Date <span class="astrsk">*</span></label>
                        <input type='date' name="date" value="<?php echo $datePostVal; ?>" required/>
                        <span class="text-danger"><?php echo $dateErrMsg; ?></span>
                    </div>
                </div>
                <div class="form-row mt-5">
                    <div class="form-group col-sm-3">
                        <div class="name">Name <span class="astrsk">*</span></div>
                        <input type="text" id="name" name="name" value="<?php echo $namePostVal; ?>" class="form-control" required/>
                        <span class="text-danger"><?php echo $nameErrMsg; ?></span>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="age">Age <span class="astrsk">*</span></div>
                        <input type="number" id="age" name="age" value="<?php echo $agePostVal; ?>" class="form-control" min="1" max="100" required/>
                        <span class="text-danger"><?php echo $ageErrMsg; ?></span>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="sex">Sex <span class="astrsk">*</span></div>
                        <select name="sex" class="border w-100 form-control-sm">
                            <option value="<?php echo $sexPostVal; ?>" style="display:none;"><?php echo $sexPostVal; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <span class="text-danger"><?php echo $sexErrMsg; ?></span>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="email">Email <span class="astrsk">*</span></div>
                        <input type="email" id="email" name="email" value="<?php echo $emailPostVal; ?>" class="form-control" title="fffff" required/>
                        <div id="_email_info">
                            <span class="text-info text-center">This email is use for you to recieved a confirmation message. To claim your ticket
                                make sure you provide a <b>valid email address.</b>
                            </span>
                        </div>
                        <span class="text-danger"><?php echo $emailErrMsg; ?></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-3">
                        <div class="time">Departure Time <span class="astrsk">*</span></div>
                        <input type="time" id="time" name="time" value="<?php echo $departPostVal; ?>" class="form-control" required/>
                        <span class="text-danger"><?php echo $departureErrMsg; ?></span>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="destination">Destination <span class="astrsk">*</span></div>
                        <input type='text' id="destination" name="destination" value="<?php echo $desPostVal; ?>" class="form-control" required/>
                        <span class="text-danger"><?php echo $destinationErrMsg; ?></span>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="accommodation">Accommodation <span class="astrsk">*</span></div>
                        <select id="accommodation" name="accommodation" class="border w-100 form-control-sm">
                            <option value="<?php echo $accPostVal; ?>" style="display:none;"><?php echo $accPostVal; ?></option>
                            <option value="Bedding">Bedding</option>
                            <option value="Sitting">Sitting</option>
                            <option value="Aircon">Aircon</option>
                        </select>
                        <span class="text-danger"><?php echo $accommodationErrMsg; ?></span>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="name_of_vessel">Name of Vessel <span class="astrsk">*</span></div>
                        <input type='text' id="name_of_vessel" name="name_of_vessel" value="<?php echo $novPostVal; ?>" class="form-control" required/>
                        <span class="text-danger"><?php echo $novErrMsg; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" id="submit" class="form-control btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>
