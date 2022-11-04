// about us hover animation
var dropdownMenuParent = document.querySelector(".about-us");
var dropdownMenuChild = document.querySelector(".career-team-dropdown");
dropdownMenuParent.addEventListener("mouseover", () => {
    dropdownMenuChild.classList.add("career-team-dropdown-show");
});
dropdownMenuParent.addEventListener("mouseout", () => {
    dropdownMenuChild.classList.remove("career-team-dropdown-show");
});

// sticky header
window.onscroll = function () {
    myFunction();
};

var header = document.getElementById("sticky-header");
var transparentMenuIcon = document.querySelector(".transparent-icon");
var normalMenuIcon = document.querySelector(".normal-icon");

var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky", "header-wrapper-sticky");
        transparentMenuIcon.style.display = "none";
        normalMenuIcon.style.display = "block";
    } else {
        header.classList.remove("sticky", "header-wrapper-sticky");
        transparentMenuIcon.style.display = "block";
        normalMenuIcon.style.display = "none";
    }
}

// home page services toggle
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

// accordion about us page
const acc = document.querySelectorAll(".accordion-btn");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
        this.classList.toggle("accordion-active");

        /* Toggle between hiding and showing the active panel */
        const panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

// for (i; i < acc.length; i++) {
//     acc[i].addEventListener("click", function () {
//         this.classList.toggle("accordion-active");
//         const panel = this.nextElementSibling;
//     });
// }
