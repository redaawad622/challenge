
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
        cursorcolor:"rgb(16, 95, 126)",
        cursorwidth:"12px",
        cursorborder: "none", // css definition for cursor border
        cursorborderradius: "0px", // border radius in pixel for cursor
        background:"#eee",
        zindex:'9999',
        scrollspeed:90,
    });
    /*curose height*/
    
    var docHeight = screen.height;
    $('.carous').css('height', docHeight);
     $('.carous .data').css('height', docHeight);
    
    
});


/*carousal*/

if($(".owwl  .imagesA").length) {
    $(document).ready(function () {
        $(".owwl  .imagesA").hover(function () {
            $(".owwl .images .hiddA").toggle(600)
        });
        $(".owwl .imagesB").hover(function () {
            $(".owwl .images .hiddB").toggle(600)
        });
        $(".owwl .imagesC").hover(function () {
            $(".owwl .images .hiddC").toggle(600)
        });
        $(".owwl .imagesD").hover(function () {
            $(".owwl .images .hiddD").toggle(600)
        });
        $("html").niceScroll();
        $('.carousel').carousel({interval: 5000});
        var med = $("#medication");
        med.click(function () {
            $("html,body").animate({scrollTop: 750}, 600)
        });
        var med1 = $("#medication1");
        med1.click(function () {
            $("html,body").animate({scrollTop: 750}, 600)
        });
        var event = $("#events");
        event.click(function () {
            $("html,body").animate({scrollTop: 0}, 600)
        });
        var event1 = $("#events1");
        event1.click(function () {
            $("html,body").animate({scrollTop: 0}, 600)
        });
        var objective = $("#objective");
        objective.click(function () {
            $("html,body").animate({scrollTop: 1600}, 600)
        });
        var objective1 = $("#objective1");
        objective1.click(function () {
            $("html,body").animate({scrollTop: 1600}, 600)
        });
        var gal = $("#gal");
        gal.click(function () {
            $("html,body").animate({scrollTop: 3250}, 600)
        });
        var gal1 = $("#gal1");
        gal1.click(function () {
            $("html,body").animate({scrollTop: 3650}, 600)
        });
        var abou = $("#abou");
        abou.click(function () {
            $("html,body").animate({scrollTop: 2300}, 600)
        });
        var abou1 = $("#abou1");
        abou1.click(function () {
            $("html,body").animate({scrollTop: 2600}, 600)
        });
        var cont = $("#cont");
        cont.click(function () {
            $("html,body").animate({scrollTop: 4000}, 600)
        });
        var cont1 = $("#cont1");
        cont1.click(function () {
            $("html,body").animate({scrollTop: 4400}, 600)
        });

        var reg1 = $("#reg1");
        reg1.click(function () {
            $("html,body").animate({scrollTop: 3100}, 600)
        });
        $('.owwl .owl-carousel').owlCarousel({
            loop: !0,
            margin: 10,
            nav: !0,
            responsive: {0: {items: 1}, 600: {items: 2}, 900: {items: 3}, 1200: {items: 4}}
        });
        $('.owwll .owl-carousel').owlCarousel({
            loop: !0,
            margin: 10,
            nav: !0,
            responsive: {0: {items: 1}, 600: {items: 2}, 900: {items: 3}, 1200: {items: 4}}
        })
    });
    var sss = $(".navbar-inverse");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            sss.css("top", "0")
        }
        else {
            sss.css("top", "55px")
        }
    });
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n)
    }

    function currentSlide(n) {
        showSlides(slideIndex = n)
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "")
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active"
    }
}


/*feedback*/
$('.close').click(function () {
    $('.mod-feed') .hide();
    $('.he .feed').css('top','366px');
});
$('.feed').mouseover(function () {
    $('.mod-feed') .fadeToggle();
    $('.he .feed').css('top','410px');

});

/*show input in changeinfo page*/
function show_input_info()
{
    $('.edit-info,.myBtn-2,.myBtn-3').show();

    $('.edit-p-info,.myBtn-1').hide();
}
function cancel_input_info()
{
    $('.edit-info,.myBtn-2,.myBtn-3').hide();

    $('.edit-p-info,.myBtn-1').show();
}

/*nav*/
jQuery(document).ready(function(){
    if( $('.cd-stretchy-nav').length > 0 ) {
        var stretchyNavs = $('.cd-stretchy-nav');

        stretchyNavs.each(function(){
            var stretchyNav = $(this),
                stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger');

            stretchyNavTrigger.on('click', function(event){
                event.preventDefault();
                stretchyNav.toggleClass('nav-is-visible');
            });
        });

        $(document).on('click', function(event){
            ( !$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span') ) && stretchyNavs.removeClass('nav-is-visible');
        });
    }
});