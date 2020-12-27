<?php 
    include '../../config/dbconnection.php';

    $sql_select = "SELECT * FROM tic_notification WHERE NotificationStatus = 'Unread'";
    $result = mysqli_query($conn, $sql_select);
    if(mysqli_num_rows($result) > 0) {
        $sql_update = "UPDATE tic_notification SET NotificationStatus = 'Read' WHERE NotificationStatus = 'Unread'";
        if(mysqli_query($conn, $sql_update)) {
            echo "
                <script type='text/javascript'>
                    setTimeout(function() {
                        location.reload();
                        window.location.replace('http://localhost/vg-shipping-lines/ticket-in-charge/customer.php');
                    }, false);
                </script>
            ";
        }else {
            echo "
                <script type='text/javascript'>
                    setTimeout(function() {
                        window.location.replace('http://localhost/vg-shipping-lines/ticket-in-charge/customer.php');
                    }, false);
                </script>
            ";
        }
    }
?>