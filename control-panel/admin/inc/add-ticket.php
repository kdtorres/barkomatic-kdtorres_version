<?php include 'function/add_ticket_func.php'; ?>
<div style="border-radius:2px;padding:1.675rem;box-shadow: 0px 1px 2px 0px rgba(60,64,67,0.3), 0px 1px 3px 1px rgba(60,64,67,0.15);position:absolute;position:fixed;">
    <form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h5>Add Ticket For Reservation</h5>
        <div class="_frm_tickt">
            <div class="_ticket_no">
                <div><label for="ticket_no">Quantity</label></div>
                <div>
                    <input type="text" id="ticket_no" name="qty" value="<?php echo $ticketPostMsg; ?>"></br>
                    <span class="text-danger"><?php echo $ticketErrMsg; ?></span>
                    <span class="text-danger"><?php echo $ticketNumMsg; ?></span>
                    <span class="text-danger"><?php echo $ticketPostNumMsg; ?></span>
                    <span class="text-danger"><?php echo $ticketNumLenMsg; ?></span>
                </div>
            </div>
            <div class="_ticket_stats">
                <div><label for="stats">Status</label></div>
                <div>
                    <input type="text" id="stats" name="stats" value="Open for reservation" readonly style="background-color:#eee;">
                </div>
            </div>
        </div>
        <div class="_submit_btn mt-3">
            <input type="submit" name="addticket" value="Add" class="btn btn-success btn-sm">
        </div>
    </form>
</div>
<div style="margin-left:388px;border-radius:2px;padding:1rem;box-shadow: 0px 1px 2px 0px rgba(60,64,67,0.3), 0px 1px 3px 1px rgba(60,64,67,0.15);">
    <div class="_available_ticket" style="width:400px;">
        <h5>Ticket Records</h5>
        <table class="table table-striped table-white table-bordered table-hover" id="id_find" style="max-height:300px !important">
            <thead>
                <tr class="bg-warning"> 
                    <th scope="col" class="text-white">ID</th>
                    <th scope="col" class="text-white">TicketNo</th>
                    <th scope="col" class="text-white">Status</th>
                    <!-- <th></th> -->
                </tr>
            </thead>
            <tbody>
                <?php include 'function/ticket_list_func.php'; ?>
            </tbody>
        </table>
    </div>
</div>
