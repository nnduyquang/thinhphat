var plugins = {
    menu: $('.sidebar'),
    slider: $('#slider'),
    owlCarouselHPListProduct: $('.h-p-owl'),
    owlCarouselPDOrderProduct:$('.p-d-owl'),
    fixMenuOnScroll: $('#menu-list')
};

$(document).ready(function () {
    function runOwlCarouselHPListProduct() {
        plugins.owlCarouselHPListProduct.owlCarousel({
            dots: false,
            nav: true,
            autoplay: true,
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
                    items:7
                }
            }
        });
    }
    function runOwlCarouselPDOrderProduct(){
        plugins.owlCarouselPDOrderProduct.owlCarousel({
            dots: false,
            nav: true,
            autoplay: true,
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
                    items: 4
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
    function runFixMenuOnScroll(){
        $(window).on("scroll", function (e) {
            if ($(this).scrollTop() > 64) {
                plugins.fixMenuOnScroll.addClass('fixed-top');
            }
            else{
                plugins.fixMenuOnScroll.removeClass('fixed-top');
            }
        });
    }
    if (plugins.slider.length) {
        runSlider();
    }
    if (plugins.owlCarouselHPListProduct.length) {
        runOwlCarouselHPListProduct();
    }
    if(plugins.owlCarouselPDOrderProduct.length){
        runOwlCarouselPDOrderProduct();
    }
    if(plugins.fixMenuOnScroll.length){
        runFixMenuOnScroll()
    }
});