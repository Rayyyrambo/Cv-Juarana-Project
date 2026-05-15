// import './bootstrap';

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// lg:block bg-blue-400 p-3 rounded-full"

// hamburger
const hamburger = document.querySelector("#hamburger"); //yang dimana carikan saya id yg bernama hamburger
const navMenu = document.querySelector("#NavMenu");
hamburger.addEventListener("click", function () { //<------ yang dimana ketika hamburger di klik
    hamburger.classList.toggle("hamburger-active"); //<------ ketika hamburger di klik maka muncul clas hamburge active begitupun sebaliknya
    navMenu.classList.toggle("hidden");
});

// nav fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixNav = header.offsetTop;
    if (window.pageYOffset > fixNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};


