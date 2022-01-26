//* passenger register
$(document).ready(function() {
    $('#passenger-form').validate({
        rules: {
            confirm_password: {
                equalTo: '#password'
            }
        }
    });
    $('#passenger-submit').click(function(e) {
        if (document.querySelector('#passenger-form').checkValidity()) {
            e.preventDefault();
            $('#passenger-submit').attr('disabled', true);
            $.ajax({
                url: './modules/create-account/process.php',
                method: 'post',
                data: $('#passenger-form').serialize() + '&action=passenger_form',
                success: function(res) {
                    if (res === 'The email is already exist! Please try another.') {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='fa fa-exclamation-circle'></i>");
                        $('#res-message').html("The email is already exist!");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 2000);
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='fa fa-check-circle'></i>");
                        $('#res-message').html("Registered Successfully!");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            $('#fname').val('');
                            $('#mi').val('');
                            $('#lname').val('');
                            $('#gender').val('');
                            $('#type').val('');
                            $('#dob').val('');
                            $('#email').val('');
                            $('#uname').val('');
                            $('#password').val('');
                            $('#confirm_password').val('');
                        }, 100);
                        setTimeout(function() {
                            window.location = "http://localhost/barkomatic-main/login.php";
                        }, 100);
                    }
                    $('#passenger-submit').attr('disabled', false);
                }
            });
        }
    });
});

//* ship owner register 
$(document).ready(function() {
    $('#shipping-form').validate({
        rules: {
            cpass: {
                equalTo: '#pass'
            }
        }
    });
    $('#shipping-submit').click(function(e) {
        if (document.querySelector('#shipping-form').checkValidity()) {
            e.preventDefault();
            $('#shipping-submit').attr('disabled', true);
            $.ajax({
                url: './modules/create-account/process.php',
                method: 'post',
                data: $('#shipping-form').serialize() + '&action=shipping_form',
                success: function(res) {
                    if (res == "The email is already exist! Please try another.") {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-success');
                        $('.alert').addClass('alert-danger');
                        $('#res-icon').html("<i class='fa fa-exclamation-circle'></i>");
                        $('#res-message').html("The email is already exist! Please try another.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                        }, 2000);
                    } else {
                        $('#res-icon').val("");
                        $('#res-message').html("");
                        $('.alert').removeClass('alert-danger');
                        $('.alert').addClass('alert-success');
                        $('#res-icon').html("<i class='fa fa-check-circle'></i>");
                        $('#res-message').html("Registered Successfully.");
                        $('.alert').show(80);
                        setTimeout(function() {
                            $('.alert').fadeOut();
                            $('#scn').val('');
                            $('#email-shipping').val('');
                            $('#uname-shipping').val('');
                            $('#pass').val('');
                            $('#cpass').val('');
                        }, 100);
                        setTimeout(function() {
                            window.location = "http://localhost/barkomatic-main/login.php";
                        }, 100);
                    }
                    $('#shipping-submit').attr('disabled', false);
                }
            });
        }
    });
});