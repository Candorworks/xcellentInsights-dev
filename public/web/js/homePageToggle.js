// // home page services toggle
// const verticals = document.querySelector(".verticals");
// const latestReport = document.querySelector(".latest-report");
// const topSellingReports = document.querySelector(".top-selling-reports");

// const contentVertical = document.querySelector(".industry-vertical-wrapper");
// const contentTopSelling = document.querySelector(
//     ".top-selling-reports-wrapper"
// );
// const contentLatestReport = document.querySelector(".latest-reports-wrapper");

// verticals.addEventListener("click", () => {
//     if (contentVertical.style.display === "block") {
//         contentVertical.style.display = "none";
//     } else {
//         contentVertical.style.display = "block";
//         contentLatestReport.style.display = "none";
//         contentTopSelling.style.display = "none";
//     }
// });
// latestReport.addEventListener("click", () => {
//     if (contentLatestReport.style.display === "block") {
//         contentLatestReport.style.display = "none";
//     } else {
//         contentLatestReport.style.display = "block";
//         contentVertical.style.display = "none";
//         contentTopSelling.style.display = "none";
//     }
// });
// topSellingReports.addEventListener("click", () => {
//     if (contentTopSelling.style.display === "block") {
//         contentTopSelling.style.display = "none";
//     } else {
//         contentTopSelling.style.display = "block";
//         contentVertical.style.display = "none";
//         contentLatestReport.style.display = "none";
//     }
// });
// $(".services-wrap").click(function () {
//     if ($(this).hasClass("active")) {
//     } else {
//         console.log("no have");
//     }
// });

// const contentVertical = document.querySelector(".industry-vertical-wrapper");
// const contentTopSelling = document.querySelector(
//     ".top-selling-reports-wrapper"
// );
// const contentLatestReport = document.querySelector(".latest-reports-wrapper");

// var servicesCard = document.querySelectorAll(".services-wrap");
// servicesCard.forEach((card) => {
//     console.log(card);
//     if (card.classList.contains("active")) {
//         card.classList.remove("active");
//     } else {
//         card.classList.add("active");
//     }
// });

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
