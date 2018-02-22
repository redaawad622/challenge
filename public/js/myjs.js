
$(document).ready(function() {

    /*show box tool*/

    $('.gear-ch').click(function() {

        $(".color-option").toggle();

    });

    /*change color*/

    var colorLi = $('.color-option ul li');

    colorLi
        .eq(0).css("backgroundColor", "rgb(241, 104, 118)").end()
        .eq(1).css("backgroundColor", "#ef5285").end()
        .eq(2).css("backgroundColor", "#2b90d9").end()

    .eq(3).css("backgroundColor", "#379392").end()
        .eq(4).css("backgroundColor", "#33b35a").end()
        .eq(5).css("backgroundColor", "#796AEE");

    colorLi.click(function() {

        $("link[href*='them']").attr("href", $(this).attr('data-value'));
        //console.log($(this).attr("data-value"));
    });

    //loading screen
    $(window).on('load', function() {

        $(".overlay").fadeOut(1000, function() {

                $(this).remove();

            $('body').css("overflow", "auto");
        });

    });
    var scroll = $(".scroll");
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 900) {
            scroll.show();
        } else {
            scroll.hide();
        }

    });

    scroll.click(function() {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);
    });

    //scroll setting

    $("html").niceScroll({
        cursorcolor: "#252d44",
        cursorwidth: "5px"
    });
    
    /*curose height*/
    
    var docHeight = screen.height;
    $('.carous').css('height', docHeight);
     $('.carous .data').css('height', docHeight);
    
    
});