<!-- The trim() function removes whitespace and other predefined characters from both sides of a string.  -->

<!-- The stripslashes() function removes backslashes. 
This function can be used to clean up data retrieved from a database or from an HTML form.  -->

<!-- The mysqli_fetch_assoc() function is used to return an associative array representing the next row in the result set for the result represented by the result parameter, where each key in the array represents the name of one of the result set's columns. -->

<!-- The htmlspecialchars() function is used to converts special characters
( e.g. & (ampersand), " (double quote), ' (single quote), < (less than), > (greater than)) to HTML entities
( i.e. & (ampersand) becomes &amp, ' (single quote) becomes &#039, < (less than) becomes &lt; (greater than) becomes &gt; )
so that users cannot insert harmful HTML codes into a site. -->

<!-- preg_match() in PHP – this function is used to perform pattern matching in PHP on a string.
It returns true if a match is found and false if a match is not found.  -->

<!-- mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query,
taking into account the current character set of the connection.
This function is used to create a legal SQL string that can be used in an SQL statement. -->
<?php 
    include '../config/dbconnection.php';
    $ticketErrMsg = "";
    $ticketNumMsg = "";
    $ticketPostMsg = "";
    $ticketPostNumMsg = "";
    $ticketNumLenMsg = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['qty'])) {
            $ticketErrMsg = 'Ticket number is required!';
        }else if(!is_numeric($_POST['qty'])) {
            $ticketNumMsg = 'Input only integer value!';
            $ticketPostMsg = $_POST['qty'];
        }else if(strlen($_POST['qty']) < 1) {
            $ticketNumLenMsg = 'Please provide at least 1 quantity!';
            $ticketPostMsg = $_POST['qty'];
        }else {
            $bool = false;
            $num = 0;
            $qty = trim($_POST['qty']);
            $status = trim($_POST['stats']); 
            while($num < $qty) {
                $six_digit_random_number = mt_rand(100000, 999999);
                $sql_insert = "INSERT INTO ticket (TicketNo, Status) VALUES (?, ?)";
                if($stmt = mysqli_prepare($conn, $sql_insert)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, 'is', $six_digit_random_number, $status);
                }
                if(mysqli_stmt_execute($stmt)) {
                    $bool = true;
                }
                $num++;
            }
            if($bool == true) {
                echo '<div class="alert alert-success text-center rounded-0" style="width:200px;top:0;position:absolute;margin-top:190px;margin-left:152px;"><i class="fa fa-check-circle"></i> Save successfully!</div>';
            }else {
                echo "<div class='alert alert-danger role='alert'> Error: " . $sql_insert . " " . mysqli_error($conn) . "</div>";
            }
        }
    }
?>