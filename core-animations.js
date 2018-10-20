$(document).ready(function () {

    var w = $(window).width();

    $(window).resize(function () {
        w = $(window).width();
    });

    //    Icons appear on mouseover
    $("#dev").mouseenter(function () {
        $("#brackets").css(
            "display", "block"
        );
    });
    $("#dev").mouseleave(function () {
        $("#brackets").css(
            "display", "none"
        );
    });

    $("#content-nav").mouseenter(function () {
        $("#speaker").css(
            "display", "block"
        );
    });
    $("#content-nav").mouseleave(function () {
        $("#speaker").css(
            "display", "none"
        );
    });

    $("#cv").mouseenter(function () {
        $("#tie").css(
            "display", "block"
        );
    });
    $("#cv").mouseleave(function () {
        $("#tie").css(
            "display", "none"
        );
    });

    //    Background color changes on scroll
    $(window).scroll(function () {

        $('.chunk')
            .scrollie({
                scrollOffset: -350,
                scrollingInView: function (elem) {

                    var bgColor = elem.data('background');

                    $('body').css('background-color', bgColor);

                }
            });

    });

    //    Smooth scrolling on internal links

    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        if (w > 1024) {

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });

        } else if (w > 770) {

            if ($(this).attr("href") == ("#web-dev")) {

                $('html, body').stop().animate({
                    'scrollTop':

                        $target.offset().top

                }, 900, 'swing', function () {
                    window.location.hash = target;
                });

            } else {

                $('html, body').stop().animate({
                    'scrollTop':

                        $target.offset().top - 100

                }, 900, 'swing', function () {
                    window.location.hash = target;
                });

            }
            
        } else {

            if ($(this).attr("href") == ("#web-dev")) {

                $('html, body').stop().animate({
                    'scrollTop':

                        $target.offset().top

                }, 900, 'swing', function () {
                    window.location.hash = target;
                });

            } else {

                $('html, body').stop().animate({
                    'scrollTop':

                        $target.offset().top - 70

                }, 900, 'swing', function () {
                    window.location.hash = target;
                });

            }
        }
    });

    //    Side navigation animations

    $(".circle").mouseenter(function () {
        $(this).removeClass("fa-circle-o");
        $(this).addClass("fa-circle");
    });

    $(".circle").mouseleave(function () {
        $(this).removeClass("fa-circle");
        $(this).addClass("fa-circle-o");
    });

    $("#side-nav, .creative-navi").children("li").mouseenter(function () {
        $(this).find("span").show("slide", {
            direction: "right"
        }, 100)
    });

    $("#side-nav, .creative-navi").children("li").mouseleave(function () {
        $(this).find("span").hide("slide", {
            direction: "right"
        }, 100)
    });

    // Nav options for creative sub-menus

    if (w > 1300) {

        $(".writing").click(function () {

            $(".a-navi").addClass("active-navi").fadeIn(400, 'linear');

        });

        $(".sound").click(function () {

            $(".w-navi").addClass("active-navi").fadeIn(400, 'linear');

        });

        $(".w-navi").click(function () {

            $(".a").hide("slide", {
                direction: "right"
            }, 900);

            $(".w").show("slide", {
                direction: "left"
            }, 900);

            $(".w-navi").removeClass("active-navi").fadeOut(400, 'linear');
            $(".a-navi").addClass("active-navi").fadeIn(400, 'linear');

            $('html, body').animate({
                scrollTop: $("#content").offset().top
            }, 500);
        });

        $(".a-navi").click(function () {

            $(".w").hide("slide", {
                direction: "left"
            }, 900);

            $(".a").show("slide", {
                direction: "right"
            }, 900);

            $(".a-navi").removeClass("active-navi").fadeOut(400, 'linear');
            $(".w-navi").addClass("active-navi").fadeIn(400, 'linear');

            $('html, body').animate({
                scrollTop: $("#content").offset().top
            }, 500);
        });

    }

    //    Visibility utility for side nav

    if (w > 1300) {

        $(window).scroll(function () {
            var top_of_element = $("#greeting-meta-container").offset().top;
            var bottom_of_element = $("#greeting-meta-container").offset().top + $("#greeting-meta-container").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).height();
            var top_of_screen = $(window).scrollTop();

            if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
                $("#side-nav").fadeOut(400, 'linear');
            } else {
                $("#side-nav").fadeIn(400, 'linear');

            }
        });

        //    Visibility utility for creative nav
        $(window).scroll(function () {
            var top_of_element = $("#content").offset().top;
            var bottom_of_element = $("#content").offset().top + $("#content").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).height();
            var top_of_screen = $(window).scrollTop();

            if ((top_of_screen > top_of_element - 175) && (top_of_screen < bottom_of_element - 225) && $(".prompt-row").css("display") === "none") {
                $(".active-navi").fadeIn(400, 'linear');
            } else {
                $(".active-navi").fadeOut(400, 'linear');

            }
        });

    }

    //    Mobile nav reveal
    $(".mobile-nav-toggle").click(function () {
        if ($(".mobile-nav").css("display") === "none") {

            $(".mobile-nav").stop(true, true).slideDown(300, "linear");

            $(".mobile-nav-holder").animate({
                backgroundColor: "rgba(241,236,248,1)"
            }, 300);

            $(".mobile-nav-toggle").addClass("fa-times").removeClass("fa-bars");

        } else {

            $(".mobile-nav").stop(true, true).slideUp(300, "linear");

            $(".mobile-nav-holder").animate({
                backgroundColor: "rgba(241,236,248,0.8)"
            }, 300);

            $(".mobile-nav-toggle").addClass("fa-bars").removeClass("fa-times");

        }
    });

    $(".mobile-nav-holder").children("ul").children("li").click(function () {
        $(".mobile-nav-toggle").trigger("click");
    });

    $(".creative-nav-mobile").children("li").click(function () {
        $(".mobile-nav-toggle").trigger("click");
    });

    //    Makes mobile nav sticky

    var stickyNavTop = $('#web-dev').offset().top;

    var stickyNav = function () {

        var scrollTop = $(window).scrollTop();


        if (w < 1024) {

            if (scrollTop > stickyNavTop) {
                $('.mobile-nav-holder').css({
                    "position": "fixed",
                    "top": "0px",
                    "display": "block"
                });
            } else {
                $('.mobile-nav-holder').css("display", "none");
            }
        }
    };

    stickyNav();

    $(window).scroll(function () {
        stickyNav();
    });

    //    Creative nav mobile behavior
    $(".w-navi-mobile").click(function () {

        $(".a").hide("slide", {
            direction: "right"
        }, 900);

        $(".w").show("slide", {
            direction: "left"
        }, 900);

        $(".mobile-nav-toggle").trigger("click");

        $('html, body').animate({
            scrollTop: $("#content").offset().top - 100
        }, 500);

    });

    $(".a-navi-mobile").click(function () {

        $(".w").hide("slide", {
            direction: "right"
        }, 900);

        $(".a").show("slide", {
            direction: "left"
        }, 900);

        $(".mobile-nav-toggle").trigger("click");

        $('html, body').animate({
            scrollTop: $("#content").offset().top - 100
        }, 500);

    });


    //  Portfolio hover reveal
    
    if (w > 1020) {

    $(".overlay-text").mouseenter(function () {
        $(this).next().stop(true, true).fadeIn(1000);
    });

    $(".overlay-text").mouseleave(function () {
        if ($(this).parent().next().children("div.wd-detail-box").css("display") === "none") {
            $(this).next().stop(true, true).fadeOut(1000);
        }
    });
    
    }

    //    Portfolio item details reveal
    $(".overlay-text").click(function () {
        if ($(this).parent().next().children("div.wd-detail-box").css("display") === "none") {

            var id = $(this).next().attr("id");

            $('html, body').animate({
                scrollTop: $(this).parent().offset().top
            }, 700);
            
            if ( w < 1021) {
                
                $(this).next().stop(true, true).fadeIn(1000);

            }
            $(this).parent().next().children("div.wd-detail-box").slideDown(700);

            $({
                blurRadius: 4
            }).animate({
                blurRadius: 0
            }, {
                duration: 700,
                easing: 'linear',
                step: function () {

                    $("#" + id + "").css({
                        "-webkit-filter": "blur(" + this.blurRadius + "px)",
                        "filter": "blur(" + this.blurRadius + "px)"
                    });
                }
            });

        } else {

            var id = $(this).next().attr("id");
            $(this).parent().next().children("div.wd-detail-box").slideUp(700);
            $(this).siblings(".wd-content-box").fadeOut(1000);

            $({
                blurRadius: 0
            }).animate({
                blurRadius: 4
            }, {
                duration: 700,
                easing: 'linear',
                step: function () {
                    $("#" + id + "").css({
                        "-webkit-filter": "blur(" + this.blurRadius + "px)",
                        "filter": "blur(" + this.blurRadius + "px)"
                    });
                }
            });

        }
    });
    //    };

    // Closes the details dropdown
    $(".close").click(function () {
        $(this).parent().slideUp(700);

        $(this).parent().parent().prev().find(".wd-content-box").fadeOut(1000);

        var id = $(this).parents(".wd-detail-box").parent().prevUntil("wd-content-holder").children("div.wd-content-box").attr("id");

        $({
            blurRadius: 0
        }).animate({
            blurRadius: 4
        }, {
            duration: 700,
            easing: 'linear',
            step: function () {
                $("#" + id + "").css({
                    "-webkit-filter": "blur(" + this.blurRadius + "px)",
                    "filter": "blur(" + this.blurRadius + "px)"
                });
            }
        });

    });

    // Swipes info panels left and right on details dropdown

    $(".details .r").click(function () {

        if ($(this).parents(".details").siblings($(".d-1")).css("display") === "block") {

            $(this).parents(".details-nav").siblings(".d-1").hide("slide", {
                direction: "right"
            }, 500);

            $(this).parents(".details-nav").siblings(".d-2").show("slide", {
                direction: "left"
            }, 500);


            $(this).removeClass("switch");
            $(this).siblings($(".l")).addClass("switch");

        }
    });

    $(".details .l").click(function () {

        if ($(this).parents(".details").siblings($(".d-2")).css("display") === "block") {

            $(this).parents(".details-nav").siblings(".d-2").hide("slide", {
                direction: "left"
            }, 500);

            $(this).parents(".details-nav").siblings(".d-1").show("slide", {
                direction: "right"
            }, 500);

            $(this).removeClass("switch");
            $(this).siblings($(".r")).addClass("switch");

        }

    });

    //    Toggles writing and audio porfolios in Creative subhead
    $(".writing").click(function () {

        if ($(".w").css("display") === "none") {
            $(".prompt-row").hide("slide", {
                direction: "right"
            }, 900);

            $(".w").show("slide", {
                direction: "left"
            }, 900);

            if (w < 1030) {

                $(".creative-nav-mobile").css("display", "block");
            }

        }
    });

    $(".sound").click(function () {

        if ($(".a").css("display") === "none") {
            $(".prompt-row").hide("slide", {
                direction: "left"
            }, 900);

            $(".a").show("slide", {
                direction: "right"
            }, 900);

            if (w < 1030) {

                $(".creative-nav-mobile").css("display", "block");
            }

        }
    });


});
