var dropdownMenuParent = document.querySelector(".about-us");
var dropdownMenuChild = document.querySelector(".career-team-dropdown");
dropdownMenuParent.addEventListener("mouseover", () => {
    dropdownMenuChild.classList.add("career-team-dropdown-show");
});
dropdownMenuParent.addEventListener("mouseout", () => {
    dropdownMenuChild.classList.remove("career-team-dropdown-show");
});
