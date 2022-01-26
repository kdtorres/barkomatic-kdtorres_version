<div class="card p-0">
    <header class="card-header">
        <p class="card-header-title mb-0">
            <span class="icon"><i class="mdi mdi-account"></i></span> Ship Depart Details
        </p>
    </header>
    <div class="card-content p-0">
        <div class="card has-table border-0">
            <div id="ship_depart_data" class="card-content">
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
        <form id="edit_ship_sched_form">
            <div class="form-group">
                <label for="edit_ship_sched_date">Depart Date</label>
                <input type="date" class="form-control form-control-sm" name="edit_ship_sched_date" id="edit_ship_sched_date" required>
            </div>
            <div class="form-group">
                <label for="edit_ship_sched_dt">Depart Time</label>
                <input type="time" class="form-control form-control-sm" name="edit_ship_sched_dt" id="edit_ship_sched_dt" required>
            </div>
            <div class="form-group">
                <label for="edit_ship_sched_from">Location From</label>
                <input type="text" class="form-control form-control-sm" name="edit_ship_sched_from" id="edit_ship_sched_from" required>
            </div>
            <div class="form-group">
                <label for="edit_ship_sched_port_from">Port</label>
                <input type="text" class="form-control form-control-sm" name="edit_ship_sched_port_from" id="edit_ship_sched_port_from" required>
            </div>
            <div class="form-group">
                <label for="edit_ship_sched_to">Location To</label>
                <input type="text" class="form-control form-control-sm" name="edit_ship_sched_to" id="edit_ship_sched_to" required>
            </div>
            <div class="form-group">
                <label for="edit_ship_sched_port_to">Port</label>
                <input type="text" class="form-control form-control-sm" name="edit_ship_sched_port_to" id="edit_ship_sched_port_to" required>
            </div>
            <button type="submit" id="edit_ship_sched_btn" class="btn btn-primary btn-sm form-control">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>