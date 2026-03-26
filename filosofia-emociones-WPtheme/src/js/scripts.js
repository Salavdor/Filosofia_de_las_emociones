
(function ($) {
    $('.seminarios').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 4000,
        adaptiveHeight: false,
        arrows: true,
        appendArrows: $('.seminarios-arrows'),
        prevArrow: '<button class="slick-prev custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_retroceder.svg"></button>',
        nextArrow: '<button class="slick-next custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_avanzar.svg"></button>',
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }
        ]
    });
    $('.conversatorios').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 4000,
        adaptiveHeight: false,
        arrows: true,
        appendArrows: $('.conversatorios-arrows'),
        prevArrow: '<button class="slick-prev custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_retroceder.svg"></button>',
        nextArrow: '<button class="slick-next custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_avanzar.svg"></button>',
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }
        ]
    });
    $('.catedras').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 4000,
        variableWidth: false,
        adaptiveHeight: true,
        arrows: true,
        appendArrows: $('.catedras-arrows'),
        prevArrow: '<button class="slick-prev custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_retroceder.svg"></button>',
        nextArrow: '<button class="slick-next custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_avanzar.svg"></button>',
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
        $('.libros').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        adaptiveHeight: false,
        arrows: true,
        appendArrows: $('.libros-arrows'),
        prevArrow: '<button class="slick-prev custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_retroceder.svg"></button>',
        nextArrow: '<button class="slick-next custom-arrow"><img src="' + themeData.themeUrl + '/src/img/scroll_carrusel_avanzar.svg"></button>',
    });


// smooth scroll
$(document).ready(function () {

    // scroll cuando vienes de otra página
    if (window.location.hash) {

        var hash = window.location.hash;

        if ($(hash).length) {
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800);
        }
    }

    // scroll si el ancla está en la misma página
    $('a[href*="#"]').on('click', function (event) {

        var hash = this.hash;
        var pathname = this.pathname.replace(/^\//, '');
        var currentPath = location.pathname.replace(/^\//, '');

        if (pathname === currentPath && hash !== "") {

            if ($(hash).length) {

                event.preventDefault();

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800);

                history.pushState(null, null, hash);
            }
        }

    });


     const btn = $('#btnTop');

    // mostrar/ocultar botón según scroll
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 1000) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    // acción al hacer click
    btn.on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 400);
    });

});


})(jQuery);