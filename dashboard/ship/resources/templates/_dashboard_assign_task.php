<div id="alert" class="alert alert-success lead ml-5 p-2" role="alert">
    <span id="res-icon"></span>
    <span id="res-message"></span>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span> Create Account For Staff
                </p>
            </header>
            <div class="card-content">
                <form id="rl_create_acc_form">
                    <div class="field">
                        <label class="label"></label>
                        <div class="field-body d-none">
                            <div class="field">
                                <div class="control">
                                    <input type="text" name="ship_comp" value="<?php echo $_SESSION['ship_name'];?>" class="input" readonly>
                                </div>
                                <p class="help"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input type="text" name="rl_name" id="rl_name" class="input" required>
                                        </div>
                                        <p class="help">Required. Your name</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="field">
                                <label class="label">E-mail</label>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input type="email" name="rl_email" id="rl_email" class="input" required>
                                        </div>
                                        <p class="help">Required. Your e-mail</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="field">
                                <label class="label">Username</label>
                                <div class="control">
                                    <input type="text" name="rl_username" id="rl_username" class="input" required>
                                </div>
                                <p class="help">Required. Username</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control">
                                    <input type="password" name="rl_password" id="rl_password" class="input" required>
                                </div>
                                <p class="help">Required. New password</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <input type="submit" name="rl_btn_sbmt" id="rl_btn_sbmt" value="Submit" class="button green">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account"></i></span> Staff
                </p>
            </header>
            <div class="card-content p-0">
                <div class="card has-table border-0">
                    <div class="card-content" id="all_staff_data">
                        <img class="text-center" src="./resources/img/loading.gif" alt="Loading" style="text-align:center;width:48px;height:48px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-left modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="assign_role_edit_form">
                    <div class="form-group">
                        <label for="edit_role_name">Name</label>
                        <input type="text" name="edit_role_name" class="text-center form-control form-control-sm" id="edit_role_name" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_role_psswd">Email</label>
                        <input type="email" name="edit_role_email" class="text-center form-control form-control-sm" id="edit_role_email" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_role_uname">Username</label>
                        <input type="text" name="edit_role_uname" class="text-center form-control form-control-sm" id="edit_role_uname" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_role_psswd">Password</label>
                        <input type="password" name="edit_role_psswd" class="text-center form-control form-control-sm" id="edit_role_psswd" placeholder="" required>
                    </div>
                    <button type="submit" id="edit_role_submit" class="btn btn-primary btn-sm form-control">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>