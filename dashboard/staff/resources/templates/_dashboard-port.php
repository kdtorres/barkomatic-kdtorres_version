<div id="alert" class="alert alert-success lead ml-5 p-2" role="alert">
    <span id="res-icon"></span>
    <span id="res-message"></span>
</div>
<div class="row">
    <div class="col-3">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Add Port Location
                </p>
            </header>
            <div class="card-content">
                <form id="add_port_loc_form">
                    <div class="field">
                        <label class="label">Location From</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="hidden" name="ship" value="<?php echo $_SESSION['stff_ship_reside'];?>">
                                    <input type="text" name="location_from" id="location_from" class="input" required>
                                </div>
                                <p class="help">Required. Location From</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Port</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" name="port_1" id="port_1" class="input" required>
                                </div>
                                <p class="help">Required. Port</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">Location To</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" name="location_to" id="location_to" class="input" required>
                                </div>
                                <p class="help">Required. Location To</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Port</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" name="port_2" id="port_2" class="input" required>
                                </div>
                                <p class="help">Required. Port</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <input type="submit" name="port_loc_btn" id="port_loc_btn" value="Submit" class="button green"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Ship Port Location
                </p>
                <a href="#port-location-data-content" id="reload-location-list" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div id="location_data" class="card-content">
                <img class="text-center" src="./resources/img/loading.gif" alt="Loading" style="text-align:center;width:48px;height:48px;">
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="port_locationLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit_port_form">
            <div class="form-group">
                <label for="edit_location_from">Location From</label>
                <input type="text" class="form-control form-control-sm" name="edit_location_from" id="edit_location_from" required>
            </div>
            <div class="form-group">
                <label for="edit_port_from">Port</label>
                <input type="text" class="form-control form-control-sm" name="edit_port_from" id="edit_port_from" required>
            </div>
            <div class="form-group">
                <label for="edit_location_to">Location To</label>
                <input type="text" class="form-control form-control-sm" name="edit_location_to" id="edit_location_to" required>
            </div>
            <div class="form-group">
                <label for="edit_port_to">Port</label>
                <input type="text" class="form-control form-control-sm" name="edit_port_to" id="edit_port_to" required>
            </div>
            <button type="submit" id="edit_port_btn" class="btn btn-primary btn-sm form-control">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>


