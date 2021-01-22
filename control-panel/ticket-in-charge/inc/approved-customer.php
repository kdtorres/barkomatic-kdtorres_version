<table class="table table-striped table-sm table-success">
    <thead>
        <tr class="bg-dark">
        <th scope="col" class="text-white">ApprovedID</th>
        <th scope="col" class="text-white">TicketNo.</th>
        <th scope="col" class="text-white">Name</th>
        <th scope="col" class="text-white">Age</th>
        <th scope="col" class="text-white">Sex</th>
        <th scope="col" class="text-white">Email</th>
        <th scope="col" class="text-white">ReservationDate</th>
        <th scope="col" class="text-white">DepartureTime</th>
        <th scope="col" class="text-white">Destination</th>
        <th scope="col" class="text-white">Accommodation</th>
        <th scope="col" class="text-white">NameOfVessel</th>
        <th scope="col" class="text-info"></th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $ap_id = "";
            include '../config/dbconnection.php';

            $sql = "SELECT ApID, TicketNo, Name, Age, Sex, Email, ReservationDate, DepartureTime, Destination, Accommodation, NameOfVessel
            FROM approved_customer";
            $stmt = mysqli_prepare($conn, $sql);
            if(mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['ApID']; ?></th>
                        <td><?php echo $row['TicketNo']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Age']; ?></td>
                        <td><?php echo $row['Sex']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['ReservationDate']; ?></td>
                        <td><?php echo $row['DepartureTime']; ?></td>
                        <td><?php echo $row['Destination']; ?></td>
                        <td><?php echo $row['Accommodation']; ?></td>
                        <td><?php echo $row['NameOfVessel']; ?></td>
                        <td>
                            <?php 
                                echo "<a href='url/send-mail.php?apid=" . $row['ApID'] . "'" . "class='btn btn-primary btn-default' data-toggle='modal'>" . "<i class='fa fa-envelope' aria-hidden='true'></i>" . "</a>";
                            ?>
                        </td>
                    </tr>
            <?php }
                }
            } 
        ?>
    </tbody>
</table>