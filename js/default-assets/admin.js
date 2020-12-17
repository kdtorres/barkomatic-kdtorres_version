$('.fa-bars').click(function(){
    if($('#viewport').css('padding-left') == '250px') {
        $('#viewport').css('padding-left', '0');
    }else{
        $('#viewport').css('padding-left', '250px')
    }
});

$('#_cus_ticket_btn').click(function(){
    // $('._wlcm').css('display','none');
    // $('.__ticket').css('display', 'none')
    // $('._assign_role').css('display','none')
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
    // $('._wlcm').css('display','none');
    // $('._cus_ticket_dt').css('display','none');
    // $('._assign_role').css('display','none')
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
    // $('._wlcm').css('display','none');
    // $('._cus_ticket_dt').css('display','none');
    // $('.__ticket').css('display', 'none')
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

$('.alert-success').css({
    'display':'block'
}).delay(3000).fadeOut();
$('.alert-danger').css({
    'display':'block'
}).delay(3000).fadeOut();

$('#generate').click(function() {
    var rand = Math.floor(100000 + Math.random() * 900000);
    document.getElementById('ticket_no').value = rand;
});

var allTableCells = document.getElementsByClassName("check_stats");
for(var i = 0, max = allTableCells.length; i < max; i++) {
    var node = allTableCells[i];

    //get the text from the first child node - which should be a text node
    var currentText = node.childNodes[0].nodeValue; 

    //check for 'one' and assign this table cell's background color accordingly 
    if (currentText === "Open for reservation") {
        node.style.color = "green";
        node.style.fontWeight = "bold";
    }else {
        node.style.color = "red";
        node.style.fontWeight = "bold";
    }
}

$('.dropdown-menu').css('display','none');
$('#potaclick').click(function() {
    if($('.dropdown-menu').css('display') == 'none') {
        $('.dropdown-menu').fadeIn();
    }else {
        $('.dropdown-menu').fadeOut();
    }
});