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
    // global variable for form value
    $fnamePostVal = '';
    $lnamePostVal = '';
    $mnamePostVal = '';
    $rtypePostVal = '';
    $rdescPostVal = '';
    $unamePostVal = '';
    $pwdPostVal = '';
    // global variable for error messages
    $fnameErrMsg = '';
    $lnameErrMsg = '';
    $mnameErrMsg = '';
    $rtypeErrMsg = '';
    $rdescErrMsg = '';
    $unameErrMsg = '';
    $pwdErrMsg = '';
    // global variable for removeSpecialChars function
    $_fname = '';
    $_lname = '';
    $_mname = '';
    $_rdesc = '';
    $_uname = '';
    // global variable for tracing
    $a = false;
    $b = false;
    $c = false;
    $d = false;
    $x = false;
    $y = false;
    $z = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['_fname'])) {
            $fnameErrMsg = 'Firstname is required!';
        }else {
            $_fname = removeSpecialChars($_POST['_fname']);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_fname)) {
                $fnameErrMsg = 'Only letters and white space allowed!';
            }else {
                $a = true;
            }
        }
        if(empty($_POST['_lname'])) {
            $lnameErrMsg = 'Lastname is required!';
        }else {
            $_lname = removeSpecialChars($_POST['_lname']);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_lname)) {
                $lnameErrMsg = 'Only letters and white space allowed!';
            }else {
                $b = true;
            }
        }
        if(empty($_POST['_mname'])) {
            $mnameErrMsg = 'Middlename is required!';
        }else {
            $_mname = removeSpecialChars($_POST['_mname']);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_mname)) {
                $mnameErrMsg = 'Only letters and white space allowed!';
            }else {
                $c = true;
            }
        }
        if(empty($_POST['_rtype'])) {
            $rtypeErrMsg = 'Role type is required!';
        }else {
            $d = true;
        }
        if(empty($_POST['_rdesc'])) {
            $rdescErrMsg = 'Role description is required!';
        }else {
            $_rdesc = removeSpecialChars($_POST["_rdesc"]);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_rdesc)) {
                $rdescErrMsg = 'Only letters and white space allowed!';
            }else {
                $x = true;
            }
        }
        if(empty($_POST['_uname'])) {
            $unameErrMsg = 'Username is required!';
        }else {
            $_uname = removeSpecialChars($_POST['_uname']);
            // check if only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_uname)) {
                $unameErrMsg = 'Only letters and white space allowed!';
            }else {
                $y = true;
            }
        }
        if(empty($_POST['_pwd'])) {
            $pwdErrMsg = 'Username is required!';
        }else {
            $z = true;
        }
        if($a==true && $b==true  && $c==true && $d==true  && $x==true  && $y==true && $z==true) {
            // escape special chararacter user inputs for security
            $firstname =  mysqli_real_escape_string($conn, $_POST['_fname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['_lname']);
            $middlename = mysqli_real_escape_string($conn, $_POST['_mname']); 
            $role_type = mysqli_real_escape_string($conn, $_POST['_rtype']); 
            $role_description =  mysqli_real_escape_string($conn, $_POST['_rdesc']);
            $username =  mysqli_real_escape_string($conn, $_POST['_uname']);
            $password =  mysqli_real_escape_string($conn, $_POST['_pwd']);
            // $password_hash = password_hash($password, PASSWORD_DEFAULT);
            // insert query execution
            $sql_ud = "INSERT INTO administrator_details (Firstname, Lastname, MI, RoleType, RoleDescription) VALUES ('$firstname', '$lastname', '$middlename', '$role_type', '$role_description')";
            $sql_user = "INSERT INTO administrator (Username, Password) VALUES ('$username', '$password')";
            if(mysqli_query($conn, $sql_ud) && mysqli_query($conn, $sql_user)) {
                echo '<div class="alert alert-success text-center rounded-0" style="position:fixed;width:23.5%;top:0;"><i class="fa fa-check-circle"></i> Save successfully!</div>';
            }else {
                echo "<div class='alert alert-danger role='alert'> Error: " . $sql_ud . " " . $sql_user . " " . mysqli_error($conn) . "</div>";
                $fnamePostVal = $_POST['_fname'];
                $lnamePostVal = $_POST['_lname'];
                $mnamePostVal = $_POST['_mname'];
                $rtypePostVal = $_POST['_rtype'];
                $rdescPostVal = $_POST['_rdesc'];
                $unamePostVal = $_POST['_uname'];
                $pwdPostVal = $_POST['_pwd'];
            }
        }else {
            $fnamePostVal = $_POST['_fname'];
            $lnamePostVal = $_POST['_lname'];
            $mnamePostVal = $_POST['_mname'];
            $rtypePostVal = $_POST['_rtype'];
            $rdescPostVal = $_POST['_rdesc'];
            $unamePostVal = $_POST['_uname'];
            $pwdPostVal = $_POST['_pwd'];
        }
    }
    function removeSpecialChars($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>