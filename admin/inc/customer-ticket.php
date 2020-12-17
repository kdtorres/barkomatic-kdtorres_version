<?php include '../config/dbconnection.php'; ?>

<div class="_cus_ticket_dt"  style="height: 600px;">
    <table class="table table-sm table-striped table-white table-bordered">
        <thead>
            <tr class="bg-info">
                <th scope="col" class="text-white">CustomerID</th>
                <th scope="col" class="text-white">TicketNo</th>
                <th scope="col" class="text-white">Name</th>
                <th scope="col" class="text-white">Age</th>
                <th scope="col" class="text-white">Sex</th>
                <th scope="col" class="text-white">Email</th>
                <th scope="col" class="text-white">ReservationDate</th>
                <th scope="col" class="text-white">DepartureTime</th>
                <th scope="col" class="text-white">Destination</th>
                <th scope="col" class="text-white">Accommodation</th>
                <th scope="col" class="text-white">NameOfVessel</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                // display all data from database
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
                            <th scope="row"><?php echo $row["CustomerID"]; ?></th>
                            <td><?php echo $row["TicketNo"]; ?></td>
                            <td><?php echo $row["Name"]; ?></td>
                            <td><?php echo $row["Age"]; ?></td>
                            <td><?php echo $row["Sex"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["ReservationDate"]; ?></td>
                            <td><?php echo $row["DepartureTime"]; ?></td>
                            <td><?php echo $row["Destination"]; ?></td>
                            <td><?php echo $row["Accommodation"]; ?></td>
                            <td><?php echo $row["NameOfVessel"]; ?></td>
                            <?php $count++;?>
                            <td class="text-center"><a href="" class="btn btn-success btn-sm" title="Approved"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="Declined"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                        </tr>   
                <?php }
            } ?>
        </tbody>
    </table>
</div>