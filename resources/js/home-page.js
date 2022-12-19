$(document).ready(function () {
    $(".home-page .slider-image").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: true,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                nav: false,
            },
            768: {},
        },
    });
    $(".home-page .flash-sale__product__list").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        margin: 30,
        dots: false,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                items: 1.2,
                nav: false,
            },
            375: {
                items: 1.4,
            },
            768: {
                items: 2.5,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });
    $(".home-page .product-detail__img-primary__list").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                nav: false,
            },
            768: {},
        },
    });
    $(".home-page .product-latest__list").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        margin: 30,
        stagePadding: 20,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                stagePadding: 15,
                items: 1,
                nav: false,
            },
            375: {
                items: 1.3,
            },
            768: {
                items: 2.5,
            },
            992: {
                items: 3,
                nav: false,
            },
            1200: {
                items: 3,
            },
            1367: {
                items: 3,
            },
        },
    });
    $(".home-page .product-type__product__list").owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        stagePadding: 6,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                items: 1.2,
                stagePadding: 2,

            },
            375: {
                items: 1.4,
                stagePadding: 6,
            },
            768: {
                items: 1.5,
            },
            992: {
                items: 2,
                nav: false,
            },
            1200: {
                items: 2,
                nav: true,
            },
            1367: {
                items: 2,
                nav: true,
            },
        },
    });
    $(".home-page .folding-bicycle__product__list").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        margin: 30,
        dots: false,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                items: 1.2,
                nav: false,
            },
            375: {
                items: 1.4,
            },
            768: {
                items: 2.5,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });
    $(".home-page .accessory__product__product__list").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        margin: 30,
        dots: false,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                items: 1.2,
                nav: false,
            },
            375: {
                items: 1.4,
            },
            768: {
                items: 2.5,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });
    $(".home-page .feedback__list").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: true,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                nav: true,
            },
            1200: {
                nav: false,
            },
        },
    });
    $(".home-page .news-latest__list").owlCarousel({
        items: 3,
        loop: true,
        nav: true,
        margin: 30,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2.6,
                nav: false,
            },
            1200: {
                items: 3,
                nav: false,
            },
        },
    });
    $(".home-page .brand__list").owlCarousel({
        items: 6,
        loop: true,
        nav: true,
        margin: 30,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 4,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 6,
            },
        },
    });
    $(".footer .footer__top__policy-list").owlCarousel({
        items: 4,
        loop: true,
        nav: false,
        margin: 30,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
            "<img class='p-3' src='./W21/images/arrow-left.png'>",
            "<img class='p-3' src='./W21/images/arrow-right.png'>",
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2.5,
            },
            1200: {
                items: 4,
            },
        },
    });
});
