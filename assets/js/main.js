(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        // $("a").on('click', function (event) {
        //     if (this.hash !== "") {
        //         event.preventDefault();
        //         var hash = this.hash;
        //         $('html, body').animate({
        //             scrollTop: $(hash).offset().top
        //         }, 800, function () {
        //             window.location.hash = hash;
        //         });
        //     }
        // });

        $(window).scroll(function () {
			if ($(window).scrollTop() >= 40) {
				$('.home-sticky').addClass('fixed');
				$('.home-sticky-1').addClass('fixed-1');
			}
			else {
				$('.home-sticky').removeClass('fixed');
				$('.home-sticky-1').removeClass('fixed-1');
			}
		});


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");

        $('[data-toggle="tooltip"]').tooltip();

        /*owl carousel active*/
        $(".testimonial-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            lazyLoad: true,
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
        });

        //Portfolio Carousel
        $(".listing-carousel").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            loop: true,
            autoplay: false,
            margin: 30,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });





        // $("#simply-burger").on("click", function () {
        //     $("#simply-burger").addClass("open");
        //     return false;
        // });

        $(".burger-align").on("click", function () {
            $(".slide-menu-wrapper,.off-canvas-overlay").addClass("active");
            return false;
        });

        $(".offcanvas-menu-close").on("click", function () {
            $(".slide-menu-wrapper,.off-canvas-overlay").removeClass("active");
            $("#simply-burger").addClass('tt');
        });

        $(".close-burger").on("click", function () {
            $(".slide-menu-wrapper,.off-canvas-overlay").removeClass("active");
            // $("#simply-burger").addClass('tt');
        });

        $(".off-canvas-overlay").on("click", function () {
            $(".slide-menu-wrapper,.off-canvas-overlay").removeClass("active");
        });

        $('.counter-number span').counterUp({
            delay: 10,
            time: 3000
        });

        //Isotope Filter
        var filterList = {

            init: function () {
                $('#portfoliolist').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '*'
                    }
                });
            }

        };
        // Run the Isotope Filter
        filterList.init();


        /*var filterList_home = {

            init: function () {
                $('#portfoliolist-home').mixItUp({
                    selectors: {
                        target: '.portfolio',
                        filter: '.filter'
                    },
                    load: {
                        filter: '*'
                    }
                });
            }

        };
        filterList_home.init();*/

        $('.filter-home').on('click', function () {

            $(".filter-home").removeClass("active");
            $(this).addClass("active");


            var filterValue = $(this).attr('data-filter');

            $(".portfolio").removeClass("portfolio-1");
            $("." + filterValue).addClass("portfolio-1");
        });

        


        //Map Intgration
        var latitude = parseFloat($(".googleMap3").attr("latitude"));
        var longitude = parseFloat($(".googleMap3").attr("longitude"));

        var centerPosition = {
            lat: latitude,
            lng: longitude
        };
        $('.googleMap3')
            .gmap3({
                zoom: 16,
                center: centerPosition
            })
            .marker({
                position: centerPosition,
                icon: 'http://maps.google.com/mapfiles/marker_green.png'
            })
            .then(function (infowindow) {
                infowindow.open(this.get(0)); // this.get(0) return the map (see "get" feature)
            });






    });


    jQuery(window).load(function () {
        jQuery("#preloader").fadeOut(3000);

    });


}(jQuery));