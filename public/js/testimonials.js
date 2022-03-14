$('#clients').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    autoplay: true,
    nav: false,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 4,
        }
    }
});


$('#testimonials-slider').owlCarousel({
    loop: false,
    margin: 10,
    responsiveClass: true,
    autoplay: false,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    }
});

$('#news-slider').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    autoplay: true,
    nav: false,
    responsive: {
        0: {
            items: 1.5,
        },
        600: {
            items: 1.5,
        },
        1000: {
            items: 4,
        }
    }
});