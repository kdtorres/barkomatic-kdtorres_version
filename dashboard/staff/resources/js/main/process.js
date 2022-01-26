//* signout 
$(document).ready(function() {
    $("#ship_stff_signout").click(function() {
        var signout_action = "ship_stff_signout";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: signout_action },
            success: function(response) {
                alert(response);
                setTimeout(function() {
                    window.location = "http://localhost/barkomatic-main/";
                }, 100);
            }
        });
    });
});

//* active reservation, active sched, no. of ports 
$(document).ready(function() {
    setTimeout(function() {
        fetch_num_sched();
    }, 100);
    setTimeout(function() {
        fetch_num_port();
    }, 100);
    setTimeout(function() {
        active_reservation();
    }, 100);

    function fetch_num_sched() {
        var num_schd_action = "num_sched_data";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: num_schd_action },
            success: function(response) {
                $("#num_schedules_data").html(response);
            }
        });
    }

    function fetch_num_port() {
        var num_port_action = "num_port_data";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: num_port_action },
            success: function(response) {
                $("#num_ports_data").html(response);
            }
        });
    }

    function active_reservation() {
        var acti_action = "active_reservation_data";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: acti_action },
            success: function(response) {
                $("#active_reservation_data").html(response);
            }
        });
    }
});

//* add-edit-delete port location 
$(document).ready(function() {
    setTimeout(function() {
        fetch_added_loc();
    }, 100);

    function fetch_added_loc() {
        var fep_action = "fetch_added_loc";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: fep_action },
            success: function(response) {
                $("#location_data").html(response);
            }
        });
    }
    $('#add_port_loc_form').validate();
    $('#port_loc_btn').click(function(e) {
        if (document.querySelector('#add_port_loc_form').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/main/process.php',
                method: 'POST',
                data: $('#add_port_loc_form').serialize() + '&action=add_port_loc_form',
                success: function(res) {
                    alert(res);
                    setTimeout(function() {
                        fetch_added_loc();
                    }, 100);
                    setTimeout(function() {
                        $(':input[type="submit"]').prop('disabled', false);
                    }, 100);
                }
            });
        }
    });

    //* edit port location
    $("#edit_port_form").submit(function(e) {
        e.preventDefault();
        $("#edit_port_form").validate();
        $("#edit_port_btn").prop("disabled", true);
        $.ajax({
            url: './modules/main/process.php',
            method: "POST",
            data: $(this).serialize() + '&action=edit_port_form',
            success: function(response) {
                alert(response);
                if (response == "Updated successfully!") {
                    $('#edit_location_from').val('');
                    $('#edit_port_from').val('');
                    $('#edit_location_to').val('');
                    $('#edit_port_to').val('');
                }
                setTimeout(function() {
                    fetch_added_loc();
                }, 100);
                setTimeout(function() {
                    $("#edit_port_btn").prop("disabled", false);
                }, 100);
            }
        });
    });
    //* submit edit port location id
    $(document).on('click', '.update_loc_btn', function(e) {
        e.preventDefault();
        var edit_id = $(this).attr("id");
        var edit_action = "port_edit_id_form";
        $.ajax({
            url: './modules/main/process.php',
            method: "POST",
            data: { action: edit_action, edit_loc_id: edit_id },
            success: function(response) {
                console.log(response);
            }
        });
    });
    //* delete port location
    $(document).on('click', '.delete_loc_btn', function(e) {
        e.preventDefault();
        var dlt_loc_id = $(this).attr("id");
        var action_dlt = "delete_location";
        $.ajax({
            url: './modules/main/process.php',
            method: "POST",
            data: { action: action_dlt, delete_loc_id: dlt_loc_id },
            success: function(response) {
                alert(response);
                setTimeout(function() {
                    fetch_added_loc();
                }, 100);
                setTimeout(function() {
                    $(this).prop("disabled", false);
                }, 100);
            }
        });
    });
});

//* reservation list 
$(document).ready(function() {
    setTimeout(function() {
        fetch_reservation_detail();
    }, 100);

    function fetch_reservation_detail() {
        var frl_action = "fetch_reservation_list";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: frl_action },
            success: function(response) {
                $("#reservation_data").html(response);
            }
        });
    }

    //* delete reservation
    $(document).on('click', '.delete_reservation_btn', function(e) {
        e.preventDefault();
        var dlt_reserv_id = $(this).attr("id");
        var action_dlt = "delete_reservation";
        $.ajax({
            url: './modules/main/process.php',
            method: "POST",
            data: { action: action_dlt, delete_resrv_id: dlt_reserv_id },
            success: function(response) {
                alert(response);
                setTimeout(function() {
                    fetch_reservation_detail();
                }, 100);
            }
        });
    });
});

//* add-edit-delete schedule & fetch schedule added
$(document).ready(function() {
    setTimeout(function() {
        fetch_depart_detail();
    }, 100);

    function fetch_depart_detail() {
        var fep_action = "fetch_depart_detail";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: fep_action },
            success: function(response) {
                $("#ship_depart_data").html(response);
            }
        });
    }
    $('#add_sched_form').validate();
    $('#add_sched_btn').click(function(e) {
        if (document.querySelector('#add_sched_form').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/main/process.php',
                method: 'post',
                data: $('#add_sched_form').serialize() + '&action=add_sched_form',
                success: function(res) {
                    alert(res);
                    setTimeout(function() {
                        fetch_depart_detail();
                    }, 1000);
                    setTimeout(function() {
                        $(':input[type="submit"]').prop('disabled', false);
                    }, 1000);
                }
            });
        }
    });
    //* edit ship sched location
    $("#edit_ship_sched_form").submit(function(e) {
        e.preventDefault();
        $("#edit_ship_sched_form").validate();
        $("#edit_ship_sched_btn").prop("disabled", true);
        $.ajax({
            url: './modules/main/process.php',
            method: "POST",
            data: $(this).serialize() + '&action=edit_ship_sched_form ',
            success: function(response) {
                alert(response);
                if (response == "Updated successfully!") {
                    $('#edit_ship_sched_date').val('');
                    $('#edit_ship_sched_dt').val('');
                    $('#edit_ship_sched_from').val('');
                    $('#edit_ship_sched_port_from').val('');
                    $('#edit_ship_sched_to').val('');
                    $('#edit_ship_sched_port_to').val('');
                }
                setTimeout(function() {
                    fetch_depart_detail();
                }, 100);
                setTimeout(function() {
                    $("#edit_ship_sched_btn").prop("disabled", false);
                }, 100);
            }
        });
    });
    //* submit edit ship ship sched id
    $(document).on('click', '.update_ship_sched_btn', function(e) {
        e.preventDefault();
        var edit_id = $(this).attr("id");
        var edit_action = "ship_sched_edit_id_form";
        $.ajax({
            url: './modules/main/process.php',
            method: "POST",
            data: { action: edit_action, edit_ship_sched_id: edit_id },
            success: function(response) {
                console.log(response);
            }
        });
    });
    //* delete ship sched
    $(document).on('click', '.delete_ship_sched_btn', function(e) {
        e.preventDefault();
        var dlt_sched_id = $(this).attr("id");
        var action_dlt = "delete_sched_ship";
        $.ajax({
            url: './modules/main/process.php',
            method: "POST",
            data: { action: action_dlt, delete_ship_sched_id: dlt_sched_id },
            success: function(response) {
                alert(response);
                setTimeout(function() {
                    fetch_depart_detail();
                }, 100);
            }
        });
    });
});

//* add-edit-delete accomodation type & fetch accommodation added
$(document).ready(function() {
    setTimeout(function() {
        fetch_accomm_detail();
    }, 100);

    function fetch_accomm_detail() {
        var fep_action = "fetch_accomm_detail";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: fep_action },
            success: function(response) {
                $("#ship_accomm_data").html(response);
            }
        });
    }
    $('#add_accomm_form').validate();
    $('#accomm_typ_btn').click(function(e) {
        if (document.querySelector('#add_accomm_form').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/main/process.php',
                method: 'post',
                data: $('#add_accomm_form').serialize() + '&action=add_accomm_form',
                success: function(res) {
                    alert(res);
                    setTimeout(function() {
                        fetch_accomm_detail();
                    }, 100);
                    setTimeout(function() {
                        $(':input[type="submit"]').prop('disabled', false);
                    }, 1000);
                }
            });
        }
    });

    //* edit ship accom
    $("#edit_accom_form").submit(function(e) {
        e.preventDefault();
        $("#edit_accom_form").validate();
        $("#edit_accom_btn").prop("disabled", true);
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: $(this).serialize() + '&action=edit_accom_form',
            success: function(response) {
                alert(response);
                if (response == "Updated successfully!") {
                    $('#edit_accom_name').val('');
                    $('#edit_accom_st').val('');
                    $('#edit_accom_aircon').val('');
                    $('#edit_accom_price').val('');
                }
                setTimeout(function() {
                    fetch_accomm_detail();
                }, 100);
                setTimeout(function() {
                    $("#edit_accom_btn").prop("disabled", false);
                }, 100);
            }
        });
    });
    //* submit edit accom id
    $(document).on('click', '.update_accom_btn', function(e) {
        e.preventDefault();
        var edit_id = $(this).attr("id");
        var edit_action = "accom_edit_id_form";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: edit_action, edit_accom_id: edit_id },
            success: function(response) {
                console.log(response);
            }
        });
    });
    //* delete accom
    $(document).on('click', '.delete_loc_btn', function(e) {
        e.preventDefault();
        var dlt_accom_id = $(this).attr("id");
        var action_dlt = "delete_accom";
        $.ajax({
            url: "./modules/main/process.php",
            method: "POST",
            data: { action: action_dlt, delete_accom_id: dlt_accom_id },
            success: function(response) {
                alert(response);
                setTimeout(function() {
                    fetch_accomm_detail();
                }, 100);
            }
        });
    });
});