<style>
    ._li_flex {
        display: flex;
        justify-content: space-between;
        
    }
    .dropdown-menu {
        left: auto;
        padding-left: 12px;
        position: absolute;
        width: 195px;
        background-color: #e1ecf4;
        border: 1px solid #39739d !important;
    }
    .dropdown-menu p {
        font-size: 0.675rem;
        color: #39739d;
    }
    #notif_btn {
        text-align: center;
        margin-right: 45px;
    }
</style>
<nav class="navbar bg-white">
    <div class="container-fluid">
        <ul class="mr-auto">
            <li class="_menu_icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </li>
        </ul>
        <div id="notif_btn">
            <?php 
                include '../config/dbconnection.php';

                $sql = "SELECT * FROM tic_notification WHERE NotificationStatus = 'Unread'";
                
                $result = mysqli_query($conn, $sql);
                $count = 0;
                if(mysqli_num_rows($result) > 0) {
                    while(mysqli_fetch_assoc($result)) {
                        $count++;
                    }
                }
            ?>
            <div class="notif_icon">
                <span>
                    <i style="font-size: 1.085rem;" class="fa fa-bell"></i>
                    <p style="" class='badge text-white'><?php echo $count; ?></p>
                </span>
            </div>
        </div>
        <ul class="_li_flex">
            <li>
                <ul class="dropdown-menu" style="right: 100px;top: 1px;margin-top: 33px;">
                    <li>
                        <a href="url/push_notif_read.php">
                            <?php 
                                $sql = "SELECT Name FROM approved_customer cus
                                INNER JOIN tic_notification a ON cus.ApID = a.ID WHERE a.NotificationStatus = 'Unread'";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                        <p><i class="fa fa-star-o" aria-hidden="true"></i> New customer <b><?php echo $row['Name']; ?></b> approved by admin.</p></br>
                            <?php  }
                                } 
                                mysqli_close($conn);
                            ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo htmlspecialchars($_SESSION["tic_username"]); ?></a>
            </li>
        </ul>
    </div>
</nav>