if (window.matchMedia("(max-width: 1200px)").matches) {
    $("header").removeClass("aos-init aos-animate").removeAttr("data-aos data-aos-delay");
}

$(".closeMenu").click(function () {
    $(".mobileMneu-wrapper").animate({
        right: "-110%"
    });

    $("#navigation").animate({
        left: "-110%"
    });

    $(".menuToggler").show();
});

$(".menuToggler").click(function () {
    $(".mobileMneu-wrapper").animate({
        right: "0%"
    });

    $("#navigation").animate({
        left: "0%"
    });

    $(this).hide();
});

$("#navigation li.dropdown-avail").click(function () {
    if ($(this).hasClass("active")) {
        $(this).find(".dropdown-nav").slideUp();
        $(this).removeClass("active");
    } else {
        $(this).find(".dropdown-nav").slideDown();
        $(this).addClass("active");
    }
});


$(".dropdown-nav a").click(function (e) {
    e.stopPropagation();
})