<?php 
    include '../config/dbconnection.php';

    $sql_select = "SELECT * FROM admin_notification WHERE NotificationStatus = 'Unread'";
    $result = mysqli_query($conn, $sql_select);
    if(mysqli_num_rows($result) > 0) {
        $sql_update = "UPDATE admin_notification SET NotificationStatus = 'Read' WHERE NotificationStatus = 'Unread'";
        if(mysqli_query($conn, $sql_update)) {
            
        }
    }
?>