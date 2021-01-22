<?php 
    include '../../../config/dbconnection.php';
    $fname = '';
    $lname = '';
    $mname = '';
    $rtype = '';
    $rdesc = '';
    $uname = '';
    $psswd = '';
    $param_id = '';
    if(isset($_GET['id'])) {
        $sql_s_j = "SELECT ud.Firstname, ud.Lastname, ud.MI, ud.RoleType, ud.RoleDescription,
        u.Username, u.Password
        FROM administrator u
        INNER JOIN administrator_details ud ON u.ID = ud.ID WHERE u.ID = ?";
        if($stmt = mysqli_prepare($conn, $sql_s_j)) {
            $param_id = trim($_GET['id']);
            mysqli_stmt_bind_param($stmt, 'i', $param_id);
            if(mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. 
                    Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $fname = $row['Firstname'];
                    $lname = $row['Lastname'];
                    $mname = $row['MI'];
                    $rtype = $row['RoleType'];
                    $rdesc = $row['RoleDescription'];
                    $uname = $row['Username'];
                    $psswd = $row['Password'];
                }
            }
            mysqli_stmt_close($stmt);
        }else {
            echo '
                <script type="text/javascript"> 
                    setTimeout(function(){
                        alert("Invalid URL parameter!");
                        window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/assign.php");
                    }, 300);
                </script>
            ';
            exit;
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = '';
        $lname = '';
        $mname = '';
        $rtype = '';
        $rdesc = '';
        $uname = '';
        $psswd = '';
        $id = trim($_POST['id']);
        $firstname = trim($_POST['fname']);
        $lastname = trim($_POST['lname']);
        $role_type = trim($_POST['rtype']);
        $middlename = trim($_POST['mname']);
        $description = trim($_POST['rdescription']);
        $username = trim($_POST['uname']);
        $password = trim($_POST['password']);
        editInfoAdministrator($conn, $firstname, $lastname,  $middlename, $role_type, $description, $username, $password, $id);
    }
    function editInfoAdministrator($c, $f, $l, $m, $r, $d, $u, $p, $i) {
        $sql_update = "UPDATE administrator a 
                        INNER JOIN administrator_details ad ON a.ID=ad.ID
                        SET ad.Firstname=?, ad.Lastname=?, ad.MI=?, ad.RoleType=?, ad.RoleDescription=?, a.Username=?, a.Password=?
                        WHERE a.ID=?";
        if($stmt = mysqli_prepare($c, $sql_update)) {
            mysqli_stmt_bind_param($stmt, 'sssssssi', $f, $l, $m, $r, $d, $u, $p, $i);
            if(mysqli_stmt_execute($stmt)) {
                echo '
                    <script type="text/javascript">
                        setTimeout(function() {
                            alert("Updated successfully.");
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/assign.php");
                        }, 300);
                    </script>
                ';
                exit;
            }else {
                echo '
                    <script type="text/javascript">
                        setTimeout(function() {
                            alert("Something went wrong, try again later.");
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/assign.php");
                        }, 300);
                    </script>
                ';
                exit;
            }
            mysqli_stmt_close($stmt);
        }
    }
?>