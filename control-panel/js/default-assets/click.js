$("#customRadioInline2").click(function() {
    $(".returnDate").css("visibility", "hidden");
});

$("#customRadioInline1").click(function() {
    $(".returnDate").css("visibility", "visible");
});

$(".close").click(function() {
    $(".modal").css('display', 'none');
   $(".modal-backdrop").css('display', 'none');
   $("body").removeAttr("class");
   $("body").css("padding-right", "0");
   location.reload(true);
});

$("#email").click(function() {
   if($('#_email_info').css('display') == 'none') {
        $('#_email_info').css({
            'transition': 'all 0.5s ease-in',
            'display': 'block'
        }).delay(10000).fadeOut();
   }
});
