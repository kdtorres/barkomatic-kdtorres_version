jQuery(document).ready(function($) {

    $("html").niceScroll({ zindex: 99999, cursorborder: "1px solid #424242" });

    //ONE PAGE NAV...
    $('#main-menu').onePageNav({
        currentClass: 'current_page_item',
        filter: ':not(.external)',
        scrollSpeed: 750,
        scrollOffset: 90,
        scrollChange: fixMagicline
    });

    //MINI MOBILE MENU...
    $('nav#main-menu').meanmenu({
        meanMenuContainer: $('header #menu-container'),
        meanRevealPosition: 'left',
        meanScreenWidth: 797,
        meanMenuClose: "<span /><span /><span />"
    });

    //TABS...
    if ($('.tabs-vertical-frame').length > 0) {

        $('.tabs-vertical-frame').tabs('> .tabs-vertical-frame-content');

        $('.tabs-vertical-frame').each(function() {
            $(this).find("li:first").addClass('current');
        });

        $('.tabs-vertical-frame li').click(function() {
            $(this).parent().children().removeClass('current');
            $(this).addClass('current');
        });
    }

    //TESTIMONIAL QUOTE...
    $('.quotes_wrapper').quovolver({
        children: 'li',
        transitionSpeed: 600,
        autoPlay: true,
        equalHeight: true,
        navPosition: 'below',
        navPrev: false,
        navNext: false,
        navNum: true
    });

    //PROGRESS BAR...
    $('#donutchart1').one('inview', function(event, visible) {
        if (visible == true) {
            $("#donutchart1").donutchart({ 'size': 140, 'donutwidth': 10, 'fgColor': '#E74D3C', 'bgColor': '#f5f5f5', 'textsize': 15 });
            $("#donutchart1").donutchart("animate");

            $("#donutchart2").donutchart({ 'size': 140, 'donutwidth': 10, 'fgColor': '#FF7F50', 'bgColor': '#f5f5f5', 'textsize': 15 });
            $("#donutchart2").donutchart("animate");

            $("#donutchart3").donutchart({ 'size': 140, 'donutwidth': 10, 'fgColor': '#8aba23', 'bgColor': '#f5f5f5', 'textsize': 15 });
            $("#donutchart3").donutchart("animate");

            $("#donutchart4").donutchart({ 'size': 140, 'donutwidth': 10, 'fgColor': '#35aad8', 'bgColor': '#f5f5f5', 'textsize': 15 });
            $("#donutchart4").donutchart("animate");
        }
    });

    //ISOTOPE CATEGORY...
    var $container = $('.portfolio-container');
    var $gw = 20;

    $('.sorting-container a').click(function() {
        $('.sorting-container').find('a').removeClass('active-sort');
        $(this).addClass('active-sort');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {
                columnWidth: $('.portfolio-container .portfolio').width(),
                gutterWidth: $gw
            }
        });
        return false;
    });

    //ISOTOPE...
    if ($container.length) {
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {
                columnWidth: $('.portfolio-container .portfolio').width(),
                gutterWidth: $gw
            }
        });
    }

    //Google Maps
    var $map = $('#map');
    if ($map.length) {
        $map.gMap({
            address: 'No: 58 A, East Madison St, Baltimore, MD, USA',
            zoom: 16,
            markers: [
                { 'address': 'No: 58 A, East Madison St, Baltimore, MD, USA' }
            ]
        });
    }
    //Google Maps End

    /* To Top */
    $().UItoTop({ easingType: 'easeOutQuart' });

    //ISOTOPE...	
    var $pphoto = $('a[data-gal^="prettyPhoto[gallery]"]');
    if ($pphoto.length) {
        //PRETTYPHOTO...
        $("a[data-gal^='prettyPhoto[gallery]']").prettyPhoto({
            hook: 'data-gal',
            show_title: false,
            social_tools: false,
            deeplinking: false
        });
    }

    //AJAX SUBMIT...
    $('form[name="frmnewsletter"]').submit(function() {

        var This = $(this);

        if ($(This).valid()) {
            var action = $(This).attr('action');

            var data_value = unescape($(This).serialize());
            $.ajax({
                type: "POST",
                url: action,
                data: data_value,
                error: function(xhr, status, error) {
                    confirm('The page save failed.');
                },
                success: function(response) {
                    $('#ajax_subscribe_msg').html(response);
                    $('#ajax_subscribe_msg').slideDown('slow');
                    if (response.match('success') != null) $(This).slideUp('slow');
                }
            });
        }
        return false;
    });
    $('form[name="frmnewsletter"]').validate({
        rules: {
            mc_email: { required: true, email: true }
        },
        errorPlacement: function(error, element) {}
    });

    //CONTACT BOX VALIDATION & MAIL SENDING....
    //AJAX SUBMIT...
    $('form[name="frmcontact"]').submit(function() {

        var This = $(this);

        if ($(This).valid()) {
            var action = $(This).attr('action');

            var data_value = unescape($(This).serialize());
            $.ajax({
                type: "POST",
                url: action,
                data: data_value,
                error: function(xhr, status, error) {
                    confirm('The page save failed.');
                },
                success: function(response) {
                    $('#ajax_contact_msg').html(response);
                    $('#ajax_contact_msg').slideDown('slow');
                    if (response.match('success') != null) $(This).slideUp('slow');
                }
            });
        }
        return false;
    });
    $('form[name="frmcontact"]').validate({
        rules: {
            txtname: { required: true },
            txtemail: { required: true, email: true }
        },
        errorPlacement: function(error, element) {}
    });
});

//CUSTOM FIX...
function fixMagicline() {

    var $magicLine = $("#magic-line");

    var leftPos, newWidth;

    leftPos = $(".current_page_item a").position().left;
    newWidth = $(".current_page_item").width();

    $magicLine.stop().animate({
        left: leftPos,
        width: newWidth
    });
}

// animate css + jquery inview configuration
(function($) {
    $(".animate").each(function() {
        $(this).bind('inview', function(event, visible) {
            var $this = $(this),
                $animation = ($this.data("animation") !== undefined) ? $this.data("animation") : "slideUp";
            $delay = ($this.data("delay") !== undefined) ? $this.data("delay") : 300;

            if (visible == true) {
                setTimeout(function() { $this.addClass($animation); }, $delay);
            } else {
                setTimeout(function() { $this.removeClass($animation); }, $delay);
            }
        });
    });

})(jQuery);

function funtoScroll(x, e) {

    var str = new String(e.target);
    var pos = str.indexOf('#');
    var t = str.substr(pos);
    $.scrollTo(t, 750);

    $(x).parent('.mean-bar').next('.mean-push').remove();
    $(x).parent('.mean-bar').remove();

    $('nav#main-menu').meanmenu({
        meanMenuContainer: $('header #menu-container'),
        meanRevealPosition: 'left',
        meanScreenWidth: 767,
        meanMenuClose: "<span /><span /><span />"
    });

    e.preventDefault();
}