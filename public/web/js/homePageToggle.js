// home page services toggle
const verticals = document.querySelector(".verticals");
const latestReport = document.querySelector(".latest-report");
const topSellingReports = document.querySelector(".top-selling-reports");

const contentVertical = document.querySelector(".industry-vertical-wrapper");
const contentTopSelling = document.querySelector(
    ".top-selling-reports-wrapper"
);
const contentLatestReport = document.querySelector(".latest-reports-wrapper");

verticals.addEventListener("click", () => {
    if (contentVertical.style.display === "block") {
        contentVertical.style.display = "none";
    } else {
        contentVertical.style.display = "block";
        contentLatestReport.style.display = "none";
        contentTopSelling.style.display = "none";
    }
});
latestReport.addEventListener("click", () => {
    if (contentLatestReport.style.display === "block") {
        contentLatestReport.style.display = "none";
    } else {
        contentLatestReport.style.display = "block";
        contentVertical.style.display = "none";
        contentTopSelling.style.display = "none";
    }
});
topSellingReports.addEventListener("click", () => {
    if (contentTopSelling.style.display === "block") {
        contentTopSelling.style.display = "none";
    } else {
        contentTopSelling.style.display = "block";
        contentVertical.style.display = "none";
        contentLatestReport.style.display = "none";
    }
});
