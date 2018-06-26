var plugins = {
    menu: $('.sidebar'),
    slider: $('#slider'),
    owlCarouselHPListProduct: $('.h-p-owl')
};

$(document).ready(function () {

    // $('.owl-carousel').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     autoplay:true,
    //     responsiveClass:true,
    //     responsive:{
    //         0:{
    //             items:1,
    //             nav:true
    //         },
    //         600:{
    //             items:2,
    //             nav:false
    //         },
    //         1000:{
    //             items:3,
    //             nav:true,
    //             loop:false
    //         }
    //     }
    // })

    function runOwlCarouselHPListProduct() {
        plugins.owlCarouselHPListProduct.owlCarousel({
            dots: false,
            nav: true,
            autoplay: false,
            navContainer: '.nav-arrow',
            loop: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 7
                }
            }
        });
    }

    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menu.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menu.toggleClass('closed');
            }
        })
    }
    sidebar();
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    if (plugins.slider.length) {
        runSlider();
    }
    if (plugins.owlCarouselHPListProduct.length) {
        runOwlCarouselHPListProduct();
    }
});