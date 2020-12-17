
<?php 
include 'config/dbconnection.php';
    // $s = false;
   $s = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // $a = 1;
        // $b = 1;
        // echo date('m-d-Y', strtotime($_REQUEST['date']));
        // echo "</br>";
        // echo date('H:i:s', strtotime($_REQUEST['time']));
        // echo "</br>";
        // echo date('g:i: A', strtotime($_REQUEST['time']));
        // $sex = $_POST["sex"];
        // if(empty($_REQUEST['date'])) {
        //     echo "<div class='alert alert-danger'>required</div>";
        // }
        // if($b == $a) {
        //     echo "<div class='alert alert-success text-center rounded-0 border-top-success' style='width:100%;position:fixed'><i class='fa fa-check-circle'></i> Submitted successfully!</div></br>";
        //     $s = TRUE;
        // }else {
        //     echo "invalid!";
        // }
        if(empty($_POST["sex"])) {
            echo "required!";
        }
         $s = $_POST['sex'];
            echo $s;
    }

    
   
   
?>



<!-- Ticket Area Start-->
<section class="bg-white" style="padding-right: 0 !important;"> 
    <div class="booking-area" role="document">
        <div class="booking-content">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="_row_4">
                    <div class="_col_4_6" style="visibility: hidden;">
                        <label class="label">No</label>
                        <input type='text' value="12344" disabled/>
                    </div>
                    <div class="_col_4_6">
                        <label class="label">Date <span class="astrsk">*</span></label>
                        <input type='date' name="date" />
                   
                    </div>
                </div>
                <div class="form-row mt-5">
                    <div class="form-group col-sm-3">
                        <div class="name">Name <span class="astrsk">*</span></div>
                        <input type="text" id="name" name="name" class="form-control" />
            
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="age">Age <span class="astrsk">*</span></div>
                        <input type="number" id="age" name="age" class="form-control" min="1" max="100" />
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="sex">Sex <span class="astrsk">*</span></div>
                        <select name="sex" class="border w-100 form-control-sm">
                            <option value="<?php echo $s; ?>" style="display:none"><?php echo $s; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="email">Email <span class="astrsk">*</span></div>
                        <input type="email" id="email" name="email" class="form-control" title="fffff" />
                        <div id="_email_info">
                            <span class="text-info text-center">This email is use for you to recieved a confirmation message. To claim your ticket
                                make sure you provide a <b>valid email address.</b>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-3">
                        <div class="time">Departure Time <span class="astrsk">*</span></div>
                        <input type="time" id="time" name="time" class="form-control" />
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="destination">Destination <span class="astrsk">*</span></div>
                        <input type='text' id="destination" name="destination" class="form-control" />
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="accommodation">Accommodation <span class="astrsk">*</span></div>
                        <input type='text' id="accommodation" name="accommodation" class="form-control"/>
                    </div>
                    <div class="form-group col-sm-3">
                        <div class="name_of_vessel">Name of Vessel <span class="astrsk">*</span></div>
                        <input type='text' id="name_of_vessel" name="name_of_vessel" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" id="submit" class="form-control btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>
