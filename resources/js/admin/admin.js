const menuToggle = document.getElementById("menu-toggle");
const sidebar = document.getElementById("sideBar"); // Menggunakan B besar sesuai HTML kamu
const closeSide = document.getElementById("closeside");
// PROTEKSI: Kode hanya berjalan di halaman Dashboard Admin yang ada SideBar-nya
if (menuToggle && sidebar) {
    menuToggle.addEventListener("click", function () {
        sidebar.classList.remove("-translate-x-full");
    });
}

if (closeSide && sidebar) {
    closeSide.addEventListener("click", function () {
        sidebar.classList.add("-translate-x-full");
    });
}

document.addEventListener("click", function (e) {
    if (!menuToggle.contains(e.target) && !sidebar.contains(e.target)) {
        sidebar.classList.add("-translate-x-full");
    }

    if (
        buttonProduk &&
        SearchMenu &&
        !buttonProduk.contains(e.target) &&
        !SearchMenu.contains(e.target)
    ) {
        SearchMenu.classList.remove("search-active");
    }

    if (
        buttonKategori &&
        kategoriAdmin &&
        !buttonKategori.contains(e.target) &&
        !kategoriAdmin.contains(e.target)
    ) {
        kategoriAdmin.classList.remove("categori-admin-active");
    }

    if (
        buttonDropUser &&
        userDown &&
        !buttonDropUser.contains(e.target) &&
        !userDown.contains(e.target)
    ) {
        userDown.classList.remove("user-down-active");
    }

    if (
        dropdownBtn &&
        dropdownMenu &&
        !dropdownBtn.contains(e.target) &&
        !dropdownMenu.contains(e.target)
    ) {
        dropdownMenu.classList.add("max-h-0",  "scale-y-95");
        dropdownMenu.classList.remove("max-h-96", "opacity-100");
    }
});

// serach produk
const SearchMenu = document.querySelector(".search-menu");
const buttonProduk = document.getElementById("toggle-produk");
if (SearchMenu && buttonProduk) {
    buttonProduk.addEventListener("click", function (e) {
        SearchMenu.classList.toggle("search-active");
        e.preventDefault();
    });
}

// product berdasarkan kategori dropdown
const dropdownBtn = document.querySelector(".btn-menuProduct");
const dropdownMenu = document.querySelector(".dropdown-product");
if (dropdownBtn && dropdownMenu) {
    dropdownBtn.addEventListener("click", function (e) {
        dropdownMenu.classList.toggle("max-h-0");
        dropdownMenu.classList.toggle("scale-y-95");
        dropdownMenu.classList.toggle("max-h-96");
        dropdownMenu.classList.toggle("opacity-100");
        e.preventDefault();
    });
}

// serach kategori
const kategoriAdmin = document.querySelector(".kategori-admin");
const buttonKategori = document.getElementById("toggle-kategori");
if (kategoriAdmin && buttonKategori) {
    buttonKategori.addEventListener("click", function (e) {
        kategoriAdmin.classList.toggle("categori-admin-active");
        e.preventDefault();
    });
}

// user dropDown
const userDown = document.querySelector(".user-down");
const buttonDropUser = document.getElementById("dropUser");
if (userDown && buttonDropUser) {
    buttonDropUser.addEventListener("click", function (e) {
        userDown.classList.toggle("user-down-active");
        e.preventDefault();
    });
}
