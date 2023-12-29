$(document).ready(function () {
    // link scroll ?scroll=leaderboard
    // var urlParams = new URLSearchParams(window.location.search);
    // if(urlParams.get('scroll') == 'leaderboard'){
    //     $('html,body').animate({
    //         scrollTop: $('#leaderboard').offset().top + 258
    //     }, 800, 'swing');
    // }else if(urlParams.get('scroll') == 'alumni'){
    //     $('html,body').animate({
    //         scrollTop: $('#alumni').offset().top + 258
    //     }, 800, 'swing');
    // }
    $("#header .description").addClass("leftToRight");
    $("#header img").addClass("rightToLeft");

    let scroll = sessionStorage.getItem("scroll");
    if (scroll == "leaderboard") {
        $("html,body").animate(
            {
                scrollTop: $("#leaderboard").offset().top + 258,
            },
            800,
            "swing"
        );
    } else if (scroll == "alumni") {
        $("html,body").animate(
            {
                scrollTop: $("#alumni").offset().top + 258,
            },
            800,
            "swing"
        );
    }
    sessionStorage.clear();

    $("#news .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    $("#alumni .owl-carousel").owlCarousel({
        loop: true,
        margin: 50,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1000: {
                items: 2,
            },
        },
    });

    $(".company .owl-carousel").owlCarousel({
        loop: true,
        dots: false,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 3,
            },
            768: {
                items: 4,
            },
            1000: {
                items: 5,
            },
        },
    });

    $(".navScroll").on("click", function (e) {
        var navLink = $(this).attr("href");
        var linkTujuan = $(navLink);
        $("html,body").animate(
            {
                scrollTop: linkTujuan.offset().top - 100,
            },
            800,
            "swing"
        );
        e.preventDefault();
    });

    $(".js-modal-btn").modalVideo();
});

$(window).on("scroll", function () {
    let scrollTop = $(this).scrollTop();

    if (scrollTop > 100) {
        $(".navbar").addClass("navbarFixed");
    } else {
        $(".navbar").removeClass("navbarFixed");
    }

    if (scrollTop > $("#whyUs .ssd img").offset().top - 500) {
        $("#whyUs .ssd img").addClass("leftToRight");
    }

    if (scrollTop > $("#whyUs .animation1").offset().top - 500) {
        $("#whyUs .animation1").addClass("rightToLeft");

        $("#whyUs li").each(function (i) {
            setTimeout(function () {
                $("#whyUs li").eq(i).addClass("rightToLeft");
            }, 400 * i);
        });
    }
    if (scrollTop > $("#aboutUs h2").offset().top - 500) {
        $("#aboutUs h2").addClass("bottomToTop");

        $("#aboutUs .card").each(function (i) {
            setTimeout(function () {
                $("#aboutUs .card").eq(i).addClass("bottomToTop");
            }, 200 * i);
        });
    }

    if (scrollTop > $("#majors h2").offset().top - 500) {
        $("#majors h2").addClass("bottomToTop");

        $("#majors .card").each(function (i) {
            setTimeout(function () {
                $("#majors .card").eq(i).addClass("bottomToTop");
            }, 200 * i);
        });
    }
});
