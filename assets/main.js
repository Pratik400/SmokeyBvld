$(document).ready(function () {
    document.addEventListener("DOMContentLoaded", function () {
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        })
    });


    $('.v1-slider').slick({
        dots: false,
        infinite: false,
        speed: 500,
        slidesToShow: 5,
        edgeFriction: 5,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                    dots: true,
                    arrows: false
                },
            },
        ]
    });

    $(".blog-card-title").dotdotdot({
        height: 50,
        fallbackToLetter: true,
        watch: true,
    });

    $(".blog-card-text").dotdotdot({
        height: 100,
        fallbackToLetter: true,
        watch: true,
    });

 
    // jQuery('.stellarnav').stellarNav({
    //   theme: 'light',
    //   breakpoint: 800,
    //   position: 'top',
    //   menuLabel: '',
    //   openingSpeed: 250,
    //   closingDelay: 50,
    //   showArrows: false,
    //   closeBtn: true,
    //   closeLabel: 'Close',
    //   scrollbarFix: true,
    //   mobileMode: true,
    // });

    // jQuery(document).ready(function ($) {
    //   jQuery('.stellarnav').stellarNav({
    //     theme: 'light',
    //     showArrows: false,
    //     breakpoint: 800,
    //     position: 'right',
    //     menuLabel: '',closeLabel: '', 
    //   });
    // });




    // $(".nav-item-hover").hover(
    //   function () {
    //     $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
    //     $(this).addClass('open');
    //   },
    //   function () {
    //     $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
    //     $(this).removeClass('open');
    //   });



    $(document).ready(function ($) {
        $('.stellarnav').stellarNav({
            theme: 'light',
            showArrows: false,
            breakpoint: 800,
            position: 'right',
            menuLabel: '',
            closeLabel: '',
        });
    });



});