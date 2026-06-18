// import './bootstrap';

import Alpine from "alpinejs";
// import { document } from "postcss";

window.Alpine = Alpine;

Alpine.start();

// hamburger
const hamburger = document.querySelector("#hamburger"); //yang dimana carikan saya id yg bernama hamburger
const navMenu = document.querySelector(".navbar-menu");
hamburger.addEventListener("click", function () {
    //<------ yang dimana ketika hamburger di klik
    if (navMenu && hamburger) {
        // Pastikan elemen ditemukan sebelum menambahkan event listener
        navMenu.classList.toggle("active");
        hamburger.classList.toggle("hamburger-active");
    } else {
        console.warn(
            "Elemen hamburger atau navMenu tidak ditemukan di halaman ini.",
        );
    }
});

// kategori-menu/mobile categori
const kategoriMenu = document.querySelector(".kategori-menu");
const mobileKategori = document.querySelector(".mobile-kategori");
document.querySelector("#kategori").onclick = (e) => {
    if (kategoriMenu && mobileKategori) {
        kategoriMenu.classList.toggle("kategori-active");
        mobileKategori.classList.toggle("mobile-categori-active");
        e.preventDefault();
    }
};

// klik di luar elemen
const kategoriKlik = document.querySelector("#kategori");
document.addEventListener("click", function (e) {
    // untuk hamburger
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
        hamburger.classList.remove("hamburger-active");
    }
    // untuk ketegori
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

if (nextBtn && container) {
    nextBtn.addEventListener("click", () => {
        container.scrollLeft += scrollAmount;
    });
}

if (prevBtn && container) {
    prevBtn.addEventListener("click", () => {
        container.scrollLeft -= scrollAmount;
    });
}

// scrol animated
document.addEventListener("DOMContentLoaded", function () {
    const elemenAnimasi = document.querySelectorAll(".scroll-animated");
    const observe = new IntersectionObserver((enteries, observe) => {
        enteries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("muncul");
                entry.target.classList.remove("opacity-0");
                observe.unobserve(entry.target);
            }
        });
        threshold: 0.9;
    });
    elemenAnimasi.forEach((el) => observe.observe(el));
});
