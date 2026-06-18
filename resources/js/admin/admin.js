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
    closeSide.addEventListener("click", function(){
        sidebar.classList.add("-translate-x-full");
    });
}

document.addEventListener("click", function(e){
    if (!menuToggle.contains(e.target) && !sidebar.contains(e.target)) {
        sidebar.classList.add("-translate-x-full");
    }
})