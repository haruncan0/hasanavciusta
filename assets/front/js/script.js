(function ($) {
    'use strict'

    var app = {
        dropdown: function () {
            $('.drop-nav-arrow').on('click', function () {
                if (!$(this).parent().hasClass('open')) {
                    $(this).parent().addClass('open');
                    $(this).parent().find('> .drop-nav').slideDown();
                } else {
                    $(this).parent().removeClass('open');
                    $(this).parent().find('> .drop-nav').slideUp();
                }
            });
        }
    }

    $(document).ready(function () {
        $('.scroll').on('click', function () {
            $("html, body").animate({
                scrollTop: $('#reach-to').offset().top
            }, 2000);
            return false;
        });

        $(".menu-icon a").on('click', function (e) {
            if ($(this).hasClass('open')) {
                $(this).removeClass('open');
                $('.menu-main').removeClass('open');
            } else {
                $(this).addClass('open');
                $('.menu-main').addClass('open');
            }
            return false;
        });

        $('.menu-icon a').on('click', function () {
            $('body').toggleClass('hidden-body');
        });

        $('.icon-find').on('click', function () {
            $("footer").toggleClass("map_open");
            if($(window).width() > 575) {
                $('.location-footer-map').toggleClass('location-open');
            } else {
                $('.location-footer-map').toggleClass('mini-location-open');
            }
            return false;
        });

        $('.icon-find-location').on('click', function () {
            $('.location-footer-map').removeClass('location-open');
            $('.location-footer-map').removeClass('mini-location-open');
            $("footer").removeClass("map_open");
            return false;
        });

        footer_map_size();

    });

    $(window).on('load', function () {

        $('.menu-main ul li').each(function () {
            if ($(this).find('.drop-nav').length) {
                $(this).append('<span class="drop-nav-arrow"><i class="fa fa-angle-down"></i></span>')
            }
        });
        app.dropdown();


        $('#pre-loader').animate({
            opacity: 0,
        }, 1000, "linear", function () {
            $(this).remove();
        });
    });

    $(window).on('resize', function () {
        footer_map_size();
    });

    function footer_map_size() {
        if ($('.footer-map-outer').length > 0) {
            if ($(window).width() > 575) {
                var map_height = $("#footer_inner").outerHeight();
                $('#footer-map').css("height", map_height);
                $('.icon-find-location').addClass("web-footer-map");
            } else {
                $('#footer-map').css("height", "400");
                $('.icon-find-location').removeClass("web-footer-map");
            }
        }
    }

    $('.top-arrow').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $(window).on('scroll', function () {

        if ($(this).scrollTop() > 500) {
            $('.header-part').addClass('animated fadeInDown sticky-fixed');
            $('.top-arrow').fadeIn();
        } else {
            $('.header-part').removeClass('animated fadeInDown sticky-fixed');
            $('.top-arrow').fadeOut();
        }
        return false;
    });

})(jQuery);


equalheight = function (container) {

    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    $(container).each(function () {

        $el = $(this);
        $($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}