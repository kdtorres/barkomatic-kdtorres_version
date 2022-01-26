<?php  require "resources/config.php"; ?>
<div class="card p-0">
    <header class="card-header">
        <p class="card-header-title mb-0">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span> Year Calendar
        </p>
    </header>
</div>
<div style="border-top:none;border-radius:0;" id="calendar" class="card">
    <img class="text-center" src="./resources/img/loading.gif" alt="Loading" style="text-align:center;width:48px;height:48px;">
</div>
<div class="modal fade" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <?php 
                    $stmt_sa = $con->prepare("SELECT * FROM tbl_ship_port");
                    $stmt_sa->execute();
                    $stmt_sa->store_result();
                    // $stmt_sa->bind_result($count_id);
                    $stmt_sa->fetch();
                    $num_tsp = $stmt_sa->num_rows();
                    if(empty($num_tsp)) { ?>
                        <p class="text-danger"><i class="mdi mdi-alert-circle"></i> Please add port location first!</p>
                <?php } ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="event-index">
                <?php 
                    $stmt_sa = $con->prepare("SELECT * FROM tbl_ship_port");
                    $stmt_sa->execute();
                    $stmt_sa->store_result();
                    // $stmt_sa->bind_result($count_id);
                    $stmt_sa->fetch();
                    $num_tsp = $stmt_sa->num_rows();
                    if(empty($num_tsp)) { ?>
                        <script>
                            $(document).ready(function(){
                                $("#add_sched_form :input").prop("disabled", true);
                                $("#add_sched_form :input[type=submit").prop("disabled", true);
                            });
                        </script>
                        <form class="form-horizontal" id="add_sched_form">
                <?php } else { ?>
                    <form class="form-horizontal" id="add_sched_form">
                <?php } ?>
                    <div class="form-group row">
                        <label for="min-date" class="col-sm-4 control-label">Depart Date</label>
                        <div class="col-sm-8">
                            <div class="input-group input-daterange" data-provide="datepicker">
                                <input type="hidden" name="ship" value="<?php echo $_SESSION['stff_ship_reside'];?>">
                                <input id="min-date" name="event-start-date" type="text" class="form-control">
                                <div class="input-group-prepend input-group-append">
                                    <div class="input-group-text"><i class="mdi mdi-calendar-month"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="event-name" class="col-sm-4 control-label">Depart Time</label>
                        <div class="col-sm-8">
                            <input id="ship_depart_time" name="ship_depart_time" type="time" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="port-from" class="col-sm-4 control-label">Location From</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="port-from" name="sched_loc_from">
                                <?php
                                    $stmt = $con->prepare("SELECT * FROM tbl_ship_port");
                                    if(mysqli_stmt_execute($stmt)) {
                                        $result = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) { ?>
                                                <option class="form-control" value="<?php echo $row['location_from']; ?>"><?php echo $row['location_from']; ?></option>
                                        <?php } 
                                        }
                                    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="port-from" class="col-sm-4 control-label">Port</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="port-from" name="sched_port_from">
                                <?php
                                    $stmt = $con->prepare("SELECT * FROM tbl_ship_port");
                                    if(mysqli_stmt_execute($stmt)) {
                                        $result = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) { ?>
                                                <option class="form-control" value="<?php echo $row['port_from']; ?>"><?php echo $row['port_from']; ?></option>
                                        <?php } 
                                        }
                                    } ?>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="port-to" class="col-sm-4 control-label">Location To</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="port-to" name="sched_loc_to">
                                <?php
                                    $stmt = $con->prepare("SELECT * FROM tbl_ship_port");
                                    if(mysqli_stmt_execute($stmt)) {
                                        $result = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) { ?>
                                                <option class="form-control" value="<?php echo $row['location_to']; ?>"><?php echo $row['location_to']; ?></option>
                                        <?php } 
                                        }
                                    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="port-from" class="col-sm-4 control-label">Port</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="port-from" name="sched_port_to">
                                <?php
                                    $stmt = $con->prepare("SELECT * FROM tbl_ship_port");
                                    if(mysqli_stmt_execute($stmt)) {
                                        $result = mysqli_stmt_get_result($stmt);
                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) { ?>
                                                <option class="form-control" value="<?php echo $row['port_to']; ?>"><?php echo $row['port_to']; ?></option>
                                        <?php } 
                                        }
                                    } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" name="add_sched_btn" id="add_sched_btn" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
