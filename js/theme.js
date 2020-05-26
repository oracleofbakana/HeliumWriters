!(function (a) {
    "use strict";
    a(window).on("load", function () {
        a('[data-loader="dual-ring"]').fadeOut(), a(".preloader").delay(333).fadeOut("slow"), a("body").delay(333);
    }),
        a(window).on("scroll", function () {
            var t = a("#header.sticky-top .bg-transparent"),
                e = a("#header.sticky-top-slide");
            a(this).scrollTop() > 1
                ? (t.addClass("sticky-on-top"), t.find(".logo img").attr("src", t.find(".logo img").data("sticky-logo")))
                : (t.removeClass("sticky-on-top"), t.find(".logo img").attr("src", t.find(".logo img").data("default-logo"))),
                a(this).scrollTop() > 180
                    ? (e.find(".primary-menu").addClass("sticky-on"), e.find(".logo img").attr("src", e.find(".logo img").data("sticky-logo")))
                    : (e.find(".primary-menu").removeClass("sticky-on"), e.find(".logo img").attr("src", e.find(".logo img").data("default-logo")));
        }),
        a("body").hasClass("side-header")
            ? a(".smooth-scroll").on("click", function () {
                  event.preventDefault();
                  var t = a(this).attr("href");
                  a("html, body")
                      .stop()
                      .animate({ scrollTop: a(t).offset().top }, 1500, "easeInOutExpo");
              })
            : a(".smooth-scroll").on("click", function () {
                  event.preventDefault();
                  var t = a(this).attr("href");
                  a("html, body")
                      .stop()
                      .animate({ scrollTop: a(t).offset().top - 50 }, 1500, "easeInOutExpo");
              }),
        a(".navbar-toggler").on("click", function () {
            a(this).toggleClass("show");
        }),
        a(".navbar-nav a").on("click", function () {
            a(".navbar-collapse, .navbar-toggler").removeClass("show");
        }),
        a(".navbar-side-open .collapse, .navbar-overlay .collapse").on("show.bs.collapse hide.bs.collapse", function (a) {
            a.preventDefault();
        }),
        a('.navbar-side-open [data-toggle="collapse"], .navbar-overlay [data-toggle="collapse"]').on("click", function (t) {
            t.preventDefault(), a(a(this).data("target")).toggleClass("show");
        }),
        a(".owl-carousel").each(function (t) {
            var e = a(this);
            a(this).owlCarousel({
                autoplay: e.data("autoplay"),
                center: e.data("center"),
                autoplayTimeout: e.data("autoplaytimeout"),
                autoplayHoverPause: e.data("autoplayhoverpause"),
                loop: e.data("loop"),
                speed: e.data("speed"),
                nav: e.data("nav"),
                dots: e.data("dots"),
                autoHeight: e.data("autoheight"),
                autoWidth: e.data("autowidth"),
                margin: e.data("margin"),
                stagePadding: e.data("stagepadding"),
                slideBy: e.data("slideby"),
                lazyLoad: e.data("lazyload"),
                navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                animateOut: e.data("animateOut"),
                animateIn: e.data("animateIn"),
                video: e.data("video"),
                items: e.data("items"),
                responsive: { 0: { items: e.data("items-xs") }, 576: { items: e.data("items-sm") }, 768: { items: e.data("items-md") }, 992: { items: e.data("items-lg") } },
            });
        }),
        a(".popup-img-gallery").each(function () {
            a(this).magnificPopup({
                delegate: ".popup-img:visible",
                type: "image",
                tLoading: '<div class="preloader"><div data-loader="dual-ring"></div></div>',
                closeOnContentClick: !0,
                mainClass: "mfp-fade",
                gallery: { enabled: !0, navigateByImgClick: !0, preload: [0, 1] },
            });
        }),
        a(".popup-ajax-gallery").each(function () {
            a(this).magnificPopup({
                delegate: ".popup-ajax:visible",
                type: "ajax",
                tLoading: '<div class="preloader"><div data-loader="dual-ring"></div></div>',
                mainClass: "mfp-fade",
                closeBtnInside: !0,
                midClick: !0,
                gallery: { enabled: !0 },
                callbacks: {
                    ajaxContentAdded: function () {
                        a(".owl-carousel").each(function (t) {
                            var e = a(this);
                            a(this).owlCarousel({
                                autoplay: e.data("autoplay"),
                                center: e.data("center"),
                                autoplayTimeout: e.data("autoplaytimeout"),
                                autoplayHoverPause: e.data("autoplayhoverpause"),
                                loop: e.data("loop"),
                                speed: e.data("speed"),
                                nav: e.data("nav"),
                                dots: e.data("dots"),
                                autoHeight: e.data("autoheight"),
                                autoWidth: e.data("autowidth"),
                                margin: e.data("margin"),
                                stagePadding: e.data("stagepadding"),
                                slideBy: e.data("slideby"),
                                lazyLoad: e.data("lazyload"),
                                navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                                animateOut: e.data("animateOut"),
                                animateIn: e.data("animateIn"),
                                video: e.data("video"),
                                items: e.data("items"),
                                responsive: { 0: { items: e.data("items-xs") }, 576: { items: e.data("items-sm") }, 768: { items: e.data("items-md") }, 992: { items: e.data("items-lg") } },
                            });
                        });
                    },
                },
            });
        }),
        a(".popup-youtube, .popup-vimeo, .popup-gmaps").each(function () {
            a(this).magnificPopup({ type: "iframe", mainClass: "mfp-fade" });
        }),
        a(window).on("load", function () {
            a(".portfolio-filter").each(function () {
                var t = a(this).isotope({ layoutMode: "masonry" });
                a(".portfolio-menu")
                    .find("a")
                    .on("click", function () {
                        var e = a(this).attr("data-filter");
                        return a(".portfolio-menu").find("a").removeClass("active"), a(this).addClass("active"), t.isotope({ filter: e }), !1;
                    });
            });
        }),
        a(".parallax").each(function () {
            a(this).parallaxie({ speed: 0.5 });
        }),
        a(".counter").each(function () {
            a(this).appear(function () {
                a(this).countTo({ speed: 1800 });
            });
        }),
        a(".typed").each(function () {
            new Typed(".typed", { stringsElement: ".typed-strings", loop: !0, typeSpeed: 100, backSpeed: 50, backDelay: 1500 });
        }),
        a("[data-toggle='tooltip']").tooltip({ container: "body" }),
        a(function () {
            a(window).on("scroll", function () {
                a(this).scrollTop() > 400 ? a("#back-to-top").fadeIn() : a("#back-to-top").fadeOut();
            });
        }),
        a("#back-to-top").on("click", function () {
            return a("html, body").animate({ scrollTop: 0 }, "slow"), !1;
        });
    var t = a("#contact-form"),
        e = a("#submit-btn");
    t.on("submit", function (o) {
        o.preventDefault(),
            a.ajax({
                url: "php/mail.php",
                type: "POST",
                dataType: "html",
                data: t.serialize(),
                beforeSend: function () {
                    e.attr("disabled", "disabled");
                    var a = '<span role="status" aria-hidden="true" class="spinner-border spinner-border-sm align-self-center mr-2"></span>Sending.....';
                    e.html() !== a && (e.data("original-text", e.html()), e.html(a));
                },
                success: function (o) {
                    a(".alert-dismissible").remove(), e.before(o).fadeIn(), t.trigger("reset"), e.html(e.data("original-text")), e.removeAttr("disabled", "disabled");
                },
                error: function (a) {
                    console.log(a);
                },
            });
    });
})(jQuery);
