(function ($) {
    "use strict";

    /*---------------------
      venobox
    --------------------- */
    var veno_box = $('.venobox');
    veno_box.venobox();

    /*------------------------------------
     search option
    ------------------------------------- */
    $('.search-option').hide();
    $(".main-search").on('click', function () {
        $('.search-option').animate({
            height: 'toggle',
        });
    });
    /*---------------------
     TOP Menu Stick
    --------------------- */
    var windows = $(window);
    var sticky = $('#sticker');

    windows.on('scroll', function () {
        var scroll = windows.scrollTop();
        if (scroll < 400) {
            sticky.removeClass('stick');
        } else {
            sticky.addClass('stick');
        }
    });
    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    var mean_menu = $('nav#dropdown');
    mean_menu.meanmenu();
    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*----------------------------
     Counter js active
    ------------------------------ */
    var count = $('.counter');
    count.counterUp({
        delay: 40,
        time: 3000
    });

    /*--------------------------
     collapse
    ---------------------------- */
    var panel_test = $('.panel-heading a');
    panel_test.on('click', function () {
        panel_test.removeClass('active');
        $(this).addClass('active');
    });
    /*--------------------------
     Parallax
    ---------------------------- */
    var parallaxeffect = $(window);
    parallaxeffect.stellar({
        responsive: true,
        positionProperty: 'position',
        horizontalScrolling: false
    });
    /*--------------------------
     MagnificPopup
    ---------------------------- */
    $('.video-play').magnificPopup({
        type: 'iframe'
    });

    /*--------------------------
         slider carousel
    ---------------------------- */
    var intro_carousel = $('.intro-carousel');
    intro_carousel.owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        dots: false,
        navText: ["<i class='icon icon-chevron-left'></i>", "<i class='icon icon-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    /*--------------------------
         Project carousel
    ---------------------------- */
    $('.project-carousel').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        dots: false,
        navText: ["<i class='icon icon-chevron-left'></i>", "<i class='icon icon-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    /*--------------------------
         Project carousel
    ---------------------------- */
    $('.project-carousel-2').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        dots: false,
        margin: 30,
        navText: ["<i class='icon icon-chevron-left'></i>", "<i class='icon icon-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            700: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    /*----------------------------
     isotope active
    ------------------------------ */
    // project start
    $(window).on("load", function () {
        var $container = $('.project-all');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.project-menu li a').on("click", function () {
            $('.project-menu li a.active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
    //portfolio end
    /*---------------------
     Testimonial carousel
    ---------------------*/
    var review = $('.testimonial-carousel');
    review.owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        dots: false,
        navText: ["<i class='icon icon-chevron-left'></i>", "<i class='icon icon-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    /*----------------------------
      brand-carousel-carousel
    ------------------------------ */
    $('.brand-carousel').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        autoplay: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    /*----------------------------
        Contact form
    ------------------------------ */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#contactForm").on("submit", function (event) {
        event.preventDefault();
        submitForm();
    });

    function submitForm() {
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#msg_subject").val();
        var message = $("#message").val();

        $.ajax({
            type: "POST",
            url: "/contact",
            data: "name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
            success: function (response) {
                formSuccess(response);
            },
            error: function (data) {
                formError(data.responseJSON.errors.message[0]);
            }
        });
    }

    function formSuccess(response) {
        $("#contactForm")[0].reset();
        submitMSG(true, response)
    }

    function formError(errors) {
        $("#contactForm").removeClass()
                         .addClass('shake animated')
                         .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
        submitMSG(false, errors)
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h3 text-center tada animated text-success";
        } else {
            var msgClasses = "h3 text-center text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
})(jQuery);
