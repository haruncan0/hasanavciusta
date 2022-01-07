(function($) {
    'use strict'


    /* Revolution Slider */

    jQuery('.tp-banner').show().revolution({
        dottedOverlay: "none",
        delay: 3500,
        startwidth: 1170,
        startheight: 700,
        hideThumbs: 200,
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 5,
        navigationType: "bullet",
        navigationArrows: "hide",
        navigationStyle: "preview1",
        navigationInGrid: "off",
        touchenabled: "on",
        onHoverStop: "off",
        swipe_velocity: 0.8,
        drag_block_vertical: false,
        parallax: "mouse",
        parallaxBgFreeze: "on",
        parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
        keyboardNavigation: "off",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        shadow: 0,
        fullWidth: "off",
        fullScreen: "on",
        spinner: "spinner4",
        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        forceFullWidth: "off",
        hideThumbsOnMobile: "off",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResolution: 0,
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
    });

    /* Owl Carousel For All product slider */

    if ($('.owl-carousel').length) {

        $('.owl-carousel').each(function() {
            var owl = $('.owl-carousel');
            $(this).owlCarousel({
                margin: 30,
                loop: $(this).data('loop'),
                autoplayTimeout: $(this).data('autotime'),
                smartSpeed: $(this).data('speed'),
                autoplay: $(this).data('autoplay'),
                items: $(this).data('carousel-items'),
                nav: $(this).data('nav'),
                dots: $(this).data('dots'),
                responsive: {
                    0: {
                        items: $(this).data('mobile'),
                        margin: 15
                    },
                    575: {
                        items: $(this).data('small'),
                        margin: 15
                    },
                    768: {
                        items: $(this).data('tablet')
                    },
                    992: {
                        items: $(this).data('laptop')
                    },
                    1200: {
                        items: $(this).data('items')
                    }
                }
            });
        });
    }

    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,

        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    /* Slick Slider Call Here... */

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 991,
                settings: {
                    arrows: true,
                    centerMode: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: false,
                    slidesToShow: 3
                }
            }
        ]
    });

    //Initiat WOW JS
    new WOW().init();

    /* Steller Parallax */

    $.stellar({
        horizontalScrolling: false,
        verticalScrolling: true,
        horizontalOffset: 0,
        verticalOffset: 0,
        responsive: true,
        scrollProperty: 'scroll',
        positionProperty: 'position',
        parallaxBackgrounds: true,
        parallaxElements: true,
        hideDistantElements: true,
        hideElement: function($elem) { $elem.hide(); },
        showElement: function($elem) { $elem.show(); }
    });
    
    $("[data-fancybox]:not(.product_fancybox)").fancybox({
        loop: true,
        protect: true,
        toolbar: true,
        buttons: [
            "zoom",
            "fullScreen",
            "slideShow",
            "thumbs",
            "close",
        ],
        infobar: true,
    });

    $(".product_fancybox").fancybox({
        loop: false,
        protect: true,
        toolbar: true,
        buttons: [
            "zoom",
            "fullScreen",
            "close",
        ],
        toolbar: true,
        protect: true,
        arrows: false,
    });

})(jQuery);