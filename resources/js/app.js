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
    hamburger.classList.toggle("hamburger-active"); //<------ ketika hamburger di klik maka muncul clas hamburge active begitupun sebaliknya
    navMenu.classList.toggle("active");
});

// kategori-menu/mobile categori
const kategoriMenu = document.querySelector(".kategori-menu");
const mobileKategori = document.querySelector(".mobile-kategori");
document.querySelector("#kategori").onclick = (e) => {
    kategoriMenu.classList.toggle("kategori-active");
    mobileKategori.classList.toggle("mobile-categori-active");
    e.preventDefault();
};

// klik di luar elemen
const kategoriKlik = document.querySelector("#kategori");
document.addEventListener("click", function (e) {
    // untuk hamburger
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
    }
    // untuk ketegori
    if (!kategoriKlik.contains(e.target) && !kategoriMenu.contains(e.target)) {
        kategoriMenu.classList.remove("kategori-active");
    }
    // untuk modal pada product
    if (e.target === detailModal) {
        detailModal.classList.add("hidden");
    }
    // untuk modal maps
    if (e.target === modalMaps) {
        modalMaps.classList.add("hidden");
    }
    // untuk modal massage
    if (e.target === pesanModal) {
        pesanModal.classList.add("hidden");
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

// modal box product
const detailModal = document.querySelector("#modalProduct");
const buttonView = document.querySelectorAll(".view-button-product");
const closeBtn = document.querySelector("#closeModalBtn");

// Open modal ketika check button diklik
buttonView.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        detailModal.classList.remove("hidden");
    });
});

// Close modal ketika X button diklik
if (closeBtn) {
    closeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        detailModal.classList.add("hidden");
    });
}

// Close modal ketika tekan ESC
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !detailModal.classList.contains("hidden")) {
        detailModal.classList.add("hidden");
    }
});

//modal box maps
const modalMaps = document.querySelector("#mapsModal");
const buttonMaps = document.querySelectorAll(".button-location");
const closemaps = document.querySelector("#closeMapsBtn");

// Open modal ketika check button diklik
buttonMaps.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalMaps.classList.remove("hidden");
    });
});

// Close modal ketika X button diklik
if (closemaps) {
    closemaps.addEventListener("click", (e) => {
        e.preventDefault();
        modalMaps.classList.add("hidden");
    });
}

// Close modal ketika tekan ESC
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modalMaps.classList.contains("hidden")) {
        modalMaps.classList.add("hidden");
    }
});

// box massage maps
const pesanModal = document.querySelector("#masageModal");
const massageButton = document.querySelectorAll(".button-Massage");
const closeMassage = document.querySelector("#closeMassageBtn");

// Open modal ketika button diklik
massageButton.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        pesanModal.classList.remove("hidden");
    });
});

//ketika tombol close di klik
if (closeMassage) {
    closeMassage.addEventListener("click", (e) => {
        e.preventDefault();
        pesanModal.classList.add("hidden");
    });
}

// ketika esc di klik
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !pesanModal.classList.contains("hidden")) {
        pesanModal.classList.add("hidden");
    }
});

// Handle form submission success
// document.addEventListener("DOMContentLoaded", () => {
//     const successAlert = pesanModal.querySelector(".alert-success");
//     const errorInputs = pesanModal.querySelectorAll(
//         "[class*='border-red-500']",
//     );

//     if (successAlert) {
//         // Tampilkan modal saat ada success message
//         pesanModal.classList.remove("hidden");

//         // Auto close modal setelah 2.5 detik
//         setTimeout(() => {
//             pesanModal.classList.add("hidden");
//             // Reset form
//             const form = pesanModal.querySelector("form");
//             if (form) form.reset();
//         }, 2500);
//     }

//     // Jika ada validation error, tampilkan modal
//     if (errorInputs.length > 0) {
//         pesanModal.classList.remove("hidden");
//     }
// });
