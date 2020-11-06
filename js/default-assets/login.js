$(document).ready(function() {
    $('#lgn_submit').click(function() {
        if($('#u_name').val() == '') {
            $('#u_name').css('border', '1px solid #dc3545');
            $('#p_wd').css('border', '1px solid #dc3545');
            return false;
        }else if($('#p_wd').val() == '') {
            $('#p_wd').css('border', '1px solid #dc3545');
            return false;
        }else {
            if($('#u_name').val() == 'kimdavetorres' && $('#p_wd').val() == '123456789012') {
                $('form').attr({
                    'action':'https://kimdavetorres.github.io/vg-shipping-lines/admin.html',
                    'method':'POST'
                });
            }else if($('#u_name').val() == 'jayautentico' && $('#p_wd').val() == '123456789012') {
                $('form').attr({
                    'action':'ticket-in-charge.html',
                    'method':'POST'
                });
            }else {
                alert("No existing account!");
                return false;
            }
        }
    });
});
