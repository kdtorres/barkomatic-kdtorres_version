<?php 
    $sql = "SELECT AccountID,Firstname,Lastname,Middlename,Age,Sex,Email,Username,Password FROM Customer_accounts";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th scope="row"><?php echo $row["AccountID"]; ?></th>
                <th><?php echo $row["Firstname"]; ?></th>
                <th><?php echo $row["Lastname"]; ?></th>
                <th><?php echo $row["Middlename"]; ?></th>
                <th><?php echo $row["Age"]; ?></th>
                <th><?php echo $row["Sex"]; ?></th>
                <th><?php echo $row["Email"]; ?></th>
                <th><?php echo $row["Username"]; ?></th>
                <th><?php echo $row["Password"]; ?></th>
                <th><?php echo "<a href='inc/url/delete-cus-account.php?id=".$row['AccountID']."'"."class='btn btn-danger btn-sm' title='Delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"?></th>
            </tr>
    <?php }
    } 
    mysqli_close($conn);
?>