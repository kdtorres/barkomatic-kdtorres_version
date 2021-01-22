<?php 
    //display all ticket data from database
    $sql = "SELECT TicketID, TicketNo, Status FROM ticket";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th scope="row"><?php echo $row["TicketID"]; ?></th>
                <td><?php echo $row["TicketNo"]; ?></td>
                <td class="check_stats"><?php echo $row["Status"]; ?></td>
                <!-- <td class="text-center">
                    <?php //echo "<a href='inc/url/delete.php?id=".$row['TicketID']."'"."class='btn btn-danger btn-sm' title='Delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"?>
                </td> -->
            </tr>
    <?php }
    } 
        mysqli_close($conn);
?>