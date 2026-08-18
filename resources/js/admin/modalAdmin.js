const modalDelets = document.getElementById("modalDelete");
const buttonClikDelete = document.querySelectorAll(".tombolHapus");
const closeDelete = document.getElementById("ButtonCancel");

// open modal
buttonClikDelete.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalDelets.classList.remove("hidden");
    });
});

// ketika tombol cancel di klik close modal
if (closeDelete) {
    closeDelete.addEventListener("click", (e) => {
        e.preventDefault();
        modalDelets.classList.add("hidden");
    });
}

// klik di luar == close modal
document.addEventListener("click", function (e) {
    if (e.target === modalDelets) {
        modalDelets.classList.add("hidden");
    }
});
