$('.fa').click(function(){
    if($('#viewport').css('padding-left') == '250px') {
        $('#viewport').css('padding-left', '0');
    }else{
        $('#viewport').css('padding-left', '250px')
    }
});

$('#_cus_ticket_btn').click(function(){
    $('._wlcm').css('display','none');
    $('.__ticket').css('display', 'none')
    $('._assign_role').css('display','none')
    if($('._loader').css('display') == 'none') {
        $('body').css({
            'overflow-y': 'auto',
            'overflow-x': 'hidden'
        });
        $('._loader').css({
            'display':'block'
        }).delay(1000).fadeOut();
    }else {
        $('._loader').css({
            'display':'none',
        })
    }
    if($('._cus_ticket_dt').css('display') == 'none') {
        $('._cus_ticket_dt').css({
            'display':'block',
        });
        $('._notif_num_cus').css({
            'background':'#ccc',
        });
    }
});

$('#__ticket_btn').click(function(){
    $('._wlcm').css('display','none');
    $('._cus_ticket_dt').css('display','none');
    $('._assign_role').css('display','none')
    if($('._loader').css('display') == 'none') {
        $('body').css({
            'overflow': 'hidden'
        });
        $('._loader').css({
            'display':'block'
        }).delay(200).fadeOut();
    }else {
        $('._loader').css({
            'display':'none',
        })
    }
    if($('.__ticket').css('display') == 'none') {
        $('.__ticket').css({
            'display':'block',
        });
    }
});

$('#__role_btn').click(function(){
    $('._wlcm').css('display','none');
    $('._cus_ticket_dt').css('display','none');
    $('.__ticket').css('display', 'none')
    if($('._loader').css('display') == 'none') {
        $('body').css({
            'overflow': 'hidden'
        });
        $('._loader').css({
            'display':'block'
        }).delay(200).fadeOut();
    }else {
        $('._loader').css({
            'display':'none',
        })
    }
    if($('._assign_role').css('display') == 'none') {
        $('._assign_role').css({
            'display':'block',
        });
    }
});

