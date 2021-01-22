<?php
    include '../../../config/dbconnection.php';
    if(isset($_GET['destid'])) {
        $param_id = trim($_GET['destid']);
        deleteAdministrator($conn, $param_id);
    }
    function deleteAdministrator($conn, $id) {
        $sql_d = "DELETE ID, Destination FROM Destination_List 
                    WHERE ID = ?";
        if($stmt = mysqli_prepare($conn, $sql_d)) {
            echo 'hello';
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if(mysqli_stmt_execute($stmt)) {
                echo '
                    <script type="text/javascript">
                        setTimeout(function() {
                            alert("Deleted successfully.");
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/customer-account.php");
                        }, 300);
                    </script>
                ';
            }else {
                echo '
                    <script type="text/javascript">
                        setTimeout(function() {
                            alert("Something went wrong, try again later.");
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/customer-account.php");
                        }, 300);
                    </script>
                ';
                echo 'Something went wrong!' . mysqli_error($sql_d);
            }
            mysqli_stmt_close($stmt);
        }
    }
?>