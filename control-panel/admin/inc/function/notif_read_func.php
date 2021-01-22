<?php 
    $sql = "SELECT Name FROM customer cus
    INNER JOIN admin_notification a ON cus.CustomerID = a.ID WHERE a.NotificationStatus = 'Unread'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
            <p><i class="fa fa-star-o" aria-hidden="true"></i> New customer <b><?php echo $row['Name']; ?></b></p></br>
<?php  }
    } 
    mysqli_close($conn);
?>