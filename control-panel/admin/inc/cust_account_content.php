<?php include 'function/add_ticket_func.php'; ?>
<div class="_available_ticket">
    <h5>Ticket Records</h5>
    <table class="table table-striped table-white table-bordered table-hover mt-4" id="id_find">
        <thead>
            <tr class="bg-warning"> 
                <th scope="col" class="text-white">AccountID</th>
                <th scope="col" class="text-white">Firstname</th>
                <th scope="col" class="text-white">Lastname</th>
                <th scope="col" class="text-white">Middlename</th>
                <th scope="col" class="text-white">Age</th>
                <th scope="col" class="text-white">Sex</th>
                <th scope="col" class="text-white">Email</th>
                <th scope="col" class="text-white">Username</th>
                <th scope="col" class="text-white">Password</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php include 'function/cus_account_list_func.php'; ?>
        </tbody>
    </table>
</div>
