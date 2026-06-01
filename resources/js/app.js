// import './bootstrap';

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// hamburger
const hamburger = document.querySelector("#hamburger"); //yang dimana carikan saya id yg bernama hamburger
const navMenu = document.querySelector(".navbar-menu");
hamburger.addEventListener("click", function () {
    //<------ yang dimana ketika hamburger di klik
    hamburger.classList.toggle("hamburger-active"); //<------ ketika hamburger di klik maka muncul clas hamburge active begitupun sebaliknya
    navMenu.classList.toggle("active");
});

// kategori-menu/mobile categori
const kategoriMenu = document.querySelector(".kategori-menu");
const mobileKategori = document.querySelector(".mobile-kategori");
document.querySelector("#kategori").onclick = () => {
    kategoriMenu.classList.toggle("kategori-active");
    mobileKategori.classList.toggle("mobile-categori-active");
};

// mobile categori

// klik di luar elemen
const kategoriKlik = document.querySelector("#kategori");
document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
    }

    if (!kategoriKlik.contains(e.target) && !kategoriMenu.contains(e.target)) {
        kategoriMenu.classList.remove("kategori-active");
    }
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

// scrol button
const container = document.getElementById("sliderContainer");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

// Menentukan jarak scroll setiap kali tombol diklik (lebar kartu + gap)
const scrollAmount = 344;

nextBtn.addEventListener("click", () => {
    container.scrollLeft += scrollAmount;
});

prevBtn.addEventListener("click", () => {
    container.scrollLeft -= scrollAmount;
});
