<?php
require "../../resources/config.php";

//* insert records
if(isset($_POST['action']) && $_POST['action'] == 'add_port_loc_form') {
    session_start();
    add_port_location($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'add_sched_form') {
    session_start();
    add_schedule($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'add_accomm_form') {
    session_start();
    add_accomodation_type($con);
}

//* fetch records
if(isset($_POST['action']) && $_POST['action'] == 'fetch_added_loc') {
    fetch_port_location($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'fetch_depart_detail') {
    fetch_depart_detail($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'fetch_accomm_detail') {
    fetch_accomm_detail($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'num_sched_data') {
    session_start();
    fetch_num_sched($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'num_port_data') {
    session_start();
    fetch_num_port($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'active_reservation_data') {
    session_start();
    active_reservation($con);
}

if(isset($_POST['action']) && $_POST['action'] == 'fetch_reservation_list') {
    session_start();
    reservation_data($con);
}

//* signout
if($_POST["action"] == "ship_stff_signout") {
    session_start();
    sign_out();
}
function sign_out() {
    session_destroy();
    echo "Signout Successfully!";
}

//* edit-delete - port location
if(isset($_POST['action']) && $_POST['action'] == 'edit_port_form') {
    session_start();
    edit_port_form($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'port_edit_id_form') {
    port_edit_id_form($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'delete_location') {
    session_start();
    delete_location($con);
}

//* delete - reservation
if(isset($_POST['action']) && $_POST['action'] == 'delete_reservation') {
    session_start();
    delete_reservation($con);
}

//* edit-delete - ship schedule
if(isset($_POST['action']) && $_POST['action'] == 'edit_ship_sched_form') {
    session_start();
    edit_ship_sched_form($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'ship_sched_edit_id_form') {
    ship_sched_edit_id_form($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'delete_sched_ship') {
    session_start();
    delete_sched_ship($con);
}

//* edit-delete - ship accom
if(isset($_POST['action']) && $_POST['action'] == 'edit_accom_form') {
    session_start();
    edit_accom_form($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'accom_edit_id_form') {
    accom_edit_id_form($con);
}
if(isset($_POST['action']) && $_POST['action'] == 'delete_accom') {
    session_start();
    delete_accom($con);
}

//* reservation details
function reservation_data($c) {
    $stmt = $c->prepare("SELECT * FROM tbl_passenger_reservation WHERE ship_name=?");
    $stmt->bind_param('s',$_SESSION['stff_ship_reside']);
    $stmt->execute();
    $result = $stmt->get_result();
    $output = '
        <table class="table table-bordered table-sm mb-0">
            <thead>
                <tr>
                    <th>Reservation No.</th>
                    <th>Passenger Name</th>
                    <th>Route</th>
                    <th>Date/Time</th>
                    <th>Accomodation</th>
                    <th>Reservation Date</th>
                    <th>Expiration</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="port-location-data-content">';
    while ($row = $result->fetch_assoc()) {
        $output .= '
            <tr>
                <td>'.$row["reservation_number"].'</td>
                <td>'.$row["passenger_name"].'</td>
                <td>'.$row["location_from"].' to '.$row["location_to"].'</td>
                <td>'.$row["depart_date"].' '.$row["depart_time"].'</td>
                <td>'.$row["accomodation"].'</td>
                <td>'.$row["reservation_date"].'</td>
                <td>'.$row["expiration"].'</td>
                <td>'.$row["status"].'</td>
                <td class="text-center">
                    <button type="button" name="delete" id="'.$row["id"].'" class="button small red delete_reservation_btn">
                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                </td>
            </tr>';
    }
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
}

//* fetch total number of schedules
function fetch_num_sched($c) {
    $counter = 0;
    $sql_slct = "SELECT * FROM tbl_ship_schedule tbl_schds
                 INNER JOIN tbl_ship_belong tbl_sb ON tbl_schds.id = tbl_sb.id
                 WHERE tbl_sb.ship=?";
    $stmt = $c->prepare($sql_slct);
    $stmt->bind_param('s', $_SESSION['stff_ship_reside']);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $counter++;
    }
    $output = '
    <div class="flex items-center justify-between">
        <div class="widget-label">
            <h3>Active Schedules</h3>
            <h1>'.$counter.'</h1>
        </div>
        <span class="icon widget-icon text-red-500"><i class="mdi mdi-calendar-multiple-check mdi-48px"></i></span>
    </div>';
    echo $output;
    $stmt->close();
}

//* fetch total number of ports
function fetch_num_port($c) {
    $counter = 0;
    $sql_slct = "SELECT * FROM tbl_ship_port tbl_sp
                 INNER JOIN tbl_ship_belong tbl_sb ON tbl_sp.id = tbl_sb.id
                 WHERE tbl_sb.ship=?";
    $stmt = $c->prepare($sql_slct);
    $stmt->bind_param('s', $_SESSION['stff_ship_reside']);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $counter++;
    }
    $output = '
    <div class="flex items-center justify-between">
        <div class="widget-label">
            <h3>No. of Ports</h3>
            <h1>'.$counter.'</h1>
        </div>
        <span class="icon widget-icon text-blue-500"><i class="mdi mdi-anchor mdi-48px"></i></span>
    </div>';
    echo $output;
    $stmt->close();
}

//* total active reservation
function active_reservation($c) {
    $counter = 0;
    $sql_slct = "SELECT * FROM tbl_passenger_reservation WHERE ship_name=?";
    $stmt = $c->prepare($sql_slct);
    $stmt->bind_param('s', $_SESSION['stff_ship_reside']);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        $counter++;
    }
    $output = '
    <div class="flex items-center justify-between">
        <div class="widget-label">
            <h3>Active Reservation</h3>
            <h1>'.$counter.'</h1>
        </div>
        <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
    </div>';
    echo $output;
    $stmt->close();
}

//* add port location
function add_port_location($c) {
    $lf = check_input($_POST['location_from']);
    $p1 = check_input($_POST['port_1']);
    $lt = check_input($_POST['location_to']);
    $p2 = check_input($_POST['port_2']);
    $ship_belong = $_POST['ship'];

    $stmt_sb = $c->prepare("INSERT INTO tbl_ship_belong (ship) VALUES (?)");
    $stmt_sb->bind_param('s', $ship_belong);
    $stmt_sb->execute();
    $stmt_sb->close();

    $stmt_tsp = $c->prepare("INSERT INTO tbl_ship_port (location_from,port_from,location_to,port_to) VALUES (?,?,?,?)");
    $stmt_tsp->bind_param('ssss', $lf,$p1,$lt,$p2);
    $stmt_tsp->execute();
    $stmt_tsp->close();

    $stmt_tspl = $c->prepare("INSERT INTO tbl_all_ship_port_location (location_from,location_to) VALUES (?,?)");
    $stmt_tspl->bind_param('ss', $lf,$lt);
    $stmt_tspl->execute();
    $stmt_tspl->close();

    echo 'Added Successfully.';
}

//* ship port fetch data
function fetch_port_location($c) {
    $stmt = $c->prepare("SELECT * FROM tbl_ship_port"); 
    $stmt->execute();
    $result = $stmt->get_result();
    $output = '
        <table class="table table-bordered table-sm mb-0">
            <thead>
                <tr>
                    <th>Location From</th>
                    <th>Port</th>
                    <th>Location To</th>
                    <th>Port</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="port-location-data-content">';
    while ($row = $result->fetch_assoc()) {
        $output .= '
            <tr>
                <td>'.$row["location_from"].'</td>
                <td>'.$row["port_from"].'</td>
                <td>'.$row["location_to"].'</td>
                <td>'.$row["port_to"].'</td>
                <td class="text-center">
                    <button type="button" name="update" id="'.$row["id"].'" class="button small green update_loc_btn" data-toggle="modal" data-target="#exampleModal">
                        <span class="icon"><i class="mdi mdi-pencil"></i></span>
                    </button>
                    <button type="button" name="delete" id="'.$row["id"].'" class="button small red delete_loc_btn">
                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                </td>
            </tr>';
    }
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
    $stmt->close();
}

//* ship schedule fetch data
function fetch_depart_detail($c) {
    $stmt = $c->prepare("SELECT * FROM tbl_ship_schedule"); 
    $stmt->execute();
    $result = $stmt->get_result();
    $output = '
        <table class="table table-bordered table-sm mb-0">
            <thead>
                <tr>
                    <th>Depart Date</th>
                    <th>Depart Time</th>
                    <th>Location From</th>
                    <th>Port</th>
                    <th>Location To</th>
                    <th>Port</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="port-location-data-content">';
    while ($row = $result->fetch_assoc()) {
        $output .= '
            <tr>
                <td>'.$row["depart_date"].'</td>
                <td>'.$row["depart_time"].'</td>
                <td>'.$row["location_from"].'</td>
                <td>'.$row["port_from"].'</td>
                <td>'.$row["location_to"].'</td>
                <td>'.$row["port_to"].'</td>
                <td class="text-center">
                    <button type="button" name="update" id="'.$row["id"].'" class="button small green update_ship_sched_btn" data-toggle="modal" data-target="#exampleModal">
                        <span class="icon"><i class="mdi mdi-pencil"></i></span>
                    </button>
                    <button type="button" name="delete" id="'.$row["id"].'" class="button small red delete_ship_sched_btn">
                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                </td>
            </tr>';
    }
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
}

//* add schedule for booking
function add_schedule($c) {
    $d = date('Y-m-d', strtotime($_POST['event-start-date']));
    $t = date('h:i A', strtotime($_POST['ship_depart_time']));
    $slf= check_input($_POST['sched_loc_from']);
    $spf = check_input($_POST['sched_port_from']);
    $slt = check_input($_POST['sched_loc_to']);
    $spt = check_input($_POST['sched_port_to']);
    $ship_belong = check_input($_POST['ship']);

    $stmt = $c->prepare("INSERT INTO tbl_ship_schedule (depart_date,depart_time,location_from,port_from,location_to,port_to) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param('ssssss', $d,$t,$slf,$spf,$slt,$spt);
    $stmt->execute();
    $stmt->close();

    $stmt_sb = $c->prepare("INSERT INTO tbl_ship_belong (ship) VALUES (?)");
    $stmt_sb->bind_param('s', $ship_belong);
    $stmt_sb->execute();
    $stmt_sb->close();

    echo 'Schedule added successfully!';
}

//* fetch accommodation type
function fetch_accomm_detail($c) {
    $stmt = $c->prepare("SELECT * FROM tbl_ship_has_accomodation_type"); 
    $stmt->execute();
    $result = $stmt->get_result();
    $output = '
        <table class="table table-bordered table-sm mb-0">
            <thead>
                <tr>
                    <th>Accomodation Name</th>
                    <th>Seat Type</th>
                    <th>Aircon</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="port-location-data-content">';
    while ($row = $result->fetch_assoc()) {
        $output .= '
            <tr>
                <td>'.$row["accomodation_name"].'</td>
                <td>'.$row["seat_type"].'</td>
                <td>'.$row["aircon"].'</td>
                <td>₱ '.$row["price"].'</td>
                <td class="text-center">
                    <button type="button" name="update" id="'.$row["id"].'" class="button small green update_accom_btn" data-toggle="modal" data-target="#exampleModal">
                        <span class="icon"><i class="mdi mdi-pencil"></i></span>
                    </button>
                    <button type="button" name="delete" id="'.$row["id"].'" class="button small red delete_accom_btn">
                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                </td>
            </tr>';
    }
    $output .= '</tbody>';
    $output .= '</table';
    echo $output;
}

//* add ship accommodation type
function add_accomodation_type($c) {
    $accomm_name = check_input($_POST['accomodation_name']);
    $seat_typ = check_input($_POST['accomm_seat_typ']);
    $aircon = check_input($_POST['accomm_aircon']);
    $price = check_input($_POST['accomm_typ_price']);
    $ship_belong = $_POST['ship'];

    $stmt = $c->prepare("INSERT INTO tbl_ship_has_accomodation_type (accomodation_name,seat_type,aircon,price) VALUES (?,?,?,?)");
    $stmt->bind_param('ssss', $accomm_name,$seat_typ,$aircon,$price);
    $stmt->execute();
    $stmt->close();

    $stmt_sb = $c->prepare("INSERT INTO tbl_ship_belong (ship) VALUES (?)");
    $stmt_sb->bind_param('s', $ship_belong);
    $stmt_sb->execute();
    $stmt_sb->close();

    echo 'Added Successfully!';
}

//* edit-delete - port location
function edit_port_form($con) {
    if(isset($_SESSION['edit_loc_id']) && $_SESSION['edit_loc_id'] != '') {
        $ship_name = $_SESSION['stff_ship_reside'];
        $edit_loc_id = $_SESSION['edit_loc_id']; 
        $edit_location_from = check_input($_POST['edit_location_from']);
        $edit_port_from = check_input($_POST['edit_port_from']);
        $edit_location_to = check_input($_POST['edit_location_to']);
        $edit_port_to = check_input($_POST['edit_port_to']);

        $sql_updt = "UPDATE tbl_ship_port tbl_sp
                    INNER JOIN tbl_ship_belong tbl_sb ON tbl_sp.id=tbl_sb.id
                    SET tbl_sp.location_from=?,tbl_sp.port_from=?,tbl_sp.location_to=?,tbl_sp.port_to=?
                    WHERE tbl_sp.id=? AND tbl_sb.ship=?";

        $stmt = $con->prepare($sql_updt);
        $stmt->bind_param('ssssis',$edit_location_from,$edit_port_from,$edit_location_to,$edit_port_to,$edit_loc_id,$ship_name);
        $stmt->execute();
        $stmt->close();
        unset($_SESSION['edit_loc_id']);
        echo "Updated successfully!";
    }else{
        echo "session edit id is empty!";
    }
} 
function port_edit_id_form($con) {
    if(session_start()) {
        $edit_id = $_POST['edit_loc_id'];
        $_SESSION['edit_loc_id'] = $edit_id;
        echo "Assigned id for edit! " . $edit_id;
    }else{
        echo "session for edit id was not set!";
    }
}
function delete_location($con) {
    $delete_id = $_POST['delete_loc_id'];
    $ship_name = $_SESSION['stff_ship_reside'];
    
    $sql_dlt = "DELETE tbl_ship_port,tbl_ship_belong FROM tbl_ship_belong 
                INNER JOIN tbl_ship_port ON tbl_ship_belong.id = tbl_ship_port.id
                WHERE tbl_ship_port.id=? AND tbl_ship_belong.ship=?";

    $stmt = $con->prepare($sql_dlt);
    $stmt->bind_param('is',$delete_id,$ship_name);
    $stmt->execute();
    $stmt->close();
    echo "Deleted Successfully!";
}

//* delete - reservation
function delete_reservation($con) {
    $delete_id = $_POST['delete_resrv_id'];
    $ship_name = $_SESSION['stff_ship_reside'];
    
    $sql_dlt = "DELETE tbl_passenger_reservation FROM tbl_passenger_detail 
                INNER JOIN tbl_passenger_reservation ON tbl_passenger_detail.id = tbl_passenger_reservation.id
                WHERE tbl_passenger_detail.id=? AND tbl_passenger_reservation.ship_name=?";

    $stmt = $con->prepare($sql_dlt);
    $stmt->bind_param('is',$delete_id,$ship_name);
    $stmt->execute();
    $stmt->close();
    echo "Deleted Successfully!";
}

//* edit-delete - ship schedule
function edit_ship_sched_form($con) {
    if(isset($_SESSION['edit_ship_sched_id']) && $_SESSION['edit_ship_sched_id'] != '') {
        $ship_name = $_SESSION['stff_ship_reside'];
        $edit_loc_id = $_SESSION['edit_ship_sched_id']; 
        $edit_ship_sched_date = date('Y-m-d',strtotime($_POST['edit_ship_sched_date']));
        $edit_ship_sched_dt = date('h:i A',strtotime($_POST['edit_ship_sched_dt']));
        $edit_ship_sched_from = check_input($_POST['edit_ship_sched_from']);
        $edit_ship_sched_port_from = check_input($_POST['edit_ship_sched_port_from']);
        $edit_ship_sched_to = check_input($_POST['edit_ship_sched_to']);
        $edit_ship_sched_port_to = check_input($_POST['edit_ship_sched_port_to']);

        $sql_updt = "UPDATE tbl_ship_schedule tbl_sp
                    INNER JOIN tbl_ship_belong tbl_sb ON tbl_sp.id=tbl_sb.id
                    SET tbl_sp.depart_date=?,tbl_sp.depart_time=?,tbl_sp.location_from=?,tbl_sp.port_from=?,tbl_sp.location_to=?,tbl_sp.port_to=?
                    WHERE tbl_sp.id=? AND tbl_sb.ship=?";

        $stmt = $con->prepare($sql_updt);
        $stmt->bind_param('ssssssis',$edit_ship_sched_date,$edit_ship_sched_dt,$edit_ship_sched_from,$edit_ship_sched_port_from,$edit_ship_sched_to,$edit_ship_sched_port_to,$edit_loc_id,$ship_name);
        $stmt->execute();
        $stmt->close();
        unset($_SESSION['edit_ship_sched_id']);
        echo "Updated successfully!";
    }else{
        echo "session edit id is empty!";
    }
}
function ship_sched_edit_id_form($con) {
    if(session_start()) {
        $edit_id = $_POST['edit_ship_sched_id'];
        $_SESSION['edit_ship_sched_id'] = $edit_id;
        echo "Assigned id for edit! " . $edit_id;
    }else{
        echo "session for edit id was not set!";
    }
}
function delete_sched_ship($con) {
    $delete_id = $_POST['delete_ship_sched_id'];
    $ship_name = $_SESSION['stff_ship_reside'];
    
    $sql_dlt = "DELETE tbl_ship_schedule,tbl_ship_belong FROM tbl_ship_belong 
                INNER JOIN tbl_ship_schedule ON tbl_ship_belong.id = tbl_ship_schedule.id
                WHERE tbl_ship_schedule.id=? AND tbl_ship_belong.ship=?";

    $stmt = $con->prepare($sql_dlt);
    $stmt->bind_param('is',$delete_id,$ship_name);
    $stmt->execute();
    $stmt->close();
    echo "Deleted Successfully!";
}

//* edit-delete - ship accom
function edit_accom_form($con) {
    if(isset($_SESSION['edit_accom_id']) && $_SESSION['edit_accom_id'] != '') {
        $ship_name = $_SESSION['stff_ship_reside'];
        $edit_loc_id = $_SESSION['edit_accom_id']; 
        $edit_accom_name = $_POST['edit_accom_name'];
        $edit_accom_st = $_POST['edit_accom_st'];
        $edit_accom_aircon = $_POST['edit_accom_aircon'];
        $edit_accom_price = $_POST['edit_accom_price'];

        $sql_updt = "UPDATE tbl_ship_has_accomodation_type tbl_sp
                    INNER JOIN tbl_ship_belong tbl_sb ON tbl_sp.id=tbl_sb.id
                    SET tbl_sp.edit_accom_name=?,tbl_sp.edit_accom_st=?,tbl_sp.edit_accom_aircon=?,tbl_sp.edit_accom_price=?
                    WHERE tbl_sp.id=? AND tbl_sb.ship=?";

        $stmt = $con->prepare($sql_updt);
        $stmt->bind_param('ssssis',$edit_accom_name,$edit_accom_st,$edit_accom_aircon,$edit_accom_price,$edit_loc_id,$ship_name);
        $stmt->execute();
        $stmt->close();
        unset($_SESSION['edit_accom_id']);
        echo "Updated successfully!";
    }else{
        echo "session edit id is empty!";
    }
}
function accom_edit_id_form($con) {
    if(session_start()) {
        $edit_id = $_POST['edit_accom_id'];
        $_SESSION['edit_accom_id'] = $edit_id;
        echo "Assigned id for edit! " . $edit_id;
    }else{
        echo "session for edit id was not set!";
    }
}
function delete_accom($con) {
    $delete_id = $_POST['delete_accom_id'];
    $ship_name = $_SESSION['stff_ship_reside'];
    
    $sql_dlt = "DELETE tbl_ship_has_accomodation_type,tbl_ship_belong FROM tbl_ship_belong 
                INNER JOIN tbl_ship_has_accomodation_type ON tbl_ship_belong.id = tbl_ship_has_accomodation_type.id
                WHERE tbl_ship_has_accomodation_type.id=? AND tbl_ship_belong.ship=?";

    $stmt = $con->prepare($sql_dlt);
    $stmt->bind_param('is',$delete_id,$ship_name);
    $stmt->execute();
    $stmt->close();
    echo "Deleted Successfully!";
}

// sanitize data 
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}