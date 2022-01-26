
    <?php require "resources/templates/_search-trip_header.php"; ?>
    <div class="section pt-0 container">
        <div style="background: hsla(0,0%,100%,.94);" class="p-0 pt-0">
            <div class="row p-0">
                <div class="barkomatic-main-section col-12 p-0 pl-5">
                    <form id="search_sched_form">
                        <div class="row">
                            <div class="col-4 pl-5 p-0 pt-5 text-center">
                                <div class="row border-0" id="barkomatic-passenger-vehicle">
                                    <div class="barkomatic-nav barkomatic-nav-active col-6 pr-0 border-right p-2">
                                        <span><i class="fa fa-user ml-0 mr-2"></i> Passenger</span>
                                    </div>
                                    <div class="col-6">
                                        <select name="srch_ship_sched" id="srch_ship_sched" class="form-control" required>
                                            <?php 
                                                $stmt_ship_sd = $con->prepare("SELECT * FROM tbl_ship_detail"); 
                                                $stmt_ship_sd->execute();
                                                $row_ship_sd = $stmt_ship_sd->get_result();
                                                while ($row1 = $row_ship_sd->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row1['ship_name']; ?>"><?php echo $row1['ship_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 pl-5 p-0 pt-0">
                                <div class="row pt-4">
                                    <div class="col-6 text-dark pl-0 text-left pt-4">
                                        <div id="from_loc_data" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="srch_trp_loc_from">From</label>
                                            </div>
                                            <select class="form-control" name="srch_sched_loc_from" id="srch_sched_loc_from" required>
                                                <?php 
                                                    $stmt1 = $con->prepare("SELECT * FROM tbl_all_ship_port_location"); 
                                                    $stmt1->execute();
                                                    $result1 = $stmt1->get_result();
                                                    while ($row1 = $result1->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row1['location_from']; ?>"><?php echo $row1['location_from']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 pr-0 text-dark text-left pt-4">
                                        <div id="to_loc_data" class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="srch_trp_loc_to">To</label>
                                            </div>
                                            <select class="form-control" name="srch_sched_loc_to" id="srch_sched_loc_to" required>
                                                <?php 
                                                    $stmt2 = $con->prepare("SELECT * FROM tbl_all_ship_port_location"); 
                                                    $stmt2->execute();
                                                    $result2 = $stmt2->get_result();
                                                    while ($row2 = $result2->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row2['location_to']; ?>"><?php echo $row2['location_to']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-10 pl-5 p-0 pt-0">
                                <div class="row">
                                    <div class="col-6 pl-0">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">Depart</span>
                                            </div>
                                            <input type="date" name="srch_sched_loc_depart" id="srch_sched_loc_depart" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6 pr-0">
                                        <button type="submit" name="srch_sched_btn" id="srch_sched_btn" style="border-radius: 0px !important;border:none;" class="barkomatic-btn-search-trip form-control text-center btn text-white"><i class="fa fa-search ml-0"></i> Search Schedule</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container mt-3 mb-3" id="srch_sched_data">
                <form id="srch_sched_ftr_form">
                </form>
            </div>
            <div class="contianer">
                <form id="smmry_dptr_slctd_sched_form">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/roberto.bundle.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main/active.js"></script>
    <script src="js/main/schedule/process.js"></script>
    </body>
</html>