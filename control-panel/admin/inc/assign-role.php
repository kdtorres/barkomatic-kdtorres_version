<?php include 'function/assign_role_func.php'; ?>
<div class="_assign_role" style="display:block;">
    <div class="_assign_role_frm" style="margin-top:60px;box-shadow:0px 1px 2px 0px rgba(60,64,67,0.3), 0px 1px 3px 1px rgba(60,64,67,0.15);padding:12px;border-radius:2px;margin-bottom:0.5rem;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <h5>Assign Role</h5>
            <div class="_frm_role_col1">
                <div class="_role_col1">
                    <div>
                        <label for="_fname">Firstname</label>
                    </div>
                    <div>
                        <input type="text" id="_fname" value="<?php $fnamePostVal; ?>" name="_fname" required>
                        <span><?php echo $fnameErrMsg; ?></span>
                    </div>
                </div>
                <div class="_role_col1">
                    <div>
                        <label for="_lname">Lastname</label>
                    </div>
                    <div>
                        <input type="text" id="_lname" value="<?php $lnamePostVal; ?>" name="_lname" required>
                        <span><?php echo $lnameErrMsg; ?></span>
                    </div>
                </div>
                <div class="_role_col1">
                    <div>
                        <label for="_mname">MI</label>
                    </div>
                    <div>
                        <input type="text" id="_mname" value="<?php $mnamePostVal; ?>" name="_mname" required>
                        <span><?php echo $mnameErrMsg; ?></span>
                    </div>
                </div>
                <div class="_role_col1">
                    <div>
                        <label for="_rtype">Role Type</label>
                    </div>
                    <div>
                        <select id="_rtype" name="_rtype">
                            <option value="<?php echo $rtypePostVal; ?>" style="display:none;">
                                <?php echo $rtypePostVal; ?>
                            </option>
                            <option value="Admin">Admin</option>
                            <option value="Ticket-In-Charge">Ticket-In-Charge</option>
                        </select>
                        <span><?php echo $rtypeErrMsg; ?></span>
                    </div>
                </div>
            </div>
            <div class="_frm_role_col2 mt-3">
                <div class="_role_col2">
                    <div>
                        <label for="_rdesc">Description</label>
                    </div>
                    <div>
                        <input type="text" id="_rdesc" value="<?php echo $rdescPostVal; ?>" name="_rdesc" required>
                        <span><?php echo $rdescErrMsg;?></span>
                    </div>
                </div>
                <div class="_role_col2">
                    <div>
                        <label for="_uname">Username</label>
                    </div>
                    <div>
                        <input type="text" id="_uname" value="<?php echo $unamePostVal; ?>" name="_uname" required>
                        <span><?php echo $unameErrMsg;?></span>
                    </div>
                </div>
                <div class="_role_col2">
                    <div>
                        <label for="_pwd">Password</label>
                    </div>
                    <div>
                        <input type="password" id="_pwd" value="<?php echo $pwdPostVal; ?>" name="_pwd" required>
                        <span><?php echo $pwdErrMsg;?></span>
                    </div>
                </div>
                <div class="_role_col2">
                    <div style="visibility: hidden;float: right;">
                        <label for="_pwd">Submit</label>
                    </div>
                    <div>
                        <input type="submit" value="Submit" class="btn btn-primary btn-sm">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="_role_system_data"  style="box-shadow: 0px 1px 2px 0px rgba(60,64,67,0.3), 0px 1px 3px 1px rgba(60,64,67,0.15);padding:6px;border-radius:2px;margin-top:10px !important;overflow:auto;max-height:300px;">
        <h5>Administrator Records</h5>
        <table class="table table-sm table-striped table-bordered table-white table-hover">
            <thead>
                <tr class="bg-secondary">
                    <th scope="col" class="text-white">ID</th>
                    <th scope="col" class="text-white">Firstname</th>
                    <th scope="col" class="text-white">Lastname</th>
                    <th scope="col" class="text-white">MI</th>
                    <th scope="col" class="text-white">RoleType</th>
                    <th scope="col" class="text-white">RoleDescription</th>
                    <th scope="col" class="text-white">Username</th>
                    <th scope="col" class="text-white">Password</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
               <?php include 'function/role_list_func.php'; ?>
            </tbody>
        </table>
    </div>
</div>