<?php 
    $___t = "";
    $sql = "SELECT TicketNo, MIN(TicketID) FROM ticket WHERE Status = 'Open for reservation'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
            <label class="label">No. </label>
            <input type='text' value="<?php echo  $row["TicketNo"]?>" readonly/>
            <span class="text-danger"><?php echo $ticketErrMsg; ?></span>
<?php }
    } 
    $count = 0;
    $__sql = "SELECT * FROM ticket WHERE Status = 'Open for reservation'";
    $result = mysqli_query($conn, $__sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $count++;
        }
    }else {
        echo "</br><span class='text-danger'>Out of ticket stock!</span>";
    }
?>