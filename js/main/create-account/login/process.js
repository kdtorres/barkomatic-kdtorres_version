//* passenger login
$(document).ready(function() {
    $('#passenger-form').validate();
    $('#passenger-btn').click(function(e) {
        if (document.querySelector('#passenger-form').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#passenger-form').serialize() + '&action=passenger_form',
                success: function(res) {
                    alert(res);
                    $('#passenger-btn').attr('disabled', false);
                    if (res == "Login Successfully!") {
                        setTimeout(function() {
                            window.location = 'http://localhost/barkomatic-main/index.php';
                        }, 100);
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* ship login
$(document).ready(function() {
    $('#login_showner_form').validate();
    $('#login-showner-btn').click(function(e) {
        if (document.querySelector('#login_showner_form').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#login_showner_form').serialize() + '&action=login_showner_form',
                success: function(res) {
                    alert(res);
                    if (res == "Login Successfully!") {
                        setTimeout(function() {
                            window.location = "http://localhost/barkomatic-main/dashboard/ship/";
                        }, 100);
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* staff login 
$(document).ready(function() {
    $('#staff_login_form').validate();
    $('#btn_staff_login').click(function(e) {
        if (document.querySelector('#staff_login_form').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#staff_login_form').serialize() + '&action=staff_login_form',
                success: function(res) {
                    alert(res);
                    if (res == "Login Successfully!") {
                        setTimeout(function() {
                            window.location = "http://localhost/barkomatic-main/dashboard/staff/";
                        }, 100);
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* signout
$(document).ready(function() {
    $('#session_name').click(function(e) {
        e.preventDefault();
        $('#session_name').attr('disabled', true);
        $.ajax({
            url: './modules/create-account/login/process.php',
            method: 'post',
            data: $('#signout_frm').serialize() + '&action=signout_frm',
            success: function(res) {
                if (res == "Signout successfully!") {
                    window.location.reload();
                } else {
                    console.log(res);
                }
                $('#session_name').attr('disabled', false);
            }
        });
    });
});

//* request reset password - passenger
$(document).ready(function() {
    $('#passenger_reset_request_form').validate();
    $('#passenger_reset_submit').click(function(e) {
        $(':input[type="submit"]').prop('disabled', true);
        if (document.querySelector('#passenger_reset_request_form').checkValidity()) {
            e.preventDefault();
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#passenger_reset_request_form').serialize() + '&action=passenger_reset_request_form',
                success: function(res) {
                    alert(res);
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* request reset password - ship owner
$(document).ready(function() {
    $('#sownr_reset_request_form').validate();
    $('#sownr_reset_submit').click(function(e) {
        $(':input[type="submit"]').prop('disabled', true);
        if (document.querySelector('#sownr_reset_request_form').checkValidity()) {
            e.preventDefault();
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#sownr_reset_request_form').serialize() + '&action=sownr_reset_request_form',
                success: function(res) {
                    alert(res);
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* request reset password - staff
$(document).ready(function() {
    $('#stf_reset_request_form').validate();
    $('#stf_reset_submit').click(function(e) {
        $(':input[type="submit"]').prop('disabled', true);
        if (document.querySelector('#stf_reset_request_form').checkValidity()) {
            e.preventDefault();
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#stf_reset_request_form').serialize() + '&action=stf_reset_request_form',
                success: function(res) {
                    alert(res);
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* change password - passenger
$(document).ready(function() {
    $('#pssngr_chng_pwd_frm').validate({
        rules: {
            pssngr_rpt_pwd: {
                equalTo: '#pssngr_nw_pwd'
            }
        }
    });
    $('#pssngr_chng_pwd_frm').validate();
    $('#pssngr_chng_pwd_btn').click(function(e) {
        if (document.querySelector('#pssngr_chng_pwd_frm').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#pssngr_chng_pwd_frm').serialize() + '&action=pssngr_chng_pwd_frm',
                success: function(res) {
                    alert(res);
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* change password - ship owner
$(document).ready(function() {
    $('#shpownr_chng_pwd_frm').validate({
        rules: {
            shpownr_rpt_pwd: {
                equalTo: '#shpownr_nw_pwd'
            }
        }
    });
    $('#shpownr_chng_pwd_frm').validate();
    $('#shpownr_chng_pwd_btn').click(function(e) {
        if (document.querySelector('#shpownr_chng_pwd_frm').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#shpownr_chng_pwd_frm').serialize() + '&action=shpownr_chng_pwd_frm',
                success: function(res) {
                    alert(res);
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});

//* change password - ship staff
$(document).ready(function() {
    $('#stf_chng_pwd_frm').validate({
        rules: {
            stf_rpt_pwd: {
                equalTo: '#stf_nw_pwd'
            }
        }
    });
    $('#stf_chng_pwd_frm').validate();
    $('#stf_chng_pwd_btn').click(function(e) {
        if (document.querySelector('#stf_chng_pwd_frm').checkValidity()) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            $.ajax({
                url: './modules/create-account/login/process.php',
                method: 'post',
                data: $('#stf_chng_pwd_frm').serialize() + '&action=stf_chng_pwd_frm',
                success: function(res) {
                    alert(res);
                    $(':input[type="submit"]').prop('disabled', false);
                }
            });
        }
    });
});