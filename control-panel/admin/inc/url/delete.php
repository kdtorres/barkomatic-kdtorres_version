<?php
    include '../../../config/dbconnection.php';
    if(isset($_GET['id'])) {
        $param_id = trim($_GET['id']);
        deleteAdministrator($conn, $param_id);
    }
    function deleteAdministrator($c, $id) {
        $sql_d = "DELETE a, ad FROM administrator a 
                    INNER JOIN administrator_details ad ON a.ID = ad.ID
                    WHERE a.ID = ?";
        if($stmt = mysqli_prepare($c, $sql_d)) {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if(mysqli_stmt_execute($stmt)) {
                echo '
                    <script type="text/javascript">
                        setTimeout(function() {
                            alert("Deleted successfully.");
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/assign.php");
                        }, 300);
                    </script>
                ';
            }else {
                echo '
                    <script type="text/javascript">
                        setTimeout(function() {
                            alert("Something went wrong, try again later.");
                            window.location.replace("http://localhost/vg-shipping-lines/control-panel/admin/assign.php");
                        }, 300);
                    </script>
                ';
            }
            mysqli_stmt_close($stmt);
        }
    }
?>