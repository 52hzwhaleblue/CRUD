$(document).ready(function () {
    $(".owl-slide").owlCarousel({
        items: 1,
        loop: false,
        dots: true,
        autoplay: true,
        nav: false,
        margin: 10,
    });

    $(".prev-slide").click(function () {
        $(".owl-slide").trigger("prev.owl.carousel");
    });
    $(".next-slide").click(function () {
        $(".owl-slide").trigger("next.owl.carousel");
    });
});
