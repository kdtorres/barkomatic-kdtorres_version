<!-- PHP session is used to store and pass information from one page to another temporarily (until user close the website). ... PHP session creates unique user id for each browser to recognize the user and avoid conflict between multiple browsers. -->
<!-- mysqli_stmt_fetch Fetch results from a prepared statement into the bound variables -->
<!-- mysqli_stmt_store_result() transfers all the rows of the result set into PHP memory. ... This is useful when the result set is large. This function returns a mysqli_result resource. -->
<?php 
    include '../config/dbconnection.php';
    $uname_err= '';
    $psswd_err = '';
    $un = false;
    $pw = false;
    if(isset($_POST['submit'])) {
        if($_GET['url'] === 'admin') {
            $admin_uname = '';
            $admin_pw = '';
            // Check if username is empty
            if(empty(trim($_POST['u_name']))){
                $uname_err = 'Please enter username.';
            } else{
                $admin_uname = trim($_POST['u_name']);
                $un = true;
            }
            // Check if password is empty
            if(empty(trim($_POST['p_wd']))){
                $psswd_err = 'Please enter your password.';
            } else{
                $admin_pw = trim($_POST['p_wd']);
                $pw = true;
            }
            adminAuthentication($conn, $admin_uname, $admin_pw, $un, $pw);
        }

        if($_GET['url'] === 'ticket-in-charge') {
            $tic_uname = '';
            $tic_pw = '';
            if(empty(trim($_POST['u_name']))){
                $uname_err = 'Please enter username.';
            } else{
                $tic_uname = trim($_POST['u_name']);
                $un = true;
            }
            // Check if password is empty
            if(empty(trim($_POST['p_wd']))){
                $psswd_err = 'Please enter your password.';
            } else{
                $tic_pw = trim($_POST['p_wd']);
                $pw = true;
            }
            ticAuthentication($conn, $tic_uname, $tic_pw, $un, $pw);
        }
    }

    function adminAuthentication($conn, $admin_uname, $admin_pw, $un, $pw) {
        if($un === true && $pw === true) {
            $sql_rtype = "SELECT a.ID, a.Username, a.Password, ad.RoleType FROM administrator a
                        JOIN administrator_details ad ON ad.ID = a.ID
                        WHERE ad.RoleType = 'Admin' AND a.Username = ?";
            if($stmt = mysqli_prepare($conn, $sql_rtype)) {
                //Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, 's', $param_username);
                // Set parameters
                $param_username = $admin_uname;
                // Execute the prepared statement
                if(mysqli_stmt_execute($stmt)) {
                    // Store the execution result
                    mysqli_stmt_store_result($stmt);
                    // Check if username exists, then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $password, $role_type);
                        if(mysqli_stmt_fetch($stmt)){
                            if($admin_pw == $password) {
                                // Password is correct, start a new administrator session
                                session_start();
                                // Store data in session variables
                                $_SESSION['logged_admin'] = 'admin';
                                $_SESSION['admin_username'] = $admin_uname;                            
                                // Redirect welcome page
                                header('location: admin/welcome.php');
                            }else {
                                // JS error message if password is not valid
                                $psswd_err = '
                                    <script type="text/javascript">
                                        document.addEventListener("DOMContentLoaded", function(){ 
                                            document.getElementById("pw_error").innerHTML = "The password you entered was not valid!";
                                        }, false);
                                    </script>
                                ';
                                echo $psswd_err;
                            }
                        }
                    }else {
                        // Display an error message if username doesn't exist
                        $uname_err = '
                            <script type="text/javascript">
                                document.addEventListener("DOMContentLoaded", function(){ 
                                    document.getElementById("un_error").innerHTML = "No account found with that username!";
                                }, false);
                            </script>
                        ';
                        echo $uname_err;
                    
                    }
                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
        }else {
            echo '<p class="text-danger">Oops! Something went wrong. Please try again later.</p>';
        }
    }

    function ticAuthentication($conn, $tic_uname, $tic_pw, $un, $pw) {
        $_SESSION['tic_username'] = '';   
        if($un === true && $pw === true) {
            $sql_rtype = "SELECT a.ID, a.Username, a.Password, ad.RoleType FROM administrator a
                        JOIN administrator_details ad ON ad.ID = a.ID
                        WHERE ad.RoleType = 'Ticket-In-Charge' AND a.Username = ?";
            if($stmt = mysqli_prepare($conn, $sql_rtype)) {
                //Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, 's', $param_username);
                // Set parameters
                $param_username = $tic_uname;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)) {
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $password, $role_type);
                        if(mysqli_stmt_fetch($stmt)){
                            // if(password_verify($tic_pw, $password)) {
                            if($tic_pw == $password) {
                                // Password is correct, so start a new session
                                session_start();
                                // Store data in session variables
                                $_SESSION['logged_tic'] = 'ticket-in-charge';
                                $_SESSION['tic_username'] = $tic_uname;                            
                                // Redirect ticket-in-charge to welcome page
                                header('location: ticket-in-charge/welcome.php');
                            }else {
                                // Display an error message if password is not valid
                                $psswd_err = '
                                    <script type="text/javascript">
                                        document.addEventListener("DOMContentLoaded", function(){ 
                                            document.getElementById("pw_error").innerHTML = "The password you entered was not valid!";
                                        }, false);
                                    </script>
                                ';
                                echo $psswd_err;
                            }
                        }
                    }else {
                        // Display an error message if username doesn't exist
                        $uname_err = '
                            <script type="text/javascript">
                                document.addEventListener("DOMContentLoaded", function(){ 
                                    document.getElementById("un_error").innerHTML = "No account found with that username!";
                                }, false);
                            </script>
                        ';
                        echo $uname_err;
                    }
                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
        }else {
            echo '<p class="text-danger">Oops! Something went wrong. Please try again later.</p>';
        }
    }
?>

