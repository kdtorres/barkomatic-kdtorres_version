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
    require '../config/dbconnection.php';

    $ticketErrMsg = "";
    $ticketNumMsg = "";
    $ticketPostMsg = "";
    $ticketPostNumMsg = "";
    $ticketNumLenMsg = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // check if ticket feild is empty
        // check if integer is inputted 
        if(empty($_POST["ticket_no"])) {

            $ticketErrMsg = "Ticket number is required!";

        }else if(!is_numeric($_POST["ticket_no"])) {

            $ticketNumMsg = "Input only integer value!";
            $ticketPostMsg = $_POST['ticket_no'];

        }else if(strlen($_POST["ticket_no"]) > 6 || strlen($_POST["ticket_no"]) < 6) {

            $ticketNumLenMsg = "Please provide only with 6 digit number!";
            $ticketPostMsg = $_POST['ticket_no'];
            
        }else {

            // escape special chararacter user inputs for security
            $ticket_no = mysqli_real_escape_string($conn, $_POST['ticket_no']);
            $status = mysqli_real_escape_string($conn, $_POST['stats']); 
             
            // check if there is the same ticket number on database
            $sql = "SELECT * FROM ticket WHERE TicketNo = '$ticket_no'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
                $ticketPostNumMsg = "Ticket number is already exist!";
            }else {
                 // insert query execution
                $sql_insert = "INSERT INTO ticket (TicketNo, Status) VALUES ('$ticket_no', '$status')";
                
                if(mysqli_query($conn, $sql_insert)) {
                    echo "<div class='alert alert-success text-center rounded-0' style='position:fixed;width:23.5%;top:0;'><i class='fa fa-check-circle'></i> Save successfully!</div>";
                }else {
                    echo "<div class='alert alert-danger role='alert'> Error: " . $sql_insert . " " . mysqli_error($conn) . "</div>";
                }
            }

        }
    }
?>

<form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h5>Add Ticket For Reservation</h5>
        <div class="_frm_tickt">
            <div class="_ticket_no">
                <div>
                    <label for="ticket_no">Ticket No.</label>
                </div>
                <div>
                    <input type="text" id="ticket_no" name="ticket_no" value="<?php echo $ticketPostMsg; ?>">
                    <span class="text-danger"><?php echo $ticketErrMsg; ?></span>
                    <span class="text-danger"><?php echo $ticketNumMsg; ?></span>
                    <span class="text-danger"><?php echo $ticketPostNumMsg; ?></span>
                    <span class="text-danger"><?php echo $ticketNumLenMsg; ?></span>
                </div>
            </div>
            <div class="_ticket_stats">
                <div>
                    <label for="stats">Status</label>
                </div>
                <div>
                    <input type="text" id="stats" name="stats" value="Open for reservation" readonly style="background-color:#eee;">
                </div>
            </div>
        </div>
        <div class="_submit_btn mt-3">
            <button type="button" id="generate" title="Generate Ticket No." class="btn btn-secondary btn-sm">Generate</button>
            &nbsp;&nbsp;
            <input type="submit" name="addticket" value="Submit" class="btn btn-primary btn-sm">
        </div>
</form>

<div class="_available_ticket mt-4" style="width:400px;">
    <table class="table table-sm table-striped table-white table-bordered table-hover" id="id_find">
        <thead>
            <tr class="bg-warning">
                <th scope="col" class="text-white">ID</th>
                <th scope="col" class="text-white">TicketNo</th>
                <th scope="col" class="text-white">Status</th>
                <!-- <th scope="col"></th> -->
            </tr>
        </thead>
        <tbody>

            <?php 
                //display all ticket data from database
                $sql = "SELECT TicketID, TicketNo, Status FROM ticket";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row["TicketID"]; ?></th>
                            <td><?php echo $row["TicketNo"]; ?></td>
                            <td class="check_stats"><?php echo $row["Status"]; ?></td>
                            <!-- <td class="text-center">
                                <a href="" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td> -->
                        </tr>
                <?php }
                } 
                mysqli_close($conn);
                ?>
        </tbody>
    </table>
</div>