<?php 
    $sql = "SELECT u.ID, ud.Firstname, ud.Lastname, ud.MI, ud.RoleType, ud.RoleDescription,
            u.Username, u.Password
            FROM administrator u
            INNER JOIN administrator_details ud ON u.ID = ud.ID";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th scope="row"><?php echo $row['ID']; ?></th>
                <td><?php echo $row['Firstname']; ?></td>
                <td><?php echo $row['Lastname']; ?></td>
                <td><?php echo $row['MI']; ?></td>
                <td><?php echo $row['RoleType']; ?></td>
                <td><?php echo $row['RoleDescription']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td class="text-center">
                    <?php echo "<a href='inc/url/edit.php?id=".$row['ID']."'"."class='btn btn-warning btn-sm text-white' title='Edit'><i class='fa fa-pencil' aria-hidden='true'></i></a>"; ?>
                    &nbsp;
                    <?php echo "<a href='inc/url/delete.php?id=".$row['ID']."'"."class='btn btn-danger btn-sm' title='Delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"?>
                </td>
            </tr>
    <?php }
    } 
    mysqli_close($conn);
?>