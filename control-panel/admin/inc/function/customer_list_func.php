<?php
    include '../config/dbconnection.php';
    // join three tables
    $sql = "SELECT cus.CustomerID, t.TicketNo, cus.Name, cus.Age, cus.Sex, cus.Email,
            rd.ReservationDate, rd.DepartureTime, rd.Destination, rd.Accommodation, rd.NameOfVessel 
            FROM customer cus
            INNER JOIN ticket t ON cus.CustomerID = t.TicketID
            INNER JOIN reservation_details rd ON cus.CustomerID = rd.ReservationID";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                <th scope="row"><?php echo $row['CustomerID']; ?></th>
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
                <td class="text-center">
                    <?php 
                        echo "<a href='inc/url/approved.php?customerid=" . $row['CustomerID'] . "'" .  "class='btn btn-sm btn-success' title='Approved'>" . "<i class='fa fa-check-circle' aria-hidden='true'></i>" . "</a>";
                    ?>
                </td>
            </tr>   
    <?php }
    mysqli_close($conn);
} ?>