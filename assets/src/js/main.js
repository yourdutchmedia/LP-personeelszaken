const $ = require('jquery');
require('slick-carousel');

$(document).ready(function () {
    $('body').addClass('loaded');
});

$('.hamburger-menu').click(function () {
    if ($(this).hasClass("open")) {
        $(this).removeClass("open");
        $('aside').removeClass("opened");
        $('html').css("overflow", "initial");
    } else {
        $(this).addClass("open");
        $('aside').addClass("opened");
        $('html').css("overflow", "hidden");

    }
});

$('.more-info').click(function () {
    if($(this).parent().hasClass('active')) {
        $(this).html('Lees meer')
        $(this).parent().removeClass('active')
    } else {
        $(this).html('Lees minder')
        $(this).parent().addClass('active')
    }
});

$('.more-info-large').click(function () {
    if($(this).parent().hasClass('active')) {
        $(this).html('Lees meer')
        $(this).parent().removeClass('active')
    } else {
        $(this).html('Lees minder')
        $(this).parent().addClass('active')
    }
});

$('.package-slider').slick({
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true,
            }
        }
    ],

});