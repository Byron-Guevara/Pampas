

$(document).ready(function(){

    $(".cont-icon-menu").click(function(){
        $(this).children("div").each(function(i){
            var el = $(this);
            setTimeout(function(){
            el.animate()
                    .animate({width: 0}, {duration: 100});
            },i*100);
        });
        setTimeout(function(){
            $(".contenedor-general-menu").addClass("active");
        }, 400);
    });

    $(".close").click(function(){
        $(".contenedor-general-menu").removeClass("active");
        setTimeout(function(){
            $(".cont-icon-menu").each(function(ii){
                    $(this).children("div").each(function(i){
                    var el = $(this);
                    var w = 35 - (i * 7);
                    setTimeout(function(){
                    el.animate()
                            .animate({width: w}, {duration: 100});
                    },i*100);
                });
            });
        }, 100);
    });

    var screen_width = $(window).width();
    $(window).resize(function () {
        screen_width = $(window).width();
    });

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (screen_width >= 768) {
            if (scroll >= 100) {
                $('header').addClass('scroll');
            } else {
                $('header').removeClass('scroll');
            }
        }
    });

});