<?php 
    $sql = "SELECT ID, Destination FROM Destination_List";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th scope="row"><?php echo $row["ID"]; ?></th>
                <th><?php echo $row["Destination"]; ?></th>
                <th><?php echo "<a href='inc/url/dest_delete.php?destid=".$row['ID']."'"."class='btn btn-danger btn-sm' title='Delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"?></th>
            </tr>
    <?php }
    } 
    mysqli_close($conn);
?>