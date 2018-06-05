/*
| ----------------------------------------------------------------------------------
| TABLE OF CONTENT
| ----------------------------------------------------------------------------------
-SETTING
-Preloader
-Sticky Header
-Scroll Animation
-Dropdown Menu Fade
-Menu Android
-Search Animation
-Disable Mobile Animated
-Animated Entrances
-Accordion
-Filter accordion
-Chars Start
-Сustomization select
-Enumerator
-Zoom Images
-ISOTOPE FILTER
-HOME SLIDER
-CAROUSEL PRODUCTS
-PRICE RANGE
-OWL Sliders
-Animated WOW
*/



$(document).ready(function() {

    "use strict";
/////////////////////////////////////////////////////////////////
// Contato
/////////////////////////////////////////////////////////////////
    jQuery(document).on('submit', '#form-contato', function(event){
        event.preventDefault();
        var _this = jQuery(this);
        jQuery.ajax({
            url: _this.attr('action'),
            type: 'POST',
            data: {
                'name': _this.find('input[name=name]').val(),
                'email': _this.find('input[name=email]').val(),
                'telefone': _this.find('input[name=telefone]').val(),
                'message': _this.find('textarea[name=message]').val(),
                'action': 'contato'
            },
            success: function(data) {
                if (data=='success') {
                    _this[0].reset();
                    jQuery('.form-contact__info.text-success').removeClass('hide');
                }else{
                    jQuery('.form-contact__info.text-danger').removeClass('hide');
                }
            }
        })
        .fail(function() {
            jQuery('.form-contact__info.text-danger').removeClass('hide');
        });
    });

/////////////////////////////////////////////////////////////////
// SETTING
/////////////////////////////////////////////////////////////////

    var windowHeight = $(window).height();
    var windowWidth = $(window).width();


    var tabletWidth = 767;
    var mobileWidth = 640;



/////////////////////////////////////////////////////////////////
// Preloader
/////////////////////////////////////////////////////////////////


    var $preloader = $('#page-preloader'),
    $spinner   = $preloader.find('.spinner-loader');
    $spinner.fadeOut();
    $preloader.delay(50).fadeOut('slow');



/////////////////////////////////////
//  Sticky Header
/////////////////////////////////////


    if (windowWidth > tabletWidth) {

        var headerSticky = $(".layout-theme").data("header");
        var headerTop = $(".layout-theme").data("header-top");

        if (headerSticky.length) {
            $(window).on('scroll', function() {
                var winH = $(window).scrollTop();
                var $pageHeader = $('.header');
                if (winH > headerTop) {

                    $('.yamm').addClass("animated");
                    $('.yamm').addClass("animation-done");
                    // $('.yamm').addClass("bounce");
                    $pageHeader.addClass('sticky');

                } else {

                    // $('.yamm').removeClass("bounce");
                    $('.yamm').removeClass("animated");
                    $('.yamm').removeClass("animation-done");
                    $pageHeader.removeClass('sticky');
                }
            });
        }
    }



/////////////////////////////////////
//  Scroll Animation
/////////////////////////////////////


    window.sr = ScrollReveal({
        mobile:false,
        reset:true,
        duration:1000
    });
    if (jQuery('.wow-dis').length>0) {
        sr.reveal('.wow-dis');
    }




/////////////////////////////////////////////////////////////////
//   Dropdown Menu Fade
/////////////////////////////////////////////////////////////////




$(".dropdown").on("hover", function(e) {
  if(e.type == "mouseenter") {
    $('.dropdown-menu', this).fadeIn("fast");
  }
  else if (e.type == "mouseleave") {
    $('.dropdown-menu', this).fadeOut("fast");
  }
});


$(".yamm .navbar-nav>li").on("hover", function(e) {
  if(e.type == "mouseenter") {
    $('.dropdown-menu', this).fadeIn("fast");
  }
  else if (e.type == "mouseleave") {
    $('.dropdown-menu', this).fadeOut("fast");
  }
});



    window.prettyPrint && prettyPrint();
    $(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation();
    });

$('[data-toggle="tooltip"]').tooltip();



/////////////////////////////////////
//  Menu Android
/////////////////////////////////////

$( '.navbar-nav li:has(ul)' ).doubleTapToGo();



/////////////////////////////////////
//  Search Animation
/////////////////////////////////////


    $(document).on("click", ".btn_header_search", function (event) {
        event.preventDefault();
        $(".search-form-modal").addClass("open");
    });
    $(document).on("click", ".search-form_close", function (event) {
        event.preventDefault();
        $(".search-form-modal").removeClass("open");
    });




/////////////////////////////////////////////////////////////////
// Accordion
/////////////////////////////////////////////////////////////////

    $(".btn-collapse").on('click', function () {
            $(this).parents('.panel-group').children('.panel').removeClass('panel-default');
            $(this).parents('.panel').addClass('panel-default');
            if ($(this).is(".collapsed")) {
                $('.panel-title').removeClass('panel-passive');
            }
            else {$(this).next().toggleClass('panel-passive');
        };
    });



/////////////////////////////////////////////////////////////////
// Filter accordion
/////////////////////////////////////////////////////////////////


    $('.js-filter').on('click', function() {
            $(this).prev('.wrap-filter').slideToggle('slow')});

    $('.js-filter').on('click', function() {
            $(this).toggleClass('filter-up filter-down')});



/////////////////////////////////////
//  Chars Start
/////////////////////////////////////

    if ($('body').length) {
            $(window).on('scroll', function() {
                    var winH = $(window).scrollTop();

                    $('.list-progress').waypoint(function() {
                            $('.chart').each(function() {
                                    CharsStart();
                            });
                    }, {
                            offset: '80%'
                    });
            });
    }


        function CharsStart() {
            $('.chart').easyPieChart({
                    barColor: false,
                    trackColor: false,
                    scaleColor: false,
                    scaleLength: false,
                    lineCap: false,
                    lineWidth: false,
                    size: false,
                    animate: 7000,

                    onStep: function(from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                    }
            });

        }








/////////////////////////////////////
//  Zoom Images
/////////////////////////////////////


    $(".prettyPhoto").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000,social_tools: ''});
    $(".prettyPhoto-video").prettyPhoto({default_width: '100%',animation_speed:'normal',theme:'light_square',slideshow:3000,social_tools: ''});



////////////////////////////////////////////
// ISOTOPE FILTER
///////////////////////////////////////////

    var $container = $('.isotope-filter');

    $(window).load(function() {
        $container.isotope({
        // resizable: false, // disable normal resizing
            transitionDuration: '0.65s',
            masonry: {
                columnWidth: $container.find('.isotope-item:not(.grid-item_2)')[0]
            }
        });

        $(window).resize(function() {
            $container.isotope('layout');
        });
    });



    $('#filter button').on( 'click', function() {

           var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
        return false;


        });



    // change is-checked class on buttons
        $('.filter-isotope__item').on( 'click', function() {
          $('.filter-isotope').find('.current').removeClass('current');
          $( this ).addClass('current');
        });



////////////////////////////////////////////
// HOME SLIDER
///////////////////////////////////////////


    if ($('#banner').length > 0) {


            var sliderWidth = $("#banner").data("slider-width");
            var sliderHeigth = $("#banner").data("slider-height");

            $( '#banner' ).sliderPro({
                width:  sliderWidth,
                height: sliderHeigth,
                fade: true,
                arrows: true,
                buttons: false,
                waitForLayers: false,
                thumbnailPointer: false,
                touchSwipe: false,
                autoplay: true,
                autoScaleLayers: false
            });
    }

////////////////////////////////////////////
// CAROUSEL PRODUCTS
///////////////////////////////////////////



    if ($('#slider-product').length > 0) {

        // The slider being synced must be initialized first
        $('#carousel-product').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 84,
            itemMargin: 8,
            asNavFor: '#slider-product'
        });

        $('#slider-product').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel-product"
        });
    }




/////////////////////////////////////////////////////////////////
// OWL Sliders
/////////////////////////////////////////////////////////////////

    var Core = {

        initialized: false,

        initialize: function() {

                if (this.initialized) return;
                this.initialized = true;

                this.build();

        },

        build: function() {

        // Owl Carousel

            this.initOwlCarousel();
        },
        initOwlCarousel: function(options) {

            $(".enable-owl-carousel").each(function(i) {
                var $owl = $(this);

                var itemsData = $owl.data('items');
                var navigationData = $owl.data('navigation');
                var paginationData = $owl.data('pagination');
                var singleItemData = $owl.data('single-item');
                var autoPlayData = $owl.data('auto-play');
                var transitionStyleData = $owl.data('transition-style');
                var mainSliderData = $owl.data('main-text-animation');
                var afterInitDelay = $owl.data('after-init-delay');
                var stopOnHoverData = $owl.data('stop-on-hover');
                var min480 = $owl.data('min480');
                var min768 = $owl.data('min768');
                var min992 = $owl.data('min992');
                var min1200 = $owl.data('min1200');

                $owl.owlCarousel({
                    navigation : navigationData,
                    pagination: paginationData,
                    singleItem : singleItemData,
                    autoPlay : autoPlayData,
                    transitionStyle : transitionStyleData,
                    stopOnHover: stopOnHoverData,
                    navigationText : ["<i></i>","<i></i>"],
                    items: itemsData,
                    itemsCustom:[
                                    [0, 1],
                                    [465, min480],
                                    [750, min768],
                                    [975, min992],
                                    [1185, min1200]
                    ],
                    afterInit: function(elem){
                                if(mainSliderData){
                                        setTimeout(function(){
                                                $('.main-slider_zoomIn').css('visibility','visible').removeClass('zoomIn').addClass('zoomIn');
                                                $('.main-slider_fadeInLeft').css('visibility','visible').removeClass('fadeInLeft').addClass('fadeInLeft');
                                                $('.main-slider_fadeInLeftBig').css('visibility','visible').removeClass('fadeInLeftBig').addClass('fadeInLeftBig');
                                                $('.main-slider_fadeInRightBig').css('visibility','visible').removeClass('fadeInRightBig').addClass('fadeInRightBig');
                                        }, afterInitDelay);
                                    }
                    },
                    beforeMove: function(elem){
                        if(mainSliderData){
                                $('.main-slider_zoomIn').css('visibility','hidden').removeClass('zoomIn');
                                $('.main-slider_slideInUp').css('visibility','hidden').removeClass('slideInUp');
                                $('.main-slider_fadeInLeft').css('visibility','hidden').removeClass('fadeInLeft');
                                $('.main-slider_fadeInRight').css('visibility','hidden').removeClass('fadeInRight');
                                $('.main-slider_fadeInLeftBig').css('visibility','hidden').removeClass('fadeInLeftBig');
                                $('.main-slider_fadeInRightBig').css('visibility','hidden').removeClass('fadeInRightBig');
                        }
                    },
                    afterMove: sliderContentAnimate,
                    afterUpdate: sliderContentAnimate,
                });
            });

            function sliderContentAnimate(elem){
                var $elem = elem;
                var afterMoveDelay = $elem.data('after-move-delay');
                var mainSliderData = $elem.data('main-text-animation');
                if(mainSliderData){
                    setTimeout(function(){
                        $('.main-slider_zoomIn').css('visibility','visible').addClass('zoomIn');
                        $('.main-slider_slideInUp').css('visibility','visible').addClass('slideInUp');
                        $('.main-slider_fadeInLeft').css('visibility','visible').addClass('fadeInLeft');
                        $('.main-slider_fadeInRight').css('visibility','visible').addClass('fadeInRight');
                        $('.main-slider_fadeInLeftBig').css('visibility','visible').addClass('fadeInLeftBig');
                        $('.main-slider_fadeInRightBig').css('visibility','visible').addClass('fadeInRightBig');
                    }, afterMoveDelay);
                }
            }
        },

    };

    Core.initialize();

/////////////////////////////////////////////////////////////////
// Atualizando verbetes
/////////////////////////////////////////////////////////////////

    $('.total-verbetes').attr('data-percent', function(){
        var todayVerbetes = 3942, // 19/11/2016
        startDate         = new Date(2016, 11-1, 19),
        endDate           = new Date(),
        tv1               = startDate.setHours(0,0,0,0).valueOf(),
        tv2               = endDate.setHours(0,0,0,0).valueOf(),
        ndays;

        ndays = (tv2 - tv1) / 1000 / 86400;
        ndays = Math.round(ndays - 0.5);

        return todayVerbetes+ndays;
    });

/////////////////////////////////////////////////////////////////
// Timeline
/////////////////////////////////////////////////////////////////

    var timelineBlocks = $('.cd-timeline-block'),
        offset = 0.8;

    //hide timeline blocks which are outside the viewport
    hideBlocks(timelineBlocks, offset);

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        (!window.requestAnimationFrame)
            ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
            : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
    });

    function hideBlocks(blocks, offset) {
        blocks.each(function(){
            ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        });
    }

    function showBlocks(blocks, offset) {
        blocks.each(function(){
            ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        });
    }

    var flagIcsHome = true;
    jQuery('.ics-home i').on('click', function(event) {
        event.preventDefault();
        var _this = jQuery(this),
        activeIMG = jQuery('.ics-home-img .active'),
        activeContent = jQuery('.ics-home-content .active');

        if (flagIcsHome) {
            var icsHomeHight = [],
            icsHomeDesc      = jQuery('.ics-home-desc'),
            icsHomeDescLen   = icsHomeDesc.length-1;
            icsHomeDesc.each(function(index, value){
                icsHomeHight.push(jQuery(this).height());
                if (index == icsHomeDescLen) {
                    icsHomeDesc.height(Math.max.apply(null, icsHomeHight));
                }
            });

            flagIcsHome = false;
        }

        activeIMG.removeClass('active');
        activeContent.removeClass('active');
        
        if (jQuery(this).hasClass('ic-nav-left')) {
            if (activeContent.index() == 0) {
                jQuery('.ics-home-img span').last().addClass('active');
                jQuery('.ics-home-desc').last().addClass('active');
            }else{
                activeIMG.prev().addClass('active');
                activeContent.prev().addClass('active');
            }
        } else {
            if ((jQuery('.ics-home-desc').length -1) == activeContent.index()) {
                jQuery('.ics-home-img span').eq(0).addClass('active');
                jQuery('.ics-home-desc').eq(0).addClass('active');
            }else{
                activeIMG.next().addClass('active');
                activeContent.next().addClass('active');    
            }
        }
    });


    var cycleIcs = setInterval(function(){
        jQuery('.ics-home .ic-nav-right').trigger('click');
    },3000);

    jQuery('.ics-home').on('mouseenter', function(event) {
        clearInterval(cycleIcs);
    });

    jQuery('.ics-home').on('mouseleave', function(event) {
        cycleIcs = setInterval(function(){
            jQuery('.ics-home-img .ic-nav-right').trigger('click');
        },3000);
    });
});

