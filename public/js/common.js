// On Scroll Animation Intialization
AOS.init();

// custom-accordian Effect Initialization
$(".custom-accordian-header").click(function () {
    if ($(this).hasClass("active")) {
        $(this).next(".custom-accordian-body").slideUp();
        $(this).removeClass("active");
    } else {
        $(this).next(".custom-accordian-body").slideDown();
        $(this).addClass("active");
    }
})

$(".feature_tabs a").click(function () {
    $(".feature_tabs a").removeClass("active");
    $(this).addClass("active");
    let activeFeature = $(this).attr("data-feature");

    $(".feature-block").removeClass("active");
    $(activeFeature).addClass("active");

    if ($("#interactive-walkthrough").hasClass("active")) {
        $("#interactive-walkthrough").find("img").attr("src", "./images/interactive-walkthrough-icon_colored.png")
    } else {
        $("#interactive-walkthrough").find("img").attr("src", "./images/interactive-walkthrough-icon_colored.png")
    }

    if ($("#help-article").hasClass("active")) {
        $("#help-article").find("img").attr("src", "./images/help-article-icon_colored.png")
    } else {
        $("#help-article").find("img").attr("src", "./images/help-article-icon.png")
    }

    if ($("#multilingual-help").hasClass("active")) {
        $("#multilingual-help").find("img").attr("src", "./images/multilingual-help_colored.png")
    } else {
        $("#multilingual-help").find("img").attr("src", "./images/multilingual-help.png")
    }

    if ($("#inApp-communication").hasClass("active")) {
        $("#inApp-communication").find("img").attr("src", "./images/InApp-communication_colored.png")
    } else {
        $("#inApp-communication").find("img").attr("src", "./images/InApp-communication.png")
    }

    if ($("#easy-integration").hasClass("active")) {
        $("#easy-integration").find("img").attr("src", "./images/easy-integration_colored.png")
    } else {
        $("#easy-integration").find("img").attr("src", "./images/easy-integration.png")
    }

    if ($("#analytics").hasClass("active")) {
        $("#analytics").find("img").attr("src", "./images/analytics_colored.png")
    } else {
        $("#analytics").find("img").attr("src", "./images/analytics.png")
    }
});