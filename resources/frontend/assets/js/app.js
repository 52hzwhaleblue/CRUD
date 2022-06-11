// Slider
$(document).ready(function () {
    $(".owl-slide").owlCarousel({
        items: 3,
        loop: false,
        dots: true,
        autoplay: true,
        nav: false,
        margin: 10,
    });

        $(".owl-product").owlCarousel({
            items: 3,
            loop: false,
            dots: true,
            autoplay: true,
            nav: false,
            margin: 10,
            responsive: {
                0: {
                    items: 2,
                },

                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
    


    // $(".prev-slide").click(function () {
    //     $(".owl-slide").trigger("prev.owl.carousel");
    // });
    // $(".next-slide").click(function () {
    //     $(".owl-slide").trigger("next.owl.carousel");
    // });
});
