jQuery(function($) {
    "use strict";
    /*----------------------------------------------------*/
    /*  LOADER
    /*----------------------------------------------------*/
    jQuery("#status").fadeOut();
    jQuery(".preloader").delay(300).fadeOut("slow");
    jQuery("body").css('overflow-y', 'visible');
    jQuery("body").css('position', 'relative');
    setTimeout(function() {
        jQuery('body').addClass('loaded');
    }, 1000);


    /*----------------------------------------------------*/
    /*  Scroll
    /*----------------------------------------------------*/
    $(".scroll").on("click", function(event) {
        event.preventDefault();
        $("html,body").animate({
            scrollTop: $(this.hash).offset().top
        }, 2000);
    });


    /*----------------------------------------------------*/
    /*  Search Popup
    /*----------------------------------------------------*/
    $(".search_btn").on("click", function(event) {
        event.preventDefault();
        $("#search").addClass("open");
        $("#search > form > input[type='search']").focus();
    });
    $("#search, #search button.close").on("click keyup", function(event) {
        if (event.target == this || event.target.className == "close" || event.keyCode == 27) {
            $(this).removeClass("open");
        }
    });


    /*----------------------------------------------------*/
    /* Newsletter popup
	/*----------------------------------------------------*/
    jQuery('#myModal').appendTo("body");

    function show_modal() {
        jQuery('#myModal').modal('show');
    }
    jQuery('#myModal').modal({
        keyboard: false,
        backdrop: false
    });


    /*----------------------------------------------------*/
    /*  Slider
    /*----------------------------------------------------*/
    var revapi;
    revapi = jQuery("#rev_slider").revolution({
        sliderType: "standard",
        sliderLayout: "fullwidth",
        delay: 5000,
        navigation: {
            arrows: {
                enable: true
            }
        },
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        },
        gridwidth: 1170,
        gridheight: 800
    });
    $("#nav_slider").owlCarousel({
        autoPlay: 3000,
        items: 3,
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-long-arrow-left'></i>",
            "<i class='fa fa-long-arrow-right'></i>"
        ],
        itemsDesktopSmall: [1024, 2],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
    });
    var owl = $("#client_slider");
    owl.owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        pagination: true,
        items: 5,
        itemsDesktopSmall: [1024, 4],
        itemsTablet: [768, 3],
        itemsMobile: [479, 2],
    });
    $("#news_slider").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 2,
        navigation: true,
        navigationText: [
            "<i class='fa fa-long-arrow-left'></i>",
            "<i class='fa fa-long-arrow-right'></i>"
        ],
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]
    });
    $("#Services-2-slider").owlCarousel({
        autoPlay: false, //Set AutoPlay to 3 seconds
        items: 1,
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-long-arrow-left' aria-hidden='true'></i>",
            "<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"
        ],
    });
    $("#blog_slider").owlCarousel({
        autoPlay: false, //Set AutoPlay to 3 seconds
        items: 1,
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-long-arrow-left' aria-hidden='true'></i>",
            "<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"
        ],
    });
    $("#testinomial_slider").owlCarousel({
        autoPlay: 3000,
        pagination: true,
        navigation: false,
        singleItem: true,
        transitionStyle: "fade"
    });
    $("#about_slider").owlCarousel({
        autoPlay: true, //Set AutoPlay to 3 seconds
        singleItem: true,
        navigation: false,
        pagination: true,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [320, 1]
    });


    /*----------------------------------------------------*/
    /*  Fun Fact
    /*----------------------------------------------------*/
    $(".number-counters").appear(function() {
        $(".number-counters [data-to]").each(function() {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 1,
                to: e,
                speed: 3000,
                refreshInterval: 50
            })
        })
    });


    /*----------------------------------------------------*/
    /*  Parallax
	/*----------------------------------------------------*/
    $(".parallaxie").parallaxie({
        speed: 0.6,
        offset: 0,
    });


    /*----------------------------------------------------*/
    /*  Filter
	/*----------------------------------------------------*/
    var $portfolio_selectors = $('.portfolio-filter >li>a');
    var $portfolio = $('.portfolio-items');
    $portfolio.isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $portfolio_selectors.on('click', function() {
        $portfolio_selectors.removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        $portfolio.isotope({
            filter: selector
        });
        return false;
    });


    /*----------------------------------------------------*/
    /*  Selected
	/*----------------------------------------------------*/
    jQuery('.office_menu').find('ul').hide();
    jQuery('.office_menu').on('click', '.selected', function() {
        // jQuery(this).parent('.office_menu').find('ul').slideToggle();
        var checkClass = jQuery(this).hasClass('active');
        if (!checkClass) {
            jQuery(this).addClass('active');
            jQuery(this).parent('.office_menu').find('ul').slideDown();
        } else {
            jQuery(this).removeClass('active');
            jQuery(this).parent('.office_menu').find('ul').slideUp();
        }
    });
    jQuery('.office_menu').on('click', 'ul a', function(e) {
        e.preventDefault();
        jQuery('.addressbox').fadeOut();
        var clickDataVal = jQuery(this).data('office');

        var txt = jQuery(this).html();
        jQuery(this).parents('.office_menu').find('.selected').html(txt);
        jQuery(this).parents('.office_menu').find('.selected').removeClass('active');
        jQuery(this).parents('ul').slideUp();

        jQuery('.addressbox').each(function() {
            var elemDataVal = jQuery(this).data('office');
            if (clickDataVal == elemDataVal) {
                jQuery(this).delay(300).fadeIn();
            }
        });
    });

    /*----------------------------------------------------*/
    /*  Height Set
    /*----------------------------------------------------*/
    var highestBox = 0;
    $('.contact-info .contact-info-box').each(function() {
        if ($(this).height() > highestBox) {
            highestBox = $(this).height();
        }
    });
    $('.contact-info .contact-info-box').height(highestBox);

    /*----------------------------------------------------*/
    /*  Typewriter
	/*----------------------------------------------------*/
    $('#typewriter').typewriter({
        prefix: "We Provide ",
        text: ["Best Auto Repair Services", "Best Technical Services", "24/7 Car Support"],
        typeDelay: 90,
        waitingTime: 1500,
        blinkSpeed: 200
    });

});