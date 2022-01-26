<?php 
require "../resources/config.php";
if(isset($_POST["action"]) && $_POST["action"] == "fetch_ship_profile") {
    session_start();
    fetch_ship_profile($con);
}
if($_POST["action"] == "insert") {
    session_start();
    ship_profile_upload($con);
}

if($_POST["action"] == "ship_chgn_psswd_btn") {
    session_start();
    ship_change_password($con);
}

if($_POST["action"] == "ship_ownr_signout") {
    session_start();
    sign_out();
}

//* ship profile fetch - data
function fetch_ship_profile($c) {
    $ship_line_id = $_SESSION['ship_id'];
    $stmt = $c->prepare("SELECT ship_logo,ship_name,email FROM tbl_ship_detail WHERE id=?");
    $stmt->bind_param("i", $ship_line_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
        $output = '
        <div class="image w-48 h-48 mx-auto">
            <img src="data:image/jpeg;base64,'.base64_encode($row["ship_logo"]).'" alt="Shipping Line Image" class="rounded-full">
        </div>
        <hr>
        <div class="field">
            <label class="label">Shipping Line Name</label>
            <div class="control">
                <input type="text" readonly value="'.$row["ship_name"].'" class="input is-static">
            </div>
        </div>
        <hr>
        <div class="field">
            <label class="label">E-mail</label>
            <div class="control">
                <input type="text" readonly value="'.$row["email"].'" class="input is-static">
            </div>
        </div>';
    echo $output;
    $stmt->close();
}

//* ship profile upload
function ship_profile_upload($c) {
    $file = file_get_contents($_FILES["image"]["tmp_name"]);
    $ship_name = $_POST['ship_name_profile'];
    $ship_email = $_POST['ship_email_profile'];
    $id = $_SESSION['ship_id'];
    $stmt = $c->prepare("UPDATE tbl_ship_detail SET ship_name=?,email=?,ship_logo=? WHERE id=?");
    $stmt->bind_param("sssi", $ship_name,$ship_email,$file,$id);
    $stmt->execute();
    echo "Updated Successfully Updated!";
}   

//* ship profile change password
function ship_change_password($c) {
    $pass = sha1($_POST['ship_nw_psswd']);
    $cpass = sha1($_POST['ship_c_nw_psswd']);
    if($pass != $cpass) {
        echo "Password did not match!";
    } else {
        $id = $_SESSION['ship_id'];
        $stmt = $c->prepare("UPDATE tbl_ship_account SET password=? WHERE id=?");
        $stmt->bind_param("si", $pass,$id);
        $stmt->execute();
        echo "Password changed successfully!";
    }
}

//* signout users
function sign_out() {
    session_destroy();
    echo "Signout successfully!";
}