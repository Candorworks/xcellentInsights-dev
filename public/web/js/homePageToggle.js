$(".services-wrap").on("click", function () {
    $(".services-wrap-content").hide();

    var divId = $(this).attr("divId");

    if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $("#" + divId).hide();
    } else {
        $(".services-wrap").removeClass("active");
        $(this).addClass("active");
        $("#" + divId).show();
    }
});
