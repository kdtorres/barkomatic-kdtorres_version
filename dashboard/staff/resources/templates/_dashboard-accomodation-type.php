<div id="alert" class="alert alert-success lead ml-5 p-2" role="alert">
    <span id="res-icon"></span>
    <span id="res-message"></span>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Add
                </p>
            </header>
            <div class="card-content">
                <form id="add_accomm_form">
                    <div class="field">
                        <label class="label">Accomodation Name</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="hidden" name="ship" value="<?php echo $_SESSION['stff_ship_reside'];?>">
                                    <input type="text" autocomplete="on" name="accomodation_name" id="accomodation_name" class="input" required>
                                </div>
                                <p class="help">Required. Accomodation name</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Seat Type</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="accomm_seat_typ" id="accomm_seat_typ" class="input" required>
                                </div>
                                <p class="help">Required. Seat Type</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Aircon</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <select name="accomm_aircon" id="accomm_aircon" class="form-control">
                                        <option selected value="">--</option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <p class="help">Required. Aircon</p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Price</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" autocomplete="on" name="accomm_typ_price" id="accomm_typ_price" value="" class="input" required>
                                </div>
                                <p class="help">Required. Price</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <input type="submit" name="accomm_typ_btn" id="accomm_typ_btn" value="Submit" class="button green">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title mb-0">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span> Details
                </p>
            </header>
            <div id="ship_accomm_data" class="card-content">
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
        <form id="edit_accom_form">
            <div class="form-group">
                <label for="edit_accom_name">Accomodation Name</label>
                <input type="text" class="form-control form-control-sm" name="edit_accom_name" id="edit_accom_name" required>
            </div>
            <div class="form-group">
                <label for="edit_accom_st">Seat Type</label>
                <input type="text" class="form-control form-control-sm" name="edit_accom_st" id="edit_accom_st" required>
            </div>
            <div class="form-group">
                <label for="edit_accom_aircon">Aircon</label>
                <select name="edit_accom_aircon" id="edit_accom_aircon" class="form-control-sm form-control">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="edit_accom_price">Price</label>
                <input type="text" class="form-control form-control-sm" name="edit_accom_price" id="edit_accom_price" required>
            </div>
            <button type="submit" id="edit_accom_btn" class="btn btn-primary btn-sm form-control">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>