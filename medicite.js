const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");
const sidenav = document.querySelector(".sidenav");

openBtn.addEventListener("click", function () {
    sidenav.style.width = "250px";
});

closeBtn.addEventListener("click", function () {
    sidenav.style.width = "0";
});