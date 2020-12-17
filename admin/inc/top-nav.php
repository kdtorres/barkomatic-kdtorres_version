<style>
    ._li_flex {
        display: flex;
        justify-content: space-between;
        
    }
    .dropdown-menu {
        left: auto;
        top: 39px;
        font-size: 0.595rem;
        padding-left: 12px;
        display: block;
        position: absolute;
        width: 195px;
        background-color: #e1ecf4;
    }
    .dropdown-menu span {
        color: #39739d;
    }
</style>
<nav class="navbar bg-white">
    <div class="container-fluid">
        <ul class="mr-auto">
            <li class="_menu_icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </li>
        </ul>
        <ul class="_li_flex">
            <li>
                <span style="font-size:0.785rem" id="potaclick">
                    <span ><i class="fa fa-bell"></i></span>
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
                        echo "<span style='background-color:#dc3545;' class='badge text-white'> " . $count . "</span>";
                    ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
                <ul class="dropdown-menu">
                    <li>
                        <a href="customer.php">
                            <?php 
                                $sql = "SELECT cus.Name FROM customer cus
                                INNER JOIN admin_notification a ON cus.CustomerID = a.ID WHERE a.NotificationStatus = 'Unread'";
                                $result = mysqli_query($conn, $sql);
                                $count = 0;
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                        <span><i class="fa fa-star-o" aria-hidden="true"></i> New customer <b><?php echo $row['Name']; ?></b></span></br>
                            <?php  }
                                } ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> kimdavetorres</a>
            </li>
        </ul>
    </div>
</nav>