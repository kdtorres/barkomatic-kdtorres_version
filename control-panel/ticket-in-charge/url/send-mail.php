<?php
    include '../../config/dbconnection.php';
    $to = '';
    $customer_name = '';
    $subject = '';
    $message = '';
    $from = '';
    $param_id = '';
    // Check existence of customerid parameter before processing further
    if(isset($_GET['apid'])) {
        // Prepare a select statement
        if($stmt = mysqli_prepare($conn, 'SELECT Name, Email FROM approved_customer WHERE ApID = ?')) {
            // Set parameters
            $param_id = trim($_GET['apid']);
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
                    $to = $row['Email'];
                    $customer_name = $row['Name'];
                    $subject = $customer_name . ' - Your Reservation Ticket';
                    $message = 'This email is confirming that you can now claim and pay your reservation ticket in our office. Thank you and have a nice day.';
                    $from = 'vgshippinglines@gmail.com';
                }
            }
            mysqli_stmt_close($stmt);
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $apid = trim($_POST['id']);
        $to_mail = trim($_POST['reciever']);
        $to_subject = trim($_POST['subject']);
        $to_message = trim($_POST['message']);
        sendEmail($to_mail, $to_subject, $to_message, $apid, $conn);
    }

    function sendEmail($to_mail, $to_subject, $to_message, $apid, $conn) {
        if(mail($to_mail, $to_subject, $to_message)) {
            removeEmailed($conn, $apid);
        }else {
            echo "
                <script type='text/javascript'>
                    alert('Something went wrong, please try again later!');
                    setTimeout(function() {
                        window.location.replace('http://localhost/vg-shipping-lines/control-panel/ticket-in-charge/customer.php');
                    }, 300);
                </script>
            ";
            exit;
        }
    }

    function removeEmailed($conn, $apid) {
        if($stmt = mysqli_prepare($conn, 'DELETE FROM approved_customer WHERE ApID = ?')) {
            mysqli_stmt_bind_param($stmt, 'i', $apid);
            mysqli_stmt_execute($stmt);
        }
        echo "
            <script type='text/javascript'> 
                setTimeout(function() {
                    alert('Send successfully.');
                    window.location.replace('http://localhost/vg-shipping-lines/control-panel/ticket-in-charge/customer.php');
                }, 300);
            </script>   
        ";
        mysqli_stmt_close($stmt);
        exit;
    }
?>
<style type="text/css">
    .form-style-9{
        max-width: 450px;
        background: #FAFAFA;
        padding: 30px;
        margin: 50px auto;
        box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
        border-radius: 10px;
        border: 6px solid #305A72;
    }
    .form-style-9 ul{
        padding:0;
        margin:0;
        list-style:none;
    }
    .form-style-9 ul li{
        display: block;
        margin-bottom: 18px;
        min-height: 35px;
    }
    .form-style-9 ul li  .field-style{
        box-sizing: border-box; 
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box; 
        padding: 8px;
        outline: none;
        border: 1px solid #B0CFE0;
        transition: all 0.30s ease-in-out;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;

    }.form-style-9 ul li  .field-style:focus{
        box-shadow: 0 0 5px #B0CFE0;
        border:1px solid #B0CFE0;
    }
    .form-style-9 ul li .field-split{
        width: 49%;
    }
    .form-style-9 ul li .field-full{
        width: 100%;
    }
    .form-style-9 ul li input.align-left{
        float:left;
    }
    .form-style-9 ul li input.align-right{
        float:right;
    }
    .form-style-9 ul li textarea{
        resize: vertical; font-family: Tahoma;
        width: 100%;
        height: 100px;
    }
    .form-style-9 ul li input[type="button"], 
    .form-style-9 ul li input[type="submit"] {
        -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
        -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
        box-shadow: inset 0px 1px 0px 0px #3985B1;
        background-color: #216288;
        border: 1px solid #17445E;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        letter-spacing: 0;
        padding: 8px 18px;
        text-decoration: none;
        font: 0.675rem Tahoma;
    }
    div {
        font: 12px Arial, Helvetica, sans-serif;
        font-size: 0.785rem;
        padding-bottom: 5px;
        color: grey;
        font-weight: 800;
    }
    .form-style-9 ul li input[type="button"]:hover, 
    .form-style-9 ul li input[type="submit"]:hover {
        background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
        background-color: #28739E;
    }
    input[type="text"],input[type="email"]  {
        font: 0.775rem Tahoma;
    }
    input[type="email"],input[type="text"], textarea  {
        box-shadow: 0 0 5px #B0CFE0;
        border:1px solid #B0C;
        background-color: #f0f0f0;
    }
    form p {margin-top:-25px; text-align: center;font-family: Arial, Helvetica, sans-serif;padding-top: 18px;color:#305a72;font-weight:bold;letter-spacing: 2;}
</style>
<form class="form-style-9" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="formSubmit()">
    <p>VG SHIPPING LINE</p>
    <ul>
        <li style="display: none;">
            <div>ApID:</div>
            <input type="number" name="id" value="<?php echo $param_id; ?>" class="field-style field-full align-none" readonly/>
        </li>
        <li>
            <div>From:</div>
            <input type="email" name="sender" value="<?php echo $from; ?>" class="field-style field-full align-none" readonly/>
        </li>
        <li>
            <div>To:</div>
            <input type="email" name="reciever" value="<?php echo $to; ?>" class="field-style field-full align-none" readonly/>
        </li>
        <li>
            <div>Subject:</div>
            <input type="text" name="subject" value="<?php echo $subject; ?>" class="field-style field-full align-none" readonly/>
        </li>
        <li>
            <div>Message:</div>
            <textarea name="message" class="field-style" readonly><?php echo $message; ?></textarea>
        </li>
        <li>
            <input type="submit" name="submit" id="btn_submit" value="Send Message" />
        </li>
    </ul>
</form>
<script type="text/javascript">
      function formSubmit() {
        document.getElementById("btn_submit").value = "Loading";
        document.getElementById("btn_submit").disabled = true;
        document.getElementById("btn_submit").style.cursor = "wait";
      }
</script>