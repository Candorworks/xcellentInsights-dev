// about us hover animation
var dropdownMenuParent = document.querySelector(".about-us");
var dropdownMenuChild = document.querySelector(".career-team-dropdown");
dropdownMenuParent.addEventListener("mouseover", () => {
    dropdownMenuChild.classList.add("career-team-dropdown-show");
});
dropdownMenuParent.addEventListener("mouseout", () => {
    dropdownMenuChild.classList.remove("career-team-dropdown-show");
});

// sticky header and scroll to top

var header = document.getElementById("sticky-header");
var transparentMenuIcon = document.querySelector(".transparent-icon");
var normalMenuIcon = document.querySelector(".normal-icon");
var headerSearchBox = document.querySelector(".header-search-bar-input");
var headerSearchBoxBtn = document.querySelector(".header-search-bar-btn");

var sticky = header.offsetTop;

window.onscroll = function () {
    stickyHeader();
    scrollToTop();
};

function stickyHeader() {
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
const scrollTopIcon = document.querySelector(".scrollUp");

function scrollToTop() {
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        scrollTopIcon.style.opacity = "1";
        scrollTopIcon.addEventListener("click", () => {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    } else {
        scrollTopIcon.style.opacity = "0";
    }
}

// accordion about us page
const accordion = document.querySelectorAll(".accordion-btn");
var i;

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function () {
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

// accordion faq page

const accordionFAQ = document.querySelectorAll(".accordion-btn-faq");
var iFAQ;

for (iFAQ = 0; iFAQ < accordionFAQ.length; iFAQ++) {
    accordionFAQ[iFAQ].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
        this.classList.toggle("accordion-active-faq");

        /* Toggle between hiding and showing the active panel */
        const panel = this.nextElementSibling;
        const panelPrev = this.previousElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
            // panelPrev.style.display = "none";
        } else {
            panel.style.display = "block";
            panelPrev.style.display = "none";
        }
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

// accordion team page
const accordionTeam = document.querySelectorAll(".about-btn");
var i;
for (i = 0; i < accordionTeam.length; i++) {
    accordionTeam[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
        // this.classList.toggle("panel-content-team");

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

// //modal form

var getInTouch = (document.querySelector(".modal-title").innerHTML =
    "Get In Touch");
