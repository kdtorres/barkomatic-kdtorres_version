//* update reservation status
$(document).ready(function() {
    setTimeout(function() {
        update_reservation_status();
    }, 100);

    function update_reservation_status() {
        var st_action = "update_reservation_status";
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: st_action },
            success: function(response) {
                console.log(response);
            }
        });
    }
});

//* send mail status reservation
$(document).ready(function() {
    setTimeout(function() {
        mail_reservation_status();
    }, 100);

    function mail_reservation_status() {
        var st_action = "mail_reservation_status";
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: st_action },
            success: function(response) {
                console.log(response);
            }
        });
    }
});

//* create account - staff
$(document).ready(function() {
    //* landing dashboard page card 
    setTimeout(function() {
        total_number_of_staff();
    }, 300);

    function total_number_of_staff() {
        var action = 'total_number_of_staff';
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: action },
            success: function(response) {
                $("#total_staff_data").html(response);
            }
        });
    }

    //* landing dashboard page card
    setTimeout(function() {
        summ_staff_data();
    }, 300);

    function summ_staff_data() {
        var action = 'summ_staff_data';
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: action },
            success: function(response) {
                $("#summ_staff_data").html(response);
            }
        });
    }

    //* all_staff_data 
    setTimeout(function() {
        all_staff_data();
    }, 100);

    function all_staff_data() {
        var action = 'all_staff_data';
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: action },
            success: function(response) {
                $("#all_staff_data").html(response);
            }
        });
    }
    //* edit assigned role
    $("#assign_role_edit_form").submit(function(e) {
        e.preventDefault();
        $("#assign_role_edit_form").validate();
        $("#edit_role_submit").prop("disabled", true);
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: $(this).serialize() + '&action=edit_assigned_role',
            success: function(response) {
                alert(response);
                if (response == "Updated successfully!") {
                    $('#edit_role_name').val('');
                    $('#edit_role_email').val('');
                    $('#edit_role_uname').val('');
                    $('#edit_role_psswd').val('');
                }
                setTimeout(function() {
                    all_staff_data();
                }, 100);
                setTimeout(function() {
                    $("#edit_role_submit").prop("disabled", false);
                }, 100);
            }
        });
    });
    //* submit edit assigned id
    $(document).on('click', '.update_role_btn', function() {
        $("#edit_role_btn").prop("disabled", true);
        var edit_id = $(this).attr("id");
        var edit_action = "assgn_edit_id_form";
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: edit_action, edit_role_id: edit_id },
            success: function(response) {
                console.log(response);
                setTimeout(function() {
                    $("#edit_role_btn").prop("disabled", false);
                }, 100);
            }
        });
    });
    //* delete assigned role
    $(document).on('click', '.delete_role_btn', function() {
        $(this).prop("disabled", true);
        var dlt_role_id = $(this).attr("id");
        var action_dlt = "delete_assigned_role";
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: action_dlt, delete_role_id: dlt_role_id },
            success: function(response) {
                alert(response);
                setTimeout(function() {
                    all_staff_data();
                }, 100);
                setTimeout(function() {
                    $(this).prop("disabled", false);
                }, 100);
            }
        });
    });

    //* create account staff
    $('#rl_create_acc_form').validate();
    $('#rl_btn_sbmt').click(function(e) {
        console.log('here!');
        if (document.querySelector('#rl_create_acc_form').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/process.php',
                method: 'post',
                data: $('#rl_create_acc_form').serialize() + '&action=rl_create_acc_form',
                success: function(res) {
                    alert(res);
                    $(':input[type="submit"]').prop('disabled', false);
                    setTimeout(function() {
                        total_number_of_staff();
                    }, 100);
                    setTimeout(function() {
                        summ_staff_data();
                    }, 100);
                    setTimeout(function() {
                        all_staff_data();
                    }, 100);
                }
            });
        }
    });
});

//* fetch reservation number 
$(document).ready(function() {
    setTimeout(function() {
        active_reservation();
    }, 100);

    function active_reservation() {
        var acti_action = "active_reservation_data";
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: acti_action },
            success: function(response) {
                $("#active_reservation_data").html(response);
            }
        });
    }
});

//* reservation list 
$(document).ready(function() {
    setTimeout(function() {
        fetch_reservation_detail();
    }, 10);

    function fetch_reservation_detail() {
        var frl_action = "fetch_reservation_list";
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: frl_action },
            success: function(response) {
                $("#reservation_data").html(response);
            }
        });
    }
});

//* landing summary reservation list
$(document).ready(function() {
    setTimeout(function() {
        fetch_summ_reservation();
    }, 100);

    function fetch_summ_reservation() {
        var frl_action = "fetch_summ_reservation";
        $.ajax({
            url: "./modules/process.php",
            method: "POST",
            data: { action: frl_action },
            success: function(response) {
                $("#summ_reservation_data").html(response);
            }
        });
    }
});

//* ship fetch profile data & ship edit profile
$(document).ready(function() {
    setTimeout(function() {
        fetch_edit_profile();
    }, 300);

    function fetch_edit_profile() {
        var fep_action = "fetch_ship_profile";
        $.ajax({
            url: "./modules/profile.php",
            method: "POST",
            data: { action: fep_action },
            success: function(response) {
                $("#profile_data").html(response);
            }
        });
    }
    $('#image_form').submit(function(event) {
        event.preventDefault();
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert("Invalid Image File");
                $('#image').val('');
                return false;
            } else {
                $.ajax({
                    url: "./modules/profile.php",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        alert(data);
                        fetch_edit_profile();
                        $('#image_form')[0].reset();
                        // $('#imageModal').modal('hide');
                    }
                });
            }
        }
    });
});

//* ship profile change password
$(document).ready(function() {
    $('#ship_change_pswd_form').validate({
        rules: {
            ship_c_nw_psswd: {
                equalTo: '#ship_nw_psswd'
            }
        }
    });
    $('#ship_change_pswd_form').submit(function(event) {
        if (document.querySelector('#ship_change_pswd_form').checkValidity()) {
            event.preventDefault();
            $.ajax({
                url: "./modules/profile.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#ship_nw_psswd').val("");
                    $('#ship_c_nw_psswd').val("");
                    alert(data);
                    $('#ship_change_pswd_form')[0].reset();
                    // $('#imageModal').modal('hide');
                }
            });
        }
        return false;
    });
});

//* signout 
$(document).ready(function() {
    $("#ship_ownr_signout").click(function(event) {
        var signout = "ship_ownr_signout";
        $.ajax({
            url: "./modules/profile.php",
            method: "POST",
            data: { action: signout },
            success: function(data) {
                alert(data);
                setTimeout(function() {
                    window.location = "http://localhost/barkomatic-main/";
                }, 1000);
            }
        });
    });
});