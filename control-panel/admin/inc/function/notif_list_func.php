<?php 
    include '../config/dbconnection.php';
    $sql = "SELECT * FROM admin_notification WHERE NotificationStatus = 'Unread'";
    $result = mysqli_query($conn, $sql);
    $count = 0;
    if(mysqli_num_rows($result) > 0) {
        while(mysqli_fetch_assoc($result)) {
            $count++;
        }
    }
?>